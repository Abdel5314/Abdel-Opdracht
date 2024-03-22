<?php
require_once("../vendor/autoload.php");

use Opdracht7\classes\Teacher;
use Opdracht7\classes\Student;
use Opdracht7\classes\Schooltrip;
use Opdracht7\classes\Groep;


$SOD2B = new Group("SOD2B");
$SOD2A = new Group("SOD2A");

$myTeacher = new Teacher("Abdel Al Abdalaoui");
$myTeacher->SetSalary(2384.73);
$myTeacher = new Teacher("Mark de Boer");
$myTeacher->SetSalary(2235.36);
$myTeacher = new Teacher("Marouan Azdad");
$myTeacher->SetSalary(2138.23);

$mySchooltrip = new Schooltrip("Walibi", 5);
$mySchooltrip->AddStudent(new Student("Daan de Vries", $SOD2B));
$mySchooltrip->AddStudent(new Student("Sofie Bakker", $SOD2A, true));
$mySchooltrip->AddStudent(new Student("Julia de Jong", $SOD2A));
$mySchooltrip->AddStudent(new Student("Eva van den Berg", $SOD2B));
$mySchooltrip->AddStudent(new Student("Thomas van der Meer", $SOD2A, true));
$mySchooltrip->AddStudent(new Student("Lisa Smit", $SOD2A));
$mySchooltrip->AddStudent(new Student("Bilal de Ruiter", $SOD2B, true));
$mySchooltrip->AddStudent(new Student("Fleur van der Veen", $SOD2B, true));
$mySchooltrip->AddStudent(new Student("Milan Schutter", $SOD2A, true));
$mySchooltrip->AddStudent(new Student("Sarah de Jong", $SOD2A));
$mySchooltrip->AddStudent(new Student("Sophie van der Linden", $SOD2A));
$mySchooltrip->AddStudent(new Student("Luuk Jansen", $SOD2A));
$mySchooltrip->AddStudent(new Student("Max van Dijk", $SOD2A, true));

echo($mySchooltrip->GetTable());
?>