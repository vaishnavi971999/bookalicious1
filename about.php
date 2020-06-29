<?php
include("connect.php");
$sql = "SELECT `categoryname` FROM `category`";
$result = mysqli_query($link,$sql);
$num = mysqli_num_rows($result);
$sql2 = "SELECT `categoryname` FROM `category`";
$result2 = mysqli_query($link,$sql2);
$num2 = mysqli_num_rows($result2);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/starter-template/">

    <title>Bookalicious</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand em-text" href="#">Bookalicious</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <!--dropdown bar-->
            <li>
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category <span class="caret"></span></a>
	            <ul class="dropdown-menu">
	            <?php
	          if($num>0){
	            while($category= mysqli_fetch_array($result))
	            {
	            ?> 
	            <li class="list-group-item"><a href="#">
	              <?php echo $category['categoryname']; ?>
	            </a> 
	            </li>
	            <?php
	            }
	          }
	          ?>
	            </ul>
	          </li>
            <li><a href="contact.php">Contact</a></li>
                <!--search bar-->
              </ul>       
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">
              <spam class="glyphicon glyphicon-search"></spam>
              </button>
            </form>
          
            <ul class="nav navbar-nav navbar-right">
              <li><a class="glyphicon glyphicon-shopping-cart" href="#"></a></li>
              <li><a class="glyphicon glyphicon-user" href="index.php"></a></li>
            </ul>
          

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="jumbotron">
      <div class="container">
        
      
        <h1 style="color:#582273; text-shadow: 2px 2px 5px red;">Welcome to the world of books!</h1><br>
        <p class="about" style="text-align:center; color:#2f3542">“Think before you speak. Read before you think.” – Fran Lebowitz</p><br><br>
        <p class="about" style="text-align:center; color:#2f3542">Ecsaping the normalcy, entering the world beyond reality and experiencing a whole new dimension of life is the soul purpose of reading books.</p>
        <p class="about" style="text-align:center; color:#2f3542;">Books hold the treasure of stories, emotions, inspiration and a lot more fun than that can be described in  words. Reading books is not just an action, it is an experience incomprehencible.</p>
        <p class="about" style="text-align:center; color:#2f3542;">Aiming at building a good community of avid readers,we present to you <span style="color:blue">"BOOKALICIOUS"</span> </p>
        <p class="about" style="text-align:center; color:#2f3542;">This is a website meant for buying and selling of new or used books. A wide range of books can be found here. All genre of books apart from academics related once are found here.</p>
        <p class="about" style="text-align:center; color:#2f3542;">This website is often known as the "Paradise of bookoholics". We aim at building a network of book lovers and help them get their hands on books of thier choice either through reviews of others or by personal choice.</p>
        <p class="about" style="text-align:center; color:#2f3542">This website not get gets you books of your choice, but also helps you sell your books at a decent price.</p>
        <p class="about" style="text-align:center; color:#2f3542">What are you waiting for...........</p>
        <p class="about" style="text-align:center; color:#2f3542">Go explore the world of books! Happy Reading!</p>  
    </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
       
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>




"<option value='$cat_name'> $cat_name </option>"