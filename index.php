<?php
require_once 'autoload.php';

use Models\UserModel;
use Controllers\UserController;
use Views\UserView;
use Classes\Circle;
use Classes\FileManager;
use Classes\Student;
use Classes\Programmer;
use Classes\StudentWithCleaning;
use Classes\ProgrammerWithCleaning;

$model = new UserModel();
$controller = new UserController();
$view = new UserView();

echo $model->getMessage() . "\n";
echo $controller->getMessage() . "\n";
echo $view->getMessage() . "\n";

echo "<br>\n<br>";

$circle1 = new Circle(0, 0, 5);
$circle2 = new Circle(3, 4, 3);

echo $circle1 . "\n";
echo $circle2 . "\n";
echo ($circle1->intersects($circle2) ? "Кола перетинаються" : "Кола не перетинаються") . "\n";

echo "<br>\n<br>";

FileManager::writeFile('file1.txt', "Перше повідомлення.\n");
echo "<br>";
FileManager::writeFile('file2.txt', "Друге повідомлення.\n");
echo "<br>";
echo FileManager::readFile('file1.txt');
echo "<br>";
FileManager::clearFile('file1.txt');
FileManager::writeFile('file1.txt', "Нові дані після очищення.\n");
echo "<br>";
echo FileManager::readFile('file1.txt');

echo "<br>\n<br>";

$student = new Student(180, 75, 20, "University A", 2);
$programmer = new Programmer(175, 70, 25, ["PHP", "JavaScript"], 5);

echo "Student: Зріст - {$student->getHeight()}, Вага - {$student->getWeight()}, Вік - {$student->getAge()}, ВНЗ - {$student->getUniversity()}, Курс - {$student->getCourse()}<br>\n";
echo "Programmer: Зріст - {$programmer->getHeight()}, Вага - {$programmer->getWeight()}, Вік - {$programmer->getAge()}, Мови - " . implode(", ", $programmer->getLanguages()) . ", Досвід - {$programmer->getExperience()} років<br>\n";

$student->setHeight(185);
$student->setWeight(80);
$student->promote();
echo "Student після змін: Зріст - {$student->getHeight()}, Вага - {$student->getWeight()}, Курс - {$student->getCourse()}<br>\n";

$programmer->addLanguage("Python");
$programmer->setExperience(6);
echo "Programmer після змін: Мови - " . implode(", ", $programmer->getLanguages()) . ", Досвід - {$programmer->getExperience()} років<br>\n";

$student->giveBirth();
$programmer->giveBirth();

echo "<br>\n<br>";

$studentCleaner = new StudentWithCleaning(180, 75, 20, "University A", 2);
$programmerCleaner = new ProgrammerWithCleaning(175, 70, 25, ["PHP", "JavaScript"], 5);

$studentCleaner->cleanRoom();
$studentCleaner->cleanKitchen();
echo "<br>\n<br>";
$programmerCleaner->cleanRoom();
$programmerCleaner->cleanKitchen();
