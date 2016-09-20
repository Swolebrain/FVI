//1 In programming, what is the opposite of black?

//2 In programming, what is the opposite of x > y ?

//3 Given an array of numbers, add up all the elements
var a = [5,6,7,5433,543,53,535,53,543,543,23,412,34,45];


//Write a function has1337s which takes an array and
//returns true if the array contains the number 1337
function has1337s(arr){
  for (var i =0; i <arr.length; i++){
    if (arr[i] == 1337) return true;
  }
  return false;
}

/*Write a function that receives an array and another parameter.
It will return true if one of the elements of the array is
equal to the other param. It should return false otherwise */
function containsThing(arr,theThing){

}

/*Write a function that receives an array and another parameter.
It will return true if NONE of the elements of the array is
equal to the other param. It should return false otherwise */
function doesntContain(arr, theThing){

}


/*Write a function that receives an array of numbers and returns
the average of those numbers*/
function getAvg(arr){
    var sum = 0;
    for (var i = 0; i < arr.length; i++){
      sum = sum + arr[i];
    }
    return sum/arr.length;
}



// Write a function which draws a star triangle based
//on an input number
// starz(2) =
// **
// *
//starz(4) =
// ****
// ***
// **
// *


/* Write a function which receives a parameter n and returns the
sum of its half plus half of that, plus half of that, until You
reach a number lower than 2.
n = 100, result = 50+25+12.5+6.25+3.125+1.5625
n = 64, result = 32+16+8+4+2+1
*/

function sumHalves(n){

}
