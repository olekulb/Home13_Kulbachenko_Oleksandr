<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HW-13 Kulbachenko Oleksandr Submit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Oleksandr Kulbachenko">
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
</head>
<body>
<section class="container-fluid">
    <div class="container">
        <h1>Main page</h1>
        <div class="link-container"><a href="/index.php" class="home-link">To the home page</a></div>

        <?php
        require_once('database.php');
        // DATA INPUT
        $log_action = $_GET['action'];
        $reg_action = $_POST['action'];

        //REGISTRATION
        if ($reg_action === 'registration') {
            $user_name = $_POST['user_name'];
            $sql = "SELECT user_name FROM users";
            $existed_user = $conn->query($sql);
            if ($existed_user->num_rows > 0) {
                while ($row = $existed_user->fetch_assoc()) {
                    if ($row['user_name'] === $user_name) {
                        echo "User ".$user_name." is exist already ";
                    }
                }
            }
            if ($user_name === "") {
                echo "Please enter username ";
            }
            $email = $_POST['email'];
            if ($email === "") {
                echo "Please enter email ";
            }
            $password = md5($_POST['password']);
            if ($password === "") {
                echo "Please enter password ";
            }
            $repeat_password = md5($_POST['repeat_password']);
            if ($repeat_password === "") {
                echo "Please repeat password ";
            }
            if ($password !== $repeat_password) {
                echo "Please check password";
            }
            $first_name = $_POST['first_name'];
            if ($first_name === "") {
                echo "Please enter first name ";
            }
            $last_name = $_POST['last_name'];
            if ($last_name === "") {
                echo "Please enter last name ";
            }
            $age = $_POST['age'];
            if ($age === "") {
                echo "Please enter age ";
            }
            $gender = $_POST['gender'];
            $sql = "INSERT INTO users (user_name, email, password, first_name, last_name, age, gender)
            VALUES ('$user_name', '$email', '$password', '$first_name', '$last_name', '$age', '$gender')";
            $result = $conn->query($sql);
        }


        //LOGIN
        if ($log_action === "login") {
            $user_name = $_GET['user_name'];
            $password = md5($_GET['password']);
            $sql = "SELECT user_name, password FROM users";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $check = true;
                while ($row = $result->fetch_assoc()) {
                    switch ($row['user_name']) {
                        case $user_name:
                            if ($row['password'] === $password) {
                                echo "The user " . $user_name . " had successfully logged in";
                                $check = false;
                                break 2;
                            } else {
                                echo "Sorry, invalid password. Please try again.";
                                $check = false;
                                break 2;
                            }
                    }
                }
                if ($check) {
                    echo "Please register.";
                }
            }
        }



        /*echo "<pre>";
        var_dump($sql);
        echo "<pre>";
        exit;*/
        ?>

    </div>
</section>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
