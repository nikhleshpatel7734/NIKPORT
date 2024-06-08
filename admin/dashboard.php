<?php
include("index.html");
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
	height: 650px;
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
	margin: 15px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
    
}
input[type='date'],input[type='text']{
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
           height:90%;
           
background: rgba(255, 255, 255, 0.39);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 1.9);
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
           height:100%;
            width:100%;
        }
    </style>
</head>
<body>
    <h1>Welcome to Admin Dashboard</h1>
<div class="main-container">
<a href="#about"><button>about</button></a>
    <!-- About Us Section -->
    <div class="container">
    
    <div class="row">
      <div class="col-12">
        <div class="table-container">
        <h1>About us</h1>
          <table class="table table-bordered"  id="#about">
            <thead class="thead-dark">
              <tr>
              <th scope="col">SR.N.</th>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col" class="desc-col">Description</th>
                <th scope="col">Birthday</th>
                <th scope="col">Website</th>
                <th scope="col">Phone</th>
                <th scope="col">City</th>
                <th scope="col">Age</th>
                <th scope="col">Degree</th>
                <th scope="col">Email</th>
                <th scope="col">Freelance</th>
                <th scope="col"  class="desc-col">Details</th>
                
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
                  <td> <?php echo $cont ?> </td>
                  </tr>
                  </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <?php
                }
                ?>
    <!-- Skills Section -->
    <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="table-container">
        <h1>Skills</h1>
          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">SR.N.</th>
                <th scope="col">skill</th>
                <th scope="col">skill value</th>
               
              </tr>
            </thead>
            <tbody>
              <?php
                $str = "SELECT * FROM skills";
                $res = mysqli_query($conn, $str);
                $counter = 1; // Initialize the counter

                while ($r = mysqli_fetch_array($res)) {
                  // Retrieve data
                  $skname = $r['skname'];
                  $skval = $r['skval'];
?>
                  <tr>
                  <th scope='row'> <?php echo $counter ?> </th>
                  <td> <?php echo $skname ?> </td>
                  <td> <?php echo $skval ?> </td>
                
                  </tr>

<?php
                  // Increment the counter
                  $counter++;
                }
              ?>
               </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

    <!-- Resume Section -->
    <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="table-container">
        <h1>Education</h1>
          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">SR.N.</th>
                <th scope="col">Education </th>
                <th scope="col">Year of Edu</th>
                <th scope="col">Institute Name</th>
                <th scope="col">Stream</th>
                <th scope="col">About Education</th>
               
              </tr>
            </thead>
            <tbody>
              <?php
                $str = "SELECT * FROM education";
                $res = mysqli_query($conn, $str);
                $counter = 1; // Initialize the counter

                while ($r = mysqli_fetch_array($res)) {
                  // Retrieve data
                  $dname = $r['dname'];
                  $year = $r['year'];
                  $instname = $r['instname'];
                  $stream = $r['stream'];
                  $shortds = $r['shortds'];
?>
                  <tr>
                  <th scope='row'> <?php echo $counter ?> </th>
                  <td> <?php echo $dname ?> </td>
                  <td> <?php echo $year ?> </td>
                  <td> <?php echo $instname ?> </td>
                  <td> <?php echo $stream ?> </td>
                  <td> <?php echo $shortds ?> </td>
                 
                  </tr>

<?php
                  // Increment the counter
                  $counter++;
                }
              ?>
               </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

    <!-- Professional Experience Section -->
    <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="table-container">
        <h1>Experience</h1>
          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">SR.N.</th>
                <th scope="col">Role </th>
                <th scope="col">Experience </th>
                <th scope="col">Company</th>
                <th scope="col">Description</th>
                <th scope="col">Description 1</th>
                <th scope="col">Description 2</th>
               
              </tr>
            </thead>
            <tbody>
              <?php
                $str = "SELECT * FROM experience";
                $res = mysqli_query($conn, $str);
                 // Initialize the counter

                while ($r = mysqli_fetch_array($res)) {
                  // Retrieve data
                  $sn=$r['sn'];
                  $role = $r['role'];
                  $exm = $r['exm'];
                  $cname = $r['cname'];
                  $deshort = $r['deshort'];
                  $desh1=$r['desh1'];
                  $desh2=$r['desh2'];
?>
                  <tr>
                  <th scope='row'> <?php echo $sn ?> </th>
                  <td> <?php echo $role ?> </td>
                  <td> <?php echo $exm ?> </td>
                  <td> <?php echo $cname ?> </td>
                  <td> <?php echo $deshort ?> </td>
                  <td> <?php echo $desh1 ?> </td>
                  <td> <?php echo $desh2 ?> </td>
                 
                 
               
                  </tr>

<?php
                  // Increment the counter
                  
                }
              ?>
               </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
