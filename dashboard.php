
<?php
// dashboard.php
session_start();

// Optional: Check if user is logged in
if (!isset($_SESSION['username'])) {
    echo "Access denied. Please login.";
    exit;
}

$conn = new mysqli("localhost", "root", "", "skilll_ex");

// Get username from session
$session_username = $_SESSION['username'];

// Fetch full username (optional: in case you want to get full name or more user info)
$sql = "SELECT * FROM signup WHERE username = '$session_username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row['username'];
	$Email = $row['Email'];
} else {
    $username = "Unknown User";
}

$conn->close();
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Dashboard</title>
		<style>
			.container {
				display: flex;
				gap: 20px;
				padding: 20px;
				justify-content: center;
			}
			.label-box {
				padding: 15px;
				background-color: #f0f0f0;
				border-radius: 8px;
				font-weight: bold;
				width: 150px;
				text-align: center;
			}
			h2 {
				display: flex;
				justify-content: center;
			}
		</style>
	</head>
	<body>

	<h2>Welcome</h2>

	<div class="container">
	<div class="label-box">Username</div>
		<div class="label-box"><?php echo $username; ?></div><br>
		<div class="label-box">Email</div>
		<div class="label-box"><?php echo $Email; ?></div>
		<div class="label-box">
		<form action="logout.php" method="post">
    <button type="submit">Logout</button>
</form>

		
		</div>
	</div>

	</body>
	</html>
