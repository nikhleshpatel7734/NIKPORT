<?php
include("config.php");

// Include index.html file
include('index.html');

// Function to handle file upload



// Read operation - Display projects
$str = "SELECT * FROM projects";
$res = mysqli_query($conn, $str);

// Check if form is submitted for adding a new project
// Check if form is submitted for adding a new projec

// Function to handle file upload



// Check if form is submitted for updating a project

// Check if delete link is clicked
if(isset($_GET['idd'])){
    $idd=$_GET['idd'];
    $deleteQuery="DELETE FROM projects WHERE purl='$idd'";
    $deleteResult=mysqli_query($conn,$deleteQuery);
    if($deleteResult){
        echo '<script>alert("Project deleted successfully.");</script>';
        echo '<script>window.location.href="portfolio.php";</script>';
        exit();
    } else {
        echo "Failed to delete project.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        
        /* Your CSS styles */
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
           height:100%;
            width:100%;
        }
     
        
        
    </style>
    <h1 style="text-align: center;">Portfolio</h1>
</head>
<body>
    <div class="container">
        <!-- Display projects table -->
        <div class="table-container">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">SR.N.</th>
                        <th scope="col">Category</th>
                        <th scope="col">Project Date</th>
                        <th scope="col">Project URL</th>
                        <th scope="col">Project Description</th>
                        <th scope="col">Project Image</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $counter = 1; // Initialize the counter
                    while ($r = mysqli_fetch_array($res)) {
                        // Retrieve data
                        $category = $r['category'];
                        $pdate = $r['pdate'];
                        $purl = $r['purl'];
                        $pdes = $r['pdes'];
                        $pimag = $r['pimag'];
                    ?>
                        <tr>
                            <th scope='row'> <?php echo $counter ?> </th>
                            <td> <?php echo $category ?> </td>
                            <td> <?php echo $pdate ?> </td>
                            <td> <?php echo $purl ?> </td>
                            <td> <?php echo $pdes ?> </td>
                            <td> <img src="data:image/jpeg;base64,<?php echo base64_encode($pimag); ?>" alt="Project Image" style="max-width: 100px;"> </td>
                            <td>
                                <button type='button' class='btn btn-success'><a href="?id=<?php echo $purl ?>"><i class='fas fa-edit'></i> </a></button>
                                <button type='button' class='btn btn-danger'><a href="?idd=<?php echo $purl ?>"><i class='far fa-trash-alt'></i></a></button>
                            </td>
                        </tr>
                    <?php
                        // Increment the counter
                        $counter++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
<?php
        function handleFileUpload($file) {
    $imageData = file_get_contents($file["tmp_name"]);
    return $imageData;
}

// Check if form is submitted for updating a project
if(isset($_POST['edit'])) {
    $category = $_POST['category'];
    $pdate = $_POST['pdate'];
    $purl = $_POST['purl'];
    $pdes = $_POST['pdes'];
    $pimag = '';

    // Check if a new image is uploaded
    if($_FILES["pimag"]["error"] == 0) {
        $pimag = handleFileUpload($_FILES["pimag"]);
    }

    // If image upload is successful or not attempted, proceed with update
    if($pimag || $_FILES["pimag"]["error"] == 4) {
        $updateQuery = "UPDATE projects SET category=?, pdate=?, purl=?, pdes=?";
        $params = array($category, $pdate, $purl, $pdes);
        
        if($pimag) {
            $updateQuery .= ", pimag=?";
            $params[] = $pimag; // Add the image data to the parameters
        }
        
        $updateQuery .= " WHERE purl=?";
        $params[] = $purl; // Add the URL to the parameters

        // Prepare the SQL statement
        $stmt = $conn->prepare($updateQuery);
        // Bind parameters
        $stmt->bind_param(str_repeat('s', count($params)), ...$params);
        
        // Execute the statement
        if($stmt->execute()) {
            echo '<script>alert("Project updated successfully.");</script>';
            echo '<script>window.location.href="portfolio.php";</script>';
            exit();
        } else {
            echo "Failed to update project.";
        }
        
        // Close the statement
        $stmt->close();
    } else {
        echo "Failed to upload image.";
    }
}
?>

<?php
// Display form for updating a project if 'id' is set
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $str1 = "SELECT * FROM projects WHERE purl='$id'";
    $res1 = mysqli_query($conn, $str1);
    while($r1 = mysqli_fetch_array($res1)){
        $category = $r1['category'];
        $pdate = $r1['pdate'];
        $purl = $r1['purl'];
        $pdes = $r1['pdes'];
        $pimag = $r1['pimag'];
?>
<div class="form-container">
    <h2>Update Project</h2>
    <form action="" method="post" enctype="multipart/form-data">
    <br> <input type="text" name="category" value="<?php echo $category ?>" required><br>
    <br><input type="date" name="pdate" value="<?php echo $pdate ?>" required><br>
    <br> <input type="text" name="purl" value="<?php echo $purl ?>" required><br>
    <br>  <input type="text" name="pdes" value="<?php echo $pdes ?>" required><br>
    <br>  <input type="file" name="pimag" ><br>
    <br>   <input type="hidden" name="old_pimag" value="oldimg.jpg">
    <br>  <input type="submit" name="edit" value="Edit">
    </form>
</div>
<?php
    }
}
?>

<!-- Form for adding a new project -->
<div class="form-container">
            <h2>Add New Project</h2>
            <form action="" method="post" enctype="multipart/form-data">
            <br>      <input type="text" name="category" placeholder="Category" required><br>
            <br>      <input type="date" name="pdate" placeholder="Project Date" required><br>
            <br>      <input type="text" name="purl" placeholder="Project URL" required><br>
            <br>      <input type="text" name="pdes" placeholder="Project Description" required><br>
            <br>     <input type="file" name="pimag" required><br>
            <br>     <input type="submit" name="submit" value="Submit">
            </form>
        </div>
<?php
// Check if form is submitted for adding a new project
if(isset($_POST['submit'])) {
    $category = $_POST['category'];
    $pdate = $_POST['pdate'];
    $purl = $_POST['purl'];
    $pdes = $_POST['pdes'];
    $pimag = handleFileUpload($_FILES["pimag"]);

    if($pimag) {
        // Prepare the SQL query
        $insertQuery = "INSERT INTO projects (category, pdate, purl, pdes, pimag) VALUES (?, ?, ?, ?, ?)";
        
        // Prepare and bind parameters
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("sssss", $category, $pdate, $purl, $pdes, $pimag);
        
        // Execute the statement
        if($stmt->execute()) {
            echo '<script>alert("Project added successfully.");</script>';
            echo '<script>window.location.href="portfolio.php";</script>';
            exit();
        } else {
            echo "Failed to add project: " . $stmt->error;
        }
        
        // Close the statement
        $stmt->close();
    } else {
        echo "Failed to upload image.";
    }
}
?>
</body>
</html>
