

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

/*
Given 2 positive int values, return the larger value that is in
the range 10..20 inclusive, or return 0 if neither is in that range.
*/

function max1020(a,b){
  if ( (a > b && isbw1020(a)) ) return a;
  else if (b > a && isbw1020(b) ) return b;
  else if ( a > b && !isbw1020(a) && isbw1020(b)) return b;
  else if (b > a && !isbw1020(b) && isbw1020(a)) return a;
  return 0;

  function isbw1020(x){
    return x >= 10 && x <= 20;
  }
}











if ( _____ ){

} else if ( _____ ){

} else if ( _____ ){

}else{

}



for (var i = ____; i < _____; i++){
  //do something with i
}


function(a,b,....c){
  //function code
}


/* Arrays */
//creation:
var myArray = [1,2,3,4,5];
//access:
var x = myArray[3];
//assignment to a cell:
myArray[4] = 10; //[1,2,3,4,10]
//get length
myArray.length //5
//remove last element
var y = myArray.pop(); // y = 10; myArray = [1,2,3,4]
//add elements
myArray.push(90); //myArray = [1,2,3,4,90]
//delete an elements
delete myArray[2]; // myArray = [1,2,undefined,4,90]
//iterate through array
for (var i = 0; i <myArray.length; i++){
  //do something with arr[i]
}
