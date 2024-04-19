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
    <div class="container mt-5"> 
    <form action="proses.php" method = 'POST'>
        <div class="mb-3 row">
                <label for="SerialNumber" class="col-sm-2 col-form-label">S/n Device</label>
                <div class="col-sm-10">
                    <input type="text" name = "SerialNumber"class="form-control" id="SerialNumber" placeholder="Ex: 4535235561">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="SignalStatus"  class="col-sm-2 col-form-label">Signal Status</label>
                <div class="col-sm-10">
                    <input type="text" name= "SignalStatus" class="form-control" id="SignalStatus" placeholder="Ex: Good">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="RateDataFlow" class="col-sm-2 col-form-label">Rate Data Flow</label>
                <div class="col-sm-10">
                    <input type="text" name="RateDataFlow" class="form-control" id="RateDataFlow" placeholder="Ex: 2.3 m3/day">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="BatteryStatus"  class="col-sm-2 col-form-label">Battery Status</label>
                <div class="col-sm-10">
                    <input type="text" name="BatteryStatus" class="form-control" id="BatteryStatus" placeholder="Ex: Stable">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="LastStatusUpdate" class="col-sm-2 col-form-label">Last Status Update</label>
                <div class="col-sm-10">
                    <input type="text" name="LastStatusUpdate" class="form-control" id="LastStatusUpdate" placeholder="Ex: 2 hours ago">
                </div>
            </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="mb-3 row mt-4 ">
                <div class="col-auto">
                <?php
                    if(isset($_GET['ubah'])){
                ?>
                    <button type="submit" name="aksi" value="edit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>Edit</button>
                <?php } else{
                ?>
                    <button type="submit" name="aksi" value="add"class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Submit</button>
                <?php }
                ?>
                        
                </div>
                <div class="col-auto">
                    <a href="index.php" class="btn btn-danger"><i class="fa fa-refresh" aria-hidden="true"></i> Reset</a>
                </div>
            </div>
    </form>
    </div>
</body>
</html>

