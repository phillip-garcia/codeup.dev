'use strict';

var student = {
	awesomeGrade: 80,
	name: null,
	subjects: [],
	calculateAverage: function () {
		var average = 0;
		this.subjects.forEach(function (subject) {
			average += subject.grade;
		});
		return average / this.subjects.length;
	},
	addSubject: function (name, grade) {
		var subject = {
			name: name,
			grade: grade
		};
		this.subjects.push(subject);
	},
	isAwesome: function () {
		return this.calculateAverage() > this.awesomeGrade;
	}
}
$()
var saveButton = $('#save-name');
var addAndContinueButton = $('#add-grade');
var addAndAverageButton = $('#calculate-average');

function saveName() {
    var studentName = $('#name');
    student.name = studentName.val();
    addAndContinueButton.attr('disabled', false);
    addAndAverageButton.removeAttr('disabled');
    $('#student-name').html(student.name);
}

function noGavin() {
    var subjectName = $('#subject');
    var subjectGrade = $('#grade');
    student.addSubject(subjectName.val, parseInt(subjectGrade.val));

    var tableBody = $('#grades');
    tableBody.html = '<tr><td>' + subjectName.val + '</td><td>' + subjectGrade.val + '</td></tr>' + tableBody.html;

    subjectName.val = '';
    subjectGrade.val = '';
}

function noAbbreviationsGavin() {
    noGavin();
    var average = student.calculateAverage();
    document.getElementById('student-average').innerText = average;

    if (student.isAwesome()) {
        document.getElementById('student-awesome').removeAttribute('class');
        document.getElementById('student-practice').setAttribute('class', 'hidden');
    } else {
        document.getElementById('student-practice').removeAttribute('class');
        document.getElementById('student-awesome').setAttribute('class', 'hidden');
    }

    addAndContinueButton.setAttribute('disabled', true);
    addAndAverageButton.setAttribute('disabled', true);
}

$(saveButton).on('click', saveName);
$(addAndContinueButton).on('click', noGavin);
$(addAndAverageButton).on('click', noAbbreviationsGavin);


