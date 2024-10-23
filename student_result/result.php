<?php
$marks=["B"=>79,"E"=>50,"M"=>88];

$total_marks = array_sum($marks);
echo "Total Marks: " . $total_marks .   "<br/>" ;
  
$average= $total_marks/count(value:$marks);

echo "Average Marks:" . $average;


switch(true){
    case ($marks<=100 && $marks>=80):
         echo "Grade: A+";
    break;
    case ($marks<=79 && $marks>=70):
         echo "Grade: A";
    break;
    case ($marks<=69 && $marks>=60):
         echo "Grade: A-";
    break;
    case ($marks<=59 && $marks>=50):
         echo "Grade: B+";
    break;
    case ($marks<=49 && $marks>=40):
        echo "Grade: C";
    break;
        case ($marks<=39 && $marks>=33):
        echo "Grade: D";
    break;

    default:
        $grade = "F";
    break;

 }
