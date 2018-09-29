<html>
<head>
<title>Problem17.java</title>
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
 
</span><span class="s0">public class </span><span class="s1">Problem17 { 
 
    </span><span class="s0">private static </span><span class="s1">Map&lt;Integer</span><span class="s0">, </span><span class="s1">String&gt; map = </span><span class="s0">new </span><span class="s1">HashMap&lt;&gt;()</span><span class="s0">;</span><span class="s1"> 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        initializeMap()</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">result = getTotalLetters()</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">getTotalLetters() { 
         
        </span><span class="s2">// 1 to 9</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">count_1_to_9 = </span><span class="s3">0</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">1</span><span class="s0">; </span><span class="s1">i &lt;= </span><span class="s3">9</span><span class="s0">; </span><span class="s1">i++) { 
            count_1_to_9 += map.get(i).length()</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s2">// 10 to 19</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">count_10_to_19 = </span><span class="s3">0</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">10</span><span class="s0">; </span><span class="s1">i &lt;= </span><span class="s3">19</span><span class="s0">; </span><span class="s1">i++) { 
            count_10_to_19 += map.get(i).length()</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s2">// 20 to 99</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">count_20_to_99 = </span><span class="s3">0</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">2</span><span class="s0">; </span><span class="s1">i &lt;= </span><span class="s3">9</span><span class="s0">; </span><span class="s1">i++) { 
            count_20_to_99 += </span><span class="s3">10 </span><span class="s1">* map.get(i * </span><span class="s3">10</span><span class="s1">).length() + count_1_to_9</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">int </span><span class="s1">count_1_to_99 = count_1_to_9 + count_10_to_19 + count_20_to_99</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s2">// 100 to 999</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">count_100_to_099 = </span><span class="s3">0</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">1</span><span class="s0">; </span><span class="s1">i &lt;= </span><span class="s3">9</span><span class="s0">; </span><span class="s1">i++) { 
            count_100_to_099 += </span><span class="s3">100 </span><span class="s1">* (map.get(i).length() + map.get(</span><span class="s3">100</span><span class="s1">).length()) + </span><span class="s3">99 </span><span class="s1">* </span><span class="s4">&quot;and&quot;</span><span class="s1">.length() + count_1_to_99</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s2">//1000</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">count_1000 = map.get(</span><span class="s3">1</span><span class="s1">).length() + map.get(</span><span class="s3">1000</span><span class="s1">).length()</span><span class="s0">;</span><span class="s1"> 
         
        </span><span class="s0">return </span><span class="s1">count_1_to_99 + count_100_to_099 + count_1000</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static void </span><span class="s1">initializeMap() { 
        map.put(</span><span class="s3">1</span><span class="s0">, </span><span class="s4">&quot;one&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">2</span><span class="s0">, </span><span class="s4">&quot;two&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">3</span><span class="s0">, </span><span class="s4">&quot;three&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">4</span><span class="s0">, </span><span class="s4">&quot;four&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">5</span><span class="s0">, </span><span class="s4">&quot;five&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">6</span><span class="s0">, </span><span class="s4">&quot;six&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">7</span><span class="s0">, </span><span class="s4">&quot;seven&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">8</span><span class="s0">, </span><span class="s4">&quot;eight&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">9</span><span class="s0">, </span><span class="s4">&quot;nine&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">10</span><span class="s0">, </span><span class="s4">&quot;ten&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">11</span><span class="s0">, </span><span class="s4">&quot;eleven&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">12</span><span class="s0">, </span><span class="s4">&quot;twelve&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">13</span><span class="s0">, </span><span class="s4">&quot;thirteen&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">14</span><span class="s0">, </span><span class="s4">&quot;fourteen&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">15</span><span class="s0">, </span><span class="s4">&quot;fifteen&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">16</span><span class="s0">, </span><span class="s4">&quot;sixteen&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">17</span><span class="s0">, </span><span class="s4">&quot;seventeen&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">18</span><span class="s0">, </span><span class="s4">&quot;eighteen&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">19</span><span class="s0">, </span><span class="s4">&quot;nineteen&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">20</span><span class="s0">, </span><span class="s4">&quot;twenty&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">30</span><span class="s0">, </span><span class="s4">&quot;thirty&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">40</span><span class="s0">, </span><span class="s4">&quot;forty&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">50</span><span class="s0">, </span><span class="s4">&quot;fifty&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">60</span><span class="s0">, </span><span class="s4">&quot;sixty&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">70</span><span class="s0">, </span><span class="s4">&quot;seventy&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">80</span><span class="s0">, </span><span class="s4">&quot;eighty&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">90</span><span class="s0">, </span><span class="s4">&quot;ninety&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">100</span><span class="s0">, </span><span class="s4">&quot;hundred&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">1000</span><span class="s0">, </span><span class="s4">&quot;thousand&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>