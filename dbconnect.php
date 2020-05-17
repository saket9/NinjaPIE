 <?php
$server='localhost';
$user='root';
$password='';
$db='coronadb';

$con = mysqli_connect($server,$user,$password,$db);
if($con){
    ?>
    <script>
    alert("connection success  ");
    </script>
    <?php
}else{
    ?>
    <script>
    alert(" No connection ");
    </script>
    <?php
}



 ?>