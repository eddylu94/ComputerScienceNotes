<title>Eddy Lu - Notes</title>
<link rel="shortcut icon" href="/notes/assets/images/icons/favicon.ico" type="image/x-icon">
<link rel="icon" href="/notes/assets/images/icons/favicon.ico" type="image/x-icon">

<style>
  html, body {
    width: 100%;
    height: 100%;
  }

  body {
    margin: 0px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
    'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue',
    sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: #333333;
    display: flex;
    flex-direction: column;
  }
  
  #navMenu ul {
    list-style-type: none;
    height: 55px;
    color: #FFFFFF;
    font-family: Calibri;
    font-size: 20px;
    line-height: 20px;    
    padding: 0px;
    margin: 0px;
    margin-top: 50px;
  }
  
  #navMenu ul li a {          
    width: 100%;
    height: 100%;
    display: flex;
    box-sizing: border-box;
    padding: 15px 10px 15px 50px;
    text-decoration: none;
    color: #FFFFFF;
    align-items: center;
  }
  
  #navMenu ul li:hover {
    background-color: #808080;
    color: #FFFFFF;
  }

  .navMenu_icon {
    height: 25px;
    margin-right: 18px;
  }

  h1 {
    margin-top: 0px;
  }

  p#notesTitle {
    color: #FFFFFF;
    font-size: x-large;
    margin-left: 10px;
    margin-top: 20px;
  }

  a {
    color: #FFFFFF;
  }
</style>

<script src="//code.jquery.com/jquery-1.12.4.js"></script>

<?php include 'stats/statRecorder.php';?>

<script>
  if (location.protocol != 'https:') {
    location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
  }
</script>
<script src="/notes/assets/js/reflow.js"></script>

<div id="menu_flyout_overlay" onclick="toggleFlyout()"></div>
<div id="menu_flyout">
  <ul>
    <li><a href="../blog.php">Blog</a></li>
    <li>
      <a href="../projects.php">Projects</a>
      <ul>
        <li><a href="../projects.php">Personal Projects</a></li>
        <li><a href="../schoolprojects.php">School Projects</a></li>
      </ul>
    </li>
    <li>
      <a href="Home.php">CompSci Notes</a>
      <ul>
        <li><a href="DataStructures.php">Data Structures</a></li>
        <li><a href="Algorithms.php">Algorithms</a></li>
        <li><a href="OOP.php">OOP</a></li>
        <li><a href="Practice.php">Practice Problems</a></li>
        <li><a href="ProjectEuler.php">Project Euler</a></li>
        <li><a href="LeetCode.php">LeetCode</a></li>
      </ul>
    </li>
    <li>
      <a href="https://www.notion.so/Random-Notes-b91efbf129b64a83b12c893211b4ef8c" target='_blank'>Misc Notes</a>
    </li>
    <li><a href="../about.php">About</a></li>
  </ul>

  <div id="socialIcons">
    <a href="https://github.com/eddylu94" target="_blank">
      <img id="socialIcon" alt="GitHub" src="/notes/assets/images/icons/gh-icon_round.png" />
    </a>                
    <a href="https://linkedin.com/in/lueddy" target="_blank">
      <img id="socialIcon" alt="LinkedIn" src="/notes/assets/images/icons/in-icon_round.png" />
    </a>
  </div>
</div>

<div id="page_wrapper" style="display: flex; flex-direction: column; height: 100%; overflow-y: auto;">

  <?php include 'global_header.php';?>

  <div id="body_wrapper" style="display: flex; flex: 1;">

    <div id="navMenu" style="position: fixed; width: 280px; min-width: 280px; height: 100%; background-color: #191919; text-align: left; padding: 0;">
      <ul>
        <li><a href="/notes/Home.php"><img class="navMenu_icon" src="/notes/assets/images/icons/home_icon.png" />Notes</a></li>
        <li><a href="/notes/DataStructures.php"><img class="navMenu_icon" src="/notes/assets/images/icons/structures_icon.png" />Data Structures</a></li>
        <li><a href="/notes/Algorithms.php"><img class="navMenu_icon" src="/notes/assets/images/icons/algorithms_icon.png" />Algorithms</a></li>
        <li><a href="/notes/OOP.php"><img class="navMenu_icon" src="/notes/assets/images/icons/objects_icon.png" />OOP</a></li>
        <li><a href="/notes/Practice.php"><img class="navMenu_icon" src="/notes/assets/images/icons/problems_icon.png" />Practice Problems</a></li>                
        <li><a href="/notes/ProjectEuler.php"><img class="navMenu_icon" src="/notes/assets/images/problems/projecteuler_checkmark.png" />Project Euler</a></li>
        <li><a href="/notes/LeetCode.php"><img class="navMenu_icon" src="/notes/assets/images/problems/leetcode_logo.png" />LeetCode</a></li>
      </ul>
    </div>

    <div id="left_placeholder" style="width: 280px; min-width: 280px; height: 100%;"></div>

    <div id="container" style="display: flex; flex: 1; flex-direction: column; background-color: #333333; text-align: left; margin: 0 auto;
        font-family: Calibri; color: #FFFFFF; font-size: large;">

      <div id="container_wrapper" style="display: flex; flex: 1 0 auto; flex-direction: column;">