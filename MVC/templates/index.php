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
      <input type="text" class="form-control" id="inputFullName" name="fullName" value="%FULLNAME%" placeholder="Full Name">
        <div style="color: #FF0000; font-size: 15px;"><strong>%ERR_NAME%</strong></div>
    </div>
  </div>
<div class="form-group">
    <label for="inputSubject" class="col-sm-2 control-label">Subject:</label>
    <div class="col-sm-10">
 <select class="form-control input" name="subject" >
		<option %SELECT_0% value="0">%THEM_0%</option>
		<option %SELECT_1% value="1">%THEM_1%</option>
		<option %SELECT_2% value="2" >%THEM_2%</option>
		<option %SELECT_3% value="3">%THEM_3%</option>
</select>
        <div style="color: #FF0000; font-size: 15px;"><strong>%ERR_SUBJECT%</strong></div>
  </div>
  </div>
  <div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" value="%EMAIL%" name="email" placeholder="Email">
        <div style="color: #FF0000; font-size: 15px;"><strong>%ERR_EMAIL%</strong></div>
    </div>
  </div>
  <div class="form-group">
    <label for="inputMessage" class="col-sm-2 control-label">Message:</label>
    <div class="col-sm-10">
    <textarea rows="10" cols="45" name="msg" placeholder="Message">%MSG%</textarea>
        <div style="color: #FF0000; font-size: 15px;"><strong>%ERR_MSG%</strong></div>
	</div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Submit</button>

        <div style="color: #449d44; font-size: 15px;"><strong>%SUCCES%</strong></div>

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
