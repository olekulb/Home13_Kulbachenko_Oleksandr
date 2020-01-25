<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HW-13 Kulbachenko Oleksandr Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Oleksandr Kulbachenko">
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
</head>
<body>
<section class="container-fluid">
    <div class="container">
        <h1 class="main-title">Registration form</h1>
        <form action="submit.php" method="post">
            <fieldset>
                <ul class="list">
                    <li class="list-item">
                        <label for="action"><input type="hidden" name="action" id="action" value="registration"></label>
                    </li>
                    <li class="list-item">
                        <h2>User name:</h2>
                        <label for="userName"><input type="text" name="user_name" id="userName"></label>
                    </li>
                    <li class="list-item">
                        <h2>Email:</h2>
                        <label for="email"><input type="email" name="email" id="email"></label>
                    </li>
                    <li class="list-item">
                        <h2>Password:</h2>
                        <label for="password"><input type="password" name="password" id="password"></label>
                    </li>
                    <li class="list-item">
                        <h2>Repeat password:</h2>
                        <label for="repeatPassword"><input type="password" name="repeat_password" id="repeatPassword"></label>
                    </li>
                    <li class="list-item">
                        <h2>First Name:</h2>
                        <label for="firstName"><input type="text" name="first_name" id="firstName"></label>
                    </li>
                    <li class="list-item">
                        <h2>Last Name:</h2>
                        <label for="lastName"><input type="text" name="last_name" id="lastName"></label>
                    </li>
                    <li class="list-item">
                        <h2>Age:</h2>
                        <label for="age"><input type="text" name="age" size="3" id="age"></label>
                    </li>
                    <li class="list-item">
                        <h2>Gender:</h2>
                        <label><input type="radio" checked name="gender" value="male"> male</label>
                        <label><input type="radio" name="gender" value="female" class="indent"> female</label>
                    </li>
                    <li class="button-wrapper list-item">
                        <input type="submit" value="Save" class="submit-button">
                        <button class="exit-button indent">Home</button>
                    </li>
                </ul>
            </fieldset>
        </form>
    </div>
</section>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>