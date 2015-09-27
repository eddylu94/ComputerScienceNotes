<?php include 'Header.php'?>

<h1>Trees</h1>

For this implementation of the tree, one assumes that each node can have any number of child nodes.
<br><br>
This implementation of the tree contains its own breadth-first and depth-first search algorithms.
<br><br>
Typical breadth-first search algorithms implement queues for storing nodes, and depth-first search algorithms use stacks.
<br>
For the depth-first search, this implementation utilizes a recursive process that searches the current node's child nodes until it has reached a leaf.

<h3>Node for Tree</h3>

<?php include 'TreeNode_java_src.php'?>

<h3>Implementation of Tree</h3>

<?php include 'ImplementTree_java_src.php'?>

<?php include 'Footer.php'?>