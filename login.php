<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login | travel_management</title>
    

    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Raleway', sans-serif;
            background-image: url("./images/login/login_bg.jpg");
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        /* Main container */
        .container-fluid {
            width: 100%;
            max-width: 1200px;
        }
        
        /* Login container */
        .login {
            background-color: beige;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: row;
        }
        
        /* Left side - Photo carousel */
        .carousel-container {
            position: relative;
            width: 50%;
            height: 700px;
            overflow: hidden;
            display: none; /* Hidden on mobile by default */
        }
        
        .carousel-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            background-size: cover;
            background-position: center;
        }
        
        .carousel-slide.active {
            opacity: 1;
        }
        
        .carousel-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: flex-end;
            padding: 30px;
        }
        
        .carousel-text {
            color: white;
        }
        
        .carousel-text h2 {
            font-family: 'Oswald', sans-serif;
            font-size: 28px;
            margin-bottom: 10px;
        }
        
        .carousel-text p {
            font-size: 16px;
        }
        
        /* Right side - Login form */
        .form-container {
            width: 100%;
            padding: 40px;
            display: flex;
            flex-direction: column;
        }
        
        /* Heading - from original */
        .heading {
            font-family: 'Oswald', sans-serif;
            font-size: 2.2em;
            color: #333;
            margin-bottom: 30px;
            text-align: center;
        }
        
        /* Container box - from original */
        .containerBox {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        
        /* Form elements - preserving original styling */
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #333;
        }
        
        .input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: 'Raleway', sans-serif;
            font-size: 1em;
        }
        
        .button {
            background-color: #3b82f6;
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 1em;
            border-radius: 4px;
            cursor: pointer;
            font-family: 'Raleway', sans-serif;
            font-weight: 500;
            transition: background-color 0.3s;
            width: 100%;
            max-width: 200px;
            margin: 0 auto;
            display: block;
        }
        
        .button:hover {
            background-color: #2563eb;
        }
        
        /* Links - preserving original styling */
        .dots {
            color: #3b82f6;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .dots:hover {
            color: #1e40af;
            text-decoration: underline;
        }
        
        .signupPrompt {
            margin-top: 20px;
            text-align: center;
            color: #666;
        }
        
        /* Responsive design */
        @media (min-width: 768px) {
            .carousel-container {
                display: block;
            }
            
            .form-container {
                width: 50%;
            }
        }
    </style>
	<script src="js/jquery-3.2.1.min.js"></script>
    	<script src="js/main.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<script src="js/bootstrap-select.js"></script>
    	<script src="js/bootstrap-dropdown.js"></script>
    	<script src="js/jquery-2.1.1.min.js"></script>
    	<script src="js/moment-with-locales.js"></script>
    	<script src="js/bootstrap-datetimepicker.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="login">
            <!-- Left side - Carousel -->
            <div class="carousel-container">
                <div class="carousel-slide active" style="background-image: url('./images/popularDestinations/imageAndaman.jpg')"></div>
                <div class="carousel-slide" style="background-image: url('./images/popularDestinations/imageJaisalmer.jpg')"></div>
                <div class="carousel-slide" style="background-image: url('./images/popularDestinations/imageKashmir.jpg')"></div>
                
                <div class="carousel-overlay">
                    <div class="carousel-text">
                        <h2>Travel Management</h2>
                        <p>Discover amazing destinations</p>
                    </div>
                </div>
            </div>
            
            <!-- Right side - Login form -->
            <div class="form-container">
                <div class="heading">
                    Login
                </div>
                
                <div class="containerBox">
                    <form action="loginAction.php" method="POST">
                        <label for="username">Username:</label>
                        <input type="text" class="input" name="username" placeholder="Enter username here" required>
                        
                        <label for="password">Password:</label>
                        <input type="password" class="input" name="password" placeholder="Enter password here" required>
                        
                        
						<div style="text-align: center;">
                        <input type="submit" class="button" name="login" value="Login">
                        </div>
                    </form>
                </div>
                
                <div style="text-align: center; margin-top: 20px;">
                    <a href="forgotPassword.php" style="color: #3b82f6; text-decoration: none;">Forgot Password?</a>
                </div>
                
                <div class="signupPrompt">
                    New user? <a href="signup.php"><span class="dots">Sign Up</span></a> instead.
                </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>