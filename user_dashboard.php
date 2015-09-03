<?php
session_start(); 
?>

<html>
<head>
<title>User Login</title>
<link rel="import"  href="bootstrapmaterialdesign\dist\css\material.min.css">
<link rel="import" href="components/bower_components/polymer/polymer.html">
<link rel="import" href="components/bower_components/paper-dropdown-menu/paper-dropdown-menu.html">
<link rel="import" href="components/bower_components/paper-shadow/paper-shadow.html">
<link rel="import"  href="components/bower_components/paper-dropdown/paper-dropdown.html">
<link rel="import" href="components/bower_components/webcomponentsjs/webcomponents.min.js">
<link rel="import" href="components/bower_components/paper-item/paper-item.html">
<link rel="import" href="components/bower_components/core-menu/core-menu.html">
<link rel="stylesheet" type="text/css" href="TTAS.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<link rel="stylesheet" href="materialize/css/materialize.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="path-to-file/jquery.center.js"></script>
<script type="text/javascript" src="path-to-file/jquery.msg.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link  href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
   <script src="jquery.plug-in.js"></script>
   <script src="jquery.js"></script>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 



  <style type="text/css">

 
 


.intro
{
    text-align: center;
   min-height:auto;
    padding-top: 13%;
  padding-bottom: 29%;
  height: 100%;
 
    
}

.sample{
  	
  	display: inline-block;
  	float: left;
  	padding: 10px;
  	margin-left: 100px;
    
  }
  .year{
  	display: inline-block;
  	float: left;
  	padding: 10px;
  	margin-left: 20px;
  }
  .form-control{
  	/*display: inline-block;*/
  	float: left;
  	position: static;
  	width:100px;
  }
  .btn
  {
  	margin: 10px;

  }
  
  h3{
  	font-size: 10px;
  }
  .displayroll{
    font-size: 20px;
    font-family: sans-serif;
    font-style: italic;
    text-align: center;

}
 .displayroll .nav-wrapper {
    text-align: center;
    font-size: 20px;
    color: blue;
  }

  input[type="text"]
{
    font-size:20px;
    height: 20px;
}

.materialboxed
{
	border-radius: 80px;
	margin-left: 560px;
	margin-top: 20px;
}
hr{
	width: 500px;
}

div#chart_div {
	margin-top: -500px;
	margin-left: 920px;
    /*-ms-transform: rotate(270deg); 
    -webkit-transform: rotate(270deg); 
    transform: rotate(270deg);  */
    overflow: hidden;
}

#paper-shadow
{
	margin-left: -120px;
 /* background-color: #1bdbb4 ; */
 background-color: #4295c6;

}

.table-bordered
{
font-size: 20px;
width: 700px;
height: 100px;
background-color: #4295c6;
}
  </style>


  
   
<script type="text/javascript">

function Validate()
{
        var branch = document.getElementById('bran').value;
	    var year = document.getElementById('yer').value;
	    var sem = document.getElementById('sme').value;
	    var section = document.getElementById('sec').value;
	if(branch==0 || year==5|| sem==10 || section==13){
		alert("Please select branch,year,semester&section");
	}
	else if(branch=="cse" && year=="four" && sem=="semfirst" && section=="secfour"){
                  $(document).ready(function(){
                  	$("#selectsubmit").click(function(){
                  		$("#displayrol").show("explode");

                  	});

                  }) ; 

     }  
     else
     {
     	alert("under construction");
     window.location.reload(true);
     	 $(document).ready(function(){
                  	$('#selectsubmit').click(function(){
                  		$('#displayrol').hide();

                  	});

                  }) ;

     }            
}
		         
	  

 $(document).ready(function(){
    $('.dropdown-button').dropdown();
  });


 $(document).ready(function(){
                  	$('#submit').click(function(){
                  		$('#display').show();

                  	});

                 }) ;




   </script>

</head>
<body>


                               <!--Div that will hold the chart-->
                             
  
<nav>
<div class="nav-wrapper ">

<div class="sample">

  <select class="form-control" name="branch" id="bran">
    <option value="0">Branch</option>
	<option value="cse" >cse</option>
	<option value="ece" >ece</option>
	<option value="mech" >mech</option>
	<option value="civil" >civil</option>
  </select>

</div>
<div class="year">
  <select class="form-control" name="year" id="yer">
    <option value="5">Year</option>
	<option value="first">1</option>
	<option value="second">2</option>
	<option value="third">3</option>
	<option value="four">4</option>

  </select>
</div>

<div class="year">
  <select class="form-control" name="sem" id="sme">
    <option value="10">Sem</option>
	<option value="semfirst">1</option>
	<option value="semsecond">2</option>
  </select>
</div>
<div class="year">
  <select class="form-control" name="section" id="sec">
    <option value="13">Section</option>
	<option value="secfirst">1</option>
	<option value="secsecond">2</option>
	<option value="secthird">3</option>
	<option value="secfour">4</option>
	<option value="secfive">5</option>
	<option value="secsix">6</option>
	<option value="secseven">7</option>
  </select>
</div>
 
<button type="button" class="btn waves-light" name="selectsubmit" id="selectsubmit" onclick="Validate()">SUBMIT</button>

 <a class="btn btn-primary btn-raised" href="logout.php" style="float:right"><img src="pictures/logouticon.png">Logout</a>
 
</div>
</nav>


<div id="displayrol" style="display:none">
     <nav>
     <div class="nav-wrapper" style="bg-color:deep-orange">
     <form action="" method="post"  name="myform">
