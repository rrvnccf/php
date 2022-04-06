<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="themes/bootstrap-5.1.3/css/bootstrap.min.css">
</head>
 
<body style="font-family: sans-serif; ">
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
    <div class="card">
        <div class="card-body">
        <table  class="table table-hover">
            <tr style='background-color: #D2C3B0;'>
             <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Update</th>
            </tr>
            <?php  
            while($user_data = mysqli_fetch_array($result)) {
             echo "<tr>";
             echo "<td>".$user_data['name']."</td>";
             echo "<td>".$user_data['mobile']."</td>";
             echo "<td>".$user_data['email']."</td>";    
             echo "<td><a href='edit.php?id=$user_data[id]' class='btn btn-light' style='background-color: #D2C3B0;'><i class='arrow-left'></i>edit</a> | <a href='delete.php?id=$user_data[id]' class='btn btn-outline-danger'>delete</a> </td></tr>";        
            }
            ?>
        </table>
        <a href="add.php" class='btn btn-light' style="background-color: #D2C3B0;">Add New User</a><br/><br/>
        </div>
    </div>
    
</body>
</html>