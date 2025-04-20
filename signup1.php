<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skill Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
        }

        .registration-container {
            max-width: 600px;
            margin: 20px auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        h2 {
            color: #1a73e8;
            text-align: center;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #5f6368;
            font-weight: 500;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #dadce0;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .skills-section {
            margin: 20px 0;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 6px;
        }

        .checkbox-group {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 10px;
            margin-top: 10px;
        }

        .checkbox-group label {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        button.submit-btn {
            background-color: #1a73e8;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.2s;
        }

        button.submit-btn:hover {
            background-color: #1557b0;
        }

        .password-match-error {
            color: #dc3545;
            font-size: 0.9em;
            margin-top: 5px;
            display: none;
        }
    </style>
</head>
<body>
    <div class="registration-container">
        <h2>Create Your Account</h2>
        <form method="POST" action="register.php" id="signupForm">
            
            <!-- Personal Information -->
            <div class="form-group">
                <label for="username">Username *</label>
                <input type="text" id="username" name="username" required 
                       placeholder="Enter unique username">
            </div>

            <div class="form-group">
                <label for="fullname">Full Name *</label>
                <input type="text" id="fullname" name="fullname" required 
                       placeholder="John Doe">
            </div>

            <div class="form-group">
                <label for="phoneno">Phone Number *</label>
                <input type="tel" id="phoneno" name="phoneno" required 
                       placeholder="Enter 10-digit number" pattern="[0-9]{10}">
            </div>

            <div class="form-group">
                <label for="email">Email *</label>
                <input type="emai" id="email" name="email" required 
                       placeholder="example@domain.com">
            </div>

            <!-- Password Section -->
            <div class="form-group">
                <label for="password">Password *</label>
                <input type="password" id="password" name="password" required 
                       minlength="6" placeholder="At least 6 characters">
            </div>

            <div class="form-group">
                <label for="confirmpassword">Confirm Password *</label>
                <input type="password" id="confirmpassword" name="confirmpassword" required 
                       placeholder="Re-enter your password">
                <div class="password-match-error" id="passwordError">
                    Passwords do not match!
                </div>
            </div>

            <!-- Skills Sections -->
            <div class="skills-section">
                <h3>Your Skills</h3>

                  <fieldset class="skill-group">
                    <legend>Programming Languages</legend>
                    <div class="checkbox-group">
                        <label>
                            <input type="checkbox" id="c" name="c" value="c/c++">
                            C/C++
                        </label>
                        <label>
                            <input type="checkbox" id="python" name="python" value="python">
                            Python
                        </label>
                        <label>
                            <input type="checkbox" id="java" name="java" value="java">
                            Java
                        </label>
                        <label>
                            <input type="checkbox" id="html" name="html" value="html/css">
                            HTML/CSS
                        </label>
                    </div>
                </fieldset>

                <!-- Spoken Languages -->
                <fieldset class="skill-group">
                    <legend>Spoken Languages</legend>
                    <div class="checkbox-group">
                        <label>
                            <input type="checkbox" id="english" name="english" value="English">
                            English
                        </label>
                        <label>
                            <input type="checkbox" id="kannada" name="kannada" value="Kannada">
                            Kannada
                        </label>
                        <label>
                            <input type="checkbox" id="urdu" name="urdu" value="Urdu">
                            Urdu
                        </label>
                        <label>
                            <input type="checkbox" id="marathi" name="marathi" value="Marathi">
                            Marathi
                        </label>
                    </div>
                </fieldset>

                <!-- Other Skills -->
                <fieldset class="skill-group">
                    <legend>Other Skills</legend>
                    <div class="checkbox-group">
                        <label>
                            <input type="checkbox" id="singing" name="Singing" value="Singing">
                            Singing
                        </label>
                        <label>
                            <input type="checkbox" id="music" name="music" value="Musical Instrument">
                            Musical Instrument
                        </label>
                        <label>
                            <input type="checkbox" id="communication" name="Communication" value="Communication">
                            Communication
                        </label>
                        <label>
                            <input type="checkbox" id="art" name="Art" value="Art & Crafts">
                            Art & Crafts
                        </label>
                    </div>
                </fieldset>
            </div>

            <button class="submit-btn" type="submit">Create Account</button>
        </form>
    </div>

    <script>
        // Real-time password validation
        const form = document.getElementById('signupForm');
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirmpassword');
        const passwordError = document.getElementById('passwordError');

        function validatePassword() {
            if (password.value !== confirmPassword.value) {
                passwordError.style.display = 'block';
                confirmPassword.style.borderColor = '#dc3545';
                return false;
            }
            passwordError.style.display = 'none';
            confirmPassword.style.borderColor = '#dadce0';
            return true;
        }

        confirmPassword.addEventListener('input', validatePassword);
        
        form.addEventListener('submit', function(e) {
            if (!validatePassword()) {
                e.preventDefault();
            }
        });

        // Phone number validation
        document.getElementById('phoneno').addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);
        });
    </script>
</body>
</html>