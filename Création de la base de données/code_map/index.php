<?php
  $db = mysqli_connect("localhost", "root", "", "hhh");
  $result = mysqli_query($db, "SELECT longitude,lattitude from position natural join etoile");
?>
<!DOCTYPE html>
<html>
<head>
<title>Map</title>
<link rel="stylesheet" href="index.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<svg width = "1500" height = "2000"  style="padding-right: 0px;padding-left: 29%;
          ">
<?php 
while ($row = mysqli_fetch_array($result)) {
                
                echo" <text  x = '".$row['longitude']."' y = '".$row['lattitude']."'   > *</text> ";
                
            }
            ?>
            </svg>
</body>
</html>