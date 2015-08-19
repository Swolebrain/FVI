/*
    There is a factory which produced 10,000 trojanos this year. The output increases by 100 each year.
    Write a program which prints the following line per each year, for 15 years:
        "On year ___, the factory produced ____ units."
    
    Finally, in the end, print a line stating the number of total units produced over 15 years.
*/

/*
 *Modify the above program so that it becomes a function which receives the number of years as input
 *
 **/

var num = prompt("Enter the number of years");
trojanosProduction(num);

function trojanosProduction(numYears) {
    var yearlyProduction = 10000;
    var increment = 100;
    var curYear = 1;
    var total = 0;
    while (curYear <= numYears){
        console.log("On year "+curYear+", the factory produced "+yearlyProduction+" units.");
        yearlyProduction+= 100;
        total += yearlyProduction;
        curYear++;
    }
    console.log("At the end of "+(curYear-1)+" years, the factory produced a total of "+total+" trojanos.");
}

