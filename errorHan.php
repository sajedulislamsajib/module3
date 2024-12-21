<?php
//parse Error ---> Syntax Mistake

//echo "Hello World"
//myUndefinedFunction();
//include(habijani.php);

try{
    if(!file_exists('habijabni.txt')){
        throw new Exception("File not Found");
    }
}
catch(Exception $e)
{
    echo $e->getMessage();
}

?>