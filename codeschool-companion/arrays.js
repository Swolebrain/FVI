/* write a function which receives an array of numbers
and returns the sum of all the numbers */
function sumArr(arr){
  var sum = 0;
  for (var i =0; i < arr.length; i++){
    sum += arr[i];
  }
  return sum;
}


/* write a function which receives an array of numbers and
returns the average of all the numbers */
function avgArr(arr){
  if (ar.length === 0) return 0;
  var sum = 0;
  for (var i =0; i < arr.length; i++){
    sum += arr[i];
  }
  return sum/arr.length;
} 
