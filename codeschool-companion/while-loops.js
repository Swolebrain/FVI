/* Write a loop which prints the following sequence of statements:
In 1 years, it will be 2017
In 2 years, it will be 2018
In 3 years, it will be 2019
...
In 50 years, it will be 2066
*/



/*
Write a loop which prints the following sequence of statements:
0 years ago it was 2016
5 years ago it was 2011
10 years ago it was 2006
...
100 years ago it was 1916
*/
var yr = 0;
while (yr <= 100){
  console.log(yr+" years ago it was "+(2016-yr));
  yr += 5;
}

/*
Write a loop that counts down from 1000 to 950 and logs each number
*/
var ctr = 1000;
while (ctr > 949){
  console.log(ctr);
  ctr=ctr-1;
}

/* There are 6 Donald Trump supporters this month. Every week, they
double in number. If there are 30 weeks left until election, how many
Donald Trump supporters will there be by the time the election comes? */


/* You have 100 e. coli bacteria in your face. Every minute, the number
of bacteria duplicates. How many bacteria will you have in 31 minutes?
*/


/* Consider the above problem. Every 30th minute, you wash your face
and kill 98% of the bacteria in your face. Write a program which
uses console.log statements to simulate the progression of bacteria
in your face using the following format:
"After 1 minutes, you have 200 bacteria on your face"
"After 2 minutes, you have 400 bacteria on your face"
"After 3 minutes, you have 600 bacteria on your face"
...
"After 29 minute, you have ___ bacteria on your face"
"On minute 30, you wash your face and kill 98% of bacteria"
"After 30 minutes, you have ___ bacteria on your face"
*/
