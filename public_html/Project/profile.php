<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);

$user_id = se($_GET, "id", get_user_id(), false);
$isMe = $user_id === get_user_id();
// The !! makes the value into a true or false value regardless of the data
$edit = !!se($_GET, "edit", false, false);

?>
<?php
if (isset($_POST["save"]) && $isMe && $edit) {
    $email = se($_POST, "email", null, false);
    $username = se($_POST, "username", null, false);
    $firstname = se($_POST, "firstname", null, false);
    $lastname = se($_POST, "lastname", null, false);
    $visibility = !!se($_POST, "visibility", false, false) ? 1 : 0;

    $hasError = false;
    //sanitize
    $email = sanitize_email($email);
    //validate
    if (!is_valid_email($email)) {
        flash("Invalid email address", "danger");
        $hasError = true;
    }
    if (!is_valid_username($username)) {
        flash("Username must only contain 3-16 characters a-z, 0-9, _, or -", "danger");
        $hasError = true;
    }
    if (!$hasError) {
        $params = [":email" => $email, ":username" => $username, "firstname" => $firstname, "lastname" => $lastname, ":visible" => $visibility, ":id" => get_user_id()];
        $db = getDB();
        $stmt = $db->prepare("UPDATE Users set email = :email, username = :username, firstname = :firstname, lastname = :lastname, visibility = :visible where id = :id");
        try {
            $stmt->execute($params);
            flash("Profile saved", "success");
        } catch (Exception $e) {
            users_check_duplicate($e->errorInfo);
        }
        //select fresh data from table
        $stmt = $db->prepare("SELECT id, email, username, firstname, lastname, visibility from Users where id = :id LIMIT 1");
        try {
            $stmt->execute([":id" => get_user_id()]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user) {
                //$_SESSION["user"] = $user;
                $_SESSION["user"]["email"] = $user["email"];
                $_SESSION["user"]["username"] = $user["username"];
                $_SESSION["user"]["firstname"] = $user["firstname"];
                $_SESSION["user"]["lastname"] = $user["lastname"];
                $_SESSION["user"]["visibility"] = $user["visibility"];
            } else {
                flash("User doesn't exist", "danger");
            }
        } catch (Exception $e) {
            flash("An unexpected error occurred, please try again", "danger");
            //echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
        }
    }


    //check/update password
    $current_password = se($_POST, "currentPassword", null, false);
    $new_password = se($_POST, "newPassword", null, false);
    $confirm_password = se($_POST, "confirmPassword", null, false);
    if (!empty($current_password) && !empty($new_password) && !empty($confirm_password)) {
        $hasError = false;
        if (!is_valid_password($new_password)) {
            flash("Password too short", "danger");
            $hasError = true;
        }
        if (!$hasError) {
            if ($new_password === $confirm_password) {
                //TODO validate current
                $stmt = $db->prepare("SELECT password from Users where id = :id");
                try {
                    $stmt->execute([":id" => get_user_id()]);
                    $result = $stmt->fetch(PDO::FETCH_ASSOC);
                    if (isset($result["password"])) {
                        if (password_verify($current_password, $result["password"])) {
                            $query = "UPDATE Users set password = :password where id = :id";
                            $stmt = $db->prepare($query);
                            $stmt->execute([
                                ":id" => get_user_id(),
                                ":password" => password_hash($new_password, PASSWORD_BCRYPT)
                            ]);

                            flash("Password reset", "success");
                        } else {
                            flash("Current password is invalid", "warning");
                        }
                    }
                } catch (Exception $e) {
                    echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
                }
            } else {
                flash("New passwords don't match", "warning");
            }
        }
    }
}
?>

