<?php
$file_h = fopen("arif.txt","r");
//if(fwrite($file_h, "welcome to learn file handle in php")) {
//    echo "data write done";
//}
//else{
//    echo "not done";
//}
//fclose($file_h);

echo fgetc($file_h);
while(!feof($file_h)){
    $data = fgetc($file_h);
    if( $data === '\n'){
        $data = '<br>';
    }
    else{
       echo $data;
    }
}

if(unlink(arif1.txt)){
    echo "yes deleted";
}

copy (pahla , dusra);


















?>


