<?php

$folderName = "Students";

if(!file_exists($folderName)){
    if(mkdir($folderName, 0777, true)){
        echo "folder create successfully";
    }else {
        echo "Failed to create folder" ;
    }
}else{
    echo "folder already exists";
};