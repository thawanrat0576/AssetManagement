<!doctype html>
<html>
<head>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/stylesheet-compiled.css?<?php echo rand(0,999); ?>">
  </head>
<?php
    include "header.php";
    //echo "<div>".$index.php."</div>"; //Change only this part on every other page you will create
?>
<body style="background-color:floralwhite;">
<div style="height:295px;">
<div class="container">    
<div class="row">
  <div class="col-sm-4">
    <div class="panel panel-primary">
      <div class="panel-heading">ครุภัณฑ์ที่เพิ่มล่าสุด</div>
      <!--div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
      <div class="panel-footer"></div-->
    <div>
            <ul>
                <li>
                </li>
                <li>
                </li>
            </ul>
    </div>
    </div>
  </div>
  <div class="col-sm-4"> 
    <div class="panel panel-danger">
      <!--div class="panel-heading"></div-->
      <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
      <!--div class="panel-footer"></div-->
    </div>
  </div>
  <div class="col-sm-4"> 
    <div class="panel panel-success">
      <div class="panel-heading">ครุภัณฑ์ที่ตรวจนับล่าสุด</div>
      <div>
                <ul>
                    <li>
                    </li>
                    <li>
                    </li>
                </ul>
        </div>
      <!--div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
      <div class="panel-footer"></div-->
    </div>
  </div>
</div>
</div><br>
</div>
</body>
<?php

	include "footer.php"

?>

 <script type="text/javascript" src="lib/jquery/jquery-3.2.1.min.js"></script>
    <!-- <script type="text/javascript" src="lib/popper/umd/popper.min.js"></script> -->
    <!-- <script type="text/javascript" src="lib/bootstrap-4.0.0/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="lib/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="lib/bootstrap-validator/validator.min.js"></script>
    <script type="text/javascript" src="script/script.js?<?php echo rand(0,999); ?>"></script>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>	
</html>
