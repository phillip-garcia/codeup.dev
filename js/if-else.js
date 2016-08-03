'use strict';


var username = prompt("What is your name?");
var subject = prompt("Hello "+ username + ". What subject are you taking?");
var gradesPrompt = prompt("What was your grade in " + subject + "?");
var gradesArray = [Number(gradesPrompt)];
var otherGrades = confirm("Do you have more grades in any other subjects?");

while (otherGrades == true){
	var otherSubject = prompt("What subject is this grade in?");
	var nextGrade = prompt("What was your grade in " + otherSubject + "?");
	gradesArray.push(Number(nextGrade));
	otherGrades = confirm("Do you have more grades in any other subjects?");
}

console.log(gradesArray);

var average = {
	grades: this.gradesArray,
	gradesTotal: this.gradesArray.length,

	getAverage: function() {
		var total = 0;
		for(var i = 0; i < this.gradesTotal; i++) {
			total = (total + this.grades[i]);
		}
		return total / this.gradesTotal;
	}
}

var awesomeGrade = 80; 

if (average.getAverage() >= awesomeGrade) {
	alert("You're average score is: " + Math.round(average.getAverage()) + " You are awesome!");
} else {
	alert("You're average score is: " + Math.round(average.getAverage()) + " You need more work...");
}















console.log('grade question');
var grade1 = 70;
var grade2 = 80;
var grade3 = 95;

var combinedGrades = grade1 + grade2 + grade3;
var numberOfGrades = 3;
var awesomeGrade = 80;

var average = combinedGrades / numberOfGrades;

if (average > awesomeGrade) {
	console.log("You're Awesome!!!!");
} else {
	console.log('You need more practice.');
}





console.log('heb question');
var cameronCost = 180;
var ryanCost = 250;
var georgeCost = 320;

var discountCostRequirement = 200;
var discount = 0.35;

var cameronCostWithDiscount;
if (cameronCost > discountCostRequirement) {
	cameronCostWithDiscount = cameronCost - (cameronCost * discount);
} else {
	cameronCostWithDiscount = cameronCost;
}
console.log('Cameron: ' + cameronCost + ', ' + cameronCostWithDiscount);

var ryanCostWithDiscount;
if (ryanCost > discountCostRequirement) {
	ryanCostWithDiscount = ryanCost - (ryanCost * discount);
} else {
	ryanCostWithDiscount = ryanCost;
}
console.log('Ryan: ' + ryanCost + ', ' + ryanCostWithDiscount);

var georgeCostWithDiscount;
if (georgeCost > discountCostRequirement) {
	georgeCostWithDiscount = georgeCost - (georgeCost * discount);
} else {
	georgeCostWithDiscount = georgeCost;
}
console.log('Ryan: ' + georgeCost + ', ' + georgeCostWithDiscount);





console.log('coin flip question');
var flipACoin = Math.floor(Math.random()* 2);

if (flipACoin) {
	console.log('Buy a house');
} else {
	console.log('Buy a car');
}
*/
// console.log((flipACoin) ? 'Buy a house' : 'Buy a car');