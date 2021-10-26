<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
//Number of rows code
$conn = mysqli_connect("localhost", "root", "", "mahlatse");

$query_num_rows = "select* from survey ";
$result = mysqli_query($conn, $query_num_rows);
$num_surveys = mysqli_num_rows($result);

$query_avg_age = "SELECT AVG(age) AS average FROM survey";
$query_resultavg = mysqli_query($conn, $query_avg_age);
while ($row = mysqli_fetch_assoc($query_resultavg)) {
    $average_age = $row['average'];
    $average_age = round($average_age, 1);
}
$query_oldest_person = "SELECT MAX(age) AS age FROM survey";
$oldest_person_result = mysqli_query($conn, $query_oldest_person);

while ($row = mysqli_fetch_assoc($oldest_person_result)) {
    $oldest_person = $row['age'];
}

$query_youngest_person = "SELECT MIN(age) AS age FROM survey";
$youngest_person_result = mysqli_query($conn, $query_youngest_person);

while ($row = mysqli_fetch_assoc($youngest_person_result)) {
    $youngest_person = $row['age'];
}

$query_percentage_pizza = "select* from survey where pizza='pizza'";
$resultPizza = mysqli_query($conn, $query_percentage_pizza);
$num_percentage_pizza = mysqli_num_rows($resultPizza);
$resultPizza = $num_percentage_pizza / $num_surveys * 100;

$query_percentage_Pasta = "select* from survey where pasta='pasta'";
$resultPasta = mysqli_query($conn, $query_percentage_Pasta);
$num_percentage_Pasta = mysqli_num_rows($resultPasta);
$resultPasta = $num_percentage_Pasta / $num_surveys * 100;

$query_percentage_pap_and_wors = "select* from survey where Pap_and_Wors ='pap'";
$resultpap_and_wors = mysqli_query($conn, $query_percentage_pap_and_wors);
$num_percentage_pap_and_wors = mysqli_num_rows($resultpap_and_wors);
$resultpap_and_wors = $num_percentage_pap_and_wors / $num_surveys * 100;

$query_Eat_Out = "SELECT* FROM survey where Eat_Out ='Strongly agree(1)' OR Eat_Out  = 'Agree(2)' OR Eat_Out = 'Neutral(3)'";
$resultEat_Out = mysqli_query($conn, $query_Eat_Out);
$num_Eat_Out = mysqli_num_rows($resultEat_Out);
$totalEat_Out=$num_Eat_Out/$num_surveys;
        $totalEat_Out=round($totalEat_Out, 1);
        
        $query_Movies = "SELECT * FROM survey where Movies ='Strongly Agree(1)'  OR Movies  = 'Agree(2)' OR Eat_Out = 'Neutral(3)'";
$resultMovies = mysqli_query($conn, $query_Movies);
$num_Movies = mysqli_num_rows($resultMovies);
$totalMovies=$num_Movies/$num_surveys;
        $totalMovies=round($totalMovies, 1);
        
      $query_WatchTV = "SELECT * FROM survey where WatchTV ='Strongly Agree(1)'  OR WatchTV  = 'Agree(2)' OR WatchTV = 'Neutral(3)'";
$resultWatchTV = mysqli_query($conn, $query_WatchTV);
$num_WatchTV = mysqli_num_rows($resultWatchTV);
$totalWatchTV=$num_WatchTV/$num_surveys;
        $totalWatchTV=round($totalWatchTV, 1);
        
        $query_Radio = "SELECT * FROM survey where Radio ='Strongly Agree(1)'  OR Radio  = 'Agree(2)' OR Radio='Neutral(3)'";
$resultRadio = mysqli_query($conn, $query_Radio);
$num_Radio = mysqli_num_rows($resultRadio);
$totalRadio=$num_Radio/$num_surveys;
        $totalRadio=round($totalRadio, 1);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Results of the survey</title>
        <link href='styles.css' text='text' rel='stylesheet' /> 
    </head>
    <body>
       
        <p><label> Total number of surveys:<?php echo $num_surveys ?></label></br>
            <label> Average age:<?php echo $average_age ?></label></br>
            <label> Older person who participated in survey:<?php echo $oldest_person ?></label></br>
            <label> Younger person who participated in survey:<?php echo $youngest_person ?></label></br>
        </p>
        <p><label> Percentage of people who like Pizza:<?php echo $num_percentage_pizza ?></label></br>
            <label> Percentage of people who like Pasta:<?php echo $num_percentage_Pasta ?></label></br>
            <label> Percentage of people who like Pap and Wors:<?php echo $num_percentage_pap_and_wors ?></label></br>
        </p>
        <p><label> People like to eat out:<?php echo $totalEat_Out ?></label></br>
            <label> People like to watch movies:<?php echo $totalMovies ?></label></br>
            <label> People like to watch TV:<?php echo $totalWatchTV ?></label></br>
            <label> People like to listen to the radio:<?php echo $totalRadio ?></label>
        </p>
        <input type="Submit" name="submit" value="OK" class="submit"> 



    </body>
</html>
