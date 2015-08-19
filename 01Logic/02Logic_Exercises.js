//1 what does this do?
if (x === 5) {
    x = 5;
}

//2 what does this do?
if (x === 5 && x === 6) {
    y = 6; 
} //always false

//3 given booleans young, pretty, rich
//are the two following code blocks equivalent?
if (young && (pretty || rich)) {
    //code
    var marry = true;
}
else{
    marry = false;
}

if ( (young && pretty) || (young && rich)) {
    //code
    var marry = true;
}
else{
    marry = false;
}

//4 what will be the message in the alert box?
if (x < 5 || x > 5) {
    alert ("hello");
}
else{
    alert("goodbye");
}

//5 what will be the message in the alert box?
if (x <= 5 || x > 5) {
    alert ("hello");
}
else{
    alert("goodbye");
}

//6 what is wrong with this code?
var x = prompt ("Enter a grade between 0 and 100");
if (x <= 65) {
    alert("FAIL. HAHAHA"); 
}
if (x > 65) {
    alert("You passed!")
}
if (x > 70) {
    alert("You scored a C");
}
if (x > 80) {
    alert("Your grade is B");
}
if (x > 90) {
    alert("Your grade is A");
}


//7 fix the program above


//8 Make the following statements print "true" by using the appropriate operator
console.log("dingaloo".length   4);
console.log("hello kitty".length  1222);
console.log(8*8   64);


































