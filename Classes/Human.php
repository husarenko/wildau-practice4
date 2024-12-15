<?php

namespace Classes;

abstract class Human {
    protected int $height;
    protected int $weight;
    protected int $age;

    public function __construct(int $height, int $weight, int $age) {
        $this->height = $height;
        $this->weight = $weight;
        $this->age = $age;
    }

    public function getHeight(): int { return $this->height; }
    public function setHeight(int $height): void { $this->height = $height; }

    public function getWeight(): int { return $this->weight; }
    public function setWeight(int $weight): void { $this->weight = $weight; }

    public function getAge(): int { return $this->age; }
    public function setAge(int $age): void { $this->age = $age; }

    protected abstract function birthMessage(): void;

    public function giveBirth(): void {
        $this->birthMessage();
    }
}