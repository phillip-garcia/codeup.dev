"use strict"

var luckyNumber = Math.floor(Math.random()* 6);
var cost = 60;

switch (luckyNumber) {
	case 0:
		console.log("Your cost is: $" + (cost - (cost * 0)));
		break;
	case 1:
		console.log("Your cost is: $" + (cost - (cost * .1)));
		break;
	case 2:
		console.log("Your cost is: $" + (cost - (cost * .25)));
		break;
	case 3:
		console.log("Your cost is: $" + (cost - (cost * .35)));
		break;
	case 4:
		console.log("Your cost is: $" + (cost - (cost * .50)));
		break;
	case 5:
		console.log("Your cost is: $" + (cost - (cost * 1.00)));
		break;
}




var monthNumber = (Math.floor(Math.random()* 12) + 1)

switch (monthNumber) {
	case 1: 
		console.log("January");
		break;
	case 2: 
		console.log("February");
		break;
	case 3: 
		console.log("March");
		break;
	case 4: 
		console.log("April");
		break;
	case 5: 
		console.log("May");
		break;
	case 6: 
		console.log("June");
		break;
	case 7: 
		console.log("July");
		break;
	case 8: 
		console.log("August");
		break;
	case 9: 
		console.log("September");
		break;
	case 10: 
		console.log("October");
		break;
	case 11: 
		console.log("November");
		break;
	case 12: 
		console.log("December");
		break;









}