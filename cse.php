<html>
<head>
<link rel="stylesheet" href="materialize/css/materialize.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

	<link rel="stylesheet" type="text/css" href="TTAS.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<script type="text/javascript" 
   src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

   <script src="jquery.plug-in.js" type="text/javascript">
   </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="js/Chart.min.js"></script>
<style type="text/css">
  .nav-wrapper{
    font-size: 20px;
    font-family: sans-serif;
    font-style: italic;
    text-align: center;
  }

  input[type="text"]
{
    font-size:20px;
    height: 40px;
}
  
</style>
</head>
<body>
<script type="text/javascript">
  $('#submit').submit(function() { // catch the form's submit event
    $.ajax({ // create an AJAX call...
        data: $(this).serialize(), // get the form data
        type: $(this).attr('method'), // GET or POST
        url: $(this).attr('action'), // the file to call
        success: function(response) { // on success..
            $('#display').html(response); // update the DIV
        }
    });
    return false; // cancel original event to prevent form submitting
});

</script>


<nav>
<div class="nav-wrapper">

<form action="" method="post"  name="myform">
Enter Your Rollnumber&nbsp;&nbsp;&nbsp;<input type="text" name="roll" class="input"  style="width:150px">    
&nbsp; 
<button class="btn waves-effect waves-purple" name="submit">Submit</button>
</form>
</div>
</nav>


<?php
session_start();
if ((isset($_POST['roll']))&& !empty($_POST['roll'])) {

$conn = mysql_connect("localhost","root","");
mysql_select_db("login",$conn);
  
      $Roll = $_POST['roll'];
      
$sql = "SELECT * FROM profile WHERE Rollno ='$Roll'";
$result = mysql_query($sql);
   
 
 
  
       

  while($row = mysql_fetch_assoc($result))
  {

  echo "<div class=row>";
echo "<div class=col-xs-2 col-md-3>";
echo "</div>";
             echo "<div class=col-xs-6 col-md-3>";
   echo "<div class=image>";
      echo "<img src=background.png class=img-thumbnail height=600>";
      //echo"</a>";
            // echo "<div class=jumbotron>";
      echo "<div class=imag>";

      echo "<img class=profile-image width=150 height=150 src=".$row['pic'].">";
           echo "</div>";
           
           echo "<div class=name>";
           
           echo "Student&nbsp;Name:&nbsp;&nbsp;".$row['Name']."";
           
            echo "</div>";
            echo"<br>";
            echo "<div class=rollno>";
            echo "Roll&nbsp;Number:&nbsp; &nbsp;".$row['Rollno']."";
            echo "</div>";
            echo "<br>";
            echo "<div class=pea>";
            echo "Phone&nbsp;Number:&nbsp;&nbsp;".$row['Phoneno']."<br>";
            echo"<br>";
            echo "Email&nbsp;Id:&nbsp;&nbsp;".$row['Emailid']."<br>";
            echo "<br>";
            echo "Address:&nbsp;&nbsp;".$row['Address']."<br>";
            echo "</div>";
            echo "</img>";
 echo"</div>";
  echo "</div>";
 echo "</div>";
 



   }              
                 
              
      
 mysql_close($conn);



  }
  
   ?>
 

     
</div>



<!--<img src="button.png" width="100" height="100">-->

<div id="display"></div>
</body>
</html>