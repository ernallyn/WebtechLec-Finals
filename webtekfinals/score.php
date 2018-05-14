<!DOCTYPE html>
<html lang="en">
<head>
<title>Course Note</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="header">
  <h1>Your Score</h1>
</div>

<div class="topnav">
  <a href="index.html">Home</a>
  <a href="topic1.html">Topic</a>
  <a href="#">About Us</a>
 
</div>

<br>
<br>
<div class="row">
  <div class="column side">
		
		<h1>You Got !!!</h1>
		        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "B") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "C") { $totalCorrect++; }
            
            echo  "<h1> <div id='results'>$totalCorrect / 5 correct</div> </h1>";
            
        ?>
        
	
	
	<h1> <a href="index.html">EXIT</a></h1>
	</div>
	</div>
	
	

</body>

</html>
 