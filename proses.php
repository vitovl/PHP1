<?php
    include 'koneksi.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == 'add'){
            $SerialNumber = $_POST['SerialNumber'];
            $SignalStatus = $_POST['SignalStatus'];
            $RateDataFlow = $_POST['RateDataFlow'];
            $BatteryStatus = $_POST['BatteryStatus'];
            $LastStatusUpdate = $_POST['LastStatusUpdate'];
        
            $query = "INSERT INTO watermeter_db VALUES (null, '$SerialNumber', '$SignalStatus', '$RateDataFlow', '$BatteryStatus', '$LastStatusUpdate')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: index.php");

            }else{
                echo $query;
            }
        }

        if($_POST['aksi'] == 'edit'){
            // Assuming edit functionality is to be implemented later
            echo "Edit". "<br>"."<a href='index.php'>Lihat</a>";
        }
    }
    
    if(isset($_GET['hapus'])){
        $id = $_GET['hapus'];
        $query = "DELETE FROM watermeter_db WHERE id = '$id';";
        $sql = mysqli_query($conn,$query);

        if($sql){
            header("location : index.php");
        }
        else{
            echo $query;
        }
    }
        
        ?>