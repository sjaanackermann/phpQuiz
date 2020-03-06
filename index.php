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
    
<title>Harry Potter Quiz</title>


</head>
<body class="homepg">

<!-- Jumbotron Start -->

<div class="jumbotron hpg-content">
    <img class="img" src="images/hogwarts.png" alt="hogwarts crest">
  <h1 class="display-4 heading">Welcome to the Ultimate Harry Potter Quiz!</h1>
  <hr class="my-4">
  <p><h2>Prove that you are the <span class="blinking">BIGGEST FAN</span> by testing your knowledge.</h2></p>
</div>

<!-- Jumbotron End -->

<!-- Content Start -->
<div class="hpg-center">
<div class="wp-input">
    <form action="questions.php" method="post">
        <br>
    <h3><u>Please enter your Name:</u></h3> <input type="text" name="name" required>
    <br>
    <br>
    </div>
    <br>
    <div class="wp-input">   
        <br>
    <h3><u>Please select your House:</u></h3> 
    <br>
</div>
<br>
<br>
   <div class="crests">
    <input 
        type="radio" name="crest" value="Gryffindor"
        id="Gryffindor" class="input-hidden" required/>
    <label for="Gryffindor">
        <img class=""
        src="images/gryffindor.png" 
        alt="Gryffindor Crest" />
    </label>
    </div>
    <br>
    <div class="crests">
    <input 
  type="radio" name="crest" value="Ravenclaw"
  id="Ravenclaw" class="input-hidden" required/>
<label for="Ravenclaw">
  <img 
    src="images/ravenclaw.png" 
    alt="Ravenclaw Crest" />
</label>
</div>
<br>

<div class="crests">
<input 
  type="radio" name="crest" value="Hufflepuff"
  id="Hufflepuff" class="input-hidden" required/>
<label for="Hufflepuff">
  <img 
    src="images/hufflepuff.png" 
    alt="Hufflepuff Crest" />
</label>
</div>
<br>
<div class="crests">
<input 
  type="radio" name="crest" value="Slytherin"
  id="Slytherin" class="input-hidden" required/>
<label for="Slytherin">
  <img 
    src="images/slytherin.png" 
    alt="Slytherin Crest" />
</label>
</div>

<!-- Content End -->
<br>
<br>

<!-- Button Start -->
    <input type="submit" class="submitbtn">
 </div>
</div>
<!-- Button End -->
<br>
<br>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>