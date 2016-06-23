/* write a function which receives an array of numbers
and returns the sum of all the numbers */
function sumArr(arr){
  var sum = 0;
  for (var i =0; i < arr.length; i++){
    sum += arr[i];
  }
  return sum;
}
