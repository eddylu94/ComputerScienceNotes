<head>
<title>Practice1.java</title>
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
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

</span><span class="s2">import </span><span class="s1">java.lang.Character</span><span class="s2">;</span><span class="s1"> 
</span><span class="s2">import </span><span class="s1">java.lang.Integer</span><span class="s2">;</span><span class="s1"> 
</span><span class="s2">import </span><span class="s1">java.util.HashMap</span><span class="s2">;</span><span class="s1"> 
 
</span><span class="s2">public class </span><span class="s1">Practice1 { 
 
    </span><span class="s2">public static void </span><span class="s1">main(String[] args) { 
        String input = </span><span class="s3">&quot;encyclopedia&quot;</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s3">&quot;Input: &quot; </span><span class="s1">+ input)</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s3">&quot;Output: &quot; </span><span class="s1">+ findChar(input))</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s2">public static char </span><span class="s1">findChar(String input) { 
        HashMap&lt;Character</span><span class="s2">, </span><span class="s1">Integer&gt; map = </span><span class="s2">new </span><span class="s1">HashMap&lt;Character</span><span class="s2">, </span><span class="s1">Integer&gt;()</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">i = </span><span class="s4">0</span><span class="s2">; </span><span class="s1">i &lt; input.length()</span><span class="s2">; </span><span class="s1">i++) { 
            </span><span class="s2">if </span><span class="s1">(map.containsKey(input.charAt(i))) { 
                map.put(input.charAt(i)</span><span class="s2">, </span><span class="s1">map.get(input.charAt(i)) + </span><span class="s4">1</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
            } 
            </span><span class="s2">else </span><span class="s1">{ 
                map.put(input.charAt(i)</span><span class="s2">, </span><span class="s4">1</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
            } 
        } 
        </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">i = </span><span class="s4">0</span><span class="s2">; </span><span class="s1">i &lt; input.length()</span><span class="s2">; </span><span class="s1">i++) { 
            </span><span class="s2">if </span><span class="s1">(map.get(input.charAt(i)) == </span><span class="s4">1</span><span class="s1">) { 
                </span><span class="s2">return </span><span class="s1">input.charAt(i)</span><span class="s2">;</span><span class="s1"> 
            } 
        } 
        </span><span class="s2">return </span><span class="s1">input.charAt(</span><span class="s4">0</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
    } 
 
}</span></pre>
</div>