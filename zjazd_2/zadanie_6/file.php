<?php
$path = $_POST["path"] ?? "";
// check if path start with . and folder name ends with /
if ($path[strlen($path) - 1] !== "/" || $path[0] !== ".") {
    echo "<h1>Error: File path is wrong!</h1>";
    die();
}

$action = $_POST["action"] ?? 1;
$folderName = $_POST["folder_name"];
$fullPath = $path . $folderName;

switch ((int)$action) {
    case 2:
        //check if folder is not empty
        if ((count(glob("$fullPath/*")) === 0)) {
            //check if folder exists
            if (!file_exists($fullPath)) {
                echo "<h1>Error: Folder not exists!!</h1>";
                die();
            }

            //remove folder
            rmdir($fullPath);

            //check if folder has been deleted successfully
            if (!is_dir($fullPath)) {
                echo "<h1>Folder has been deleted successfully!</h1>";
            } else {
                echo "<h1>Error: Cannot delete folder!!</h1>";
                die();
            }
        } else {
            echo "<h1>Error: Folder is not empty!</h1>";
            die();
        }
        break;
    case 3:
        //check if folder exists
        if (!file_exists($fullPath)) {
            //make dir
            mkdir($fullPath);

            //check if folder has been created successfully
            if (is_dir($fullPath)) {
                echo "<h1>Folder has been created successfully!</h1>";
            } else {
                echo "<h1>Error: Cannot create folder!!</h1>";
                die();
            }
        } else {
            echo "<h1>Error: Folder already exists!</h1>";
            die();
        }
        break;
    case 1:
    default:
        //check if folder exists
        if (file_exists($fullPath)) {

            //read folder
            $files1 = scandir($fullPath);

            //list folder items
            foreach ($files1 as $key => $item) {
                echo "<p>[$key] => $item</p>";
            }
        } else {
            echo "<h1>Error: Folder don't exist!</h1>";
            die();
        }
        break;
}