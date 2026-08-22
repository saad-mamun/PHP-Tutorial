<?php




$file = "example.text";
$content = "This is text content for example file";

if(file_put_contents($file, $content)){
    echo "File created successfully";
}else{
    echo "Failed to create File";
}

// Athoba...

$fileTwo = "second-file.txt";
// w-means write
$handle = fopen($fileTwo, 'w');

if($handle){
    fwrite($handle, "Hello I am second file");
    fclose($handle);
    echo "Second file created successfully";
}else{
    echo "Failed" ;
}