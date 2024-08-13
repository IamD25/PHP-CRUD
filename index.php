<?php 
include "connection.php";

$query = "SELECT * FROM `emp`";
$result = mysqli_query($connection, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="continer m-5 text-center">
        <div class="text-center">
            <h2>PHP CRUD Application</h2>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th name="id">Id</th>
                    <th name="name">Name</th>
                    <th name="age">Age</th>
                    <th name="contact">Contact</th>
                    <th name="email">Email</th>
                    <th name="address" >Address</th>
                    <th name="pincode">Pincode</th>
                    <th colspan="2" >Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row=mysqli_fetch_assoc($result)){?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['age']?></td>
                        <td><?php echo $row['contact']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['address']?></td>
                        <td><?php echo $row['pincode']?></td>
                        <td><a class="btn btn-sm btn-danger" id="update" href="update.php?id=<?= $row['id']; ?>">Update</a></td>
                        <td><a class="btn btn-sm btn-warning" id="btndelete" href="delete.php?id=<?= $row['id']; ?>">Delete</a></td>
                    </tr>
                    <?php }?>
            </tbody>
        </table>
        <div class="row">
            <div class="col-5"></div>
            <div class="col-1 mb-2">
                <a href="create.php" class="btn btn-primary btn-sm">Add New</a>
            </div>
        </div>
    </div>
</body>

</html>
