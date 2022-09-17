<!-- Delete Announcements -->
<?php
include("db_conn.php");
error_reporting(0);

$srno=$_GET['rn'];
$query="DELETE FROM table2 WHERE email ='$srno'";
$data=mysqli_query($conn,$query);

if($data){
    ?>
    <script>alert("deleted sucessfully");</script>
    <?php
}
else{
    echo  "record not deleted";
}
?>
