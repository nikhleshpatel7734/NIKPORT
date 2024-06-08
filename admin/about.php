<?php
include("config.php");
include('index.html');

?>
<!DOCTYPE html>
<html>
<head>
  <title>About Us</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
        body{
	margin: 30px;
	padding: 2px;
	display: center;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
    background: linear-gradient(to bottom, #5b52ad, #584dc1, #9191f7);
}
.form-container{
	width: 450px;
	height: 950px;
	background: red;
	overflow: hidden;
	background: linear-gradient(to bottom, #180b8f, #504b8b, #6868b7);
	border-radius: 10px;
	box-shadow: 2px 10px 80px #000;
    margin-left:35%;
    margin-top:20px;
}
.form-container h2{
    text-align:center;
    
}
h1{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 45px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
    
}
input[type='date'],input[type='text'],input[type='email']{
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
input[type='file']{
    width: 60%;
	height: 15px;
	background: #e0dede;
	justify-content: center;
	display: flex;

	padding: 25px;
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

.table {
            width: 100%; /* Make the table fill its container horizontally */
           height:100%;
            /* From https://css.glass */
background: rgba(255, 255, 255, 0.39);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(16.8px);
-webkit-backdrop-filter: blur(16.8px);
        }

        th, td {
            padding: 10px; /* Increase padding for better spacing */
            color:white;
            font-size: 1.3em;
	margin: 3px;
	font-weight: 200;
	cursor: pointer;
	transition: .5s ease-in-out;
  font-family: 'Jost', sans-serif;
  font-style: italic;
        }
        .table-bordered td{
            border: 1px solid #243c54;
        }
        .table-bordered th{
            border: 1px solid #243c54;
        }
        .table .thead-dark th {
            background: linear-gradient(to bottom, #180b8f, #504b8b, #6868b7);
	
        }

        .table-container {
            /* Increase table container height */
            margin-left:65px;
            margin-right:-120px;
            overflow-y: auto;
            border:1px solid #cfcccced;/* Add vertical scrollbar if content overflows */
            border-radius:20px;
           height:60%;
            width:80%;
            position:fixed;
        }
      .desc-col{
        width:100%;
      }


  </style>
 
  <h1 style="text-align: center;">About</h1>

</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="table-container">
          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
              <th scope="col">SR.N.</th>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col" >Description</th>
                <th scope="col">Birthday</th>
                <th scope="col">Website</th>
                <th scope="col">Phone</th>
                <th scope="col">City</th>
                <th scope="col">Age</th>
                <th scope="col">Degree</th>
                <th scope="col">Email</th>
                <th scope="col">Freelance</th>
                <th scope="col"  class="desc-col">full Description </th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $str = "SELECT * FROM about";
                $res = mysqli_query($conn, $str);
                $counter = 1; // Initialize the counter

                while ($r = mysqli_fetch_array($res)) {
                  // Retrieve data
                  $name = $r['name'];
    $position = $r['position'];
    $shortde = $r['shortde'];
    $birthday = $r['birthday'];
    $website = $r['website'];
    $phone = $r['phone'];
    $city = $r['city'];
    $age = $r['age'];
    $qualification = $r['qualification'];
    $email = $r['email'];
    $freelance = $r['freelance'];
    $cont = $r['cont'];
?>
                  <tr>
                  <th scope='row'> <?php echo $counter ?> </th>
                  <td> <?php echo $name ?> </td>
                  <td> <?php echo $position ?> </td>
                  <td> <?php echo $shortde ?> </td>
                  <td> <?php echo $birthday ?> </td>
                  <td> <?php echo $website ?> </td>
                  <td> <?php echo $phone ?> </td>
                  <td> <?php echo $city ?> </td>
                  <td> <?php echo $age ?> </td>
                  <td> <?php echo $qualification ?> </td>
                  <td> <?php echo $email ?> </td>
                  <td> <?php echo $freelance ?> </td>
                  <td class="desc-col"> <?php echo $cont ?> </td>
                  <td>
                  <button type='button' class='btn btn-success'><a href="?id=<?php echo $name ?>" ><i class='fas fa-edit'></i> </a></button>
                  <button type='button' class='btn btn-danger'><a href="?idd=<?php echo $name ?>"><i class='far fa-trash-alt'></i></a></button>
                  </td>
                  </tr>
<?php
                  // Increment the counter
                  $counter++;
                }
              ?>
          
         <?php
         if(isset($_GET['idd'])){
            $idd=$_GET['idd'];
            $str3="delete from about where name='$idd'";
            $res3=mysqli_query($conn,$str3);
            if($res3==true){
                ?>
<script>
    alert("are you sure to delete this record??");
    window.location.href="about.php";
</script>

                <?php
            }
            else{
                ?>

                <script>
    alert("check details again");
   
</script>
<?php
            }
         }
        
         ?>



            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $str1 = "SELECT * FROM about WHERE name=?";
    $stmt = $conn->prepare($str1);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $res1 = $stmt->get_result();

    if ($r1 = $res1->fetch_assoc()) {
        $name = $r1['name'];
        $position = $r1['position'];
        $shortde = $r1['shortde'];
        $birthday = $r1['birthday'];
        $website = $r1['website'];
        $phone = $r1['phone'];
        $city = $r1['city'];
        $age = $r1['age'];
        $qualification = $r1['qualification'];
        $email = $r1['email'];
        $freelance = $r1['freelance'];
        $cont = $r1['cont'];
?>

        <div class="form-container">
          <h1>Update about us </h1>
            <form action="" method="post" onsubmit="return confirm('update now??')" class="two-column-form">
                <div class="left-column">
                    <input type="text" name="name" value="<?php echo $name ?>"><br>
                    <input type="text" name="position" value="<?php echo $position ?>"><br>
                    <input type="text" name="shortde" value="<?php echo $shortde ?>"><br>
                    <input type="date" name="birthday" value="<?php echo $birthday ?>"><br>
                    <input type="text" name="website" value="<?php echo $website ?>"><br>
                    <input type="text" name="phone" value="<?php echo $phone ?>"><br>
                </div>
                <div class="right-column">
                    <input type="text" name="city" value="<?php echo $city ?>"><br>
                    <input type="text" name="age" value="<?php echo $age ?>"><br>
                    <input type="text" name="qualification" value="<?php echo $qualification ?>"><br>
                    <input type="email" name="email" value="<?php echo $email ?>"><br>
                    <input type="text" name="freelance" value="<?php echo $freelance ?>"><br>
                    <input type="text" name="cont" value="<?php echo $cont ?>"><br>
                    <input type='submit' name='submit' value='edit'>
                </div>
                
            </form>
        </div>

<?php
    }
}
?>




<!--update -->
<?php
if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $position = $_POST['position'];
    $shortde = $_POST['shortde'];
    $birthday = $_POST['birthday'];
    $website = $_POST['website'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $age = $_POST['age'];
    $qualification = $_POST['qualification'];
    $email = $_POST['email'];
    $freelance = $_POST['freelance'];
    $cont = $_POST['cont'];

    // Update query
    $str2 = "UPDATE about SET position=?, `shortde`=?, birthday=?, website=?, phone=?, city=?, age=?, qualification=?, email=?, freelance=?, cont=? WHERE name=?";
    $stmt2 = $conn->prepare($str2);
    $stmt2->bind_param("ssssssisssss", $position, $shortde, $birthday, $website, $phone, $city, $age, $qualification, $email, $freelance, $cont, $name);
    $res2 = $stmt2->execute();

    if ($res2) {
       ?>
       <script>
        window.location.href="about.php";
       </script>
<?php
        exit();
    } else {
        echo "Error: " . $stmt2->error;
    }
}
?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<!----
<div class="form-container">
  <h4>Add New Record From Here!!</h4> 
<form action="" method="post" onsubmit="return confirm ('save data??');"  class="two-column-form">
<div class="left-column">
 <br><input type="text" name="name" placeholder="enter name" required> <br>
 <br><input type="text" name="position" placeholder="enter position" required> <br>
 <br><input type="text" name="shortde" placeholder="enter profile desc" required> <br>
 <br><input type="date" name="birthday" placeholder="enter birthday" required> <br>
 <br><input type="text" name="website" placeholder="enter website" required> <br>
 <br><input type="tel" name="phone" placeholder="enter phone" required> <br>
 </div>
                <div class="right-column">
 <br><input type="text" name="city" placeholder="enter city" required> <br>
 <br><input type="text" name="age" placeholder="enter age" required> <br>
 <br><input type="text" name="qualification" placeholder="enter qualification" required> <br>
 <br><input type="email" name="email" placeholder="enter email" required> <br>
 <br><input type="text" name="freelance" placeholder="enter freelance" required> <br>
 <br><input type="text" name="cont" placeholder="enter description" required> <br>
 <br><input type="submit" name="submit" value="submit"> <br>
</div>
</form>
</div>
<script>
  error_reporting(E_ALL);
ini_set('display_errors', 1);

</script>
<?php
/*
include('config.php');
if(isset($_POST['submit'])){
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $position = mysqli_real_escape_string($conn, $_POST['position']);
  $shortde = mysqli_real_escape_string($conn, $_POST['shortde']);
  $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
  $website = mysqli_real_escape_string($conn, $_POST['website']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $city = mysqli_real_escape_string($conn, $_POST['city']);
  $age = mysqli_real_escape_string($conn, $_POST['age']);
  $qualification = mysqli_real_escape_string($conn, $_POST['qualification']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $freelance = mysqli_real_escape_string($conn, $_POST['freelance']);
  $cont = mysqli_real_escape_string($conn, $_POST['cont']);
  
  $str4 = "INSERT INTO about(name,position,shortde,birthday,website,phone,city,age,qualification,email,freelance,cont) VALUES ('$name','$position','$shortde','$birthday','$website','$phone','$city',$age,'$qualification','$email','$freelance','$cont')";
  echo "$str4";
  $res4 = mysqli_query($conn, $str4);
  if($res4) {
      echo "Data inserted successfully!";
  } else {
      echo "Error: " . mysqli_error($conn);
  }
}
*/
?>
-->
    


</body>
</html>