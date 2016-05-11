<head>
<title>ImplementList.cpp</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(106,135,89); }
.s3 { color: rgb(104,151,187); }
.s4 { color: rgb(70,70,241); }
.s5 { color: rgb(171,81,186); }
.s6 { color: rgb(15,151,149); }
</style>
</head>
<div style="background-color: #191919; padding: 10px;">
<pre>
<span class="s1">
Initializing Tree with 1
1

Adding child 2...
1
-----2

Adding child 3...
1
-----2
-----3

Adding child 4...
1
-----2
----------4
-----3

Adding child 5...
1
-----2
----------4
----------5
-----3

Adding child 6...
1
-----2
----------4
----------5
---------------6
-----3

Adding child 7...
1
-----2
----------4
----------5
---------------6
-----3
----------7

Breadth-first search:
1 2 3 4 5 7 6 

Depth-first search:
1 2 4 5 6 3 7 
</span></pre>
</div>