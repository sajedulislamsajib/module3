<?php

//mkdir("new folder1",0777,true);
// rmdir("new folder1");

// $folder = 'new folder';
// if(is_dir($folder)){
//     $files = scandir($folder);
//     echo "Contents of the folder:\n";
// foreach ($files as $file){
//         if($file != '.' && $file != '..'){
//             echo $file . "\n";
//         }
//     }
// } else {
//     echo "Folder does not exist.";
// }

//using rmdir() function to remove the folder those are empty
// $folder = 'new folder1';

// if(is_dir($folder)){
//     if(rmdir($folder)){
//         echo "Folder removed successfully.";
//     }
//     else{
//         echo "Failed to delete the folder. Make sure it is empty.";
//     }
// }
// else{
//     echo "Folder does not exist.";
// }

//delete folder with files, using unlink() function


// function deleteFolder($folder){
//     if(is_dir($folder)){
//         $files = array_diff(scandir($folder), array('.','..'));
//         foreach($files as $file){
//             $path = "$folder/$file";
//             is_dir($path)? deleteFolder($path): unlink($path);
//         }
//         return rmdir($folder);
//     }
//     return false;
// }

// $folder = 'newfolder';
// if(deleteFolder($folder)){
//     echo "Folder and its contents deleted successfully.";
// }else {
//     echo "Failed to delete folder";
// }


//check if a folder exists or not
// $folder = 'Students';
// if(is_dir($folder)){
//     echo "Folder already exists.";
// }
// else echo "Folder does not exist.";



//rename a folder
// $oldFolder = 'Students';
// $newFolder = 'students';
// if(is_dir($oldFolder)){
//     if(rename($oldFolder, $newFolder)){
//         echo "Folder renamed successfully.";
//     }
//     else{
//         echo "Failed to rename the folder.";
//     }
// }
// else{
//     echo "The folder does not exist.";
// }