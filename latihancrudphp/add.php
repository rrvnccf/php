<html>
<head>
    <title>Add Users</title>
    <link rel="stylesheet" type="text/css" href="themes/bootstrap-5.1.3/css/bootstrap.min.css">
</head>
 
<body>
    <form action="add.php" method="post" name="form1">
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
        <div class="card">
            <div class="card-body">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mobile</label>
                <input type="text" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
                <tr> 
                    <td></td>
                    <td><input class="btn btn-dark" type="submit" name="Submit" value="Add"></td>
                </tr>
                <a href="index.php" class='btn btn-outline-dark'>Go to Home</a>
        
                <br/><br/>
            </div>
        </div>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>