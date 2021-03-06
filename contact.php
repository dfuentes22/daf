<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Derry African Market</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Nothing+You+Could+Do">
  </head>
  <body>
    <nav role="navigation" class="navbar navbar-default">
      <div class="navbar-header">
        <button type="button" data-toggle="collapse" data-target="#navbar-inverse" aria-expanded="false" aria-controls="navbar" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="index.html" class="navbar-brand">Derry African Market</a>
      </div>
      <div id="navbar-inverse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html">Home</a></li>
          <li><a href="services.html">AfriTech</a></li>
          <li><a href="products.html">Products</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="faq.html">FAQ</a></li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="header col-md12 text-center">
          <h1>Get In Touch!</h1>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="service-title col-lg-12 text-center">
          <h2>Send Us a Message</h2>
          <hr class="primary">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 contact">
          <h3>Contact Details</h3>
          <p>1922 Derry St. Harrisburg, PA 17104</p>
          <p><i class="fa fa-phone"> 717) 608-9135</i></p>
          <p><i class="fa fa-envelope-o"> <a href="mailto:onekalulu@gmail.com">onekalulu@gmail.com</a></i></p>
          <p><i class="fa fa-clock-o"> Monday - Sunday: 9:00 AM to 9:00 PM</i></p>
        </div>
        <div class="col-md-8 form-box text-center">
          <div class="form-bottom">
            <form role="form" method="post" action="contact_process.php" class="registration-form">
              <div class="form-group">
                <label for="form-first-name" class="sr-only">First name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>" required>
                <?php echo "<p class='text-danger'>$errName</p>";?>
              </div>
              <div class="form-group">
                <label for="form-email" class="sr-only">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>" required>
                <?php echo "<p class='text-danger'>$errEmail</p>";?>
              </div>
              <div class="form-group">
                <label for="form-about-yourself" class="sr-only">About yourself</label>
                <textarea class="form-control" rows="4" name="message" required><?php echo htmlspecialchars($_POST['message']);?></textarea>
                <?php echo "<p class='text-danger'>$errMessage</p>";?>
              </div>
              <input id="submit" name="submit" type="submit" value="Send" class="btn">
            </form>
          </div>
        </div>
      </div><br><br>
    </div>
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="copyright col-md-12"> 
            <p>Copyright &copy Derry African Market 2016. Created by <a href="http://www.imdanielfuentes.com">Daniel Fuentes</a></p>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>
</html>