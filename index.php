<?php
    include 'koneksi.php';

    $query = "SELECT * FROM watermeter_db";
    $sql = mysqli_query($conn, $query);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--BOOTSTRAP-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script> 
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <title>BELAJAR PHP CRUD</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
         <div class="container-fluid">
            <a class="navbar-brand" href="#">
             Monitoring Water Meter - Antares IoT Telkom Indonesia 
            </a>
        </div>
    </nav>

    <!--judul-->    
    <div class="container-fluid">
        <h1 class="mt-3" > Water Meter</h1>
        <figure>
            <blockquote class="blockquote">
                <p>TAMPILAN DATA - DATABASE</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                CRUD <cite title="Source Title">Create Request Update Delete</cite>
            </figcaption>
         </figure>

         <a href="kelola.php" class="btn btn-primary mb-3">  
         <i class="fa fa-plus"></i>   
         Tambah Data
        </a>
         <div class="table-responsive mt-3">
            <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th >Id</th>
                    <th >S/n Device</th>
                    <th >Signal Status</th>
                    <th >Rate Data Flow</th>
                    <th >Status Batterai</th>
                    <th >Status Last Update</th>
                    <th >Detail</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $id = 1; 
                    while ($result = mysqli_fetch_assoc($sql)){
                ?>
                <tr>
                    <th scope="row" class="text-center"><?php echo $result['id']; ?></th>
                    <td class="text-center"><?php echo $result['SerialNumber']; ?></td>
                    <td class="text-center"><?php echo $result['SignalStatus']; ?></td>
                    <td class="text-center"><?php echo $result['RateDataFlow']; ?></td>
                    <td class="text-center"><?php echo $result['BatteryStatus']; ?></td>
                    <td class="text-center"><?php echo $result['LastStatusUpdate']; ?></td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success">Detail</button>
                    </td>
                    <td class ="text-center">
                        <a href = "kelola.php?ubah=<?php echo $result['id']; ?>" type="button" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                        <a href= "proses.php?hapus=<?php echo $result['id']; ?>" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>

        </table>
    </div>
    </div>
</body>
</html>