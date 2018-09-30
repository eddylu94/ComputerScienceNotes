<title>Eddy Lu - Notes</title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">

<style>
    
html, body {
    width: 100%;
    height:  100%;
}
    
#navMenu ul {
    list-style-type: none;
    height: 50px;
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
    display: inline-block;
    box-sizing: border-box;
    padding: 15px 10px 15px 50px;
    text-decoration: none;
    color: #FFFFFF;
}
    
#navMenu ul li:hover {
    background-color: #808080;
    color: #FFFFFF;
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

<html>

<script src="//code.jquery.com/jquery-1.12.4.js"></script>

<?php include 'statRecorder.php';?>

<script>
    if (location.protocol != 'https:') {
        location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
    }
</script>
<script src="reflow.js"></script>

<body style="background-color: #333333; font-family: Calibri; margin:0; height:100%;">

<div id="page_wrapper" style="display: flex; flex-direction: column; height: 100%;">

    <?php include 'global_header.php';?>

    <div id="body_wrapper" style="display: flex; flex: 1;">

        <div id="navMenu" style="position: fixed; width: 230px; min-width: 230px; height: 100%; background-color: #191919; text-align: left; padding: 0;">
            <ul>
                <li><a href="Home.php">Notes</a></li>
                <li><a href="DataStructures.php">Data Structures</a></li>
                <li><a href="Algorithms.php">Algorithms</a></li>
                <li><a href="OOP.php">OOP</a></li>
                <li><a href="Practice.php">Practice Problems</a></li>                
                <li><a href="ProjectEuler.php">Project Euler</a></li>
                <li><a href="LeetCode.php">LeetCode</a></li>
            </ul>
        </div>

        <div id="left_placeholder" style="width: 230px; height: 100%;"></div>

        <div id="container" style="display: flex; flex: 1; flex-direction: column; background-color: #333333; padding: 50px; text-align: left; margin: 0 auto;
            font-family: Calibri; color: #FFFFFF; font-size: large;">

            <div id="container_wrapper" style="display: flex; flex: 1 0 auto; flex-direction: column;">