<?php include 'Header.php'?>

<style>
    .home_previews {
        display: flex;
        flex-direction: row;
        justify-content: center;
    }

    .home_preview {
        display: flex;
        flex-direction: column;
    }

    #home_preview_intermediate {
        margin-right: 5%;
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

I made this section while studying different programming data structures and algorithms so that my friends and I can quickly refer to these source codes whenever needed.

<br><br><br>

<div class="home_previews">
    <div id="home_preview_intermediate" class="home_preview">
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

<?php include 'Footer.php'?>