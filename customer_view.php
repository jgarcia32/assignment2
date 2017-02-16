<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
              <li><a href="index.html">Home</a></li>
              <li class="active"><a href="#">View Customers</a></li>
              <li><a href="#">Account</a></li>
              <li><a href="#">Login</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"></a></li>

            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

        <table class="table table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Last/Company Name</th>
              <th>First Name</th>
              <th>Address</th>
              <th>City</th>
              <th>State</th>
              <th>Zip</th>
              <th>Email</th>
              <th>Phone</th>
            </tr>
          </thead>
          <tbody>
              <?php // query.php

                 //require_once 'login.php';

                 //login.php
                $hn = 'www.it354.com';
                $db = 'it354_students';
                $un = 'it354_students';
                $pw = 'steinway';

                $conn = new mysqli($hn, $un, $pw, $db);
                if ($conn->connect_error){
                  die("connection failed. " );
                }

                $query = "SELECT lastName, firstName, address, city,
                  state, zip, email, phone FROM customers";

                $result = $conn->query($query);

                if (!$result) die($conn->error);

                $rows = $result->num_rows;

                for ($j = 0 ; $j < $rows ; ++$j)
                {
                  $result->data_seek($j);
                  $row = $result->fetch_array(MYSQLI_ASSOC);

                  echo 'First name: ' . $row['firstName'] . '<br>';
                  echo 'Last/Company Name: ' . $row['lastName'] . '<br>';
                	echo 'Address: ' . $row['address'] . '<br>';
                  echo 'City: ' . $row['city'] . '<br>';
                	echo 'State: ' .  $row['state'] . '<br>';
                	echo 'Zip: ' . $row['zip'] . '<br>';
                	echo 'Email: ' . $row['email'] . '<br>';
                	echo 'Phone: ' . $row['phone'] . '<br><br>';
                }

                $result->close();
                $conn->close();
            ?>
          </tbody>
        </table>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
