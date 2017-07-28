<html>
<head>
	<title>%TITLE%</title>
<!-- ðÏÓÌÅÄÎÑÑ ËÏÍÐÉÌÑÃÉÑ É ÓÖÁÔÙÊ CSS -->  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- äÏÐÏÌÎÅÎÉÅ Ë ÔÅÍÅ -->  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
<div><h2>Contact Form</h2></div>
<div style="color: #FF0000; font-size: 15px;"><strong>%ERRORS%</strong></div>




<form class="form-horizontal" style="width: 700px;" method="post">
<div class="form-group">
    <label for="nputFullName" class="col-sm-2 control-label">Full Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputFullName" name="fullName" placeholder="Full Name">
    </div>
  </div>
<div class="form-group">
    <label for="inputSubject" class="col-sm-2 control-label">Subject:</label>
    <div class="col-sm-10">
 <select class="form-control input" name="subject" >
		<option selected="selected">Make a choise</option>
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


<!-- ðÏÓÌÅÄÎÑÑ ËÏÍÐÉÌÑÃÉÑ É ÓÖÁÔÙÊ JavaScript -->  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
