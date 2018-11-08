<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <title>PHP Laravel web application</title>
      <link href="{{ asset('css/gradients.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body class="">
        <div class="wrapper">
            <div class="graphics">
    
    
<?php
$conMj =  mysqli_connect("mydb.csv5qvzrti0z.us-east-1.rds.amazonaws.com", "usuario", "#192341!dev","teste");

function DB_Query($sql,$conn)
    {
        if (!$conn) {
            echo("erro");
            die("Connection failed: " . mysqli_connect_error());
        }
       
            $result = mysqli_query($conn, $sql);
        
            if (mysqli_num_rows($result) > 0) {

                while($row = $result->fetch_row()) {
                    $rows[]=$row;
                }
                return $rows;            
            } else {
                return [];
            }
    }   
    
    DB_Query("insert into new_table (idnew_table,new_tablecol) select max(idnew_table)+1,max(new_tablecol)+1 from new_table",$conMj);
 print_r(DB_Query("select * from new_table",$conMj));


?>
   
        <footer>
            <p class="footer-contents">testes bd</p>
        </footer>
       
    </body>
</html>