Enter Your Rollnumber&nbsp;&nbsp;&nbsp;<input type="text" name="roll" class="input"  style="width:150px">    
&nbsp; 
<button class="btn waves-effect waves-purple" name="submit" id="submit">Submit</button>
</form>
     </div>
      </nav>
      </div>
      
      <div class="intro deep-orange lighten-2 z-depth-1">;
     <!--<div class="intro deep-purple lighten-1 z-depth-1">;-->
	<div class="display" style="width:700px;margin-left:200px;margin-top:-90px">
	     <?php
	
               if ((isset($_POST['roll']))&& !empty($_POST['roll'])) {

                 $conn = mysql_connect("localhost","root","");
                 mysql_select_db("login",$conn);
  
                  $Roll = $_POST['roll'];
      
                    $sql = "SELECT * FROM profile WHERE Rollno ='$Roll'";
                    $result = mysql_query($sql);


                      $rows = array();
                    //flag is not needed
                     $flag = true;
                      $table = array();
                      $table['cols'] = array(

                                // Labels for your chart, these represent the column titles
                                   // Note that one column is in "string" format and another one is in "number" format as pie chart only required "numbers" for calculating percentage and string will be used for column title
    
                                 array('label' => 'Name', 'type' => 'string'),
                                  array('label' => '1stsem', 'type' => 'number'),
                                  array('label' => '2yr1stsem', 'type' => 'number'),
                                  array('label' => '2yr2sem', 'type' => 'number'),
                                  array('label' => '3yr1sem', 'type' => 'number')

                                    );

                                     $rows = array();



   
                                        while($row = mysql_fetch_assoc($result))
                                           {
                                          echo "<paper-shadow id=paper-shadow z=5  >";
  
                                           

                                               echo "<div class=row>";
                                                          echo "<div class=col-xs-1 col-md-2>";
                                                          echo "</div>";
                                               echo "<div class=col-xs-6 col-md-4>";
                                                 
                                                 


                                                 echo "<div class=imag>";
                                                  // echo"<p style=font-size:40;margin-top:50px;color:white>Profile Details</p>";
                                                  echo "<img class=materialboxed width=150 height=150 src=".$row['pic']. ">";
                                                  echo "</div>";
                                                 
                                             
                                                 echo "<div class=name style=font-size:25px;color:white>";
           
                                                  echo"Student&nbsp;Name:&nbsp;&nbsp;".$row['Name']."";
           
                                                  echo "</div>";
                                                   echo"<hr>";
                                                   echo "<div class=pea style=font-size:25px;color:white>";
                                                   echo "Roll&nbsp;Number:&nbsp; &nbsp;".$row['Rollno']."<br>";
                                                     
                                                    echo "<hr>";
                                                    
                                                    echo "Phone&nbsp;Number:&nbsp;&nbsp;".$row['Phoneno']."<br>";
                                                    echo"<hr>";
                                                    echo "Email&nbsp;Id:&nbsp;&nbsp;".$row['Emailid']."<br>";
                                                    echo "<hr>";
                                                    echo "Address:&nbsp;&nbsp;".$row['Address']."<br>";
                                                     echo "</div>";
                                                    echo "<hr>";
                                                       
                                                

                                                               
                         echo "<table class=table-bordered>";
                         echo"<caption style=font-size:30px;color:white>Semester&nbsp;wise&nbsp;attendence%</caption>";
                         echo "<tr>";
                         echo "<th>1stsem</th>";
                         echo "<th>2yr1stsem</th>";
                         echo "<th>2yr2ndsem</th>";
                         echo "<th>3yr1stsem</th>";
                         echo "</tr>";
                         echo "<tr>";
                         echo "<td>".$row['1stsematten']."</td>";
                            echo "<td>".$row['2yr1sematten']."</td>";
                           echo "<td>".$row['2yr2sematten']."</td>";
                            echo "<td>".$row['3yr1sematten']."</td>";
                               echo"</tr>";
                               echo"</table>";

                                echo"<br>";

                                                        echo "</div>";
                                                       echo "</div>";
                                                echo "</paper-shadow>";

                                                  $temp = array();
   

                                             // Values of each slice
                                          $temp[] = array('v' => $row['Name'] );

                                          $temp[] = array('v' => (int) $row['1stsem']);
                                          $temp[] = array('v' => (int) $row['2yr1stsem']);
                                          $temp[] = array('v' => (int) $row['2yr2sem']); 
                                          $temp[] = array('v' => (int) $row['3yr1sem']); 
                                          $rows[] = array('c' => $temp);


                                         }              
   
                                          $table['rows'] = $rows;

                                           $jsonTable = json_encode($table);
                                           //echo $jsonTable;
                      
                          
                                              mysql_close($conn);

                                               }
  
                                               ?>
  </div>
          

        </div><!--intro background div-->                                      


                                    <!--Load the AJAX API-->
                          <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                          <script type="text/javascript" src="jquery-1.6.2.min.js"></script>
                           <script type="text/javascript">

                                // Load the Visualization API and the piechart package.
                            google.load('visualization', '1', {'packages':['corechart']});

                            // Set a callback to run when the Google Visualization API is loaded.
                           google.setOnLoadCallback(drawChart);

                            function drawChart() {



                                 // Create our data table out of JSON data loaded from server.
                             var data = new google.visualization.DataTable('<?php echo $jsonTable; ?>');

                              var options = {
                                 title: 'My values',
                                   is3D: 'true',
                                   width: 800,
                                  height: 600,
                                 
                                 vAxis: {title: "percentages"},
                                 hAxis: {title: "semester"},
                                seriesType:'bars',
                               slantedTextAngle: 90
                                  
                                 

                                     };
                                     

                                           // Instantiate and draw our chart, passing in some options.
                                   var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
                                chart.draw(data, {width: 400, height: 450, seriesType:'bars',});
                               }

                                </script>
    

   <div id="chart_div"></div>
   
<div class="intro deep-orange lighten-2 z-depth-1" >;

</div>

</body>
</html>