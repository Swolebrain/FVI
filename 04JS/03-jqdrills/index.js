/*Given a non-empty string like "Code" 
return a string like "CCoCodCode".

stringSplosion("Code") → "CCoCodCode"
stringSplosion("abc") → "aababc"
stringSplosion("ab") → "aab"
stringSplosion("a123cd") → "aa1a12a123a123ca123cd"
*/
function stringSplosion(arg){
    var result = "";
    for (var i = 1; i <= arg.length; i++){
        result += arg.substring(0,i);
    }
    return result;
}

/*Given a non-empty array like [1,2,3,4] 
return an array like [1,1,2,2,3,3,4,4].

arrSplosion([1,2,3]) → [1,1,2,2,3,3]
arrSplosion([10,100]) → [10,10,100,100]
arrSplosion(["ab", "bc"]) → ["ab", "ab", "bc", "bc"]
*/
function arrSplosion(arg){
    var result = [];
    for (var i = 0; i < arg.length; i++){
        result.push(  arg[i]     );
        result.push(  arg[i]     );
    }
    return result;
}

/*
Write a function which takes two numbers, start and 
end, and adds all integers between the two to an array.
Then return that array.
addToArr(2, 6) -> [2, 3, 4, 5, 6]
addToArr(10, 15)  -> [10, 11, 12, 13, 14, 15]
addToArr(10, 5)  -> []
*/
function addToArr(num1, num2){
    var result = [];
    for (var i =num1; i <= num2; i++ ){
        result.add(i);
    }
    return result;
}

/*
Given an array of numbers, return the number 
of 9's in the array. 

arrayCount9([1, 2, 9]) → 1
arrayCount9([1, 9, 9]) → 2
arrayCount9([1, 9, 9, 3, 9]) → 3
arrayCount9([1, 9000, 2, 3, 5, 8, 100]) → 0
*/
function arrayCount9(arg){
    var count = 0;
    for (var i = 0; i < arg.length; i++){
        if (arg[i] === 9){
            count++;
        }
    }
    return count;
}


/*
Given an array of numbers, and an integer n,
return the number of times n can be found
within the array.

arrayCountN([1, 2, 9], 2) → 1
arrayCountN([1, 9, 9], 5) → 0
arrayCountN([1, 9, 9, 3, 9], 9) → 3
arrayCountN([1, 9000, 2, 3, 5, 8, 100], 100) → 1
*/
function arrayCountN(arg, n){
    //easy solution:
    var counter = 0;
    for (var i = 0; i < arg.length; i++){
        if (arg[i] === n){
            counter++;
        }
    }
    return counter;
    /*scarface solution
    var filtered = arg.filter(function(elem, index){
        return elem === n;
    } );
    return filtered.length;*/
}
/*
Given an array of strings, and a string str,
return the number of times str can be found
within the array.

arrayCountStr(["hello", "highi", "9"], "hi") → 1
arrayCountStr(["1", "one", "95xx"], "5") → 1
arrayCountStr(["cunning", "inning", "nite"], "ni") → 3
*/

function arrayCountStr(arr, str){
    var ctr = 0;
    for (var i = 0; i < arr.length; i++){
        if ( arr[i].indexOf(str)  >= 0  ){
            ctr++;
        }
    }
    return ctr;
}

/*
Given an array of Strings, write a function that
returns a new array build from the old one but with
the string " for me to poop on" added at the end.

triumph(["hello", "conan"]) -> ["hello for me to poop on",
                                "conan for me to poop on"]
triumph(["morning", "night"]) ->
                ["morning for me to poop on",
                "night for me to poop on"]
["xxxx", "b", "c", "x95", "p90x", "crossfit"]
*/
function triumph(arr){
    var newArray = [];
    for (var i = 0; i < arr.length; i++){
        newArray.push(arr[i]+" for me to poop on");
    }
    return newArray;
}

/*Given an array of jquery elements, and a string
str, return the number of times str is inside the
contents fo the jquery elements */
function countContent(jqArr, str){
    var counter = 0;
    for (var i = 0; i < i<jqArr.length; i++){
        if ($(jqArr[i]).html().indexOf(str) >= 0){
            counter++;
        }
    }
    return counter;
}

/*Given an array of jquery elements, and a string
str, return true if the string str appears in 
two consecutive jquery elements, false otherwise*/
function hasConsec(jqArr, str){
    for (var i =0; i < jqArr.length-1; i++){
        if ($(jqArr[i]).html().includes(str)
           && $(jqArr[i+1]).html().includes(str) ){
            return true;
        }
    }
    return false;
}

/*Given an array of jquery elements, and a string
str, remove all occurrences of str in all those
jQuery elements*/
function removeBadWord(jqArr, str){
    
}


/*Given a jQuery Array of h1 elements, remove
all but the first word from the h1 element, enclose
that string in an h2 element, and append it after 
the h1 element
    Ex: $("<h2>"+$("h1").html()+"</h2>").insertAfter($("h1"));
*/
    function appendToArr(jqArr){
        for (var i = 0; i < jqArr.length; i++){
            var text = $(jqArr[i]).html();
            var space = text.indexOf(" ");
            var firstWord = text.substring(0,space+1);
            var rest = text.substring(space+1);
            $(jqArr[i]).html(firstWord);
            $("<h2>"+rest+"</h2>").insertAfter($(jqArr[i]));
        }
    }
console.log("thug life");


/*

*/


var ctr = 0;
while (ctr <= 100){
    if (ctr%2===0)
        console.log(ctr);
    ctr++;
}



/*
    log all even numbers between 0 and 100 to the console
    var x is even if x%2===0
*/

 


/*
    Write a function which takes in an array and a string
    and returns true if the string is equal to any of the 
    elements in the array.
    findString(["hi", "hello", "jesus"], "jesus") -> true
    findString(["no", "yes", "no means no"], "mickey mouse") ->false
    findString(["perdedor", "loser", "beck"],"beck") -> true
*/
function findString(theArray,theString){
    for (var i = 0; i < theArray.length; i++){
        if (theArray[i] === theString){
            return true;
        }
        
    }
    return false;
}
/*
    Write another search function that looks for an element
    in an array and returns the index of that element
    if found. It should return -1 if not found.
    findIndex(["hi", "hello", "jesus"], "jesus") -> 2
    findIndex(["no", "yes", "no means no"], "mickey mouse") -> -1
    findIndex(["beck", "loser", "nine"],"beck") -> 0
*/
function findIndex(arr, str){
    
}

/* Write a function which receives an array as input and 
returns a string representing each element in the array,
separated by spaces
EX:
concatArr(["the", "quick", "brown", "fox"]) -> "the quick brown fox"
concatArr(["thug", "life"])  -> "thug life"
concatArr(["Victoria's", "Secret"]) -> "Victoria's Secret"
concatArr(["short", "vw", "stock"])  -> "short vw stock"  */
function concatArr(x){
    var result = "";
    for (var i =0; i < x.length; i++){
        result = x[i] + result + " " ;
    }
}

/*
Write a function that receives a jQuery selector and a number
n, then appends to it h1 elements containing the following 
Strings:
"<h1>Title 1</h1>"
"<h1>Title 2</h1>"
...
"<h1>Title num</h1>

*/
function appendToElement(elem, num){
    for(....){
        $(elem).append("<h1>Title "+i+"</h1>");
    }
}

function hellox(str, b, c, c){
        ...
    }

