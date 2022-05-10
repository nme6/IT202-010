<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<div class="container-fluid col-lg-4 offset-lg-4">
    <h1><span>Login</span></h1>
    <form onsubmit="return validate(this)" method="POST">
        <div class="mb-3">
            <label class="form-label" for="email">Username/Email</label>
            <input class="form-control" type="text" id="email" name="email" required />
        </div>
        <div class="mb-3">
            <label class="form-label" for="pw">Password</label>
            <input class="form-control" type="password" id="pw" name="password" required minlength="8" />
        </div>
        <input type="submit" class="mt-3 btn btn-primary" value="Login" />
    </form>
</div>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success

        // Regex from: https://digitalfortress.tech/js/top-15-commonly-used-regex/ (linked on Canvas)
        const emailRegex = /^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})*$/;
        const usernameRegex = /^[a-z0-9_-]{3,16}$/;
        
        let isValid = true;

        // Check if email/username input is valid
        let emailUsernameInput = document.getElementById("email").value;

        if (emailUsernameInput == "") {
            flash("Email/username cannot be empty", "danger");
            isValid = false;
        }
        else if (emailUsernameInput.includes("@")) {
            if (!emailRegex.test(emailUsernameInput)) {
                flash("Email is invalid", "warning");
                isValid = false;
            }
        }
        else {
            if (!usernameRegex.test(emailUsernameInput)) {
                flash("Username is invalid", "warning");
                isValid = false;
            }
        }

        //TODO update clientside validation to check if it should
        //valid email or username
        return isValid;
    }
</script>
<?php
//TODO 2: add PHP Code
if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = se($_POST, "email", "", false);
    $password = se($_POST, "password", "", false);

    //TODO 3
    $hasError = false;
    if (empty($email)) {
        flash("Email must not be empty");
        $hasError = true;
    }
    if (str_contains($email, "@")) {
        //sanitize
        //$email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $email = sanitize_email($email);
        //validate
        /*if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            flash("Invalid email address");
            $hasError = true;
        }*/
        if (!is_valid_email($email)) {
            flash("Invalid email address");
            $hasError = true;
        }
    } else {
        if (!is_valid_username($email)) {
            flash("Invalid username");
            $hasError = true;
        }
    }
    if (empty($password)) {
        flash("password must not be empty");
        $hasError = true;
    }
    if (!is_valid_password($password)) {
        flash("Password too short");
        $hasError = true;
    }
    if (!$hasError) {
        //flash("Welcome, $email");
        //TODO 4
        $db = getDB();
        $stmt = $db->prepare("SELECT id, email, username, password, firstname, lastname from Users 
        where email = :email or username = :email");
        try {
            $r = $stmt->execute([":email" => $email]);
            if ($r) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($user) {
                    $hash = $user["password"];
                    unset($user["password"]);
                    if (password_verify($password, $hash)) {
                        //flash("Weclome $email");
                        $_SESSION["user"] = $user; //sets our session data from db
                        //lookup potential roles
                        $stmt = $db->prepare("SELECT Roles.name FROM Roles 
                        JOIN UserRoles on Roles.id = UserRoles.role_id 
                        where UserRoles.user_id = :user_id and Roles.is_active = 1 and UserRoles.is_active = 1");
                        $stmt->execute([":user_id" => $user["id"]]);
                        $roles = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetch all since we'll want multiple
                        //save roles or empty array
                        if ($roles) {
                            $_SESSION["user"]["roles"] = $roles; //at least 1 role
                        } else {
                            $_SESSION["user"]["roles"] = []; //no roles
                        }
                        if (get_user_firstname() == "" && get_user_lastname() == "") {
                            flash("Welcome, " . get_username());
                        }
                        else if (get_user_firstname() != "" && get_user_lastname() == "") {
                            flash("Welcome, " . get_username() . " (" . get_user_firstname() . ")");
                        }
                        else if (get_user_firstname() == ""  && get_user_lastname() != "") {
                            flash("Welcome, " . get_username() . " (" . get_user_lastname() . ")");
                        }
                        else {
                            flash("Welcome, " . get_username() . " (" . get_user_firstname() . " " . get_user_lastname() . ")" );
                        }
                        die(header("Location: home.php"));
                    } else {
                        flash("Invalid password", "danger");
                    }
                } else {
                    flash("Email/Username not found", "danger");
                }
            }
        } catch (Exception $e) {
            flash("<pre>" . var_export($e, true) . "</pre>");
        }
    }
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");