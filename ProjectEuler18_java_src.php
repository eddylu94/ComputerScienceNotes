<html>
<head>
<title>Problem18.java</title>
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
 
</span><span class="s0">public class </span><span class="s1">Problem18 { 
 
    </span><span class="s0">private static int </span><span class="s1">numberOfRows = </span><span class="s2">15</span><span class="s0">;</span><span class="s1"> 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s0">int</span><span class="s1">[][] input = getInput()</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s3">// printInput(input);</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">result = findMaxTotal(input)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">findMaxTotal(</span><span class="s0">int</span><span class="s1">[][] input) { 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = numberOfRows - </span><span class="s2">2</span><span class="s0">; </span><span class="s1">i &gt;= </span><span class="s2">0</span><span class="s0">; </span><span class="s1">i--) { 
            </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">j = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">j &lt;= i</span><span class="s0">; </span><span class="s1">j++) { 
                input[i][j] += Math.max(input[i + </span><span class="s2">1</span><span class="s1">][j]</span><span class="s0">, </span><span class="s1">input[i + </span><span class="s2">1</span><span class="s1">][j + </span><span class="s2">1</span><span class="s1">])</span><span class="s0">;</span><span class="s1"> 
            } 
        } 
        </span><span class="s0">return </span><span class="s1">input[</span><span class="s2">0</span><span class="s1">][</span><span class="s2">0</span><span class="s1">]</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int</span><span class="s1">[][] getInput() { 
 
        </span><span class="s0">int</span><span class="s1">[][] input = </span><span class="s0">new int</span><span class="s1">[numberOfRows][]</span><span class="s0">;</span><span class="s1"> 
        String line = </span><span class="s4">&quot;&quot;</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">try </span><span class="s1">{ 
            BufferedReader reader = </span><span class="s0">new </span><span class="s1">BufferedReader(</span><span class="s0">new </span><span class="s1">FileReader(</span><span class="s4">&quot;triangle.txt&quot;</span><span class="s1">))</span><span class="s0">;</span><span class="s1"> 
             
            </span><span class="s0">int </span><span class="s1">line_index = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">while </span><span class="s1">((line = reader.readLine()) != </span><span class="s0">null</span><span class="s1">) { 
                String[] rowString = line.split(</span><span class="s4">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
                </span><span class="s0">int</span><span class="s1">[] row = </span><span class="s0">new int</span><span class="s1">[rowString.length]</span><span class="s0">;</span><span class="s1"> 
                </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">i &lt; row.length</span><span class="s0">; </span><span class="s1">i++) { 
                    row[i] = Integer.parseInt(rowString[i])</span><span class="s0">;</span><span class="s1"> 
                } 
                input[line_index++] = row</span><span class="s0">;</span><span class="s1"> 
            } 
            reader.close()</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">catch</span><span class="s1">(IOException e) { 
            e.printStackTrace()</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">return </span><span class="s1">input</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s3">// public static void printInput(int[][] input) {</span><span class="s1"> 
    </span><span class="s3">//     input = getInput();</span><span class="s1"> 
    </span><span class="s3">//     for (int i = 0; i &lt; input.length; i++) {</span><span class="s1"> 
    </span><span class="s3">//         for (int j = 0; j &lt; input[i].length; j++) {</span><span class="s1"> 
    </span><span class="s3">//             System.out.print(input[i][j] + &quot; &quot;);</span><span class="s1"> 
    </span><span class="s3">//         }</span><span class="s1"> 
    </span><span class="s3">//         System.out.println();</span><span class="s1"> 
    </span><span class="s3">//     }</span><span class="s1"> 
    </span><span class="s3">// }</span><span class="s1"> 
        }</span></pre>
    </div>