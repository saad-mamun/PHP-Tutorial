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
//     echo "folder already exists";
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

$deleteEmptyDir = 'Test_dir';
if(is_dir($deleteEmptyDir)){
    if(rmdir($deleteEmptyDir)){
        echo "Folder successfully deleted";
    }else{
        echo "Failed";
    }
}else{
    echo "Not found";
}