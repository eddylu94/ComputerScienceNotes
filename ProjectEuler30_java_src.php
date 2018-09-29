<html>
<head>
<title>Problem30.java</title>
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
<span class="s0">public class </span><span class="s1">Problem30 { 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s0">int </span><span class="s1">result = findSum(</span><span class="s2">5</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">findSum(</span><span class="s0">int </span><span class="s1">power) { 
        </span><span class="s0">int </span><span class="s1">sum = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">int </span><span class="s1">upperBound = findUpperBound(power)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">2</span><span class="s0">; </span><span class="s1">i &lt; upperBound</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">if </span><span class="s1">(i == sumOfPowers(i</span><span class="s0">, </span><span class="s1">power)) { 
                sum += i</span><span class="s0">;</span><span class="s1"> 
            } 
        } 
 
        </span><span class="s0">return </span><span class="s1">sum</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">sumOfPowers(</span><span class="s0">int </span><span class="s1">n</span><span class="s0">, int </span><span class="s1">power) { 
        </span><span class="s0">int </span><span class="s1">sum = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">while </span><span class="s1">(n &gt; </span><span class="s2">0</span><span class="s1">) { 
            sum += pow(n % </span><span class="s2">10</span><span class="s0">, </span><span class="s1">power)</span><span class="s0">;</span><span class="s1"> 
            n /= </span><span class="s2">10</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">return </span><span class="s1">sum</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">findUpperBound(</span><span class="s0">int </span><span class="s1">power) { 
        </span><span class="s0">int </span><span class="s1">upperBound = </span><span class="s2">99</span><span class="s0">;</span><span class="s1"> 
         
        </span><span class="s0">int </span><span class="s1">addend = pow(</span><span class="s2">9</span><span class="s0">, </span><span class="s1">power)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">sum = addend * </span><span class="s2">2</span><span class="s0">;</span><span class="s1"> 
         
        </span><span class="s0">while </span><span class="s1">(upperBound &lt; sum) { 
            upperBound = upperBound * </span><span class="s2">10 </span><span class="s1">+ </span><span class="s2">9</span><span class="s0">;</span><span class="s1"> 
            sum += addend</span><span class="s0">;</span><span class="s1"> 
        } 
         
        </span><span class="s0">return </span><span class="s1">upperBound</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">pow(</span><span class="s0">int </span><span class="s1">a</span><span class="s0">, int </span><span class="s1">b) { 
        </span><span class="s0">int </span><span class="s1">result = </span><span class="s2">1</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">i &lt; b</span><span class="s0">; </span><span class="s1">i++) { 
            result *= a</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">return </span><span class="s1">result</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>