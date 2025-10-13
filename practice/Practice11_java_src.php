<head>
<title>Practice11.java</title>
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

</span><span class="s2">import </span><span class="s1">java.util.Arrays</span><span class="s2">;</span><span class="s1"> 
 
</span><span class="s2">public class </span><span class="s1">Practice11 { 
 
    </span><span class="s2">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s2">char</span><span class="s1">[] characters = {</span><span class="s3">'a'</span><span class="s2">, </span><span class="s3">'b'</span><span class="s2">, </span><span class="s3">'c'</span><span class="s2">, </span><span class="s3">'d'</span><span class="s2">, </span><span class="s3">'e'</span><span class="s1">}</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s3">&quot;Characters:</span><span class="s2">\n\n</span><span class="s3">&quot; </span><span class="s1">+ Arrays.toString(characters) + </span><span class="s3">&quot;</span><span class="s2">\n\n</span><span class="s3">&quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s3">&quot;Output:</span><span class="s2">\n</span><span class="s3">&quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        permute(characters)</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s2">public static void </span><span class="s1">permute(</span><span class="s2">char</span><span class="s1">[] characters) { 
        permute_iterate(</span><span class="s3">&quot;&quot;</span><span class="s2">, </span><span class="s1">characters)</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s2">public static void </span><span class="s1">permute_iterate(String currentResult</span><span class="s2">, char</span><span class="s1">[] characters) { 
        </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">i = </span><span class="s4">0</span><span class="s2">; </span><span class="s1">i &lt; characters.length</span><span class="s2">; </span><span class="s1">i++) { 
            </span><span class="s2">if </span><span class="s1">(characters.length == </span><span class="s4">1</span><span class="s1">) { 
                System.out.println(currentResult + characters[i])</span><span class="s2">;</span><span class="s1"> 
            } 
            </span><span class="s2">else </span><span class="s1">{ 
                permute_iterate(currentResult + characters[i]</span><span class="s2">, </span><span class="s1">removeElement(characters</span><span class="s2">, </span><span class="s1">i))</span><span class="s2">;</span><span class="s1"> 
            } 
        } 
    } 
 
    </span><span class="s2">public static char</span><span class="s1">[] removeElement(</span><span class="s2">char</span><span class="s1">[] characters</span><span class="s2">, int </span><span class="s1">element) { 
        </span><span class="s2">char</span><span class="s1">[] newCharacters = </span><span class="s2">new char</span><span class="s1">[characters.length - </span><span class="s4">1</span><span class="s1">]</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">int </span><span class="s1">index = </span><span class="s4">0</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">int </span><span class="s1">i = </span><span class="s4">0</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">for </span><span class="s1">(i = </span><span class="s4">0</span><span class="s2">; </span><span class="s1">i &lt; characters.length</span><span class="s2">; </span><span class="s1">i++) { 
            </span><span class="s2">if </span><span class="s1">(i != element) { 
                newCharacters[index++] = characters[i]</span><span class="s2">;</span><span class="s1"> 
            } 
        } 
        </span><span class="s2">return </span><span class="s1">newCharacters</span><span class="s2">;</span><span class="s1"> 
    } 
 
 
 
}</span></pre>
</div>