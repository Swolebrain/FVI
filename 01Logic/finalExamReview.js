/*
 *Given a number n, return true if it is within 10 of 100 or 200. Note: Math.abs(num)
 *computes the absolute value of a number. 

    nearHundred(93) → true
    nearHundred(90) → true
    nearHundred(89) → false
 */

function nearHundred(n){
    if ( (n >= 90 && n <= 110) || (n >=190 || n <= 210)){
        return true;
    }
    return false;
    //return Math.abs(n-100) <=10 || Math.abs(n-200) <= 10;
}

/*
 *Given a string, take the last char and return a new string with the
 *last char added at the front and back, so "cat" yields "tcatt".
 *The original string will be length 1 or more. 

    backAround("cat") → "tcatt"
    backAround("Hello") → "oHelloo"
    backAround("a") → "aaa"
*/
function backAround(str){
    var lastChar = str.substring(str.length-1, str.length);
    return lastChar+str+lastChar;
}

/*
 *Given an array of ints, return true if 6 appears as either the
 *first or last element in the array. The array will be length 1 or more. 

    firstLast6([1, 2, 6]) → true
    firstLast6([6, 1, 2, 3]) → true
    firstLast6([13, 6, 1, 2, 3]) → false
 *
 */
function firstLast6(arr){
    return arr[0] == 6 || arr[arr.length-1] == 6;
}


/*
 *Given an array of ints, return true if the array is length 1 or
 *more, and the first element and the last element are equal. 

        sameFirstLast([1, 2, 3]) → false
        sameFirstLast([1, 2, 3, 1]) → true
        sameFirstLast([1, 2, 1]) → true
 *
 */
function sameFirstLast(coll){
    return coll[0] == coll[coll.length-1];
}

/*
 *Given 2 arrays of ints, a and b, return true if they have the same
 *first element or they have the same last element. Both arrays 
 will be length 1 or more. 

    commonEnd([1, 2, 3], [7, 3]) → true
    commonEnd([1, 2, 3], [7, 3, 2]) → false
    commonEnd([1, 2, 3], [1, 3]) → true
 */
function commonEnd(arg1, arg2) {
    if (arg1[0] == arg2[0] || arg1[arg1.length-1] == arg2[arg2.length-1]) {
        return true;
    }
    return false;
}

/*
 *Given an array of numbers, return the sum of the first 2 elements in
 *the array. If the array length is less than 2, just sum up the
 *elements that exist, returning 0 if the array is length 0. 

    sum2([1, 2, 3])     → 3
    sum2([1, 1])        → 2
    sum2([1, 1, 1, 1])  → 2
    sum2([])            → 0
    sum2([10])          → 10
 *
 */
function sum2(list){
    if (list.length == 0) return 0;
    if (list.length == 1) return list[0];
    return list[0] + list[1];
}

/*
 *Given an array length 2, return true if it contains a 2 or a 3. 

    has23([2, 5]) → true
    has23([4, 3]) → true
    has23([4, 5]) → false
 *
 */
function has23(arr){
    return arr[0] == 2 || arr[0] == 3 || arr[1] == 2 || arr[1] == 3;
}

/*
 *Given an array of unknown length, return true if it contains a 2 or a 3. 

    contains23([2, 5]) → true
    contains23([4, 7, 28, 54, 3]) → true
    contains23([4,, 9, 7, 10000, 9000 5]) → false
 *
 */
function contains23(arg) {
    for (var i = 0; i <arg.length; i++){
        if (arg[i]==2 || arg[i]==3) {
            return true;
        }
    }
    return false;
}

/*
 * Given an array of unknown length, determine if a given input (parameter)
 * occurs within the array
 *
 *  containsx([2, 3, 4, 5], 5) → true
 *  containsx([2, 3, 4, 5], 4) → true
 *  containsx([2, 3, 4, 5], 1) → false
 *
 */
function containsx(arg1, arg2){
    for (var i =0; i < arg1.length; i++) {
        if (arg1[i] == arg2) {
            return true;
        }
    }
    return false;
}



/*
 *Given an array length 2, return true if it does not contain a 4 or 5. 

    no45([4, 5]) → false
    no45([4, 2]) → false
    no45([3, 6]) → true
 *
 *
 */
function no45(theArray){
    return theArray[0] != 4 && theArray[0] != 5 && theArray[1] != 4 && theArray[1] != 5;
}

/*
 *Given an array of unknown length, return true if it does not contain a 6 or 7. 

    no67([4, 6, 9, 1000, 5]) → false
    no67([4, 2, 7, 7000, 9000]) → false
    no67([3, 5]) → true
 *
 *
 */
function no67(theArray){
    var found = false;
    for (var i = 0; i <theArray.length; i++){
        if (theArray[i] == 6 || theArray[i] == 7) {
            found = true;
        }
    }
    return !found;
}

/*
 *Given an array, return a new array with double
 *the length where its last element is the same as
 *the original array's last element, and all the
 *other elements are 0.
 *The original array will be length 1 or more.

    makeLast([4, 5, 6]) → [0, 0, 0, 0, 0, 6]
    makeLast([1, 2]) → [0, 0, 0, 2]
    makeLast([3]) → [0, 3]
 *
 */
function makeLast(list){
    var newArr = [];
    for (var i = 0; i < list.length*2; i++) {
        newArr.push(0);
    }
    newArr[newArr.length-1] = list[list.length-1];
    return newArr;
}


/*
 *Given an array of unknown length containing only numbers, return the sum
 *of all its elements
 *  sumArray([3,3,3,3])     → 12
 *  sumArray([1,3,5,8,13])  → 30
 */
function sumArray(theArray) {
    var sum = 0;
    for (var i =0; i < theArray.length; i++) {
        sum += theArray[i];
    }
    return sum;
   
}


