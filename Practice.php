<?php include 'Header.php'?>

<style>
    .problemContainer {
        padding: 22px;
        background-color: #262626;
        margin-bottom: 32px;
    }

    .problemContainer h3 {
        margin-top: 0
    }

    .problemContainer:hover {
        background-color: #666666;
    }

    .problem_tags_container {
        margin-top: 20px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .problem_tag {
        background-color: #585858;
        color: #FFCC00;
        padding: 5px 8px 5px 8px;
        border-radius: 3px;
        margin-right: 12px;
        margin-bottom: 8px;
    }
}    
</style>

<h1>Practice Problems</h1>

<a class="problemContainer" href="Practice1.php" style="text-decoration: none;">
    <h3>Problem 1</h3>
    Given a string, find its first non-repeating character.

    <div class="problem_tags_container">
        <div class="problem_tag">Strings</div>
        <div class="problem_tag">HashMaps</div>
    </div>
</a>

<a class="problemContainer" href="Practice2.php" style="text-decoration: none;">
    <h3>Problem 2</h3>
    Find the maximum of two numbers without using if-else or any other comparison operator.

    <div class="problem_tags_container">
        <div class="problem_tag">Bitwise</div>
    </div>
</a>

<a class="problemContainer" href="Practice3.php" style="text-decoration: none;">
    <h3>Problem 3</h3>
    Print all pairs of integers within an array which sum to a specified value.

    <div class="problem_tags_container">
        <div class="problem_tag">Arrays</div>
        <div class="problem_tag">HashMaps</div>
    </div>
</a>

<a class="problemContainer" href="Practice4.php" style="text-decoration: none;">
    <h3>Problem 4</h3>
    Given an array of unordered consecutive integers starting from 1, return the missing number. 
    <br>ex. 1,4,3,6,5 return 2

    <div class="problem_tags_container">
        <div class="problem_tag">Arrays</div>
        <div class="problem_tag">Math</div>
    </div>
</a>

<a class="problemContainer" href="Practice5.php" style="text-decoration: none;">
    <h3>Problem 5</h3>
    Find the node where two linked lists merge.

    <div class="problem_tags_container">
        <div class="problem_tag">Linked Lists</div>
    </div>
</a>

<a class="problemContainer" href="Practice6.php" style="text-decoration: none;">
    <h3>Problem 6</h3>
    Find the second maximum in an array.

    <div class="problem_tags_container">
        <div class="problem_tag">Arrays</div>        
    </div>
</a>

<a class="problemContainer" href="Practice7.php" style="text-decoration: none;">
    <h3>Problem 7</h3>
    Write a program that prints the integers from 1 to 100. 
    <br>
    <br>But for multiples of three print "Fizz" instead of the number, and for the multiples of five print "Buzz". 
    <br>For numbers which are multiples of both three and five print "FizzBuzz".

    <div class="problem_tags_container">
        <div class="problem_tag">Conditional Programming</div>
    </div>
</a>

<a class="problemContainer" href="Practice8.php" style="text-decoration: none;">
    <h3>Problem 8</h3>
    You are given two linked lists representing two non-negative numbers.
    <br>The digits are stored in reverse order and each of their nodes contain a single digit. Add the two numbers and return it as a linked list.
    <br>
    <br>Input: (2 -> 4 -> 3) + (5 -> 6 -> 4 -> 1)
    <br>Output: 7 -> 0 -> 8 -> 1

    <div class="problem_tags_container">
        <div class="problem_tag">Linked Lists</div>
    </div>
</a>

<a class="problemContainer" href="Practice9.php" style="text-decoration: none;">
    <h3>Problem 9</h3>
    Given a string, find the length of the longest substring without repeating characters.
    <br>
    <br>For example, the longest substring without repeating letters for "abcabcbb" is "abc",
    <br>which the length is 3. For "bbbbb" the longest substring is "b", with the length of 1.

    <div class="problem_tags_container">
        <div class="problem_tag">Strings</div>
        <div class="problem_tag">HashMaps</div>
    </div>
</a>

<a class="problemContainer" href="Practice10.php" style="text-decoration: none;">
    <h3>Problem 10</h3>
    Given an array of different coin denominations,
    <br>find the minimum number of coins needed to sum to a certain amount of money.

    <div class="problem_tags_container">
        <div class="problem_tag">Dynamic Programming</div>
    </div>
</a>

<a class="problemContainer" href="Practice11.php" style="text-decoration: none;">
    <h3>Problem 11</h3>
    Print every String permutation of given chars

    <div class="problem_tags_container">
        <div class="problem_tag">Recursion</div>
        <div class="problem_tag">Permutations</div>
    </div>
</a>

<a class="problemContainer" href="Practice12.php" style="text-decoration: none;">
    <h3>Problem 12</h3>
    Draw a circle of a given radius and origin

    <div class="problem_tags_container">
        <div class="problem_tag">Math</div>
    </div>
</a>

<a class="problemContainer" href="Practice13.php" style="text-decoration: none;">
    <h3>Problem 13</h3>
    Given a list of different coin denominations and a target amount of money,
    <br>determine the number of possible combinations of coins that sum to the amount 
    <br>
    <br>More than one coin denomination can be used per combination 
    <br>Duplicate combinations are allowed 

    <div class="problem_tags_container">
        <div class="problem_tag">Dynamic Programming</div>
        <div class="problem_tag">Recursion</div>
    </div>
</a>

<?php include 'Footer.php'?>