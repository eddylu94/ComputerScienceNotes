<?php include '../assets/includes/Header.php'?>

<h1>Trees</h1>

For this implementation of the tree, one assumes that each node can have any number of child nodes.
<br><br>
This implementation of the tree contains its own breadth-first and depth-first search algorithms.
<br><br>
Typical breadth-first search algorithms implement queues for storing nodes, and depth-first search algorithms use stacks.
<br>
For the depth-first search, this implementation utilizes a recursive process that searches the current node's child nodes until it has reached a leaf.

<h2>Java</h2>

<h3>Node for Tree</h3>

<?php include 'TreeNode_java_src.php'?>

<h3>Implementation of Tree</h3>

<?php include 'ImplementTree_java_src.php'?>

<h2>C++</h2>

<h3>Header File for Tree Node</h3>

<?php include 'TreeNodeH_cpp_src.php'?>

<h3>Node for Tree</h3>

<?php include 'TreeNode_cpp_src.php'?>

<h3>Implementation of Tree</h3>

<?php include 'ImplementTree_cpp_src.php'?>

<h2>C</h2>

<h3>Header File for Tree Node</h3>

<?php include 'TreeNodeH_c_src.php'?>

<h3>Node for Tree</h3>

<?php include 'TreeNode_c_src.php'?>

<h3>Implementation of Tree</h3>

<?php include 'ImplementTree_c_src.php'?>

<h2>C#</h2>

<h3>Node for Tree</h3>

<?php include 'TreeNode_cs_src.php'?>

<h3>Implementation of Tree</h3>

<?php include 'ImplementTree_cs_src.php'?>

<h2>Console Output:</h2>

<?php include 'Tree_output.php'?>

<?php include '../assets/includes/Footer.php'?>