var searchProblems = function (input) {    
    if (input == undefined || input == null) {
        return;
    }

    var problemIds = [];

    if (input == "") {
        for (var i = 0; i < problems.length; i++) {
            problemIds.push(problems[i].id);
        }
        displaySearchProblems(problemIds, problems.length);
        return;
    }

    for (var i = 0; i < problems.length; i++) {
        if (problems[i].description.toLowerCase().indexOf(input.toLowerCase()) >= 0) {
            problemIds.push(problems[i].id);
        }
        else {
            for (var j = 0; j < problems[i].tags.length; j++) {
                if (problems[i].tags[j].toLowerCase().indexOf(input.toLowerCase()) >= 0) {
                    problemIds.push(problems[i].id);
                }
            }
        }
    }
    displaySearchProblems(problemIds, problems.length);
};

var displaySearchProblems = function (problemIds, numberOfProblems) {
    for (var i = 1; i <= numberOfProblems; i++) {
        var problemContainer = document.getElementById("problemContainer" + i);
        if (problemContainer) {
            problemContainer.style.display = problemIds.indexOf(i) >= 0 ? "block" : "none";
        }
    }
};

(function () {
    var oldVal;
    $('#search_text_input').bind('DOMAttrModified textInput input change keypress paste focus', function () {
        var val = this.value;
        if (val !== oldVal) {
            oldVal = val;
            searchProblems(val);
        }
    });
}());