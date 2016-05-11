<head>
<title>Practice10.java</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(128,128,128); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(204,120,50); }
.s3 { color: rgb(104,151,187); }
.s4 { color: rgb(106,135,89); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>


</span><span class="s2">import </span><span class="s1">java.util.ArrayList</span><span class="s2">;</span><span class="s1"> 
</span><span class="s2">import </span><span class="s1">java.util.Arrays</span><span class="s2">;</span><span class="s1"> 
</span><span class="s2">import </span><span class="s1">java.util.Collections</span><span class="s2">;</span><span class="s1"> 
 
</span><span class="s2">public class </span><span class="s1">Practice10 { 
 
    </span><span class="s2">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s2">int</span><span class="s1">[] coins = {</span><span class="s3">1</span><span class="s2">, </span><span class="s3">2</span><span class="s2">, </span><span class="s3">3</span><span class="s1">}</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">int </span><span class="s1">amount = </span><span class="s3">5</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s4">&quot;Denominations:</span><span class="s2">\n</span><span class="s4">&quot; </span><span class="s1">+ Arrays.toString(coins) + </span><span class="s4">&quot;</span><span class="s2">\n</span><span class="s4">&quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s4">&quot;Amount:</span><span class="s2">\n</span><span class="s4">&quot; </span><span class="s1">+ amount + </span><span class="s4">&quot;</span><span class="s2">\n\n</span><span class="s4">&quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s4">&quot;Minimum number of coins:</span><span class="s2">\n</span><span class="s4">&quot; </span><span class="s1">+ findMinCoins(coins</span><span class="s2">, </span><span class="s1">amount))</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s2">public static int </span><span class="s1">findMinCoins(</span><span class="s2">int</span><span class="s1">[] coins</span><span class="s2">, int </span><span class="s1">amount) { 
 
        </span><span class="s2">int</span><span class="s1">[] d = </span><span class="s2">new int</span><span class="s1">[amount + </span><span class="s3">1</span><span class="s1">]</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">int </span><span class="s1">total = </span><span class="s3">1</span><span class="s2">;</span><span class="s1"> 
        d[</span><span class="s3">0</span><span class="s1">] = </span><span class="s3">0</span><span class="s2">;</span><span class="s1"> 
 
        </span><span class="s2">while </span><span class="s1">(total &lt;= amount) { 
            </span><span class="s2">int </span><span class="s1">min = Integer.MAX_VALUE</span><span class="s2">;</span><span class="s1"> 
            </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s2">; </span><span class="s1">i &lt; coins.length</span><span class="s2">; </span><span class="s1">i++) { 
                </span><span class="s2">if </span><span class="s1">(total - coins[i] &gt;= </span><span class="s3">0 </span><span class="s1">&amp;&amp; d[total - coins[i]] != -</span><span class="s3">1</span><span class="s1">) { 
                    min = Math.min(min</span><span class="s2">, </span><span class="s1">d[total - coins[i]] + </span><span class="s3">1</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
                } 
            } 
            </span><span class="s2">if </span><span class="s1">(min &lt; Integer.MAX_VALUE) { 
                d[total++] = min</span><span class="s2">;</span><span class="s1"> 
            } 
            </span><span class="s2">else </span><span class="s1">{ 
                d[total++] = -</span><span class="s3">1</span><span class="s2">;</span><span class="s1"> 
            } 
        } 
 
        </span><span class="s2">return </span><span class="s1">d[amount]</span><span class="s2">;</span><span class="s1"> 
    } 
 
}</span></pre>
</div>