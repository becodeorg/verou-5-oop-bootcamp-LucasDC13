<?php

declare(strict_types=1);

require_once "./classes/student.php";
require_once "./classes/germanStudent.php";
require_once "./classes/frenchStudent.php";

$student1 = new frenchStudent("Adam", 3);
$student2 = new frenchStudent("Beau", 7.5);
$student3 = new frenchStudent("Cyril", 6.5);
$student4 = new frenchStudent("Dominique", 8.3);
$student5 = new frenchStudent("Erika", 5.8);
$student6 = new frenchStudent("Filomine", 7.2);
$student7 = new frenchStudent("Godot", 3.9);
$student8 = new frenchStudent("Hector", 2.1);
$student9 = new frenchStudent("Ilia", 6.5);
$student10 = new frenchStudent("Jonasty", 1.5);

$student11 = new germanStudent("Karl", 8);
$student12 = new germanStudent("Ludvich", 9);
$student13 = new germanStudent("Monica", 6.3);
$student14 = new germanStudent("Noé", 3.7);
$student15 = new germanStudent("Otto", 8.5);
$student16 = new germanStudent("Patrick", 6.7);
$student17 = new germanStudent("Qustav", 4.9);
$student18 = new germanStudent("Rastaputain", 6.7);
$student19 = new germanStudent("Steven", 3.8);
$student20 = new germanStudent("Tom", 10);

$frenchStudents = [$student1, $student2, $student3, $student4, $student5, $student6, $student7, $student8, $student9, $student10];
$germanStudents = [$student11, $student12, $student13, $student14, $student15, $student16, $student17, $student18, $student19, $student20];
$allStudents = array_merge($frenchStudents, $germanStudents);

$totalFrGrade = 0;
$totalGerGrade = 0;

function changeGroup(&$moveFrom, &$moveTo, $student)
{
    // Find and remove student from $moveFrom
    $key = array_search($student, $moveFrom, true);
    if ($key !== false) {
        unset($moveFrom[$key]);
    }

    // Add student to $moveTo
    $moveTo[] = $student;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapport Card</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php changeGroup($frenchStudents, $germanStudents, $student1); ?>
    <?php changeGroup($germanStudents, $frenchStudents, $student11); ?>
    <h1>French Students</h1>
    <?php foreach ($frenchStudents as $student): ?>
        <?= "<p>" . $student->getName() . " || " . $student->getGrade() . " || Group: " . $student->getGroup() . "</p>";
        $totalFrGrade += $student->getGrade(); ?>
    <?php endforeach;
    $averageGrade = ($totalFrGrade / count($frenchStudents));
    echo "<h2>Group average: " . round($averageGrade, 2) . "/10</h2>";
    ?>
    <h1>German Students</h1>
    <?php foreach ($germanStudents as $student): ?>
        <?= "<p>" . $student->getName() . " || " . $student->getGrade() . " || Group: " . $student->getGroup() . "</p>";
        $totalGerGrade += $student->getGrade(); ?>
    <?php endforeach;
    $averageGrade = ($totalGerGrade / count($germanStudents));
    echo "<h2>Group average: " . round($averageGrade, 2) . "/10</h2>";
    ?>
</body>
</html>
