<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/controller/Managers/FilterManager.php");
class FileManager {

    static function printFolderThree($path = NULL, $format = NULL)
    {
        if ($path == NULL) {
            $path = $_SERVER["DOCUMENT_ROOT"];
        }

        $contents = scandir($path);
        foreach ($contents as $content) {
            switch ($content) {
                case ".":
                case "..":
                    break;
                default:
                    $tmp_path = $path . "/" . $content;
                    if (is_dir($tmp_path)) {
                        FileManager::printFolderThree($tmp_path, $format);
                    } else {
                        FileManager::printSingleContent($tmp_path, $format);
                    }
                    break;
            }
        }
    }
    static function printFolderContent($path = NULL, $format = NULL)
    {
        if ($path == NULL) {
            $path = $_SERVER["DOCUMENT_ROOT"];
        }

        $contents = scandir($path);
        foreach ($contents as $content) {
            switch ($content) {
                case ".":
                case "..":
                    break;
                default:
                    $tmp_path = $path . "/" . $content;
                    if (is_dir($tmp_path)) {
                        FileManager::printFolder($tmp_path);
                    } else {
                        FileManager::printSingleContent($tmp_path, $format);
                    }
                    break;
            }
        }
    }

    static function printSingleContent($path = NULL, $format = NULL){
        if ($path == NULL) {
            $path = $_SERVER["DOCUMENT_ROOT"];
        }
        $filter = new Filter($format);
        if($filter->checkExtenction($path)){
            FileManager::print_file($path);
        }
    }

    static function print_file($file)
    {
        echo $file . "<br>";
    }

    

    static function printFolder($path){
        echo ("dir: ".$path . "<br>");
    }
    
}