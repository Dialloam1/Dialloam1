<?php
$email = "dialloam5@aa.com";

function veriEmail($email)
{
if(preg_match("/[a-zA-Z0-9.-]+@[a-z0-9.-]{2,}\.[a-zA-Z]{2,4}/",$email)){
    return true;
}else {
    return false;
}
}
if (veriEmail("dialloam5@aa.com"))
{
   echo "ok";
} else {
    echo "error";
}

echo "<br>";

if(veriEmail($email)){
    echo "ok";
}else {
    echo "error";
}
