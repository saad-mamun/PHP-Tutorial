<?php

$folderName = "Students";


//create

// if(!file_exists($folderName)){
//     if(mkdir($folderName, 0777, true)){
//         echo "folder create successfully";
//     }else {
//         echo "Failed to create folder" ;
//     }
// }else{
//     echo "folder already exist";
// };




//read

// if(is_dir($folderName)){
//     $files = scandir($folderName);
//     print_r($files);
// }else{
//     echo "Folder dose not exists";
// }


//delete
// 1st file create kora

// if (mkdir('Test_dir', 0777, true)) {
//     echo "folder create successfully";
// } else {
//     echo "Failed to create folder";
// }

// $deleteEmptyDir = 'Test_dir';
// if(is_dir($deleteEmptyDir)){
//     if(rmdir($deleteEmptyDir)){
//         echo "Folder successfully deleted";
//     }else{
//         echo "Failed to delete";
//     }
// }else{
//     echo "Folder Not found";
// }


// folder with content delete
$dFolderName = 'TestAgain';
if (is_dir($dFolderName)) {
    $dFiles = array_diff(scandir($dFolderName), ['.', '..']);
    foreach ($dFiles as $file) {
        $path = "$dFolderName/$file";
        if (unlink($path)) {
            echo "Successfully Deleted: $file\n";
        } else {
            echo "Failed to delete: $file\n";
        }
    }
} else {
    echo "Directory '$dFolderName' does not exist.\n";
}