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

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:700|Open+Sans&display=swap" rel="stylesheet">

    <title>Harry Potter Quiz</title>

</head>
<body class="questionpg">
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Back to Home Page</a>
</nav>
<br>
<br>
 <h1 class="heading">Welcome to <?php echo $_POST["crest"];?>  <?php echo $_POST["name"]; ?>, Please complete the next 20 questions to get your results:</h1> 
 <br>
 <br>

<?php 

    $quiz= array(
        
        "Who is the main character of the Series?"=>array(
            "A" => "Hermione Granger", 
            "B" => "Ron Weasley", 
            "C" => "Harry Potter", 
            "D" => "Albus Dumbledore"),  
        
        "What is the name of Ron Weasleys Rat?"=>array(
            "C" => "Scabbers", 
            "A" => "Hedgwig", 
            "B" => "Crookshanks", 
            "D" => "Neville"), 
        
        "What is Dumbledore’s full name?"=>array(
            "B" => "Albus Wulfric Percival Brian Dumbledore", 
            "C" => "Albus Percival Wulfric Brian Dumbledore", 
            "D" => "Albus Percival Brian Wulfric Dumbledore", 
            "A" => "Albus Brian Percival Wulfric Dumbledore"), 

        "What is the Symbol the Ravenclaw house?"=>array(
            "D" => "Raven", 
            "B" => "Crow", 
            "C" => "Eagle", 
            "A" => "Hawk"), 

        "What is the LAST line of the book, Harry Potter & the Sorcerer’s Stone?"=>array(
            "A" => "\"Goodbye, for now, Hogwarts.\"", 
            "B" => "\"Harry, Ron, and Hermione looked at each other sheepishly and smiled.\"", 
            "C" => "\"I’m going to have a lot of fun with Dudley this summer…\"", 
            "D" => "\"'Until the fall,' said Dumbledore with a nod.\""), 

        "What is Lord Voldemort’s Real Name?"=>array(
            "C" => "Tom Marvolo Riddle", 
            "A" => "Tom Marvilo Riddle", 
            "B" => "Tom Marvin Riddle", 
            "D" => "Tom Ravolo Riddle"), 

        "How Many Sickles are in a Galleon?"=>array(
            "B" => "13", 
            "D" => "15", 
            "C" => "17", 
            "A" => "19"), 

        "A person born into a wizarding family who cannot do magic is called?"=>array(
            "A" => "A Muggle", 
            "B" => "A Half-Blood", 
            "D" => "A Mudblood", 
            "C" => "A Squib"), 

        "How many points is a snitch worth in Quidditch?"=>array(
            "A" => "100", 
            "C" => "150", 
            "B" => "200", 
            "D" => "250"), 

        "Who put Harry’s name in the Goblet of Fire?"=>array(
            "D" => "Peter Pettigrew", 
            "B" => "Severus Snape", 
            "A" => "Cornelius Fudge", 
            "C" => "Barty Crouch Jr"), 

        "Which Harry Potter word is now in the Oxford English Dictionary?"=>array(
            "A" => "Hogwarts", 
            "B" => "Voldemort", 
            "C" => "Muggle", 
            "D" => "Squib"), 

        "In order of birth, who are the seven Weasley siblings?"=>array(
            "A" => "Percy, Bill, George, Charlie, Fred, Ron, Ginny", 
            "D" => "George, Fred, Percy, Bill, Charlie, Ron, Ginny", 
            "C" => "Bill, Charlie, Percy, Fred, George, Ron, Ginny", 
            "B" => "Percy, Charlie, George, Bill, Ron, Fred, Ginny"), 

        "What are the three Unforgivable curses?"=>array(
            "A" => "Impedimenta, Incarcerous and Incendio", 
            "C" => "Avada Kedavra, Crucio and Imperio", 
            "B" => "Expelliarmus, Expecto Patronum and Diffindo", 
            "D" => "Incarcerous and Crucio and Avada Kedavra"), 

        "Which of these Hogwarts professors teaches Transfiguration?"=>array(
            "D" => "Snape", 
            "B" => "Sprout", 
            "C" => "McGonagall", 
            "A" => "Hagrid"), 

        "What's the only book in the Harry Potter series that doesn't feature Lord Voldemort?"=>array(
            "A" => "The Sorcerer's Stone", 
            "C" => "The Prisoner of Azkaban", 
            "D" => "The Deathly Hallows", 
            "B" => "The Goblet of Fire"), 

        "Who was NOT a member of the Order of the Phoenix?"=>array(
            "B" => "Mad-Eye Moody", 
            "A" => "Albus Dumbledore", 
            "C" => "Bellatrix Lestrange", 
            "D" => "Sirius Black"), 

        "How many copies did \"Harry Potter and the Deathly Hallows\" sell the first day of its release in the U.S. and the U.K.?"=>array(
            "A" => "5 million", 
            "D" => "8 million", 
            "C" => "11 million", 
            "B" => "7 million"), 

        "The first Harry Potter theme park opened in 2010. Where is it?"=>array(
            "D" => "Kyoto, Japan", 
            "B" => "Birmingham, England", 
            "C" => "Orlando, Florida", 
            "A" => "Paris, France"), 

        "In the third book, \"Harry Potter and the Prisoner of Azkaban,\" Harry runs away from his aunt and uncle's home after accidentally ______________."=>array(
            "B" => "Casting a Patronus charm", 
            "C" => "Blowing his Aunt Marge up like a balloon", 
            "D" => "Dropping a bag of chocolate frogs, that gets eaten by Dudley", 
            "A" => "Giving Dudley a pig tail, after Dudley ate his Birthday cake"), 

        "And lastly, how many books are in the series, and how many movies were made from the books?"=>array(
            "C" => "7 Books & 8 Movies", 
            "B" => "6 Books & 7 Movies", 
            "D" => "7 Books & 7 Movies", 
            "A" => "6 Books & 8 Movies"), 
        
        );
        ?>
        <?php
