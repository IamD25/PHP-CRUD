<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Get Php Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="continer">
        <div class="row mt-5">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="text-center">
                    <h2>PHP CRUD Application</h2>
                </div>
                <!-- <div class="row">
            <div class="col-9"></div>
            <div class="col-3 mb-2">
                <a href="create.php" class="btn btn-primary btn-sm">Add New</a>
            </div>
        </div> -->
                <form action="" method="POST">
                    <table class="table table-bordered">
                        <tr>
                            <td><label for="name">Name</label></td>
                            <td><input type="text" id="name" name="name" value="" required></td>
                        </tr>
                        <tr>
                            <td><label for="age">Age</label></td>
                            <td><input type="number" id="age" name="age" value="" required></td>
                        </tr>
                        <tr>
                            <td><label for="contact">Contact</label></td>
                            <td><input type="number" id="contact" name="contact" value="" required></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email</label></td>
                            <td><input type="email" id="email" name="email" value="" required></td>
                        </tr>
                        <tr>
                            <td><label for="address">Address</label></td>
                            <td><input type="text" id="address" name="address" value="" required></td>
                        </tr>
                        <tr>
                            <td><label for="pincode">Pincode</label></td>
                            <td><input type="number" id="pincode" name="pincode" value="" required></td>
                        </tr>

                        <tr>
                    <td colspan="2"><button name="submit" type="submit">Submit</button></td>
                </tr>
                        <!-- <tr>
                            <td colspan="2"><input type="submit" name="submit" value="click"></td>
                        </tr> -->
                    </table>
                </form>
            </div>
            <div class="col-2"></div>
        </div>

    </div>

</body>

</html>
<?php
//--> Inserting data into database By using POST Method.

if(isset($_POST["submit"])) 
{
    $name = $_POST["name"];
    $age = $_POST["age"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $pincode = $_POST["pincode"];

    $connection = mysqli_connect("localhost", "root", "", "crudform");
    
    $query = "INSERT INTO `emp`(`name`, `age`, `contact`, `email`, `address`, `pincode`) VALUES ('$name','$age','$contact','$email','$address','$pincode')";

    $run = mysqli_query($connection, $query);
   
    if ($run == TRUE) {
        echo "<script>alert('Data Inserted Successfully!')</script>";
        echo "<script>location.replace('index.php')</script>";
    } else {
        // echo "Data Not Inserted!", $connection->error;
        echo "Data Not Inserted!";
    }
}
    
?>