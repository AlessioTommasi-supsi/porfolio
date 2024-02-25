<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/controller/Managers/FilterManager.php");

class Importer
{
    static function import($path = NULL, $format = [".php", ".css"])
    {
        if ($path == NULL) {
            $path = $_SERVER["DOCUMENT_ROOT"];
            echo $path;
        }

        $contents = scandir($path);
        foreach ($contents as $content) {
            switch ($content) {
                case ".":
                case "..":
                //case "Managers":
                    // "frontend" html files are not needed:
                case "view":
                    break;

                default:
                    $tmp_path = $path . "/" . $content;
                    if (is_dir($tmp_path)) {
                        Importer::import($tmp_path);
                    } else {
                        // If is format file import it
                        $filter = new Filter($format);
                        if ($filter->checkExtenction($tmp_path)) {
                            Importer::import_file($tmp_path);
                        }
                    }
                    break;
            }
        }
    }

    static function import_file($file)
    {
        require_once($file);
    }
}