/*
        $quiz= array(
        
            "Who is the main character of the Series?"=>array(
                "A" => "Hermione Granger", 
                "B" => "Ron Weasley", 
                "C" => "Harry Potter", 
                "D" => "Albus Dumbledore"),  
            
            "What is the name of Ron Weasleys Rat?"=>array(
                "A" => "Scabbers", 
                "B" => "Hedgwig", 
                "C" => "Crookshanks", 
                "D" => "Neville"), 
            
            "What is Dumbledore’s full name?"=>array(
                "A" => "Albus Wulfric Percival Brian Dumbledore", 
                "B" => "Albus Percival Wulfric Brian Dumbledore", 
                "C" => "Albus Percival Brian Wulfric Dumbledore", 
                "D" => "Albus Brian Percival Wulfric Dumbledore"), 
   
            "What is the Symbol the Ravenclaw house?"=>array(
                "A" => "Raven", 
                "B" => "Crow", 
                "C" => "Eagle", 
                "D" => "Hawk"), 
    
            "What is the LAST line of the book, Harry Potter & the Sorcerer’s Stone?"=>array(
                "A" => "\"Goodbye, for now, Hogwarts.\"", 
                "B" => "\"Harry, Ron, and Hermione looked at each other sheepishly and smiled.\"", 
                "C" => "\"I’m going to have a lot of fun with Dudley this summer…\"", 
                "D" => "\"'Until the fall,' said Dumbledore with a nod.\""), 
    
            "What is Lord Voldemort’s Real Name?"=>array(
                "A" => "Tom Marvolo Riddle", 
                "B" => "Tom Marvilo Riddle", 
                "C" => "Tom Marvin Riddle", 
                "D" => "Tom Ravolo Riddle"), 
    
            "How Many Sickles are in a Galleon?"=>array(
                "A" => "13", 
                "B" => "15", 
                "C" => "17", 
                "D" => "19"), 
    
            "A person born into a wizarding family who cannot do magic is called?"=>array(
                "A" => "A Muggle", 
                "B" => "A Half-Blood", 
                "C" => "A Mudblood", 
                "D" => "A Squib"), 
    
            "How many points is a snitch worth in Quidditch?"=>array(
                "A" => "100", 
                "B" => "150", 
                "C" => "200", 
                "D" => "250"), 
    
            "Who put Harry’s name in the Goblet of Fire?"=>array(
                "A" => "Peter Pettigrew", 
                "B" => "Severus Snape", 
                "C" => "Cornelius Fudge", 
                "D" => "Barty Crouch Jr"), 
    
            "Which Harry Potter word is now in the Oxford English Dictionary?"=>array(
                "A" => "Hogwarts", 
                "B" => "Voldemort", 
                "C" => "Muggle", 
                "D" => "Squib"), 
    
            "In order of birth, who are the seven Weasley siblings?"=>array(
                "A" => "Percy, Bill, George, Charlie, Fred, Ron, Ginny", 
                "B" => "George, Fred, Percy, Bill, Charlie, Ron, Ginny", 
                "C" => "Bill, Charlie, Percy, Fred, George, Ron, Ginny", 
                "D" => "Percy, Charlie, George, Bill, Ron, Fred, Ginny"), 
    
            "What are the three Unforgivable curses?"=>array(
                "A" => "Impedimenta, Incarcerous and Incendio", 
                "B" => "Avada Kedavra, Crucio and Imperio", 
                "C" => "Expelliarmus, Expecto Patronum and Diffindo", 
                "D" => "Incarcerous and Crucio and Avada Kedavra"), 
    
            "Which of these Hogwarts professors teaches Transfiguration?"=>array(
                "A" => "Snape", 
                "B" => "Sprout", 
                "C" => "McGonagall", 
                "D" => "Hagrid"), 
    
            "What's the only book in the Harry Potter series that doesn't feature Lord Voldemort?"=>array(
                "A" => "The Sorcerer's Stone", 
                "B" => "The Prisoner of Azkaban", 
                "C" => "The Deathly Hallows", 
                "D" => "The Goblet of Fire"), 
    
            "Who was NOT a member of the Order of the Phoenix?"=>array(
                "A" => "Mad-Eye Moody", 
                "B" => "Albus Dumbledore", 
                "C" => "Bellatrix Lestrange", 
                "D" => "Sirius Black"), 
    
            "How many copies did \"Harry Potter and the Deathly Hallows\" sell the first day of its release in the U.S. and the U.K.?"=>array(
                "A" => "5 million", 
                "B" => "8 million", 
                "C" => "11 million", 
                "D" => "7 million"), 
    
            "The first Harry Potter theme park opened in 2010. Where is it?"=>array(
                "A" => "Kyoto, Japan", 
                "B" => "Birmingham, England", 
                "C" => "Orlando, Florida", 
                "D" => "Paris, France"), 
    
            "In the third book, \"Harry Potter and the Prisoner of Azkaban,\" Harry runs away from his aunt and uncle's home after accidentally ______________."=>array(
                "A" => "Casting a Patronus charm", 
                "B" => "Blowing his Aunt Marge up like a balloon", 
                "C" => "Dropping a bag of chocolate frogs, that gets eaten by Dudley", 
                "D" => "Giving Dudley a pig tail, after Dudley ate his Birthday cake"), 
    
            "And lastly, how many books are in the series, and how many movies were made from the books?"=>array(
                "A" => "7 Books & 8 Movies", 
                "B" => "6 Books & 7 Movies", 
                "C" => "7 Books & 7 Movies", 
                "D" => "6 Books & 8 Movies"), 
            
            );
            */
        ?>
        <form action="results.php" method="post" id="quiz" class="">
            <?php

                foreach($quiz as $question => $answers) {
                    echo "<br><br>$question<br><br>";
            
                foreach($answers as $index => $answer) {
                    echo "<input type=\"radio\" name=\"$question\" value=\"$index\" required>".$answer."<br>" ;
                    }

                }
                
            ?>
            <input type="submit" value="Get Results" class="submitbtn" required />
        </form>

        
    
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>