<html>
<head>
<title>Problem26.java</title>
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
<span class="s0">import </span><span class="s1">java.util.ArrayList</span><span class="s0">;</span><span class="s1"> 
</span><span class="s0">import </span><span class="s1">java.util.List</span><span class="s0">;</span><span class="s1"> 
 
</span><span class="s0">public class </span><span class="s1">Problem26 { 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s0">int </span><span class="s1">result = findDenominator(</span><span class="s2">1000</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">findDenominator(</span><span class="s0">int </span><span class="s1">n) { 
         
        </span><span class="s0">int </span><span class="s1">largestSequenceLength = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">denominator = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">2</span><span class="s0">; </span><span class="s1">i &lt; n</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">int </span><span class="s1">length = findSequenceLength(i)</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">if </span><span class="s1">(length &gt; largestSequenceLength) { 
                largestSequenceLength = length</span><span class="s0">;</span><span class="s1"> 
                denominator = i</span><span class="s0">;</span><span class="s1"> 
            } 
        } 
         
        </span><span class="s0">return </span><span class="s1">denominator</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">findSequenceLength(</span><span class="s0">int </span><span class="s1">denominator) { 
         
        List&lt;Integer&gt; list = </span><span class="s0">new </span><span class="s1">ArrayList&lt;&gt;()</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">remainder = </span><span class="s2">1</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">while </span><span class="s1">(!list.contains(remainder)) { 
            list.add(remainder)</span><span class="s0">;</span><span class="s1"> 
            remainder = </span><span class="s2">10 </span><span class="s1">* remainder % denominator</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">return </span><span class="s1">list.size()</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>