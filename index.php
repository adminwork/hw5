<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FORMA</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <form action="action.php" method="post" id="form">
            <div>
                <ul>
                    <li>Please fill in the required fields.</li>
                    <li>
                        <label for="first_name">Name:</label>
                        <input type="text" name="first_name" id="first_namename" required>
                        <span></span>
                    </li>
                    <li>
                        <label for="last_name">Second name:</label>
                        <input type="text" name="last_name" id="last_name" required>
                        <span></span>
                    </li>
                    <li>
                        <label for="loginu">Login:</label>
                        <input type="text" name="loginu" id="loginu" required>
                        <span></span>
                    </li>
                    <li>
                        <label for="pass">Password:</label>
                        <input type="password" name="pass" id="pass" required>
                        <span></span>
                    </li>
                    <li>
                        <label for="ageu">Age:</label>
                        <input type="number" size="2" name="ageu" id="ageu">
                        <span></span>
                    </li>
                    <li>
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" required>
                        <span></span>
                    </li>
                    <li><input type="submit" value="Submit"></li>
                </ul>
        </form>
    </div>
</body>
</html>
