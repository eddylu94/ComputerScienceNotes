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

<h1>LeetCode Problems</h1>

<a class="problemContainer" href="LeetCode1.php" style="text-decoration: none;">
    <h3>Problem 1</h3>
    Two Sum

    <div class="problem_tags_container">
        <div class="problem_tag">Arrays</div>
        <div class="problem_tag">HashMaps</div>
    </div>
</a>

<a class="problemContainer" href="LeetCode2.php" style="text-decoration: none;">
    <h3>Problem 2</h3>
    Add Two Numbers

    <div class="problem_tags_container">
        <div class="problem_tag">Linked Lists</div>
    </div>
</a>

<a class="problemContainer" href="LeetCode3.php" style="text-decoration: none;">
    <h3>Problem 3</h3>
    Longest Substring Without Repeating Characters

    <div class="problem_tags_container">
        <div class="problem_tag">Strings</div>
        <div class="problem_tag">HashMaps</div>
    </div>
</a>

<?php include 'Footer.php'?>