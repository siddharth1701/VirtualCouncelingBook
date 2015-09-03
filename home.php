
<html>
<head>
<link rel="stylesheet" href="materialize/css/materialize.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	
<style>
.intro
{
    text-align: center;
    padding-top: 13%;
  padding-bottom: 15%;
    /*margin-bottom: 50px;*/
}

.intro h1
{
    font-weight: 900;
    text-transform: uppercase;
}

.intro h5
{
    text-transform: uppercase;
    background-color: #f5f5f5;
    padding: 10px;
    color: #333333;
    display: inline-block;
    font-size: 1.2rem;
}

.btn{
	float:right;
	margin-top: 10px;
	margin-right: 20px;
}

.modal{
	width:300px;
	height:300px;
  border-radius: 5px;
	background-image: url("pictures/loginbg.jpg");
	background-image: transparent;
	opacity: 0.2;
}

input[type=text]
{
font-size: 20px;
}

/*
.btn3d {
    transition:all .08s linear;
    position:relative;
    outline:medium none;
    -moz-outline-style:none;
    border:0px;
    margin-right:10px;
    margin-top:15px;
}
.btn3d:focus {
    outline:medium none;
    -moz-outline-style:none;
}
.btn3d:active {
    top:9px;
}
*/
.btn-primary {
    box-shadow:0 0 0 1px #428bca inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #357ebd, 0 8px 0 1px rgba(0,0,0,0.4), 0 8px 8px 1px rgba(0,0,0,0.5);
    background-color:#428bca;
}

</style>
</head>
<body>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<script type="text/javascript">
	 $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
   
    $('#modal1').closeModal();     
</script>
<nav>
<div class="nav-wrapper">
<a href="#" class="brand-logo">VCB</a>
  <!-- Modal Trigger -->
  <!--<a class="waves-effect waves-light btn modal-trigger" href="#modal1"> >Login</a>-->
  <a class="btn btn-danger btn-lg modal-trigger" href="#modal2">Faculty&nbsp;Login</a>

<div id="modal2" class="modal">
    <div class="modal-content">
    <h6>LOGIN FORM</h6>
    <!--<form name="login" method="post" action="">
    <input type="text" placeholder="username" name="username" required/><br>
    <input type="password" placeholder="password" name="password" required/><br>
 

      <button class="btn waves-effect waves-purple" name="facsubmit">Submit</button>
</form>
-->
<?php include 'facultylogin.php' ?>
</div>
</div>

  <a class="btn btn-danger btn-lg modal-trigger" href="#modal1">Student&nbsp;Login</a>
  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
    <h6>LOGIN FORM</h6>
    <?php include'studentlogin.php' ?>
    <!--<form name="login" method="post" action="">
    <input type="text" placeholder="username" name="username" required/><br>
    <input type="password" placeholder="password" name="password" required/><br>
 

      <button class="btn waves-effect waves-purple" name="submit">Submit</button>
      -->
      <!--<button class="btn btn-primary btn-lg btn3d" name="submit">Submit</button>-->

    </form>
    </div>
    </div>
  </div>
</nav>
<div class="intro deep-orange lighten-2 z-depth-1">
        <h1 class="grey-text text-lighten-5">VIRTUAL COUNSELLING BOOK</h1>
        <h5 clas="grey lighten-4 grey-text text-darken-1">Maintaining Student Records</h5>
    

	</div>



</body>
</html>