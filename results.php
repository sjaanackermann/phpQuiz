<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- My CSS -->

<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
    
<!-- Google Fonts -->

<link href="https://fonts.googleapis.com/css?family=Trade+Winds|Open+Sans&display=swap" rel="stylesheet">

<title>Your Results</title>


</head>
<body class= "resultspg">

<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Back to Home Page</a>
</nav>
    
<div class="heading hpg-content">
        
        <br>
		<h1>Your results :<h1>
        <br>
        </div>	
        <div class="">
        <?php

        /*print_r($_POST);*/


        $totalCorrect = 0;

        foreach($_POST as $index){
            if($index=="C"){
                $totalCorrect++;
            }
        }
      

        switch($totalCorrect){
            case $totalCorrect <10: echo "Your Total:$totalCorrect/20 <br><p> Have you even read Harry Potter? </p>";
                $result1 = "result1.png";
                echo "<br><img src=\" images/$result1 \" class=\"result1\">";
        break;
            case $totalCorrect <=15: echo "Your Total:$totalCorrect/20 <br><p> You know a little bit, but  </p>";
                $result2 = "result2.png";
                echo "<br><img src=\" images/$result2 \" class=\"result2\">";
        break;
            case $totalCorrect <=19: echo "Your Total:$totalCorrect/20 <br><p> You are on your way to being the biggest fan...</p>";
                $result3 = "result3.png";
                echo "<br><img src=\" images/$result3 \" class=\"result3\">";
        break;
            case $totalCorrect ==20: echo "Your Total:$totalCorrect/20 <br><p> Congratulations! You are the BIGGEST fan! </p>";
                $result4 = "result4.png";
                echo "<br><img src=\" images/$result4 \" class=\"result4\">";
        break;
            default: echo "<p>Please try again.<p>";
        }
       
        
        
    ?>
	</div>
    
    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>