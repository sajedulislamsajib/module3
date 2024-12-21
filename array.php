<?php 

// //Indexed Array
// $array2 = array(1,2,3,4,5);
// $array1 = [1,5];
// // echo $array1[2];
// // echo $array2[2];

// //find length of a array
// // echo count($array1);


// for($i=0; $i<count($array2);$i++)
// {
//     echo "hello\n";
// }

// foreach($array2 as $value){
//     echo $value . "\n";
// }

//associative array

// $person = [
//     "first_name"=>"Sajedul Islam\n",
//     "last_name"=>"Sajib\n",
//     "age"=>25,


// ];
// $students = [
//     "std1" => "asif",
//     "std2" => "naim",
//     "std3" => "karim",
//     "std4" => "chayan",



// ];
// // echo $person["first_name"]." ".$person["last_name"];
// foreach($students as $name)
// {
//     echo $name;
// }


// $students["std5"]="sajib";//add item in associative array
// // $values = array_values($students);
// var_dump($students);

// $fruits = ["apple","orange","banana","watermelon"];
// array_push($fruits,"date");
// array_unshift($fruits);
// var_dump($fruits);

//$numbers = [1,2,3,4,5,6];
//echo count($numbers);
//echo array_product($numbers);
//echo array_sum($numbers);

// if(in_array(2,$numbers)){
//     echo "2 is in the array";
// }
// $students = [
//     "std1" => "asif",
//     "std2" => "naim",
//     "std3" => "karim",
//     "std4" => "chayan",
// ];
// if(array_key_exists("std23",$students)){
//     echo "The key is exist!";
// }



//array map 


// function squre($n) {
//     return $n*$n;
// }
// $numbers = [0,1,2,3,4];
// $squreNumbers = array_map('squre', $numbers);
// print_r($squreNumbers);

// $numbers = [12,32,6,74,3,43,5,8,9];
// rsort($numbers);
// var_dump($numbers);

// $students = [
//     "std1" => "asif",
//     "std2" => "naim",
//     "std3" => "karim",
//     "std4" => "chayan",
// ];
// krsort($students);//ekhane value r index dhore sort kore
// var_dump($students);

//$name = trim("Sajedul Islam Sajib");

// $length = strlen(trim($name));
// echo $name;
//echo $name;
// echo $length;
// $name = "        Sajedul Islam Sajib";
// echo $name;
// echo "\n";
// echo str_replace(" ","",$name); 


//$folderName1 = "Students";

// if(!file_exists($folderName1)){
//    if(mkdir($folderName1,0777,true)){
//     echo "Folder Created Success";
//    }
//    else echo "Folder already exists";
// }

// if(is_dir($folderName1)){
//     $files = scandir($folderName1);
//     print_r($files);
// }
// else{
//     echo "Folder doesn't exist";
// }

//Empty dir
// $deleteEmptyDir = 'Test_dir';
// if(is_dir($deleteEmptyDir)){
//     if(rmdir($deleteEmptyDir)){
//         echo "Folder Deleted Successfully";
//     }
//     else echo "Failed";
// }
// else echo "Not Found";

//folder with content
// $dFolderName = 'TestAgain';

// if(is_dir($dFolderName)){
//     $dfiles = array_diff(scandir($dFolderName),array('.','..'));
//     foreach ($dfiles as $file){
//         $path = "$dFolderName/$file";
//         if(!is_dir($path)) {
//             unlink($path);
//             echo "Deleted: $path <br>";
//         }
//     }
// }
// else {
//     echo "Folder not found.";
// } 
