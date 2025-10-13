<html>
<head>
<title>Problem8.java</title>
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
<span class="s0">import </span><span class="s1">java.io.BufferedReader</span><span class="s0">;</span><span class="s1"> 
</span><span class="s0">import </span><span class="s1">java.io.FileReader</span><span class="s0">;</span><span class="s1"> 
</span><span class="s0">import </span><span class="s1">java.io.IOException</span><span class="s0">;</span><span class="s1"> 
 
</span><span class="s0">public class </span><span class="s1">Problem8 { 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        String input = getInput()</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">long </span><span class="s1">result = findLargestProduct(input</span><span class="s0">, </span><span class="s2">13</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static long </span><span class="s1">findLargestProduct(String input</span><span class="s0">, int </span><span class="s1">n) { 
         
        </span><span class="s0">if </span><span class="s1">(input.length() &lt; n) { 
            </span><span class="s0">return </span><span class="s1">-</span><span class="s2">1</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">long </span><span class="s1">largestProduct = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">i &lt; input.length() - n</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">long </span><span class="s1">currentProduct = Character.getNumericValue(input.charAt(i))</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">j = </span><span class="s2">1</span><span class="s0">; </span><span class="s1">j &lt; n</span><span class="s0">; </span><span class="s1">j++) { 
                currentProduct *= Character.getNumericValue(input.charAt(i + j))</span><span class="s0">;</span><span class="s1"> 
            } 
            largestProduct = Math.max(largestProduct</span><span class="s0">, </span><span class="s1">currentProduct)</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">return </span><span class="s1">largestProduct</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static </span><span class="s1">String getInput() { 
         
        String line = </span><span class="s3">&quot;&quot;</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">try </span><span class="s1">{ 
            BufferedReader reader = </span><span class="s0">new </span><span class="s1">BufferedReader(</span><span class="s0">new </span><span class="s1">FileReader(</span><span class="s3">&quot;input.txt&quot;</span><span class="s1">))</span><span class="s0">;</span><span class="s1"> 
            line = reader.readLine()</span><span class="s0">; </span><span class="s4">// read first line</span><span class="s1"> 
            reader.close()</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">catch</span><span class="s1">(IOException e) { 
            e.printStackTrace()</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">return </span><span class="s1">line</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>