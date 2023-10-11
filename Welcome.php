<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$user_name = $_REQUEST['fname'];
$password = $_REQUEST['pw'];

echo "Hello " . $user_name . "<br>" ." Your Password is " .$password;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <br><br><br> 

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    First Name: <input type="text" name="fname"> <br> <br>
    Password: <input type="password" name="pw">
    <button type="submit">login</button>
    <br> <br> <br>

    
<br><br><br> 
</body>
</html>
