<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Results</title>

    <link rel="stylesheet" href="styles/style.css" type="text/css" media="all">


</head>
<body class= "resultspg">

<a href="index.php">Home Page</a>

    
<div class="">
 
		<h1>Results<h1>
		
        <?php

        /*print_r($_POST);*/



        $totalCorrect = 0;

        foreach($_POST as $index){
            if($index=="C"){
                $totalCorrect++;
            }
        }
      
       
        echo "$totalCorrect / 20 correct";
        
    ?>
	
	</div>
</body>
</html>