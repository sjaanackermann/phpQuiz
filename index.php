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

<div class="jumbotron hpg-content">
  <h1 class="display-4 heading">Welcome to the Ultimate Harry Potter Quiz!</h1>
  <hr class="my-4">
  <p><h2>Prove that you are the <span class="blinking">BIGGEST FAN</span> by testing your knowledge.</h2></p>
</div>

<div class="hpg-center">
    <form action="questions.php" method="post">
    <h3>Please enter your Name:</h3> <input type="text" name="name" required>
    <br>
    <br>
    
    <h3>Please select your House:</h3> <br>
   <div class="">
    <input 
  type="radio" name="crest" value="Gryffindor"
  id="Gryffindor" class="input-hidden" required/>
<label for="Gryffindor">
  <img class=""
    src="" 
    alt="Gryffindor Crest" />
</label>
    </div>

    <div class="">
<input 
  type="radio" name="crest" value="Ravenclaw"
  id="Ravenclaw" class="input-hidden" required/>
<label for="Ravenclaw">
  <img 
    src="" 
    alt="Ravenclaw Crest" />
</label>
</div>


<div class="">
<input 
  type="radio" name="crest" value="Hufflepuff"
  id="Hufflepuff" class="input-hidden" required/>
<label for="Hufflepuff">
  <img 
    src="" 
    alt="Hufflepuff Crest" />
</label>
</div>

<div class="">
<input 
  type="radio" name="crest" value="Slytherin"
  id="Slytherin" class="input-hidden" required/>
<label for="Slytherin">
  <img 
    src="" 
    alt="Slytherin Crest" />
</label>
</div>
<br>

    <input type="submit" class="submitbtn">
 </div>
</div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>