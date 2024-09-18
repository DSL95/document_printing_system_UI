<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login or Register</title>
    

<style>


body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
            background-image: url('images/login_background.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 400px;
            margin: 20px;
        }

        h2 {
            margin-top: 0;
            font-size: 24px;
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        button:hover {
            background-color: #2980b9;
        }

        .link {
            text-align: center;
            margin-top: 10px;
        }

        .link a {
            color: #3498db;
            text-decoration: none;
        }

        .link a:hover {
            text-decoration: underline;
        }

        .form-container {
            display: none;
        }

        .form-container.active {
            display: block;
        }

        #forgot_pass{
            background-color: rgb(195, 32, 32);
            color: white;
        }
</style>

</head>
<body>

    <div class="container">
        <h2 id="form-title">Login</h2>
        
        <!-- Login Form -->
        <div id="login-form" class="form-container active">
            <form action="submit_login.php" method="post">
                <div class="form-group">
                    <label for="login-email">Email Address:</label>
                    <input type="email" id="login-email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="login-password">Password:</label>
                    <input type="password" id="login-password" name="password" required>
                </div>
                
                <!-- <button type="submit">Login</button> -->
                <button type="button" onclick="window.location.href='admin.php'">Log In</button>
                <br>
                <br>
               <!--<button id="forgot_pass"type="submit">Forgot Password</button>  -->
               <button id="forgot_pass" type="button" onclick="window.location.href='forgot_password.html'">Forgot Password</button>
                <div class="link">
                    <p>Don't have an account? <a href="#" onclick="toggleForm('register')">Register here</a></p>
                </div>
            </form>
        </div>
        
        <!-- Register Form -->
        <div id="register-form" class="form-container">
            <form action="submit_registration.php" method="post">
                <div class="form-group">
                    <label for="first-name">First Name:</label>
                    <input type="text" id="first-name" name="first_name" required>
                </div>
                
                <div class="form-group">
                    <label for="last-name">Last Name:</label>
                    <input type="text" id="last-name" name="last_name" required>
                </div>
                
                <div class="form-group">
                    <label for="register-email">Email Address:</label>
                    <input type="email" id="register-email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="ROLE">Role:</label>
                    <select id="gender" name="gender">
                        <option value="" disabled selected>Select your Role</option>
                        <option value="Admin">Administrator</option>
                        <option value="Editor">Editor</option>
                        <option value="Client">Client</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="register-password">Password:</label>
                    <input type="password" id="register-password" name="password" required>
                </div>
                
                <div class="form-group">
                    <label for="confirm-password">Confirm Password:</label>
                    <input type="password" id="confirm-password" name="confirm_password" required>
                </div>
                
               <!---- <button type="submit">Register</button> -->
               <button type="button" onclick="window.location.href='createUser.html'">Register</button>
                <div class="link">
                    <p>Already have an account? <a href="#" onclick="toggleForm('login')">Login here</a></p>
                </div>
            </form>
        </div>
    </div>

    <script>
        function toggleForm(formType) {
            const loginForm = document.getElementById('login-form');
            const registerForm = document.getElementById('register-form');
            const formTitle = document.getElementById('form-title');

            if (formType === 'register') {
                loginForm.classList.remove('active');
                registerForm.classList.add('active');
                formTitle.textContent = 'Register';
            } else {
                registerForm.classList.remove('active');
                loginForm.classList.add('active');
                formTitle.textContent = 'Login';
            }
        }
    </script>

</body>