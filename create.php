<?php error_reporting(E_ALL ^ E_NOTICE); ?>

<?php
    if (!isset($_POST['submit'])){   //ERROR: Undefined index
?>
<?php
     
     }
     else
     {
  
      include 'dbtest.php';
     /* $conn = pg_connect("dbname=VCB:password=123");
     if (!$conn) {
      echo "An error occurred.\n";
      exit;
       }
       */
       $ROLLNUMBER = $_POST["rollnumber"];

$result = pg_query( "SELECT * FROM profile WHERE Rollnumber='".$ROLLNUMBER."'");
    

    /* 
   $host        = "host=127.0.0.1";
   $port        = "port=5432";
   $dbname      = "dbname=VCB";
   $credentials = "user=postgres password=123";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
     $ROLLNUMBER = $_POST['rollnumber'];

   $sql =<<<EOF
         SELECT * from profile;
   EOF;

   $ret = pg_query($db, $sql);
   if(!$ret){
      echo pg_last_error($db);
      exit;
   } 
   while($row = pg_fetch_row($ret)){
      echo "Name = ". $row[0] . "\n";
      echo "Rollnumber = ". $row[1] ."\n";
      echo "Phoneno = ". $row[2] ."\n";
      echo "Email =  ".$row[4] ."\n\n";
      echo "Address =  ".$row[5] ."\n\n";
   }
   echo "Operation done successfully\n";
   pg_close($db);

       
     }
      
*/
?>
<html>
<body>
      <table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>NAME</th>
          <th>ROLLNUMBER</th>
          <th>PHONENUMBER</th>
          <th>EMAILID</th>
          <th>ADDRESS</th>
        </tr>
      </thead>
      <tbody>
        <?php
        
       if (!$result) {
  echo "An error occurred.\n";
  exit;
}
    
          while( $row = pg_fetch_row($result)){
            echo
            "<tr>
              <td>{$row['Name']}</td>
              <td>{$row['Rollnumber']}</td>
              <td>{$row['Phoneno']}</td>
              <td>{$row['Email']}</td>
              <td>{$row['Address']}</td>
            </tr>\n";
          }
      
          pg_close($db);
  }
        ?>
        </tbody>
        </table>
        </body>
        </html>