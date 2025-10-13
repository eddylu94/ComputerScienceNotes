var problems = [
    {
        "id": 1,
        "description": "Multiples of 3 and 5",
        "tags": ["Conditional Programming"]
    },
    {
        "id": 2,
        "description": "Even Fibonacci numbers",
        "tags": ["Fibonacci", "Iterative Programming"]
    },
    {
        "id": 3,
        "description": "Largest prime factor",
        "tags": ["Prime Numbers", "Iterative Programming"]
    },
    {
        "id": 4,
        "description": "Largest palindrome product",
        "tags": ["Strings", "Iterative Programming"]
    },
    {
        "id": 5,
        "description": "Smallest multiple",
        "tags": ["Iterative Programming"]
    },
    {
        "id": 6,
        "description": "Sum square difference",
        "tags": ["Math"]
    },
    {
        "id": 7,
        "description": "10001st prime",
        "tags": ["Prime Numbers"]
    },
    {
        "id": 8,
        "description": "Largest product in a series",
        "tags": ["Large Numbers"]
    },
    {
        "id": 9,
        "description": "Special Pythagorean triplet",
        "tags": ["Math", "Iterative Programming"]
    },
    {
        "id": 10,
        "description": "Summation of primes",
        "tags": ["Prime Numbers"]
    },
    {
        "id": 11,
        "description": "Largest product in a grid",
        "tags": ["Grids"]
    },
    {
        "id": 12,
        "description": "Highly divisible triangular number",
        "tags": ["Math"]
    },
    {
        "id": 13,
        "description": "Large sum",
        "tags": ["Big Numbers"]
    },
    {
        "id": 14,
        "description": "Longest Collatz sequence",
        "tags": ["Math"]
    },
    {
        "id": 15,
        "description": "Lattice paths",
        "tags": ["Big Integers", "Grids"]
    },
    {
        "id": 16,
        "description": "Power digit sum",
        "tags": ["Big Numbers"]
    },
    {
        "id": 17,
        "description": "Number letter counts",
        "tags": ["HashMaps"]
    },
    {
        "id": 18,
        "description": "Maximum path sum I",
        "tags": ["Trees", "Recursion"]
    },
    {
        "id": 19,
        "description": "Counting Sundays",
        "tags": ["Math", "Iterative Programming"]
    },
    {
        "id": 20,
        "description": "Factorial digit sum",
        "tags": ["Large Numbers"]
    },
    {
        "id": 21,
        "description": "Amicable numbers",
        "tags": ["Math", "Iterative Programming"]
    },
    {
        "id": 22,
        "description": "Names scores",
        "tags": ["Iterative Programming"]
    },
    {
        "id": 23,
        "description": "Non-abundant sums",
        "tags": ["HashSets", "Lists"]
    },
    {
        "id": 24,
        "description": "Lexicographic permutations",
        "tags": ["Math", "Lists"]
    },
    {
        "id": 25,
        "description": "1000-digit Fibonacci number",
        "tags": ["Big Numbers"]
    },
    {
        "id": 26,
        "description": "Reciprocal cycles",
        "tags": ["Sequences"]
    },
    {
        "id": 27,
        "description": "Quadratic primes",
        "tags": ["Math"]
    },
    {
        "id": 28,
        "description": "Number spiral diagonals",
        "tags": ["Spiral Problem"]
    },
    {
        "id": 29,
        "description": "Distinct powers",
        "tags": ["Bit Numbers", "HashSets"]
    },
    {
        "id": 30,
        "description": "Digit fifth powers",
        "tags": ["Iterative Programming"]
    },
    {
        "id": 31,
        "description": "Coin sums",
        "tags": ["Dynamic Programming"]
    },
    {
        "id": 32,
        "description": "Pandigital products",
        "tags": ["HashMaps"]
    }
];

var populate = function () {    
    var innerHtml = "";
    for (var i = 0; i < problems.length; i++) {
        innerHtml +=
            "<a id=\"problemContainer" + problems[i].id + "\" class=\"problemContainer\" href=\"/notes/projecteuler/ProjectEuler" + problems[i].id + ".php\" style=\"text-decoration: none;\">"
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