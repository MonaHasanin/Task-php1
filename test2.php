<?php
declare(strict_types=1);

function sum4(float $x, int $y = 1)
{
    echo $x + $y;
}

sum4(11.5, 20);

  echo "<br>";
   echo "<br>";

function days()
{
  $arr3=array('sat','sun', 'Mon');
  foreach($arr3 as $value){
    echo $value . "<br>";
  }
}
days();
   echo "<br>";
   echo "<br>";

   function sum8(float $x, int $y = 1):float
{
    $result= $x + $y;
    return $result;
}
$func_res= sum8(11.5, 20);
echo $func_res;

  echo "<br>";
  echo "<br>";

   function greeting1(string $name){
    echo "Hello $name<br>";
   }
   greeting1('Ahmed');


   echo "<br>";
   echo "<br>";
 
    function greeting3(string $name){
     return "Hello $name<br>";
    }
   $greet_func = greeting3('Shaimaa');
 echo $greet_func;
 
   echo "<br>";
   echo "<br>";


 $fullname = "Mona Galal";
 $age = "29";
 $img = "image.jpg";

 $result = '';
 if ($age < 30){
  $result = "you are less than 30";
 }elseif ($age == 30) {
$result = " you are equal 30"; 
}else {
  $result = " you are greater than 30";
 }
 echo "$fullname is $age years old and she has a photo of herself.";
 echo "<br>";
 echo "<br>";
 echo "<br>";

 $favcolor = "blue";
 switch($favcolor){
  case 'blue': echo "Your Favorite color is blue"; break;
  case 'red': echo "Your Favorite color is red"; break;
  case 'green': echo "Your Favorite color is green"; break;

  default: echo "No color selected";
 }
 echo "<br>";
  echo "<br>";

 #البديل لحالة سويتش اف بس مختصرة أكتر والبريك لو الحالة تمام فتوقف
 if($favcolor=="green"){echo "Your Favorite color is green";}
 elseif($favcolor=="red"){echo"Your Favorite color is red";}
 elseif($favcolor=="blue"){echo "Your Favorite color is blue";}
 else echo "No Color Selected";
 echo "<br>";
 echo "<br>";

 #الحالة التالتة البديلة هي while
  $number=1;
  while($number<=10){
  echo $number;
  $number++; //$number = $number+1
 }
 echo "<br>";
 #تجربة2 .= بتخلي كل رقم في سطر لوحده
 $number=1;
 $str = "";
 while($number<=10){
  $str .= $number . "<br>";
  $number++; //$number = $number+1
 }
 echo "<br>";
 //
 $number=1;
 while($number<=10){
 echo $number."<br>";
 $number++; //$number = $number+1
}
echo "<br>";

#حالة do - while
  $number=0;
 $str2 = "";
do{
  $str2 .= $number . "<br>";
  $number+= 10; //$number = $number+1
 } while ($number <= 10);

 echo "<br>";
 //حالة أخيرة مختصرة وهي ال for
 $str3 = "";
 for($number=0; $number<=10; $number++){
  $str3 .= $number . "<br>";
 }
 //حالة  مختصرة وهي ال foreach علشان تجيب محتوى الarray وهي نوع من أنواع الloop
 $arr = array("one", "two", "three", "four");
 foreach( $arr as $value){
  echo $value . "<br>";
 }

 echo "<br>";
 
 // لو عاوزيين نعمل loop تطبع لحد5 وهي الأرقام فيها ل10 كدة: وbreak هتفضل تطبع لحد ما توصل للرقم وبعدها توقف طباعه خالص
 $str4 = "";
 for ($number = 1; $number <=10; $number++){
  $str4 .= $number . "<br>";
  if ($number == 5){
    break; //terminate and stop loop
  }
 }
 echo $str4;
 echo "<br>";

  // continue هتعدي الرقم والخطوة دي وتطبع الي بعده
  $str4 = "";
  for ($number = 1; $number <=10; $number++){
   if ($number == 5){
    continue; //skip iteration
   }
   $str4 .= $number . "<br>";
  }
  echo $str4;
  echo "<br>";
  echo "<br>";
  echo "<br>";

  function greeting($name) 
  {
    echo "Hello $name<br>"; //localhost عادي مش لازم الشكل الي تحت طريقة ال.
    echo "Hello" .$name."<br>";
  }
  $user = "Nada";
  greeting($user);
  
  $user2 = "Ahmed";
  greeting($user2);
  echo "<br>";
  echo "<br>";
  
  function greetings($name='Ali') //name-->optional parameter
  {
    echo "Hello $name<br>"; //localhost عادي مش لازم الشكل الي تحت طريقة ال.
   }
 // $user = "Nada";
  greetings();
   
  echo "<br>";
  echo "<br>";

  function sum1($x, $y = 1)
  {
    echo $x + $y;
  }
   sum1(10);
 // sum1(10,20);

 echo "<br>";
   echo "<br>";


  function sum($x, $y)
  {
    $result = $x + $y;
    echo $result;
  }
  $num1=10;
  $num2=36;
  sum($num1,$num2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <img src="<?php echo $img; ?>" alt="image" >;
  <h2>Alerts</h2>
  <div class="alert alert-success">
    <strong>Success!</strong> <?php echo $fullname; ?>.
  </div>
  <div class="alert alert-info">
    <strong>age!</strong> <?php echo $age; ?>.
  </div>
  <div class="alert alert-warning">
    <strong>Warning!</strong> .
  </div>
  <div class="alert alert-danger">
    <strong>Danger!</strong> <?php echo $result; ?>.
  </div>

  <div class="alert alert-danger">
    <strong>STR!</strong>
    <br>
     <?php echo $str; ?>.
  </div>
  
  <div class="alert alert-danger">
    <strong>STR2!</strong>
    <br>
     <?php echo $str2; ?>.
  </div>
  
  <div class="alert alert-danger">
    <strong>STR3!</strong>
    <br>
     <?php echo $str3; ?>.
  </div>
</div>
 </body>
</html>
