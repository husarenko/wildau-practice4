<?php

namespace Classes;

use Interfaces\Cleaning;

class ProgrammerWithCleaning extends Programmer implements Cleaning {
    public function cleanRoom(): void {
        echo "Programmer прибирає кімнату.\n";
    }

    public function cleanKitchen(): void {
        echo "Programmer прибирає кухню.\n";
    }
}