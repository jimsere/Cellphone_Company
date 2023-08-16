<?php

    $h = 'localhost';
    $u = 'student_2214';
    $p = 'pass2214';
    $n = 'student_2214';


$conne=mysqli_connect($h, $u, $p, $n) ;

if(!$conne){

    die("Connection failed". mysql_error());
}
echo"success";
 

/*
if ($result = $conne -> query("SELECT * FROM PELATHS")) {
    echo "Returned rows are: " . $result -> num_rows;
    // Free result set
    $result -> free_result();
  }


*/



/*
    try{

        $conne = new PDO("mysql:host=$h;dbname=$n",$u,$p);
        echo "Connection Success";

    }
    
    catch (PDOException $e){

        echo"Error in Connection" . $e->getMessage();
    }

*/
//$conne = new PDO("mysql:host=$h;port=22;dbname=$n", $u, $p); 
?>