<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>%TITLE%</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <!--[endif]-->
</head>
<body>
<nav class="navbar navbar-inverse ">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand " href="#">Task 7 - Contact Form</a>
        </div>
    </div>
</nav>
<div><h2>Contact Form</h2></div>
<div style="color: #FF0000; font-size: 15px;"><strong>%ERRORS%</strong></div>




<form class="form-horizontal" style="width: 700px;" method="post">
<div class="form-group">
    <label for="inputFullName" class="col-sm-2 control-label">Full Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputFullName" name="fullName" value="" placeholder="Full Name">
    </div>
  </div>
<div class="form-group">
    <label for="inputSubject" class="col-sm-2 control-label">Subject:</label>
    <div class="col-sm-10">
 <select class="form-control input" name="subject" >
		<option selected="selected" value="makeChoise">Make a choise</option>
		<option value="funny">Funny theme</option>
		<option value="notFunny" >Not funny theme</option>
		<option value="vvFunny">Very Very funny theme</option>

</select>
  </div>
  </div>
  <div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputMessage" class="col-sm-2 control-label">Message:</label>
    <div class="col-sm-10">
    <textarea rows="10" cols="45" name="message" placeholder="Message"></textarea>
	</div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>



<footer class="modal-footer navbar-inverse">
    <div class="container">
        <a class="navbar-brand" style="float: right" href="#">Task 7 - end</a>
    </div>
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- ðÏÓÌÅÄÎÑÑ ËÏÍÐÉÌÑÃÉÑ É ÓÖÁÔÙÊ JavaScript -->  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
