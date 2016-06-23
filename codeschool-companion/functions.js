

function validateEmail(){
  var email = prompt("What's your email?");
  if (typeof(email) != 'string'){
    alert("Please cooperate");
    return;
  }
  var atCtr = 0, perCtr = 0;
  for (var i = 0; i < email.length; i++){
    if (email[i] == '@') atCtr ++;
    if (email[i] == '.') perCtr++;
  }
  if (atCtr === 1 && perCtr == 1 && email.indexOf("@") < email.indexOf(".")){
    alert("Email is valid");
  }
  else{
    alert("Email is invalid");
  }
}




function(){
  //var x;
  if (10 > 5){
    var x = 10;
  }
  else{
    var x = 11;
  }
  console.log(x);
}
