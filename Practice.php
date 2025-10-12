<?php include 'Header.php'?>

<style>
  #search_header {
    display: flex;
    flex-direction: row;
    width: 100%;
    max-width: 600px;
    border-radius: 10px;
    border: 0px;
    background-color: #181818;
    padding: 10px;
    box-sizing: border-box;
    margin-bottom: 32px;
  }

  #search_text_input {
    font-size: large;
    padding: 10px;
    width: 100%;
    border: 0px;
    height: 36px;
    background-color: transparent;
    color: #FFFFFF;
  }

  #search_icon {
    height: 36px;
  }

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

<h1>Practice Problems</h1>

<div id="search_header">
  <img id="search_icon" src="search_icon.png" style="search_icon" />
  <input
    id="search_text_input"
    type="text"
    name="keywords"
    placeholder="Search for practice problems"
  >
</div>
<script src="searchProblems.js"></script>

<div id="problemPreviewsContainer"></div>
<script src="populatePracticeProblemPreviews.js"></script>

<?php include 'Footer.php'?>