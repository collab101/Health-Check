<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Health Check</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Health Check</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html#new">New User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html#update">Update Existing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html#view">View Record</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="bg-primary text-white">
      <div class="container text-center">
          <img src="icon.png" class="float-left" style="width:200px;height:200px;">
        <h1>Welcome to Health Check</h1>

        <p class="lead">Easiest way to provide doctors  with up-to-date  information about patients medical history.<br> concise data on the symptoms and prescribed medicines</p>
      </div>
    </header>

    <section id="new">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>New Entry</h2> <br>

             <form class="form-horizontal" action="new.php" method="POST">
               <fieldset>



               <!-- Text input-->
               <div class="form-group">
               <label class="col-md-12 control-label" for="textinput">Name</label>
               <div class="col-md-12">
               <input id="textinput" name="name" placeholder="your name here" class="form-control input-md" required="" type="text">

               </div>
               </div>

               <!-- Text input-->
               <div class="form-group">
               <label class="col-md-12 control-label" for="age">Age</label>
               <div class="col-md-12">
               <input id="age" name="age" placeholder="enter your age" class="form-control input-md" required="" type="text">

               </div>
               </div>

               <!-- Multiple Checkboxes -->
               <div class="form-group">
               <label class="col-md-12 control-label" for="gender">Gender</label>
               <div class="col-md-12">
               <div class="checkbox">
                 <label for="gender-0">
                   <input name="gender" id="gender-0" value="Male" type="checkbox">
                   Male
                 </label>
               </div>
               <div class="checkbox">
                 <label for="gender-1">
                   <input name="gender" id="gender-1" value="Female" type="checkbox">
                   Female
                 </label>
               </div>
               </div>
               </div>

               <!-- Text input-->
               <div class="form-group">
               <label class="col-md-12 control-label" for="id">ID</label>
               <div class="col-md-12">
               <input id="id" name="id" placeholder="aadhar ID" class="form-control input-md" required="" type="text">

               </div>
               </div>

               <!-- Text input-->
               <div class="form-group">
               <label class="col-md-12 control-label" for="symptom">Symptom</label>
               <div class="col-md-12">
               <input id="symptom" name="symptom" placeholder="symptom" class="form-control input-md" required="" type="text">

               </div>
               </div>

               <!-- Text input-->
               <div class="form-group">
               <label class="col-md-12 control-label" for="prescription">Prescription</label>
               <div class="col-md-12">
               <input id="prescription" name="prescription" placeholder="prescription" class="form-control input-md" type="text">

               </div>
               </div>
               <br><br>
                 <button type="submit" class="btn btn-primary">Submit</button>
               </fieldset>
             </form>

          </div>
        </div>
      </div>
    </section>

    <section id="update" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <br><br>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "health";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            }


            $id = $_POST["id"];
            $sm = $_POST["symptom"];
            $pr = $_POST["prescription"];

            $sql = "INSERT INTO `$id` VALUES ('$sm', '$pr' ); ";

            if ($conn->query($sql) === TRUE) {
                echo "<h1>"."Medical Record Updated !!"."</h1>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
            ?>
            <br><br>
            <a href="index.html#update" class="btn btn-info" role="button">Add Another</a>
            <br><br>


          </div>
        </div>
      </div>
    </section>

    <section id="view">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>View Record</h2>
            <br><br>
                <form class="form-horizontal" action="view.php#view" mehod="POST">
                  <fieldset>
                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-12 control-label" for="id">ID</label>
                    <div class="col-md-12">
                    <input id="id" name="id" placeholder="Aadhar ID" class="form-control input-md" required="" type="text">

                    </div>
                  </div>
                  <br><br>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  </fieldset>
                </form>
                <br><br><br><br>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Health Check 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>

  </body>

</html>
