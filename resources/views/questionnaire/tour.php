
<?php

 extract($_POST);
 if(isset($sub))
 {

    $conn=mysqli_connect("localhost","root","","auth")or die(mysqli_error());

 $query="insert into feed values('','$question','$option','$first','$second','$third','$fourth',now(),now())";
echo"$query";
 mysqli_query($conn,$query);
echo "doneeeeeeeeeeeeeeeeeeee";




 }
 else{
    echo" yyyyyyyyyyyy uuuuuu";

 }





?>
