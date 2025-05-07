<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sign Up | tourism_management</title>
    
    <!-- Original CSS links -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <style>
        /* Reset and base styles */
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
        
        /* Signup container */
        .signup {
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
            height: auto;
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
        
        /* Right side - Signup form */
        .form-container {
            width: 100%;
            padding: 30px;
            display: flex;
            flex-direction: column;
        }
        
        /* Heading - from original */
        .heading {
            font-family: 'Oswald', sans-serif;
            font-size: 2.2em;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        
        /* Container box - from original */
        .containerBox {
            background-color: #f8f9fa;
            padding: 25px;
            border-radius: 5px;
            margin-bottom: 20px;
            max-height: 600px;
            overflow-y: auto;
        }
        
        /* Form elements - preserving original styling */
        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
            color: #333;
        }
        
        .input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: 'Raleway', sans-serif;
            font-size: 0.9em;
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
        
        .loginPrompt {
            margin-top: 15px;
            text-align: center;
            color: #666;
        }
        
        /* Username exists warning */
        #usernameExists {
            font-size: 0.9em;
            color: #fff;
            background-color: rgba(220, 38, 38, 0.8);
            padding: 5px;
            border-radius: 4px;
            margin-top: -10px;
            margin-bottom: 10px;
            text-align: center;
            display: none;
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
        
        /* Custom scrollbar for the form container */
        .containerBox::-webkit-scrollbar {
            width: 8px;
        }
        
        .containerBox::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }
        
        .containerBox::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 4px;
        }
        
        .containerBox::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="signup">
            <!-- Left side - Carousel -->
            <div class="carousel-container">
                <div class="carousel-slide active" style="background-image: url('./images/popularDestinations/imageAndaman.jpg')"></div>
                <div class="carousel-slide" style="background-image: url('./images/popularDestinations/imageJaisalmer.jpg')"></div>
                <div class="carousel-slide" style="background-image: url('./images/popularDestinations/imageKashmir.jpg')"></div>
                
                <div class="carousel-overlay">
                    <div class="carousel-text">
                        <h2>Tourism Management</h2>
                        <p>Join us and explore the world</p>
                    </div>
                </div>
            </div>
            
            <!-- Right side - Signup form -->
            <div class="form-container">
                <div class="heading">
                    Sign Up
                </div>
                
                <div class="containerBox">
                    <form action="signupAction.php" method="POST">
                        <label for="name">Full Name:</label>
                        <input type="text" class="input" name="name" placeholder="Enter your full name here" id="fullname" required>
                        
                        <label for="email">E-mail:</label>
                        <input type="email" class="input" name="email" placeholder="Enter your email here" required>
                        
                        <label for="phone">Phone:</label>
                        <input type="text" class="input" name="phone" placeholder="Enter your phone no. here" id="phone" required>
                        
                        <label for="username">Username:</label>
                        <input type="text" class="input" name="username" placeholder="Enter a username here" id="username" required>
                        
                        <p id="usernameExists">This username already exists. Please choose a different one.</p>
                        
                        <label for="password">Password:</label>
                        <input type="password" class="input" name="password" placeholder="Enter a password here" id="password" required>
                        
                        <label for="repeatPassword">Repeat Password:</label>
                        <input type="password" class="input" name="repeatPassword" placeholder="Enter the same password again" id="repeatPassword" required>
                        
                        <label for="addressLine1">Address Line 1:</label>
                        <input type="text" class="input" name="addressLine1" placeholder="Enter your House No./ Flat No. or Apartment No." required>
                        
                        <label for="addressLine2">Address Line 2:</label>
                        <input type="text" class="input" name="addressLine2" placeholder="Enter the name of your Lane, Locality" required>
                        
                        <label for="city">City:</label>
                        <input type="text" class="input" name="city" placeholder="Enter the name of your city here" id="city" required>
                        
                        <label for="state">State:</label>
                        <input type="text" class="input" name="state" placeholder="Enter the name of your state here" id="state" required>
                        
                        <div style="text-align: center; margin-top: 10px;">
                            <input type="submit" class="button" name="signup" value="Sign Up" id="signupButton">
                        </div>
                    </form>
                    
                    <div style="text-align: center; margin-top: 15px;">
                        <div class="loginPrompt">
                            Already have an account? <a href="login.php"><span class="dots">Login</span></a> instead.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Simple carousel functionality
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.carousel-slide');
            let currentSlide = 0;
            
            function nextSlide() {
                slides[currentSlide].classList.remove('active');
                currentSlide = (currentSlide + 1) % slides.length;
                slides[currentSlide].classList.add('active');
            }
            
            // Change slide every 5 seconds
            setInterval(nextSlide, 5000);
            
            // Username validation - show warning if needed
            const usernameInput = document.getElementById('username');
            const usernameExists = document.getElementById('usernameExists');
            
            // This is just a placeholder for the username check
            // In a real implementation, you would check against your database
            usernameInput.addEventListener('blur', function() {
                // Example check - you would replace this with an actual AJAX call to your server
                // This is just for demonstration purposes
                if (usernameInput.value.toLowerCase() === 'admin' || usernameInput.value.toLowerCase() === 'test') {
                    usernameExists.style.display = 'block';
                } else {
                    usernameExists.style.display = 'none';
                }
            });
            
            // Password matching validation
            const password = document.getElementById('password');
            const repeatPassword = document.getElementById('repeatPassword');
            const signupButton = document.getElementById('signupButton');
            
            function validatePassword() {
                if (password.value !== repeatPassword.value) {
                    repeatPassword.setCustomValidity("Passwords don't match");
                } else {
                    repeatPassword.setCustomValidity('');
                }
            }
            
            password.addEventListener('change', validatePassword);
            repeatPassword.addEventListener('keyup', validatePassword);
        });
    </script>
</body>
</html>