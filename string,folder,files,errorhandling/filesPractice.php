<?php
//$file = 'example.txt';
//fopen() it's an way to create a file
//open a file in write mode, or create if it doesn't exist
// $handle = fopen($file,'w');

// if($handle){
//     fwrite($handle, "Hello, this is a new file!.and i just add another sentence\n");
//     fclose($handle);
//     echo "File Created Successfully!";
// }
// else echo "Failed to create the file";

//another way to create a file and write on it

// $file1 = "example1.txt";
// $content = "This is the content of the file";

// if(file_put_contents($file1,$content)){
//     echo "file created successfully!\n";
// }else echo "Failed to create the file";

// touch('example2.txt');

// $file = 'example.txt';
// if(!is_writable(dirname($file))){
//     die("Cannot write to the directory.");
// }

// if(file_put_contents($file,"Sample Content")){
//     echo "File created successfully!";
// }
// else {
//     echo "Error creating file.";
// }

// $file = 'example.txt';

// if(file_exists($file)){
//     $content = file_get_contents($file);
//     echo "File Content:\n";
//     echo $content;
// }else{
//     echo "File doesn't exist.";
// }

$file = 'example2.txt';
if(file_exists($file)){
    if(unlink($file)){
        echo "File deleted successfully!";
    }else{
        echo "Failed to delete the file.";
    }
}

else{
    echo "File does not exist.";
}