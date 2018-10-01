var problems = [
    {
        "id": 1,
        "description": "Two Sum",
        "tags": ["Arrays", "HashMaps"]
    },
    {
        "id": 2,
        "description": "Add Two Numbers",
        "tags": ["Linked Lists"]
    },
    {
        "id": 3,
        "description": "Longest Substring Without Repeating Characters",
        "tags": ["Strings", "HashMaps"]
    },
];

var populate = function () {    
    var innerHtml = "";
    for (var i = 0; i < problems.length; i++) {
        innerHtml +=
            "<a id=\"problemContainer" + problems[i].id + "\" class=\"problemContainer\" href=\"LeetCode" + problems[i].id + ".php\" style=\"text-decoration: none;\">"
            + "<h3>Problem " + problems[i].id + "</h3>"
            + problems[i].description
            + "<div class=\"problem_tags_container\">";
        for (var j = 0; j < problems[i].tags.length; j++) {
            innerHtml += "<div class=\"problem_tag\">" + problems[i].tags[j] + "</div>"
        }
        innerHtml += "</div>"
            + "</a>";
    }

    var problemPreviewsContainer = document.getElementById("problemPreviewsContainer");
    problemPreviewsContainer.innerHTML = innerHtml;
};

populate();