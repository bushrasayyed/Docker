<?php
$con=mysqli_connect("db-server:3306","root","root");
if($con)
{
    echo "successfully running!!! <br><br>";
    echo " Thanks for your time...bye";
}
else{
    echo "failed";
}
?>