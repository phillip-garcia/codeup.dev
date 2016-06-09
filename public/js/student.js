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


//removing Add and continue and Add and calculate average should be disabled when the page loads.
//<button type="button" class="btn btn-default" id="add-grade">
//                        Add and continue
//                    </button>
//                    <button type="button" class="btn btn-primary" id="calculate-average">
//                        Add and calculate average
//                    </button>;

//button saving
var username = function(event) {
    var saveName = document.getElementById("name");
    console.log(saveName.value);
    var addName = document.getElementById("student-name");
    addName.innerHTML = saveName;
};

// button activation
function afterSave(event) {
    var enableBtn = document.getElementsByClassName("disableButtonAtStart");
    enableBtn[0].removeAttribute("disabled");
};

var bt1 = document.getElementById("save-name");
bt1.addEventListener('click', function() {
username();
afterSave();
}, false);




//button enabling


//var bt2 = document.getElementById('save-name');
//bt2.addEventListener('click', afterSave, false);















