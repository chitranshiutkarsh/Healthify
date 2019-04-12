<?php
include ("database.php");
session_start();
error_reporting(0);
$_SESSION['name'];
$_SESSION['address'];
$_SESSION['email'];
?>
<html>
    <head><title>doctors</title>
        <link rel="stylesheet" type="text/css" href="doctor.css">

        </head>
        <body>
            <div class="row">
                <div class="column">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                <img src="" alt="text" name="img">
                </div>
                <div class="column">
                        <br>
                        <br>
                    <h3>
                      NAME-
                      <?php
                        echo $_SESSION['name'];
                     ?></h3>
                    <h3>
                      ADDRESS-
                      <?php
                      echo $_SESSION['address'];
                   ?>
                 </h3>
                    <h3>
                      EMAIL-
                      <?php
                      echo $_SESSION['email'];
                   ?></h3>
                </div>
                <div class="logout">
                  <div class="button">
                  <a href="logout.php">Logout</a>
                  </div>

                </div>

                  </div>

            </div>
            <div class="box">
              <h1>Available Days</h1>
                <div class="row1">
                        <div class="column1">
                          <h4>MONDAY</h4>
                        </div>
                        <div class="column1">
                          <h4>TUESDAY</h4>
                        </div>
                        <div class="column1">
                          <h4>WEDNESDAY</h4>
                        </div>
                        <div class="column1">
                            <h4>THURSDAY</h4>
                        </div>
                        <div class="column1">
                            <h4>FRIDAY</h4>
                            </div>
                        <div class="column1">
                            <h4>SATURDAY</h4>
                            </div>
                        <div class="column1">
                            <h4>SUNDAY</h4>
                            </div>
                    </div>

            </div>
        </body>
</html>
