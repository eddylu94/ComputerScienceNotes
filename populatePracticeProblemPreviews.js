var problems = [
    {
        "id": 1,
        "description": "Given a string, find its first non-repeating character.",
        "tags": ["Strings", "HashMaps"]
    },
    {
        "id": 2,
        "description": "Find the maximum of two numbers without using if-else or any other comparison operator.",
        "tags": ["Bitwise"]
    },
    {
        "id": 3,
        "description": "Print all pairs of integers within an array which sum to a specified value.",
        "tags": ["Arrays", "HashMaps"]
    },
    {
        "id": 4,
        "description": "Given an array of unordered consecutive integers starting from 1, return the missing number.<br>ex. 1,4,3,6,5 return 2",
        "tags": ["Arrays", "Math"]
    },
    {
        "id": 5,
        "description": "Find the node where two linked lists merge.",
        "tags": ["Linked Lists"]
    },
    {
        "id": 6,
        "description": "Find the second maximum in an array.",
        "tags": ["Arrays"]
    },
    {
        "id": 7,
        "description": "Write a program that prints the integers from 1 to 100.<br><br>But for multiples of three print \"Fizz\" instead of the number, and for the multiples of five print \"Buzz\".<br>For numbers which are multiples of both three and five print \"FizzBuzz\".",
        "tags": ["Conditional Programming"]
    },
    {
        "id": 8,
        "description": "You are given two linked lists representing two non-negative numbers.<br>The digits are stored in reverse order and each of their nodes contain a single digit. Add the two numbers and return it as a linked list.<br><br>Input: (2 -> 4 -> 3) + (5 -> 6 -> 4 -> 1)<br>Output: 7 -> 0 -> 8 -> 1",
        "tags": ["Linked Lists"]
    },
    {
        "id": 9,
        "description": "Given a string, find the length of the longest substring without repeating characters.<br><br>For example, the longest substring without repeating letters for \"abcabcbb\" is \"abc\",<br>which the length is 3. For \"bbbbb\" the longest substring is \"b\", with the length of 1.",
        "tags": ["Strings", "HashMaps"]
    },
    {
        "id": 10,
        "description": "Given an array of different coin denominations,<br>find the minimum number of coins needed to sum to a certain amount of money.",
        "tags": ["Dynamic Programming"]
    },
    {
        "id": 11,
        "description": "Print every String permutation of given chars",
        "tags": ["Recursion", "Permutations"]
    },
    {
        "id": 12,
        "description": "Draw a circle of a given radius and origin",
        "tags": ["Math"]
    },
    {
        "id": 13,
        "description": "Given a list of different coin denominations and a target amount of money,<br>determine the number of possible combinations of coins that sum to the amount <br><br>More than one coin denomination can be used per combination <br>Duplicate combinations are allowed ",
        "tags": ["Dynamic Programming", "Recursion"]
    }
];

var populate = function () {    
    var innerHtml = "";
    for (var i = 0; i < problems.length; i++) {
        innerHtml +=
            "<a id=\"problemContainer" + problems[i].id + "\" class=\"problemContainer\" href=\"Practice" + problems[i].id + ".php\" style=\"text-decoration: none;\">"
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