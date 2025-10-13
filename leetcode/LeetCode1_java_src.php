<html>
<head>
<title>Problem1.java</title>
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
<span class="s0">import </span><span class="s1">java.util.Arrays</span><span class="s0">;</span><span class="s1"> 
</span><span class="s0">import </span><span class="s1">java.util.HashMap</span><span class="s0">;</span><span class="s1"> 
</span><span class="s0">import </span><span class="s1">java.util.Map</span><span class="s0">;</span><span class="s1"> 
 
</span><span class="s0">public class </span><span class="s1">Problem1 { 
     
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s0">int</span><span class="s1">[] nums = {</span><span class="s2">2</span><span class="s0">, </span><span class="s2">7</span><span class="s0">, </span><span class="s2">11</span><span class="s0">, </span><span class="s2">15</span><span class="s1">}</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">target = </span><span class="s2">9</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int</span><span class="s1">[] result = twoSum(nums</span><span class="s0">, </span><span class="s1">target)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(Arrays.toString(result))</span><span class="s0">;</span><span class="s1"> 
    } 
     
    </span><span class="s0">public static int</span><span class="s1">[] twoSum(</span><span class="s0">int</span><span class="s1">[] nums</span><span class="s0">, int </span><span class="s1">target) { 
         
        </span><span class="s0">int</span><span class="s1">[] result = </span><span class="s0">new int</span><span class="s1">[</span><span class="s2">2</span><span class="s1">]</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s3">// key: element of array</span><span class="s1"> 
        </span><span class="s3">// value: index of array</span><span class="s1"> 
        Map&lt;Integer</span><span class="s0">, </span><span class="s1">Integer&gt; map = </span><span class="s0">new </span><span class="s1">HashMap&lt;&gt;()</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">i &lt; nums.length</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">if </span><span class="s1">(map.containsKey(target - nums[i])) { 
                result[</span><span class="s2">0</span><span class="s1">] = i</span><span class="s0">;</span><span class="s1"> 
                result[</span><span class="s2">1</span><span class="s1">] = map.get(target - nums[i])</span><span class="s0">;</span><span class="s1"> 
                </span><span class="s0">return </span><span class="s1">result</span><span class="s0">;</span><span class="s1"> 
            } 
            map.put(nums[i]</span><span class="s0">, </span><span class="s1">i)</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">return </span><span class="s1">result</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>