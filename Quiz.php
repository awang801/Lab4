<?php
        function get_data($data){
        return ($data);
        }
        $q1 = get_data($_POST["q1"]);
        $q2 = get_data($_POST["q2"]);
        $q3 = get_data($_POST["q3"]);
        $q4 = get_data($_POST["q4"]);
        $q5 = get_data($_POST["q5"]);
    echo " Question: What is the best type of bread <br>";
    echo "Your answer: ".$q1."<br>";
    echo "Correct answer: sliced <br>";
        if ($q1 == "sliced")
    {
    echo "You answer correctly!";
    $correct ++;
    }
    else{
    echo "You have answered incorrectly!";
    }
    echo " Question: What is the best type of link <br>";
    echo "Your answer: ".$q2."<br>";
    echo "Correct answer: the 17 page donezo kind <br>";
    
    if ($q2 == "the 17 page donezo kind")
    {
    echo "You answer correctly!";
    $correct ++;
    }
    else{
    echo "You have answered incorrectly!";
    }
    echo " Question: How do you deal with summoners? <br>";
    echo "Your answer: ".$q3."<br>";
    echo "Correct answer: alt +f4 <br>";
        if ($q3 == "alt + f4")
    {
    echo "You answer correctly!";
    $correct++;
    }
    else{
    echo "You have answered incorrectly!";
    }
    echo " Question: What is the first thing a cat needs to do after being lost for 16 hours? <br>";
    echo "Your answer: ".$q4."<br>";
    echo "Correct answer: Take a hot dump <br>";
        if ($q4 == "Take a hot dump")
    {
    echo "You answer correctly!";
    $correct ++;
    }
    else{
    echo "You have answered incorrectly!";
    }
    echo " Question: What question number is this? <br>";
    echo "Your answer: ".$q5."<br>";
    echo "Correct answer: 5 <br>";

    if ($q5 == "5")
    {
    echo "You answer correctly!";
    $correct ++;
    }
    else{
    echo "You have answered incorrectly!";
    }


    ?>
