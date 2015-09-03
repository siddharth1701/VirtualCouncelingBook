<?php

      $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
        echo "Connections are made successfully::";
      $selected = mysql_select_db("login", $connector)
        or die("Unable to connect");
       $roll = $_POST['rollnumber'];
      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM profile WHERE Rollno = .$roll");
      
      

?>
      <table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>NAME</th>
          <th>ROLLNUMBER</th>
          
        </tr>
      </thead>
      <tbody>
        <?php
       if($result === FALSE){
      	die(mysql_error());
      }
    
          while( $row = mysql_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['Name']}</td>
              <td>{$row['Rollno']}</td>
              
            </tr>\n";
          }
      
        ?>
      </tbody>
    </table>
     <?php mysql_close($connector); ?>