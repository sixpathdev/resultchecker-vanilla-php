<?php
session_start();
// $_SERVER['DOCUMENT_ROOT'] . '/include/header.php'
include("../include/header.php");
include("../include/footer.php");

$email = $username = $password = "";

$errors = array('email' => '', 'username' => '', 'password' => '');

if (isset($_POST["submit"])) {
    if (empty($_POST["email"])) {
        $errors['email'] = "An email is required.";
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email";
        }
    }

    if (empty($_POST["username"])) {
        $errors['username'] = "Username is required.";
    } else {
        $username = $_POST["username"];
        if (!preg_match("/^[a-zA-Z0-9]+$/", $username)) {
            $errors['username'] = "Only letters or alphanumeric allowed.";
        } elseif (strlen($username) < 4) {
            $errors['username'] = "At least 4 characters needed.";
        }
    }

    if (empty($_POST["password"])) {
        $errors['password'] = "Password field is required.";
    } elseif (strlen($_POST["password"]) < 4) {
        $errors['password'] = "Password must be at least 4 characters.";
    } else {
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    }
    if (array_filter($errors)) {
        echo "<div class='text-center text-danger mt-2'>Error in forms</div>";
    } else {
        $query = "SELECT email from admins where email=:email";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        if ($stmt->rowCount() > 0) {
            $errors['email'] = "Email already exists";
            echo "<div class='text-center text-danger'>Email exists</div>";
        } else {
            $sql = "INSERT INTO admins(username, password, email) VALUES(:username, :password, :email)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            $_SESSION['status'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  Registered successfully
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
            $_SESSION["loggedin"] = true;
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
        }
    }
}

?>

<div class="container">
    <div class="row mt-2">
        <div class="col-12 text-center h5 my-3">Admin Register</div>
        <div class="col-sm-5 offset-lg-3">
            <form method="post" action="register-admin.php">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="email" value="<?php echo htmlspecialchars($email); ?>">
                    <div class="text-danger"><?php echo $errors['email']; ?></div>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="<?php echo htmlspecialchars($username) ?>">
                    <div class="text-danger"><?php echo $errors['username']; ?></div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="">
                    <div class="text-danger"><?php echo $errors['password']; ?></div>
                </div>
                <button type="submit" name="submit" class="btn btn-success">Register</button>
            </form>
        </div>
    </div>
</div>