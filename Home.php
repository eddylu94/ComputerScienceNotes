<?php include 'Header.php'?>

<style>
    .home_previews {
        display: flex;
        justify-content: center;
    }

    .home_preview {
        display: flex;
        flex-direction: column;
    }
    
    #home_preview_image {
        width: 100%;
        opacity: 0.8;
    }

    #home_preview_image:hover {
        opacity: 1.0;
    }

    .home_preview_label {
        color: #FFFFFF
    }
</style>

<h1>Notes</h1>

Notes I took during university that I shared with friends while studying.

<br><br><br>

<div class="home_previews">
    <div class="home_preview home_preview_intermediate">
        <div>
            <a href="DataStructures.php"><img id="home_preview_image" src="datastructures_darkened.png"></a>
        </div>
        <div style="text-align: center;">
            <a href="DataStructures.php" style="text-decoration: none;"><h3 class="home_preview_label">Data Structures</h3></a>
        </div>
    </div>
    <div class="home_preview">
        <div>
            <a href="Algorithms.php"><img id="home_preview_image" src="algorithms_darkened.png"></a>
        </div>
        <div style="text-align: center;">
            <a href="DataStructures.php" style="text-decoration: none;"><h3 class="home_preview_label">Algorithms</h3></a>
        </div>
    </div>
</div>
<div class="home_previews" style="margin-top: 22px;">
    <div class="home_preview home_preview_intermediate">
        <div>
            <a href="OOP.php"><img id="home_preview_image" src="oop_darkened.png"></a>
        </div>
        <div style="text-align: center;">
            <a href="OOP.php" style="text-decoration: none;"><h3 class="home_preview_label">Object-Oriented Programming</h3></a>
        </div>
    </div>
    <div class="home_preview">
        <div>
            <a href="Practice.php"><img id="home_preview_image" src="problems_darkened.png"></a>
        </div>
        <div style="text-align: center;">
            <a href="Practice.php" style="text-decoration: none;"><h3 class="home_preview_label">Practice Problems</h3></a>
        </div>
    </div>
</div>
<div class="home_previews" style="margin-top: 22px;">
    <div class="home_preview home_preview_intermediate">
        <div>
            <a href="ProjectEuler.php"><img id="home_preview_image" src="projecteuler_darkened.png"></a>
        </div>
        <div style="text-align: center;">
            <a href="ProjectEuler.php" style="text-decoration: none;"><h3 class="home_preview_label">Project Euler Problems</h3></a>
        </div>
    </div>
    <div class="home_preview">
        <div>
            <a href="LeetCode.php"><img id="home_preview_image" src="leetcode_darkened.png"></a>
        </div>
        <div style="text-align: center;">
            <a href="LeetCode.php" style="text-decoration: none;"><h3 class="home_preview_label">LeetCode Problems</h3></a>
        </div>
    </div>
</div>

<?php include 'Footer.php'?>