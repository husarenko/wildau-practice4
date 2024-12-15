<?php

namespace Classes;

class Programmer extends Human {
    private array $languages;
    private int $experience;

    public function __construct(int $height, int $weight, int $age, array $languages, int $experience) {
        parent::__construct($height, $weight, $age);
        $this->languages = $languages;
        $this->experience = $experience;
    }

    public function getLanguages(): array { return $this->languages; }
    public function addLanguage(string $language): void { $this->languages[] = $language; }

    public function getExperience(): int { return $this->experience; }
    public function setExperience(int $experience): void { $this->experience = $experience; }

    protected function birthMessage(): void {
        echo "Programmer народився.\n";
    }
}