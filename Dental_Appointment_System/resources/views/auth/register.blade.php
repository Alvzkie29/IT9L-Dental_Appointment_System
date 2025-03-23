<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        /* Center the registration form */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

        .register-container {
            width: 500px;
            height: 600px;
            padding: 20px;
            border: 1px solid #000;
            border-radius: 5px;
            background-color: white;
            text-align: center;
        }

        /* Align labels to the left */
        .register-container label {
            display: block;
            text-align: left;
            margin-left: 18%;
            font-weight: bold;
            padding-top: 20px;
        }

        /* Style inputs */
        .register-container input {
            width: 60%;
            padding: 10px;
            margin: 5px auto;
            border: 1px solid #000;
            border-radius: 5px;
            display: block;
        }

        /* Style button */
        .register-container button {
            background-color: #198754; /* Green color */
            color: white;
            padding: 8px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .register-container a {
            display: block;
            margin-top: 15px;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Sign Up</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>

            <button type="submit">Register</button>
        </form>
        <a href="{{ route('login') }}">Already have an account?<strong> Sign-in</strong></a>
    </div>
</body>
</html>
