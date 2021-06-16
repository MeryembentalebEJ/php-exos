<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php parti 2</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<h1>Php partie2 </h1>

<!-- La plus simple des boucles est la boucle while -->
<!--============================= Exo1 ==================== -->
<?php 
   $playGame = 0;
   while($playGame <= 10){
       echo "Le nombre : ". $playGame. "<br>";
       $playGame++;
   }

//    Exo 2 boucle for incremante inside of the braces
   echo "<br> <br>";
   function display(){
      $number = rand(1,100);
      for($i=1; $i < 20; $i++)
      echo "Le resultat de la multiplication de".$i. " * ". $number. "est ". $i*$number. "<br>";
   };
   echo display();

?>




 <!--======================  Exo 3 =====================-->
 <?php 
for($gray=1; $gray <= 15; $gray++){
    if($gray !=15){
    ?> 
    <p><?="On y est presque. "?></p>
    <?php
    }else{
    ?>
        <p><?="On a atteint"?></p>
        <?php
    }
}
?>

<!-- ================================== Exo 4  =============================================== -->

<?php
echo "<br> <br>";
function center(){
   for($card=1; $card <= 100; $card++){
       if($card < 100){
           $card = $card+14;
           echo "Ma variable est inferieur à 0 je lui rajoute 15 maintenant ma variable = <br>";
           echo ($card+1). "<br>";
       }else{
           echo "Yeah this is it";
       }
   }
};
echo center();

?>

<?php 
echo "<br> <br>";
$list=200;

while($list>=0){
    $list=$list-12;
    echo"ma variable est supérrieur à 0 je lui soustrait 12, maintenant ma variable est = ". $list."<br>";
    $list-2;
}
 
?>


<!--================================== exo5 Bonus ===================================-->

<?php
echo "<br> <br>";
$month= array(
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
);
?>
    <select name="months" id="months">
        <option value="">Select your month: </option>
        <option value=""><?php echo $month[0]
        ?></option>
        <option value=""><?php echo $month[1]
        ?></option>
        <option value=""><?php echo $month[2]
        ?></option>
        <option value=""><?php echo $month[3]
        ?></option>
        <option value=""><?php echo $month[4]
        ?></option>
        <option value=""><?php echo $month[5]
        ?></option>
        <option value=""><?php echo $month[6]
        ?></option>
        <option value=""><?php echo $month[7]
        ?></option>
        <option value=""><?php echo $month[8]
        ?></option>
        <option value=""><?php echo $month[9]
        ?></option>
        <option value=""><?php echo $month[10]
        ?></option>
        <option value=""><?php echo $month[11]
        ?></option>
    </select>

</body>
</html>