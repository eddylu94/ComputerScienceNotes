<html>
<head>
<title>Problem3.java</title>
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
<span class="s0">import </span><span class="s1">java.util.HashMap</span><span class="s0">;</span><span class="s1"> 
</span><span class="s0">import </span><span class="s1">java.util.Map</span><span class="s0">;</span><span class="s1"> 
 
</span><span class="s0">public class </span><span class="s1">Problem3 { 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        String s = </span><span class="s2">&quot;abcabcbb&quot;</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">result = lengthOfLongestSubstring(s)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">lengthOfLongestSubstring(String s) { 
         
        </span><span class="s0">if </span><span class="s1">(s.length() &lt; </span><span class="s3">2</span><span class="s1">) { 
            </span><span class="s0">return </span><span class="s1">s.length()</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">int </span><span class="s1">result = </span><span class="s3">0</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">int </span><span class="s1">leftBound = </span><span class="s3">0</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">rightBound = </span><span class="s3">0</span><span class="s0">;</span><span class="s1"> 
        Map&lt;Character</span><span class="s0">, </span><span class="s1">Integer&gt; map = </span><span class="s0">new </span><span class="s1">HashMap&lt;&gt;()</span><span class="s0">;</span><span class="s1"> 
         
        </span><span class="s0">for </span><span class="s1">(rightBound = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">rightBound &lt; s.length()</span><span class="s0">; </span><span class="s1">rightBound++) { 
            </span><span class="s0">if </span><span class="s1">(map.containsKey(s.charAt(rightBound))) { 
                leftBound = Math.max(leftBound</span><span class="s0">, </span><span class="s1">map.get(s.charAt(rightBound)) + </span><span class="s3">1</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
            } 
            map.put(s.charAt(rightBound)</span><span class="s0">, </span><span class="s1">rightBound)</span><span class="s0">;</span><span class="s1"> 
            result = Math.max(result</span><span class="s0">, </span><span class="s1">rightBound - leftBound + </span><span class="s3">1</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">return </span><span class="s1">result</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>