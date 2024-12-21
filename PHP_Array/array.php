<?php
//there are 3 types of array
//1.indexed array
//2.associative array
//3.multi-dimensional array
//$array1 = array(1,2,3,4,5);
//$array2 = [1,2,3,4,5];

//echo $array1[2];//we can't echo array like other variables.that's why we have to use "var_dump($array)" or "print_r($array)"
//Associative Array
// $person1 = [
//     "first_name" => "Sajedul Islam",
//     "last_name" => "Sajib",
//     "age" => 24,
    
// ];
// //echo $person1["first_name"];
// foreach($person1 as $key=>$value){
//     echo "$key:$value"."\n";
// }

//Multidimentional array


//indexed_multidimentional array
// $array = [
//     [1,2,3,4],
//     [5,6,7,8],
//     [9,10,11,12]
// ];

// echo $array[1][2];

//associative multidimentional array
$users = [
    "sajib" => [
        "age"=>25,
        "email" => "mdsajedulislamsajib25@gmail.com"
    ],
    "asif" => [
        "age" => 24,
        "email" => "asif24@gmail.com"
    ]
];

//echo $users["sajib"]["age"];

foreach($users as $username => $details){
    echo "Username:  $username\n";
    foreach($details as $key=>$value){
        echo "$key: $value\n";
    }


}