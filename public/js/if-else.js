"use strict"

var gradeAverage = ((70 + 80 + 95) % 3);

if (gradeAverage < 80) {
	console.log("You're Awesome.")
}
else {
	console.log("You need to practice more")
}




var cameron = 180;
var ryan = 250;
var george = 320;
var discount = 0


if (cameron > 200) {
	discount = (cameron - (cameron * .035));
	console.log("Cameron will have to pay $" + discount + ", his original cost was $" + cameron + ".");
} 
else {
	console.log("Cameron doesn't get a discount, his total is $" + cameron + ".");
} 

if (ryan > 200) {
	discount = (ryan - (ryan * .035));
	console.log("Ryan will have to pay $" + discount + ", his original cost was $" + ryan + ".");
} 
else {
	console.log("Ryan doesn't get a discount, his total is $" + ryan + ".");
} 

if (george > 200) {
	discount = (george - (george * .035));
	console.log("George will have to pay $" + discount + ", his original cost was $" + george + ".");
} 
else {
	console.log("George doesn't get a discount, his total is $" + george + ".");
} 




var flipACoin = Math.floor(Math.random()* 2);
console.log(flipACoin)
var flipACoin = (flipACoin == 0) ? "Go buy a car." : "Buy a house."
console.log(flipACoin)

