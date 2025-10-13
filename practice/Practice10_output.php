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
Denominations:[1, 2, 3]
Target: 5


Recursive solution:

1, 5
---1, 4
------1, 3
---------1, 2
------------1, 1
---------2, 2
------2, 3
---------1, 1
------3, 3
---2, 4
------1, 2
---------1, 1
------2, 2
---3, 4
------1, 1
2, 5
---1, 3
------1, 2
---------1, 1
------2, 2
---2, 3
------1, 1
---3, 3
3, 5
---1, 2
------1, 1
---2, 2

Minimum number of coins: 2


Dynamic solution:

0: 0
1: 1
2: 1
3: 1
4: 2
5: 2

Minimum number of coins: 2
</span></pre>
</div>