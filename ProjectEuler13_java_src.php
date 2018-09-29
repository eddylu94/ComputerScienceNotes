<html>
<head>
<title>Problem13.java</title>
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
</span><span class="s0">import </span><span class="s1">java.math.BigInteger</span><span class="s0">;</span><span class="s1"> 
 
</span><span class="s0">public class </span><span class="s1">Problem13 { 
 
    </span><span class="s0">private static int </span><span class="s1">totalNumbers = </span><span class="s2">100</span><span class="s0">;</span><span class="s1"> 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        String[] input = getInput()</span><span class="s0">;</span><span class="s1"> 
        String result = findFirstDigits(input</span><span class="s0">, </span><span class="s2">10</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static </span><span class="s1">String findFirstDigits(String[] input</span><span class="s0">, int </span><span class="s1">n) { 
         
        BigInteger currentSum = </span><span class="s0">new </span><span class="s1">BigInteger(</span><span class="s3">&quot;0&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
         
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">i &lt; totalNumbers</span><span class="s0">; </span><span class="s1">i++) { 
            currentSum = currentSum.add(</span><span class="s0">new </span><span class="s1">BigInteger(input[i]))</span><span class="s0">;</span><span class="s1"> 
        } 
 
        String currentSumString = currentSum.toString()</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">return </span><span class="s1">currentSumString.substring(</span><span class="s2">0</span><span class="s0">, </span><span class="s2">10</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static </span><span class="s1">String[] getInput() { 
 
        String[] input = </span><span class="s0">new </span><span class="s1">String[totalNumbers]</span><span class="s0">;</span><span class="s1"> 
        String line = </span><span class="s3">&quot;&quot;</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">try </span><span class="s1">{ 
            BufferedReader reader = </span><span class="s0">new </span><span class="s1">BufferedReader(</span><span class="s0">new </span><span class="s1">FileReader(</span><span class="s3">&quot;input.txt&quot;</span><span class="s1">))</span><span class="s0">;</span><span class="s1"> 
             
            </span><span class="s0">int </span><span class="s1">line_index = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">while </span><span class="s1">((line = reader.readLine()) != </span><span class="s0">null</span><span class="s1">) { 
                input[line_index] = line</span><span class="s0">;</span><span class="s1"> 
                line_index++</span><span class="s0">;</span><span class="s1"> 
            } 
            reader.close()</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">catch</span><span class="s1">(IOException e) { 
            e.printStackTrace()</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">return </span><span class="s1">input</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>