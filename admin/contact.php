<?php
include("config.php");
include("index.html");
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
	margin: 45px;
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
            /* From https://css.glass */
background: rgba(255, 255, 255, 0.39);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.9);
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
  <h1 style="text-align: center; color:white;">Contact</h1>

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
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">subject</th>
                <th scope="col">message</th>
               
              </tr>
            </thead>
            <tbody>
              <?php
                $str = "SELECT * FROM contact";
                $res = mysqli_query($conn, $str);
                $counter = 1; // Initialize the counter

                while ($r = mysqli_fetch_array($res)) {
                  // Retrieve data
                  $coname = $r['coname'];
                  $cemail = $r['cemail'];
                  $csub = $r['csub'];
                  $cmess = $r['cmess'];
?>
                  <tr>
                  <th scope='row'> <?php echo $counter ?> </th>
                  <td> <?php echo $coname ?> </td>
                  <td> <?php echo $cemail ?> </td>
                  <td> <?php echo $csub ?> </td>
                  <td> <?php echo $cmess ?> </td>
                 
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