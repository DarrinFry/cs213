<?php
    $fName = $_POST['first_name'];
    $lName = $_POST['last_name'];
    $id = $_POST['student_id'];
    $skill = $_POST['skill'];
    $type = $_POST['performance'];
    $instrument = $_POST['instrument'];
    $location = $_POST['location'];
    $room = $_POST['room'];
    $time = $_POST['time_slot'];

    $fName_2 = $_POST['first_name_2'];  
    $lName_2 = $_POST['last_name_2'];  
    $id_2 = $_POST['student_id_2'];  

    $data = Array (
        "firstName" => $fName,
        "lastName" => $lName,
        "id" => $id,
        "skill" => $skill,
        "type" => $type,
        "instrument" => $instrument,
        "location" => $location,
        "room" => $room,
        "time" => $time,
        "fName_2" => $fName_2,
        "lName_2" => $lName_2,
        "id_2" => $id_2
    );

    $file = "data/data.txt";
    $current = [];
    if (file_exists($file)) {
        $current = file_get_contents($file);
        $current = json_decode($current);
    }


    $current[] = $data;

    $current = json_encode($current);
    file_put_contents($file, $current);
    echo $current;
?>

