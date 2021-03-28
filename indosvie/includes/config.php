<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME','newsportal');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// define('DB_SERVER','localhost');
// define('DB_USER','root');
// define('DB_PASS' ,'');
// define('DB_NAME','newsportal');
// $koneksi = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
 
// // Check connection
// if (mysqli_connect_errno()){
//     echo "Koneksi database gagal : " . mysqli_connect_error();
// }

// function fetchAll($query){
//         $con = new PDO(DBINFO, DBUSER, DBPASS);
//         $stmt = $con->query($query);
//         return $stmt->fetchAll();
//     }
//     function performQuery($query){
//         $con = new PDO(DBINFO, DBUSER, DBPASS);
//         $stmt = $con->prepare($query);
//         if($stmt->execute()){
//             return true;
//         }else{
//             return false;
//         }
//     }
?>