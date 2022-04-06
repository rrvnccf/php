<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
}
?>
<html>
<head>    
    <title>Edit User Data</title>
    <link rel="stylesheet" type="text/css" href="themes/bootstrap-5.1.3/css/bootstrap.min.css">
</head>
 
<body>
    <div class="card-text-center">
        </div>
        <div class="card-body">
            </div>
            <div class="card-header" style="background-color: black">
                <ul class="nav nav-tabs card-header-tabs">
                    <img src="retalk.jpeg" class="card-img-top" style="width: 18rem; margin-right: 500px">
                    <li class="nav-item">
                        <a class="nav-link link" aria-current="true" href="home.php" style="color: white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="index.php" style="color: white;">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="" style="color: white">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href= "" style="color: white">About</a>
                    </li>
                </ul>
        </div>
        <form name="update_user" method="post" action="edit.php">
        <div class="card">
            <div class="card-body">
        
            <div class="mb-3">

                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHe" name="name" value=<?php echo $name;?>>
                <div id="emailHelp" class="form-text">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHe" name="email" value=<?php echo $email;?>>
                <div id="emailHelp" class="form-text">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mobile</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHe" name="mobile" value=<?php echo $mobile;?>>
                <div id="emailHelp" class="form-text">
                </div>
            </div>
                <tr>
                    <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                    <td><input class="btn btn-dark" type="submit" name="update" value="Update"></td>
                </tr>
                    <a href="index.php" class='btn btn-outline-dark'>Home</a>
                    <br/><br/>
            </div>
        </div>
        </form>
</body>
</html>