<?php
$count = 0;
$q1 = $_POST["bestAnimal"];
if( $q1 == "fish" ){ $count = $count + 1; }
$q2 = $_POST["capKansas"];
if( $q2 == "Topeka" ){ $count = $count + 1; }
$q3 = $_POST["creator"];
if( $q3 == "Bayley" ){ $count = $count + 1;}
$q4 = $_POST["first"];
if( $q4 == "1" ){ $count = $count + 1; }
$q5 = $_POST["last"];
if( $q5 == "one" ){ $count = $count + 1; }
echo "Question 1: What is the best animal?<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;You answered: ". $q1 . "<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;Correct answer: fish<br><br>";
echo "Question 2: What is the capital of Kansas?<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;You answered: ". $q2 . "<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;Correct answer: Topeka<br><br>";
echo "Question 3: Who made this?<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;You answered: ". $q3 . "<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;Correct answer: Bayley<br><br>";
echo "Question 4: Which came first?<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;You answered: ". $q4 . "<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;Correct answer: 1<br><br>";
echo "Question 5: Which came last?<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;You answered: ". $q5 . "<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;Correct answer: one<br><br>";
echo "Score: ";
switch( $count ){
    case 0:
        echo "0%";
    break;
    case 1:
        echo "20%";
    break;
    case 2:
        echo "40%";
    break;
    case 3:
        echo "60%";
    break;
    case 4:
        echo "80%";
    break;
    case 5:
        echo "100%";
    break;
}
?>
