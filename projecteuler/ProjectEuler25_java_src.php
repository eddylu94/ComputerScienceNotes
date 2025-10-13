<html>
<head>
<title>Problem25.java</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: #606366; font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(104,151,187); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>
<span class="s0">import </span><span class="s1">java.math.BigInteger</span><span class="s0">;</span><span class="s1"> 
 
</span><span class="s0">public class </span><span class="s1">Problem25 { 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s0">int </span><span class="s1">result = findIndex(</span><span class="s2">1000</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">findIndex(</span><span class="s0">int </span><span class="s1">digits) { 
              
        BigInteger limit = (</span><span class="s0">new </span><span class="s1">BigInteger(</span><span class="s3">&quot;10&quot;</span><span class="s1">)).pow(digits - </span><span class="s2">1</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        BigInteger f1 = </span><span class="s0">new </span><span class="s1">BigInteger(</span><span class="s3">&quot;1&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        BigInteger f2 = </span><span class="s0">new </span><span class="s1">BigInteger(</span><span class="s3">&quot;1&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">int </span><span class="s1">index = </span><span class="s2">2</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">while </span><span class="s1">(f2.compareTo(limit) == -</span><span class="s2">1</span><span class="s1">) { 
            BigInteger temp = f1</span><span class="s0">;</span><span class="s1"> 
            f1 = f2</span><span class="s0">;</span><span class="s1"> 
            f2 = temp.add(f2)</span><span class="s0">;</span><span class="s1"> 
            index++</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">return </span><span class="s1">index</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>