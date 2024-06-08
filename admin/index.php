<?php
include("config.php");
session_start();
?>
<html>
<head>
<title>Nik Login </title>

 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>




<?php
if(isset($_POST["submit"])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Use prepared statement to prevent SQL injection
    $query = "SELECT * FROM admin WHERE email=? AND password=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) > 0){
        // If user exists, redirect to dashboard
        $_SESSION['email'] = $email; // Store email in session for further use
        
        header("Location: dashboard.php");
        session_destroy();
     
    } else {
        // If user does not exist, show error message
        echo '<script>alert("Incorrect email or password.");</script>';
    }

    // Close statement
    mysqli_stmt_close($stmt);
}
?>

<style>

       body{
	margin: 30px;
	padding: 2px;
	display: center;
	justify-content: center;
	align-items: center;
	min-height: 90vh;
	font-family: 'Jost', sans-serif;
    background: linear-gradient(to bottom, #5b52ad, #584dc1, #9191f7);
}
.form-container{
	width: 350px;
	height: 450px;
	background: red;
	overflow: hidden;
	background: linear-gradient(to bottom, #180b8f, #504b8b, #6868b7);
	border-radius: 10px;
	box-shadow: 2px 10px 80px #000;
    margin-left:37%;
    margin-top:140px;
}
.form-container h2{
    text-align:center;
    font-family: "Playfair Display", serif;
    color:white;
    font-style: italic;
    margin: 45px;
}
h1{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
    
}
input[type='password'],input[type='email']{
	width: 60%;
	height: 15px;
	background: #e0dede;
	justify-content: center;
	display: flex;

	padding: 15px;
	border: none;
	outline: none;
	border-radius: 5px;
    margin-left:21%;
   
}

input[type='submit']{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: flex;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 15px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
input[type='submit']:hover{
	background: #6d44b8;
}



</style>
<div class="form-container">
   
    <h2>Login from Here!!</h2>
<form action="" method="post" onsubmit="return confirm('Login now?')">
    <input type="email" name="email" placeholder="Enter email" required><br><br>
    <input type="password" name="password" placeholder="Enter password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least one digit, one uppercase letter, one lowercase letter, and be at least 8 characters long"><br><br>
    <input type="submit" name="submit" value="Login Now">
</form>
           
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div>
</body>
</html>