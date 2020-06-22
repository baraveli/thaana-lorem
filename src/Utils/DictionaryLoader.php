<?php

namespace ThaanaLorem\Utils;

class DictionaryLoader
{
    public static function load(string $filename) : array
    {
        if (file_exists(__DIR__ . '\Dictionary\\' . $filename .  '.json')) {
            $path = __DIR__ . '\Dictionary\\' . $filename .  '.json';
        } else {
            $path = getcwd() . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'baraveli' . DIRECTORY_SEPARATOR . 'thaanalorem' . DIRECTORY_SEPARATOR . 'Dictionary' . DIRECTORY_SEPARATOR . $filename . '.json';
        }

        $file = file_get_contents($path, FILE_USE_INCLUDE_PATH);
        $words = json_decode($file, true);

        if (!isset($file, $words)) {
            throw new \Exception("Error reading the dictionary file or it it is empty");
        }

        return $words;
    }
}
