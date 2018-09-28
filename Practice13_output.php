<head>
<title>ImplementList.cpp</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(128,128,128); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(204,120,50); }
.s3 { color: rgb(106,135,89); }
.s4 { color: rgb(104,151,187); }
</style>
</head>
<div style="background-color: #191919; padding: 10px;">
<pre>
<span class="s1">
Denominations:[2, 3, 5]
Target: 8


Recursive solution:

2, 8
---2, 6
------2, 4
---------2, 2
------3, 4
---3, 6
------2, 3
------3, 3
---5, 6
3, 8
---2, 5
------2, 3
------3, 3
---3, 5
------2, 2
---5, 5
5, 8
---2, 3
---3, 3

Number of combinations: 4


Dynamic solution:

0: 0
1: 0
2: 1
3: 1
4: 2
5: 2
6: 3
7: 3
8: 4

Number of combinations: 4
</span></pre>
</div>