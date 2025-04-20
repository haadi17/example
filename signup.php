<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Signup</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="demo_style.css" />
</head>
<body>
  <div class="signup-container">
    <h2>Signup</h2>
    <form method="POST" action="register.php"> <!-- Make sure this matches your PHP filename -->
      
      <!-- Username -->
      <div class="form-group">
        <label>Username</label>
        <input type="text" id="username" name="username" required>
      </div>

      <!-- Full Name -->
      <div class="form-group">
        <label>Full Name</label>
        <input type="text" id="fullname" name="fullname" required>
      </div>

      <!-- Phone Number -->
      <div class="form-group">
        <label>Phone No</label>
        <input type="text" id="phoneno" name="phoneno" required>
      </div>

      <!-- Email -->
      <div class="form-group">
        <label>Email</label>
        <input type="email" id="email" name="email" required>
      </div>

      <!-- Password -->
      <div class="form-group">
        <label>Password</label>
        <input type="password" id="password" name="password" required>
      </div>

      <!-- Confirm Password -->
      <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" id="confirmpassword" name="confirmpassword" required>
      </div>

      <!-- Skills Section -->
      <div class="form-group">
        <label><b>Add Your Skills:</b></label><br>

        <!-- Programming -->
        <label>Programming</label>
        <div class="checkbox-group">
          <label><input type="checkbox" id="c" name="c" value="c/c++"> C/C++</label>
          <label><input type="checkbox" id="python" name="python" value="python"> Python</label>
          <label><input type="checkbox" id="java" name="java" value="java"> Java</label>
          <label><input type="checkbox" id="html" name="html" value="html/css"> HTML/CSS</label>
        </div>
      </div>

      <!-- Spoken Languages -->
      <div class="form-group">
        <label>Spoken Languages</label>
        <div class="checkbox-group">
          <label><input type="checkbox" id="english" name="english" value="English"> English</label>
          <label><input type="checkbox" id="kannada" name="kannada" value="Kannada"> Kannada</label>
          <label><input type="checkbox" id="urdu" name="urdu" value="Urdu"> Urdu</label>
          <label><input type="checkbox" id="marathi" name="marathi" value="Marathi"> Marathi</label>
        </div>
      </div>

      <!-- Other Skills -->
      <div class="form-group">
        <label>Other Skills</label>
        <div class="checkbox-group">
          <label><input type="checkbox" id="singing" name="Singing" value="Singing"> Singing</label>
          <label><input type="checkbox" id="music" name="music" value="Musical Instrument"> Musical Instrument</label>
          <label><input type="checkbox" id="communication" name="Communication" value="Communication"> Communication</label>
          <label><input type="checkbox" id="art" name="Art" value="Art & Crafts"> Art & Craft</label>
        </div>
      </div>

      <!-- Submit -->
      <button class="submit-btn" type="submit">Signup</button>
    </form>
  </div>

  <!-- Password match validation -->
  <script>
    document.querySelector('form').addEventListener('submit', function (e) {
      const pass = document.getElementById('password').value;
      const confirm = document.getElementById('confirmpassword').value;

      if (pass !== confirm) {
        e.preventDefault();
        alert("Passwords do not match!");
      }
    });
  </script>
</body>
</html>
