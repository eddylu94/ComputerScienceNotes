
<?php include 'assets/includes/Header.php'?>
<link rel="stylesheet" type="text/css" href="/notes/assets/css/problems.css">

<h1>Practice Problems</h1>

<div id="search_header">
  <img id="search_icon" src="assets/images/icons/search_icon.png" style="search_icon" />
  <input
    id="search_text_input"
    type="text"
    name="keywords"
    placeholder="Search for practice problems"
  >
</div>
<script src="assets/js/searchProblems.js"></script>

<div id="problemPreviewsContainer"></div>
<script src="assets/js/populatePracticeProblemPreviews.js"></script>

<?php include 'assets/includes/Footer.php'?>
