<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harry Potter Quiz</title>

    <link rel="stylesheet" href="styles/style.css" type="text/css" media="all">


</head>
<body class="homepg">
 <div class="">
    <h1>Welcome to the Ultimate Harry Potter Quiz!</h1>
    <h3>Prove that you are the BIGGEST FAN by testing your knowledge.</h3>
    
    <form action="questions.php" method="post">
    Please enter your Name: <input type="text" name="name" required><br>
    Please select your House: 
    <!--ADD IN HOUSE CREST IMAGES TO SELECT-->
    <input type="radio" name="image" required><br>
    <input type="radio" name="image" required><br>
    <input type="radio" name="image" required><br>
    <input type="radio" name="image" required><br>
     
    <input type="submit" class="submitbtn">
 </div>
</body>
</html>