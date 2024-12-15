<?php

namespace Classes;

use Interfaces\Cleaning;

class StudentWithCleaning extends Student implements Cleaning {
    public function cleanRoom(): void {
        echo "Student прибирає кімнату.\n";
    }

    public function cleanKitchen(): void {
        echo "Student прибирає кухню.\n";
    }
}