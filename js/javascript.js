"use strict"
//cust name
//product name
//product price
// one more?
//product name
//total == sum of all the prices
//apply discount
//bonus
//another customer


var customer = {};	
	customer.name = "";
	customer.purchased = "";

var product = {};
	product.name = "";
	product.price = (Number);


	customer.name = prompt("What is your name?");
	product.name = prompt("What are you purchasing?");
	product.price = prompt("How much does it cost?");
	var priceArray = [Number(product.price)];
	var otherProducts = confirm("Are you purchasing anything else?");

	while (otherProducts == true){
	product.name = prompt("What are you purchasing?");
	product.price = prompt("How much does it cost?");
	priceArray.push(Number(product.price));
	otherProducts = confirm("Are you purchasing anything else?");
}

console.log(priceArray);

function beforeDiscount() {
		var subTotal = 0;
		for (var i = 0; i < priceArray.length; i++) {
			subTotal = priceArray[i] + subTotal;
		}
		return subTotal;
 		
}

console.log(beforeDiscount());

function finalCost() {
	var total;
	var subTotal = beforeDiscount();
	if (subTotal > 200){
		total = subTotal - (.35 * subTotal);
	} else {
		total = subTotal;
	}
	return total;
}
var subTotal = beforeDiscount();
var SavedAmount = total - subTotal;
var total = finalCost();
console.log("Your total is: $" + total + ". You saved: $" + SavedAmount + ".");














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