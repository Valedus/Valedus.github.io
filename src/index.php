<?php
  // Message Vars
  $msg = '';
  $msgClass = '';
  //  Check For Submit
  if(filter_has_var(INPUT_POST, 'submit')){
    // Get Form Data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Check Required Fields
    if(!empty($email) && !empty($name) && !empty($message)) {
      // Passed
      // Check email
      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        // Failed
        $msg = 'Please use a valid email';
        $msgClass = 'alert-danger';
      }
      else {
        // Passed
        // Recipient Email
        $toEmail = 'valedus97@gmail.com';
        $subject = 'New Job request from ' . $name;
        $body = '<p>'.$message.'</p>';

        // Email Headers
        $headers = "MIME-Version: 1.0" ."\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

        // Additional Headers
        $headers .= "From: " .$name. "<".$email.">" ."\r\n";

        if(mail($toEmail, $subject, $body, $headers)) {
          // Email Sent
          $msg = 'Your email has been sent. I will contact you soon :)';
          $msgClass = 'alert-success';
        }
        else {
          $msg = 'Your Email has not been sent';
          $msgClass = 'alert-danger';
        }
      }
    }
    else {
      // Failed
      $msg = 'Please fill in all fields';
      $msgClass = 'alert-danger';
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/lightbox.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <header id="main-header">
      <div class="row no-gutters">
        <div class="col-lg-4 col-md-5">
          <img src="img/person1.jpg">
        </div>
        <div class="col-lg-8 col-md-7">
          <div class="d-flex flex-column">
            <div class="p-5 bg-dark text-white">
              <div class="name d-flex flex-row justify-content-between align-items-center">
                <h1 class="display-4">Vladislav Yudashkin</h1>
                <div><i class="fa fa-facebook fa-2x"></i></div>
              </div>
            </div>

            <div class="p-4 bg-black">
              Aspiring Front End Developer
            </div>

            <div>
              <div class="d-flex flex-row text-white align-item-stretch text-center">
                <div class="port-item p-4 bg-primary" data-toggle="collapse" data-target="#home" >
                  <i class="fa fa-home d-block"></i> Home
                </div>

                <div data-toggle="collapse" data-target="#portfolio" class="port-item p-4 bg-warning">
                  <i class="fa fa-folder-open d-block"></i>Portfolio
                </div>
                <div data-toggle="collapse" data-target="#contact" class="port-item p-4 bg-danger">
                  <i class="fa fa-envelope d-block"></i> Contact
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- HOME -->
    <div id="home" class="collapse show">
      <div class="card card-body bg-primary text-white py-5">
        <h2>Welcome</h2>
        <p class="lead">I am an aspiring web-developer and I'm looking forward to learn more and exceed my limits. I believe that everybody deserves the best and should have it. My purpose is to make the best available to everyone.</p>
      </div>

      <div class="card card-body py-5">
        <h3>My Skills</h3>
        <p>I am rapidly obtaining new skills and train myself to not just know them but to use them on a highest level possible.</p>
        <hr>
        <h4>HTML</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width:100%"></div>
        </div>
        <h4>CSS</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width:100%"></div>
        </div>
        <h4>BootStrap 4</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width:100%"></div>
        </div>
        <h4>JavaScript</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width:90%"></div>
        </div>
        <h4>WordPress</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width:80%"></div>
        </div>
        <h4>C++</h4>
        <div class="progress mb-3">
          <div class="progress-bar bg-success" style="width:75%"></div>
        </div>
      </div>
    </div>

    <!-- portfolio -->
    <div id="portfolio" class="collapse">
      <div class="card card-body bg-warning py-5">
        <h3>My Portfolio</h3>
        <p>I did not work in any companies, so I decided to find sites that I liked and build them from scratch.</p>
      </div>
      <div class="card card-body py-5">
        <h3 class="mb-5">What have I built</h3>
        <div class="row ">
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <a href="img/mizuxe.jpg" data-lightbox="image-1">
                  <img src="img/mizuxe.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <a href="img/glozzom.jpg" data-lightbox="image-1">
                  <img src="img/glozzom.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <a href="img/looplab.jpg" data-lightbox="image-1">
                  <img src="img/looplab.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <a href="img/blogen.jpg" data-lightbox="image-1">
                  <img src="img/blogen.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CONTACT -->
    <div id="contact" class="collapse">
      <div class="card card-body bg-danger py-5 text-white">
        <h3>Contact</h3>
        <p>You can contact me via email of send me PM to my <a href="https://www.facebook.com/profile.php?id=100003151111075">Facebook Page</a></p>
      </div>
      <div class="card card-body py-5">
        <h3>Get in touch</h3>
        <p>Make sure to fill all fields so I will read your message faster</p>
        <?php if($msg != ''): ?>
          <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
        <form id="contact-form" method="post" action="js/contact.php" role="form">
          <div class="form-group">
            <div class="input-group input-group-lg">
              <span class="input-group-addon bg-danger text-white">
                <i class="fa fa-user"></i>
              </span>
              <input type="text" name="name" class="form-control bg-dark text-white" placeholder="Name"
              value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group input-group-lg">
              <span class="input-group-addon bg-danger text-white">
                <i class="fa fa-envelope"></i>
              </span>
              <input type="email" name="email" class="form-control bg-dark text-white" placeholder="Email"
              value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group input-group-lg">
              <span class="input-group-addon bg-danger text-white">
                <i class="fa fa-pencil"></i>
              </span>
              <textarea type="text" name="message" class="form-control bg-dark text-white" rows="5" placeholder="Message"
                value="<?php echo isset($_POST['message']) ? $message : ''; ?>"
              ></textarea>
            </div>
          </div>
          <input type="submit" value="Send Message" class="btn btn-block btn-lg btn-danger">
        </form>
      </div>
    </div>

    <!-- FOOTER -->
    <footer id="main-footer" class="p-5 bg-dark text-white">
      <div class="row">
        <div class="col-md-6">
          <a href="docs/CV.docx" class="btn btn-outline-light" download><i class="fa fa-cloud">Download Resume</i></a>
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    $('.port-item').click(function() {
      $('.collapse').collapse('hide');
    });
  </script>
  <script src="js/lightbox.js"></script>
</body>
</html>
