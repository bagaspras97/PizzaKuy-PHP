<?php 
//connect to database
$conn = mysqli_connect('localhost', 'bagas', 'tes123', 'db_pizzaKuy');

//check connection
if(!$conn){
    echo "connection error : " . mysqli_connect_error();
}
?>