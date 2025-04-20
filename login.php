
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Attendance System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="auth-container">
        <div class="login-card">
            <h2><i class="fas fa-user-lock"></i>  Login Your Account</h2>
  
			<form method="POST"  action="createlogin.php">
    <div class="form-group">
        <label><i class="fas fa-user"></i> Username</label>
        <input type="text" name="username" id="username" required>
    </div>
	  
    
    <div class="form-group">
        <label><i class="fas fa-lock"></i> Password</label>
        <input type="password" name="password" id="password" required>
    </div>

    <button type="submit"  class="btn primary">
        <i class="fas fa-sign-in-alt"></i> Login
    </button>
</form>

<!-- Add this below the form -->
<div style="margin-top: 1rem; text-align: center;">
    <a href="/forgot-password" style="color: #3498db; text-decoration: none; font-size: 0.9rem;">
        <i class="fas fa-unlock-alt"></i> Forgot Password?
    </a>
</div>

<div style="margin-top: 1rem; text-align: center;">
    <span style="font-size: 0.9rem;">Don't have an account?</span>
    <a href="/register" style="color: #2ecc71; text-decoration: none; font-weight: bold; margin-left: 5px;">
        <i class="fas fa-user-plus"></i> Create New Account
    </a>
</div>

        </div>
    </div>
<script src="static/js/login.js'"></script>
</body>
</html>