<?php
$email = get_user_email();
$username = get_username();
$firstname = get_user_firstname();
$lastname = get_user_lastname();
$visibility = get_user_visibilty();
?>
<div class="container-fluid col-lg-4 offset-lg-4">
    <h1><span>Profile</span></h1>
    <div class="mb-3">
        <?php if ($isMe) : ?>
            <?php if ($edit) : ?>
                <a class="mt-3 btn btn-primary" href="?">View</a>
            <?php else : ?>
                <a class="mt-3 btn btn-primary" href="?edit=true">Edit</a>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <!-- Show public info (username, first name, last name) -->
    <?php if (!$edit) : ?>
        <div class="mb-3">
            <label class="form-label" for="username">Username</label>
            <input class="form-control" type="text" name="username" id="username" value="<?php se($username); ?>" readonly/>
        </div>
        <div class="mb-3">
            <label class="form-label" for="firstname">First Name</label>
            <input class="form-control" type="text" name="firstname" id="firstname" value="<?php se($firstname) ?>" readonly/>
        </div>
        <div class="mb-3">
            <label class="form-label" for="lastname">Last Name</label>
            <input class="form-control" type="text" name="lastname" id="lastname" value="<?php se($lastname) ?>" readonly/>
        </div>
    <?php endif; ?>

    <?php if ($isMe && $edit) : ?>
    <form method="POST" onsubmit="return validate(this);">
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="<?php se($email); ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="username">Username</label>
            <input class="form-control" type="text" name="username" id="username" value="<?php se($username); ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="firstname">First Name</label>
            <input class="form-control" type="text" name="firstname" id="firstname" value="<?php se($firstname) ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="lastname">Last Name</label>
            <input class="form-control" type="text" name="lastname" id="lastname" value="<?php se($lastname) ?>" />
        </div>
        <div class="mb-3">
            <div class="form-check form-switch">
                <input name="visibility" class="form-check-input p-2" type="checkbox" id="flexSwitchCheckDefault" <?php if ($visibility) echo "checked"; ?> autocomplete="off">
                <label class="form-check-label" for="flexSwitchCheckDefault">Make Profile Public</label>
            </div>
        </div>
        <!-- DO NOT PRELOAD PASSWORD -->
        <div class="mb-3"><h2>Password Reset</h2></div>
        <div class="mb-3">
            <label class="form-label" for="cp">Current Password</label>
            <input class="form-control" type="password" name="currentPassword" id="cp" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="np">New Password</label>
            <input class="form-control" type="password" name="newPassword" id="np" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="conp">Confirm Password</label>
            <input class="form-control" type="password" name="confirmPassword" id="conp" />
        </div>
        <input type="submit" class="mt-3 btn btn-primary" value="Update Profile" name="save" />
    </form>
    <?php endif; ?>
</div>

<script>
    function validate(form) {
        // email and username
        // Regex from: https://digitalfortress.tech/js/top-15-commonly-used-regex/ (linked on Canvas)
        const emailRegex = /^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})*$/;
        const usernameRegex = /^[a-z0-9_-]{3,16}$/;
        
        let isValid = true;

        // checks if email/username input is valid
        let emailInput = document.getElementById("email").value;
        let usernameInput = document.getElementById("username").value;
        if (emailInput == "") {
            flash("Email field cannot be empty", "danger");
            isValid = false;
        }
        
        else if (!emailRegex.test(emailInput)) {
            flash("Not a valid email address", "warning");
            document.getElementById("pw").value = "";
            isValid = false;
        }
        
        if (usernameInput == "") {
            flash("Username field cannot be empty", "danger");
            isValid = false;
        }
        else if (!usernameRegex.test(usernameInput)) {
            flash("Not a valid username", "warning");
            document.getElementById("pw").value = "";
            isValid = false;
        }

        // password and confirm password
        let passwordInput = document.getElementById("pw").value;
        let confirmPWInput = document.getElementById("confirm").value;
        //TODO add other client side validation....

        //example of using flash via javascript
        //find the flash container, create a new element, appendChild
        if (pw !== con) {
            flash("Password and Confirm Password must match", "warning");
            document.getElementById("pw").value = "";
            document.getElementById("confirm").value = "";
            isValid = false;
        }
        return isValid;
    }
</script>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>