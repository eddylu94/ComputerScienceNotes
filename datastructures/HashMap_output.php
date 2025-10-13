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
Initializing HashMap with 5 buckets...

Adding K: James, H: 496, V: 53...
Adding K: Mary, H: 409, V: 9...
Adding K: John, H: 399, V: 47...
Adding K: Patricia, H: 813, V: 10...
Adding K: Robert, H: 622, V: 17...
Adding K: Jennifer, H: 817, V: 34...
Adding K: Michael, H: 691, V: 71...
Adding K: Linda, H: 488, V: 36...
Adding K: William, H: 719, V: 12...
Adding K: Elizabeth, H: 920, V: 64...
Adding K: David, H: 488, V: 43...
Adding K: Barbara, H: 683, V: 74...
Adding K: Barbara, H: 683, V: 75...
Adding K: Richard, H: 701, V: 8...
Adding K: Susan, H: 522, V: 88...
Adding K: Joseph, H: 617, V: 31...
Adding K: Jessica, H: 706, V: 92...
Adding K: Thomas, H: 620, V: 21...
Adding K: Sarah, H: 495, V: 90...
Adding K: Charles, H: 706, V: 69...
Adding K: Margaret, H: 819, V: 58...

Current HashMap:

   Bucket 0:
      K: Elizabeth, H: 920, V: 64
      ---K: Thomas, H: 620, V: 21
      ------K: Sarah, H: 495, V: 90

   Bucket 1:
      K: James, H: 496, V: 53
      ---K: Michael, H: 691, V: 71
      ------K: Richard, H: 701, V: 8
      ---------K: Jessica, H: 706, V: 92
      ------------K: Charles, H: 706, V: 69

   Bucket 2:
      K: Robert, H: 622, V: 17
      ---K: Susan, H: 522, V: 88
      ------K: Joseph, H: 617, V: 31
      ---K: Jennifer, H: 817, V: 34

   Bucket 3:
      K: Patricia, H: 813, V: 10
      ---K: Linda, H: 488, V: 36
      ------K: David, H: 488, V: 43
      ------K: Barbara, H: 683, V: 75

   Bucket 4:
      K: Mary, H: 409, V: 9
      ---K: John, H: 399, V: 47
      ---K: William, H: 719, V: 12
      ------K: Margaret, H: 819, V: 58

Value for K: David is 43
Value for K: Barbara is 75
Value for K: Christopher is -1

Removing K: David with V: + 43...
Removing K: Susan with V: + 88...

Current HashMap:

   Bucket 0:
      K: Elizabeth, H: 920, V: 64
      ---K: Thomas, H: 620, V: 21
      ------K: Sarah, H: 495, V: 90

   Bucket 1:
      K: James, H: 496, V: 53
      ---K: Michael, H: 691, V: 71
      ------K: Richard, H: 701, V: 8
      ---------K: Jessica, H: 706, V: 92
      ------------K: Charles, H: 706, V: 69

   Bucket 2:
      K: Robert, H: 622, V: 17
      ---K: Joseph, H: 617, V: 31
      ---K: Jennifer, H: 817, V: 34

   Bucket 3:
      K: Patricia, H: 813, V: 10
      ---K: Linda, H: 488, V: 36
      ------K: Barbara, H: 683, V: 75

   Bucket 4:
      K: Mary, H: 409, V: 9
      ---K: John, H: 399, V: 47
      ---K: William, H: 719, V: 12
      ------K: Margaret, H: 819, V: 58

Value for K: David is -1
Value for K: Barbara is 75
Value for K: Christopher is -1
</span></pre>
</div>

