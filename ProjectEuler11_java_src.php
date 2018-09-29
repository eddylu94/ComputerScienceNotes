<html>
<head>
<title>Problem11.java</title>
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
 
</span><span class="s0">public class </span><span class="s1">Problem11 { 
     
    </span><span class="s0">private static int </span><span class="s1">numberOfRows = </span><span class="s2">20</span><span class="s0">;</span><span class="s1"> 
    </span><span class="s0">private static int </span><span class="s1">numberOfColumns = </span><span class="s2">20</span><span class="s0">;</span><span class="s1"> 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s0">int</span><span class="s1">[][] input = getInput()</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">long </span><span class="s1">result = findLargestProduct(input</span><span class="s0">, </span><span class="s2">4</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static long </span><span class="s1">findLargestProduct(</span><span class="s0">int</span><span class="s1">[][] input</span><span class="s0">, int </span><span class="s1">n) { 
         
        </span><span class="s0">long </span><span class="s1">result = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
         
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">i &lt; numberOfRows</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">j = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">j &lt;= numberOfColumns - n</span><span class="s0">; </span><span class="s1">j++) { 
                </span><span class="s3">// moving downwards</span><span class="s1"> 
                </span><span class="s0">if </span><span class="s1">(i &lt;= numberOfRows - n) { 
                    result = Math.max(result</span><span class="s0">, </span><span class="s1">input[i][j] * input[i + </span><span class="s2">1</span><span class="s1">][j] * input[i + </span><span class="s2">2</span><span class="s1">][j] * input[i + </span><span class="s2">3</span><span class="s1">][j])</span><span class="s0">;</span><span class="s1"> 
                } 
 
                </span><span class="s3">// moving rightwards</span><span class="s1"> 
                </span><span class="s0">if </span><span class="s1">(j &lt;= numberOfColumns - n) { 
                    result = Math.max(result</span><span class="s0">, </span><span class="s1">input[i][j] * input[i][j + </span><span class="s2">1</span><span class="s1">] * input[i][j + </span><span class="s2">2</span><span class="s1">] * input[i][j + </span><span class="s2">3</span><span class="s1">])</span><span class="s0">;</span><span class="s1"> 
                } 
 
                </span><span class="s3">// moving diagonally downwards and rightwards</span><span class="s1"> 
                </span><span class="s0">if </span><span class="s1">(i &lt;= numberOfRows - n &amp;&amp; j &lt;= numberOfColumns - n) { 
                    result = Math.max(result</span><span class="s0">, </span><span class="s1">input[i][j] * input[i + </span><span class="s2">1</span><span class="s1">][j + </span><span class="s2">1</span><span class="s1">] * input[i + </span><span class="s2">2</span><span class="s1">][j + </span><span class="s2">2</span><span class="s1">] * input[i + </span><span class="s2">3</span><span class="s1">][j + </span><span class="s2">3</span><span class="s1">])</span><span class="s0">;</span><span class="s1"> 
                } 
 
                </span><span class="s3">// moving diagonally upwards and rightwards</span><span class="s1"> 
                </span><span class="s0">if </span><span class="s1">(i &gt;= n - </span><span class="s2">1 </span><span class="s1">&amp;&amp; j &lt;= numberOfColumns - n) { 
                    result = Math.max(result</span><span class="s0">, </span><span class="s1">input[i][j] * input[i - </span><span class="s2">1</span><span class="s1">][j + </span><span class="s2">1</span><span class="s1">] * input[i - </span><span class="s2">2</span><span class="s1">][j + </span><span class="s2">2</span><span class="s1">] * input[i - </span><span class="s2">3</span><span class="s1">][j + </span><span class="s2">3</span><span class="s1">])</span><span class="s0">;</span><span class="s1"> 
                } 
            } 
        } 
         
        </span><span class="s0">return </span><span class="s1">result</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int</span><span class="s1">[][] getInput() { 
 
        </span><span class="s0">int</span><span class="s1">[][] input = </span><span class="s0">new int</span><span class="s1">[numberOfRows][]</span><span class="s0">;</span><span class="s1"> 
        String line = </span><span class="s4">&quot;&quot;</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">try </span><span class="s1">{ 
            BufferedReader reader = </span><span class="s0">new </span><span class="s1">BufferedReader(</span><span class="s0">new </span><span class="s1">FileReader(</span><span class="s4">&quot;input.txt&quot;</span><span class="s1">))</span><span class="s0">;</span><span class="s1"> 
             
            </span><span class="s0">int </span><span class="s1">line_index = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">while </span><span class="s1">((line = reader.readLine()) != </span><span class="s0">null</span><span class="s1">) { 
                String[] lineSplit = line.split(</span><span class="s4">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
                 
                </span><span class="s0">int</span><span class="s1">[] inputLine = </span><span class="s0">new int</span><span class="s1">[numberOfColumns]</span><span class="s0">;</span><span class="s1"> 
                </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">i &lt; numberOfColumns</span><span class="s0">; </span><span class="s1">i++) { 
                    inputLine[i] = Integer.parseInt(lineSplit[i])</span><span class="s0">;</span><span class="s1"> 
                } 
                input[line_index] = inputLine</span><span class="s0">;</span><span class="s1"> 
                 
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