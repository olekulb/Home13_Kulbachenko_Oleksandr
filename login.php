<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HW-13 Kulbachenko Oleksandr Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Oleksandr Kulbachenko">
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
</head>
<body>
<section class="container-fluid">
    <div class="container">
        <h1 class="main-title">Login Form</h1>
        <form action="submit.php" method="get">
            <fieldset>
                <ul class="list">
                    <li class="list-item">
                        <label for="action"><input type="hidden" name="action" id="action" value="login"></label>
                    </li>
                    <li class="list-item">
                        <h2>User name:</h2>
                        <label for="userName"><input type="text" name="user_name" id="userName"></label>
                    </li>
                    <li class="list-item">
                        <h2>Password:</h2>
                        <label for="password"><input type="password" name="password" id="password"></label>
                    </li>
                    <li class="button-wrapper list-item">
                        <input type="submit" value="Log In" class="submit-button">
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