<?php include 'Header.php'?>

<style>
    #problemPreviewsContainer {
        display: flex;
        flex: 1 0 auto;
        flex-direction: column;
    }
    
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

<h1>Project Euler Problems</h1>

<div id="problemPreviewsContainer"></div>
<script src="populateProjectEulerProblemPreviews.js"></script>

<?php include 'Footer.php'?>