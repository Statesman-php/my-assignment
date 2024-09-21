<?php
function call_name(){
print("Greetings to you Mr Kategaya Ibrahim");
}
function calcAge($current_year,$Dob){
$Age=$current_year-$Dob;
return$Age;
}
function Home_address(){
 print("Busaabala");
}
call_name();
print("!<br/> Thank you for coming back to\t");
Home_address();
print("<br> You are\t".calcAge(2024,2002)."\tyears old");
?>