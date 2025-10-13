<html>
<head>
<title>Problem22.java</title>
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
</span><span class="s0">import </span><span class="s1">java.util.Arrays</span><span class="s0">;</span><span class="s1"> 
 
</span><span class="s0">public class </span><span class="s1">Problem22 { 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        String[] input = getInput()</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s2">// printInput(input);</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">result = findScore(input)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">findScore(String[] input) { 
         
        </span><span class="s0">int </span><span class="s1">score = </span><span class="s3">0</span><span class="s0">;</span><span class="s1"> 
 
        Arrays.sort(input)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; input.length</span><span class="s0">; </span><span class="s1">i++) { 
            score += getIndividualScore(input[i]</span><span class="s0">, </span><span class="s1">i + </span><span class="s3">1</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
         
        </span><span class="s0">return </span><span class="s1">score</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">getIndividualScore(String name</span><span class="s0">, int </span><span class="s1">position) { 
         
        </span><span class="s0">int </span><span class="s1">score = </span><span class="s3">0</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; name.length()</span><span class="s0">; </span><span class="s1">i++) { 
            score += Character.toUpperCase(name.charAt(i)) - </span><span class="s4">'0' </span><span class="s1">- </span><span class="s3">16</span><span class="s0">;</span><span class="s1"> 
        } 
        score *= position</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">return </span><span class="s1">score</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static </span><span class="s1">String[] getInput() { 
 
        String line = </span><span class="s4">&quot;&quot;</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">try </span><span class="s1">{ 
            BufferedReader reader = </span><span class="s0">new </span><span class="s1">BufferedReader(</span><span class="s0">new </span><span class="s1">FileReader(</span><span class="s4">&quot;names.txt&quot;</span><span class="s1">))</span><span class="s0">;</span><span class="s1"> 
             
            line = reader.readLine()</span><span class="s0">;</span><span class="s1"> 
            reader.close()</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">catch</span><span class="s1">(IOException e) { 
            e.printStackTrace()</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">return </span><span class="s1">line.replaceAll(</span><span class="s4">&quot;</span><span class="s0">\&quot;</span><span class="s4">&quot;</span><span class="s0">, </span><span class="s4">&quot;&quot;</span><span class="s1">).split(</span><span class="s4">&quot;,&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s2">// public static void printInput(String[] input) {</span><span class="s1"> 
    </span><span class="s2">//     System.out.println(Arrays.toString(input));</span><span class="s1"> 
    </span><span class="s2">// }</span><span class="s1"> 
        }</span></pre>
    </div>