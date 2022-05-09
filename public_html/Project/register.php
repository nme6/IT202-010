<?php
require(__DIR__ . "/../../partials/nav.php");
reset_session();
?>
<div class="container-fluid col-lg-4 offset-lg-4">
    <h1><span>Register</span></h1>
    <form onsubmit="return validate(this)" method="POST">
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" id="email" name="email" required />
        </div>
        <div class="mb-3">
            <label class="form-label" for="username">Username</label>
            <input class="form-control" type="text" name="username" required maxlength="30" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="firstname">First Name</label>
            <input  class="form-control" type="text" name="firstname" required maxlength="30" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="lastname">Last Name</label>
            <input  class="form-control" type="text" name="lastname" required maxlength="30" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="pw">Password</label>
            <input class="form-control" type="password" id="pw" name="password" required minlength="8" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="confirm">Confirm</label>
            <input class="form-control" type="password" name="confirm" required minlength="8" />
        </div>
        <input type="submit" class="mt-3 btn btn-primary" value="Register" />
    </form>
</div>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success
        // email and username
        // Regex from: https://digitalfortress.tech/js/top-15-commonly-used-regex/ (linked on Canvas)
        const emailRegex = /^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})*$/;
        const usernameRegex = /^[a-z0-9_-]{3,16}$/;
        
        let isValid = true;

        // Check if email input is valid
        let emailInput = document.getElementById("email").value;
        if (emailInput.includes("@")) {
            if (!emailRegex.test(emailInput)) {
                flash("Email is invalid", "warning");
                isValid = false;
            }
        }
        
        // Check if username input is invalid (matching regex provided (length and characters))
        let usernameInput = document.getElementById("username").value;
        if (!usernameRegex.test(usernameInput)) {
            flash("Username can only contain 3-16 characters a-z, 0-9, _, or -", "warning");
            isValid = false;
        }

        // Check if password and confirm password are valid (matching and length)
        let passwordInput = document.getElementById("pw").value;
        let confirmPWInput = document.getElementById("confirm").value;

        if (passwordInput.length > 0 && passwordInput !== confirmPWInput) {
            flash("Password and Confirm Password must match", "warning");
            document.getElementById("pw").value = "";
            document.getElementById("confirm").value = "";
            isValid = false;
        }

        return isValid;
    }
</script>
<?php
//TODO 2: add PHP Code
if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm"]) && isset($_POST["username"])) {
    $email = se($_POST, "email", "", false);
    $password = se($_POST, "password", "", false);
    $confirm = se($_POST, "confirm", "", false);
    $username = se($_POST, "username", "", false);
    $firstname = se($_POST, "firstname", "", false);
    $lastname = se($_POST, "lastname", "", false);
    //TODO 3
    $hasError = false;
    if (empty($email)) {
        flash("Email must not be empty", "danger");
        $hasError = true;
    }
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
    if(empty($firstname))
    {
        flash("First name must be set", "danger");
        $hasErrors = true;
    }
    if(empty($lastname))
    {
        flash("Last name must be set", "danger");
        $hasErrors = true;
    }
    if (empty($password)) {
        flash("password must not be empty", "danger");
        $hasError = true;
    }
    if (empty($confirm)) {
        flash("Confirm password must not be empty", "danger");
        $hasError = true;
    }
    if (!is_valid_password($password)) {
        flash("Password too short", "danger");
        $hasError = true;
    }
    if (
        strlen($password) > 0 && $password !== $confirm
    ) {
        flash("Passwords must match", "danger");
        $hasError = true;
    }
    if (!$hasError) {
        //TODO 4
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Users (email, password, username, firstname, lastname) VALUES(:email, :password, :username, :firstname, :lastname)");
        try {
            $stmt->execute([":email" => $email, ":password" => $hash, ":username" => $username, ":firstname" => $firstname, ":lastname" => $lastname]);
            flash("Successfully registered!", "success");
        } catch (Exception $e) {
            users_check_duplicate($e->errorInfo);
        }
    }
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>