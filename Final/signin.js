var attempt = 3; 

function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "raviprov1@hawkmail.newpaltz.edu" && password == "Newpaltz12561"){
alert ("Login successfully");
window.location = "cs.newpaltz.edu/~raviprov1/Fall2014/Final/home.php"; 
return false;
}
else{
attempt --;
alert("You have left "+attempt+" attempt;");

if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}