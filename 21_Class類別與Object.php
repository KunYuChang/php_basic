<?php

require "./21-1_Student.php";
$s1 = new Student('小明', 30, 20, 91);
$s2 = new Student('老王', 80, 82, 83);

Student::isStudentBetterThanMe($s1, $s2);
echo Student::BR_TAG;

$t1 = new Teacher('老師', '一號');
$e1 = new Engineer('工程師');

$s1->printFullName();
$t1->printFullName();
$e1->printFullName();

?>

<a href="22_型別指定與轉換.php"></a>