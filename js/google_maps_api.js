"use strict";
//first terrible attempt
var zoom5 = function () {
	map1.setZoom (5);
}
var zoom15 = function () {
	map1.setZoom (15);
}
var zoom20 = function () {
	map1.setZoom (20);
}
var zoom5Two = function () {
	map2.setZoom (5);
}
var zoom15Two = function () {
	map2.setZoom (15);
}
var zoom20Two = function () {
	map2.setZoom (20);
}
var zoom5Three = function () {
	map3.setZoom (5);
}
var zoom15Three = function () {
	map3.setZoom (15);
}
var zoom20Three = function () {
	map3.setZoom (20);
}
var btnFive = document.getElementsByClassName("fujiyaBtn5");
	for(var i = 0; i < btnFive.length; i++) {
	btnFive[i].addEventListener('click', zoom5);
}
var btnFifteen = document.getElementsByClassName("fujiyaBtn15");
	for(var i = 0; i < btnFifteen.length; i++) {
	btnFifteen[i].addEventListener('click', zoom15);
}
var btnTwenty = document.getElementsByClassName("fujiyaBtn20");
	for(var i = 0; i < btnTwenty.length; i++) {
	btnTwenty[i].addEventListener('click', zoom20);
}
var btnFive = document.getElementsByClassName("davesBtn5");
	for(var i = 0; i < btnFive.length; i++) {
	btnFive[i].addEventListener('click', zoom5Two);
}
var btnFifteen = document.getElementsByClassName("davesBtn15");
	for(var i = 0; i < btnFifteen.length; i++) {
	btnFifteen[i].addEventListener('click', zoom15Two);
}
var btnTwenty = document.getElementsByClassName("davesBtn20");
	for(var i = 0; i < btnTwenty.length; i++) {
	btnTwenty[i].addEventListener('click', zoom20Two);
}
var btnFive = document.getElementsByClassName("blBtn5");
	for(var i = 0; i < btnFive.length; i++) {
	btnFive[i].addEventListener('click', zoom5Three);
}
var btnFifteen = document.getElementsByClassName("blBtn15");
	for(var i = 0; i < btnFifteen.length; i++) {
	btnFifteen[i].addEventListener('click', zoom15Three);
}
var btnTwenty = document.getElementsByClassName("blBtn20");
	for(var i = 0; i < btnTwenty.length; i++) {
	btnTwenty[i].addEventListener('click', zoom20Three);
}



//slightly better but still bad attempt...that doesnt work... good intentions where had
var fujyiaUpdate = function () {
	map1.setCenter ({
		lat: 29.526120,
		lng: -98.566543
	})
	map2.setCenter ({
		lat: 29.526120,
		lng: -98.566543
	})
	map3.setCenter ({
		lat: 29.526120,
		lng: -98.566543
	})
}
var davesUpdate = function () {
	map1.setCenter ({
		lat:  29.654066,
		lng: -98.447923
	})
	map2.setCenter ({
		lat:  29.654066,
		lng: -98.447923
	})
	map3.setCenter ({
		lat:  29.654066,
		lng: -98.447923
	})
}
var blUpdate = function () {
	map1.setCenter ({
		lat:  29.442535,
		lng: -98.479994
	})
	map2.setCenter ({
		lat:  29.442535,
		lng: -98.479994
	})
	map3.setCenter ({
		lat:  29.442535,
		lng: -98.479994
	})
}





var buttonFujiya = document.getElementById("fujyia");
buttonFujiya.addEventListener('click', fujyiaUpdate);
var buttonDaves = document.getElementById("daves");
buttonDaves.addEventListener('click', davesUpdate);
var buttonBL = document.getElementById("lorraine");
buttonBL.addEventListener('click', blUpdate);











