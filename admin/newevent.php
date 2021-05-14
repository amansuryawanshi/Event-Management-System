<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Event</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        
   input{
		margin-top: 10px;}
		textarea{
			margin-top: 10px;
		}
    </style>
</head>
<body>
<?php include"header.php"; ?>
<h2 class="text-center mt-5">Add New Event</h2>
<div class="container col-md-8 mt-5 p-2 rounded" style="background-color: #DFE4E7;">
<form action="addevent.php" method="POST" class="form register-form " enctype="multipart/form-data" >
			<div class="form-group mt-2">
				<input type="text" class="form-control " name="event" placeholder="Event Name">
			</div>
			<div class="form-group mt-2">
                                        	  <label class="nt-2">Event Poster</label>

                                            <input type="file" class="form-control"  name="poster"  />
                                        </div>
			<div class="form-group mt-2">
				<input type="number" class="form-control" name="fee" placeholder="Fees">
			</div>
			<div class="form-group mt-2">
				<input type="date" class="form-control" name="date" placeholder="Fees">
			</div>
			<div class="form-group mt-2">
				<input type="text" class="form-control" name="venue" placeholder="Venue">
			</div>
            <div class="form-group mt-2">
				<input type="text" class="form-control" name="shortd" placeholder="Short one line desc">
			</div>
			<div class="form-group mt-2">
            <label >Event Description</label>
			<textarea name="description" id="editor"  class="form-control" placeholder="Event Description  (Upto 1000 words)"></textarea>
			</div>
			<input type="submit" class="btn btn-primary mt-2" name="submit">
		</form>
        </div>
        <?php include"footer.php"; ?>
        <script src="../ckeditor/ckeditor.js"></script>
<script>
CKEDITOR.replace('editor')
</script>
</body>
</html>