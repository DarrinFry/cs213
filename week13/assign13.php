<?php
$errors = [];

//submission data
$performance_type = $_POST["performance"];

$first_name = $_POST["first_name"] ?? null;
$last_name = $_POST["last_name"] ?? null;
$student_id = intval($_POST["student_id"]) ?? null;

$first_name_student_2 = $_POST["first_name_2"] ?? null;
$last_name_student_2 = $_POST["last_name_2"] ?? null;
$student_id_2 = intval($_POST["student_id_2"]) ?? null;

$skill_level = $_POST["skill"] ?? null;
$instrument = $_POST["instrument"] ?? null;
$location = $_POST["location"] ?? null;
$room_number = $_POST["room"] ?? null;
$time_slot = $_POST["time_slot"] ?? null;


//validate data
if (!$skill_level || !$instrument || !$location || !$room_number || !$time_slot || !$first_name || !$last_name || !$student_id) {
    $errors[] = "Missing required fields.";
}

$prevData = @file_get_contents("data/regData.txt");

if (!empty($errors)) {
    echo json_encode($errors);
    die();
}

$prevData = $prevData ? json_decode($prevData, true) : [];
$prevData[] = $_POST;

if (!file_put_contents("data/regData.txt", json_encode($prevData))) {
    $errors[] = "Unable to write file.";
}

echo json_encode($errors);

?>