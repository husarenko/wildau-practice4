<?php

namespace Classes;

class FileManager
{
    private static string $dir = 'text';

    public static function writeFile(string $filename, string $content): void
    {
        $filePath = self::$dir . '/' . $filename;
        if (!file_exists(self::$dir)) {
            mkdir(self::$dir, 0777, true);
        }
        file_put_contents($filePath, $content, FILE_APPEND);
        echo "Дані записані у файл: $filePath\n";
    }

    public static function readFile(string $filename): string
    {
        $filePath = self::$dir . '/' . $filename;
        if (!file_exists($filePath)) {
            echo "Файл $filePath не знайдено.\n";
            return '';
        }
        echo "Читання файлу: $filePath\n";
        return file_get_contents($filePath);
    }

    public static function clearFile(string $filename): void
    {
        $filePath = self::$dir . '/' . $filename;
        if (file_exists($filePath)) {
            file_put_contents($filePath, '');
            echo "Файл $filePath очищено.\n";
        } else {
            echo "Файл $filePath не знайдено для очищення.\n";
        }
    }
}
