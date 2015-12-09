


//1) demorgan's laws, present them

//2)
if (!rich && !happy)  
    killSelf()
else
    liveOn();
    
//3)
if (!(urgent && important))
    usePostOfice();
else
    useFedex();
    
//4)
if (x > 5 && x <= -5)
    doSomething();

//4b)
if (x > 5 || x <= -5)
    doSomething();

//5)
if ( !(x > 10 && y < 15))
    alert("You got it!");
else
    prompt("What you need?");
    
//6)
if ( !(x < 10) || y <= 10 || z <= 25 || !dead ) {
    console.log("You know your DeMorgan's Laws");
}

//7)
if (!(!alive || distance > 1000 || trapped || enemies < 0)) {
    alert("game goes on");
}

//8)
if (!(dead && level < 99 && world == "Earth")) {
    alert ("Life goes on");
}

//9) Generate a random number between 0 and 1 in Javascript
Math.random()

//10) Generate a random number between 0 and 10 in Javascript
Math.random()*10

//11) Generate a random integer between 0 and 10 (inclusive)
Math.round( Math.random()*10 )

//12) Generate a random number between 5 and 10
Math.random()*5 + 5

//12b) Generate a random integer between 5 and 10
Math.round( Math.random()*5 + 5 )

//13) Generate a random integer between -10 and 30
Math.round(Math.random()*40 - 10 )

//14) Write a coin flip function
function coinFlip(){
    
}

// 15) Write a card picking function that outputs
// cards from a standard deck: ex 'Ace of Clubs', 'Queen of Hearts', 
// '10 of Diamonds', '8 of Spades'
// There are 4 suits: Hearts, Diamonds, Clubs, Spades
// There are 13 cards for each suit: Ace, 2-10, Jack, King, Queen

// steps:
// generate a random number between 1-4 for suit
// set the value of a string variable depending on that 1-4 number
// generate a random number between 1-13 for the card's number
// put the number and the suit string together and return it
function pickCard(){
    var suit = Math.round(Math.random()*3);
    if (suit === 0) suit = "Hearts";
    else if (suit === 1) suit = "Diamonds";
    else if (suit === 2) suit = "Clubs";
    else suit = "Spades";
    
    
    
    return suit;
    
}








//SET THEORY
/*
1) Let Universe = O = {1, 2, 3, ...., 1000}
    Let A = {50, 100, 150, 200, 250, ... , 1000}
    What is |A^-1|?
    
    What is |OUA|?
    What is |OnA|? (intersection)
    
    Let Universe be the same
    Let B = {900, 901, 902, 903}
    
    What is |B^-1|?
}


*/