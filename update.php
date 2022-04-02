<?php 
include 'connect.php';
$id = $_GET['updateid'];

$sql = "SELECT * FROM `user` where id = $id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];


    $sql = "UPDATE `USER` SET id = $id, name = '$name', email = '$email', mobile = '$mobile', password = '$password' where id = $id";

    $result = mysqli_query($conn,$sql);

    if($result){
        //echo "Data updated seccessfully";
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}

?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>CRUD Application</title>
  </head>
  <body>

  <div class="container my-5">
        
        <form method="post" action="">
            <div class="form-group">
                <label>Name</label>
                <input type="text" value=<?php echo $name; ?> class="form-control"placeholder="Enter your name" name="name" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" value=<?php echo $email; ?> class="form-control"placeholder="Enter your email" name="email" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" value=<?php echo $mobile; ?> class="form-control"placeholder="Enter your mobile number" name="mobile" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" value=<?php echo $password; ?> class="form-control"placeholder="Enter your password" name="password" autocomplete="off" required>
            </div>

            
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>

    </div>
  </body>
</html>