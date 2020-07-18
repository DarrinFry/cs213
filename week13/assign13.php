<?php
$fileName = "data/data.txt";

$performance = $_POST['performance'];
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$studentId = $_POST['student_id'];
$skill = $_POST['skill'];
$instrument = $_POST['instrument'];
$location = $_POST['location'];
$room = $_POST['room'];
$time = $_POST['time_slot'];

if (isset($_POST['first_name_2'])) {
    $firstName2 = $_POST['first_name_2'];
}
if (isset($_POST['last_name_2'])) {
    $lastName2 = $_POST['last_name_2'];
}
if (isset($_POST['student_id_2'])) {
    $studentId2 = $_POST['student_id_2'];
}

if (isset($firstName2)) {
    $string = $firstName." ".$lastName." and ".$firstName2." ".$lastName2.",";
    $string .= "Room number ".$room." in building ".$location.",";
    $string .= $time." AM,";
    $string .= $performance." for ".$skill." ".$instrument."\n";
}
else {
    $string = $firstName." ".$lastName.",";
    $string .= "Room number ".$room." in building ".$location.",";
    $string .= $time." AM,";
    $string .= $performance." for ".$skill." ".$instrument."\n";
}

file_put_contents($fileName, $string, FILE_APPEND);

print file_get_contents($fileName);
?>