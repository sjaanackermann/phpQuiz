<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harry Potter Quiz</title>

    <link rel="stylesheet" href="styles/style.css" type="text/css" media="all">


</head>
<body class="questionpg">
<a href="index.php" class="">Back to Home Page</a>
<br>
<br>
 <h1 class="heading">Welcome to <?php echo $_POST["house"];?>  <?php echo $_POST["name"]; ?> , Please complete the next 20 questions to get your results:</h1> 
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
/*
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
*/
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
        <form action="results.php" method="post" id="quiz">
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

        
    
</body>
</html>