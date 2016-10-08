<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
<header>
	

</header>

<div class="container">
<div class="jumbotron">
    <h1>Roro's sexting service</h1>
	<p>better than tinder we GARENtee it</p>
  </div>


<div name>
	<form method="POST" action="store.php"> 
  <div class="form-group">
    <label for="exampleInputEmail1">Enter your name my good sir</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter name">
  </div>
  
  
  
  <div class="form-group">
    <label for="exampleTextarea">Message</label>
    <textarea class="form-control" placeholder="Write your message" name="message" rows="3"></textarea>
  </div>
 
	
  <button type="submit" class="btn btn-primary">Send your message</button>
</form>

</div>
<?php 
$file_content = file_get_contents('chatlog.txt');

 ?>

 <div  id="test" style="border:1px solid black; width: 350px; margin-left: 791px; height: 300px;">
	
<!-- <p>content</p> -->
</div>

<script>
 $(document).ready(function () {
    setInterval(function() {
        $.get("read.php", function (result) {
            $('#test').html(result);
        });
    }, 1);
});
</script>


</div>



</body>
</html>