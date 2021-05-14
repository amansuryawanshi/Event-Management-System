<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="./css/animate.min.css">
<link rel="stylesheet" href="./css/bread.css">
<style>
.fa{
    color: darkorange;
}
hr.new{
  border-top: 1px dotted red;
}
</style>
</head>
<body>
<?php include'./header.php';
?>


<?php include'./dbcon.php';

foreach($query as $q){ ?>

<header class="page-banner-area gallery-page-banner" style="background-color:black ; background-image: url(./admin/<?php echo $q['poster'] ; ?>); background-size: 100% 100%; height:300px;  ">
      <div class="section-overlay d-flex">
          <div class="container">
              <div class="header-caption text-left">
                  <h1 class="header-caption-heading text-capitalize wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                      <?php
                       echo $q['event_name'];
                       ?>
                    </h1>
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                          <li class="breadcrumb-item text-capitalize"><a style="text-decoration: none;" href="index.php">Home</a></li>
                          <li class="breadcrumb-item active text-capitalize" aria-current="page">
                              <?php
                                echo $q['event_name'];
                                ?>
                            </li>
                      </ol>
                  </nav>
              </div>
          </div>
      </div>
    </header>
    <div class="container">
    <div class="col-lg-12 card-event  align-self-center">
        <h1 class="mt-4"><?php echo $q['event_name']; ?></h1>
        
        
          <p>Posted on <?php echo $q['posted_on'] ?></p>
          <hr class="new">
          <img class="card-img-top rounded mx-auto d-block " style="max-width: 600px;" src="./admin/<?php echo $q['poster'] ; ?>" alt="Event Poster">
<br>
<div class="row">
<h3 class="col-md-2 text-center  m-2"><i class="fa fa-rupee-sign"></i> Fee: <?php echo $q['fee'] ?></h4>
<h3 class="col-md-3 text-center  m-2"><i class="fa fa-calendar-alt"></i>    Date: <?php echo $q['event_date'] ?></h4>
<h3 class="col-md-6 text-center  m-2"><i class="fa fa-calendar-alt"></i>    Venue: <?php echo $q['venue'] ?></h4>
</div>
<p class=" m-2 mt-3 text-center"> <?php echo $q['description']; ?></p>
<div class="text-center">
<a href="register_event.php" class="btn btn-outline-success m-2 col-md-3 col-sm-12">Register</a>
</div>
 <?php }?>

   </div>
</div>

<?php include"footer.php";?>


   <script src="./js/typed.min.js"></script>
   <script>
        var typed = new Typed('#typed', {
            stringsElement: '#typed-strings',
            typeSpeed: 100,
            backSpeed: 100,
            loop: true,
            smartBackspace: true,
        });

    </script>
</body>
</html>