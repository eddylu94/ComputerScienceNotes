<html>
<head>
<title>Practice10.java</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: #606366; font-weight: normal; font-style: normal; }
.s0 { color: rgb(128,128,128); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(204,120,50); }
.s3 { color: rgb(104,151,187); }
.s4 { color: rgb(106,135,89); }
.s5 { color: rgb(98,151,85); font-style: italic; }
.s6 { color: rgb(98,151,85); font-weight: bold; font-style: italic; }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>
<span class="s0">/* 
Given an array of different coin denominations, 
find the minimum number of coins needed to sum to a certain amount of money. 
 */</span><span class="s1"> 
 
</span><span class="s2">import </span><span class="s1">java.util.Arrays</span><span class="s2">;</span><span class="s1"> 
 
</span><span class="s2">public class </span><span class="s1">Practice10 { 
    </span><span class="s2">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s2">int</span><span class="s1">[] denominations = {</span><span class="s3">1</span><span class="s2">, </span><span class="s3">2</span><span class="s2">, </span><span class="s3">3</span><span class="s1">}</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">int </span><span class="s1">target = </span><span class="s3">5</span><span class="s2">;</span><span class="s1"> 
 
        System.out.println(</span><span class="s4">&quot;Denominations:&quot; </span><span class="s1">+ Arrays.toString(denominations))</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s4">&quot;Target: &quot; </span><span class="s1">+ target)</span><span class="s2">;</span><span class="s1"> 
 
        System.out.println()</span><span class="s2">;</span><span class="s1"> 
        System.out.println()</span><span class="s2">;</span><span class="s1"> 
 
        System.out.println(</span><span class="s4">&quot;Recursive solution:</span><span class="s2">\n</span><span class="s4">&quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">int </span><span class="s1">recursiveSolution = recursiveSolution(denominations</span><span class="s2">, </span><span class="s1">target</span><span class="s2">, </span><span class="s3">0</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        System.out.println()</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s4">&quot;Minimum number of coins: &quot; </span><span class="s1">+ recursiveSolution)</span><span class="s2">;</span><span class="s1"> 
 
        System.out.println()</span><span class="s2">;</span><span class="s1"> 
        System.out.println()</span><span class="s2">;</span><span class="s1"> 
 
        System.out.println(</span><span class="s4">&quot;Dynamic solution:</span><span class="s2">\n</span><span class="s4">&quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">int </span><span class="s1">dynamicSolution = dynamicSolution(denominations</span><span class="s2">, </span><span class="s1">target)</span><span class="s2">;</span><span class="s1"> 
        System.out.println()</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s4">&quot;Minimum number of coins: &quot; </span><span class="s1">+ dynamicSolution)</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s5">/** 
     * Recursive solution 
     * </span><span class="s6">@param </span><span class="s5">denominations List of all coin denominations 
     * </span><span class="s6">@param </span><span class="s5">remainder     Current remainder amount of moneuy 
     * </span><span class="s6">@param </span><span class="s5">currentDepth  For testing purposes: depth used to print tree of results 
     * </span><span class="s6">@return              </span><span class="s5">Current minimum number of coins 
     */</span><span class="s1"> 
    </span><span class="s2">public static int </span><span class="s1">recursiveSolution(</span><span class="s2">int</span><span class="s1">[] denominations</span><span class="s2">, int </span><span class="s1">remainder</span><span class="s2">, int </span><span class="s1">currentDepth) { 
        </span><span class="s2">if </span><span class="s1">(remainder == </span><span class="s3">0</span><span class="s1">) { 
            </span><span class="s2">return </span><span class="s3">0</span><span class="s2">;</span><span class="s1"> 
        } 
 
        String prefix = </span><span class="s4">&quot;&quot;</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s2">; </span><span class="s1">i &lt; currentDepth</span><span class="s2">; </span><span class="s1">i++) { 
            prefix += </span><span class="s4">&quot;---&quot;</span><span class="s2">;</span><span class="s1"> 
        } 
 
        </span><span class="s2">int </span><span class="s1">min = Integer.MAX_VALUE</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s2">; </span><span class="s1">i &lt; denominations.length</span><span class="s2">; </span><span class="s1">i++) { 
            </span><span class="s2">int </span><span class="s1">difference = remainder - denominations[i]</span><span class="s2">;</span><span class="s1"> 
            </span><span class="s2">if </span><span class="s1">(difference &gt;= </span><span class="s3">0</span><span class="s1">) { 
                System.out.println(prefix + denominations[i] + </span><span class="s4">&quot;, &quot; </span><span class="s1">+ remainder)</span><span class="s2">;</span><span class="s1"> 
                </span><span class="s2">int </span><span class="s1">currentMin = recursiveSolution(denominations</span><span class="s2">, </span><span class="s1">difference</span><span class="s2">, </span><span class="s1">currentDepth + </span><span class="s3">1</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
                </span><span class="s2">if </span><span class="s1">(currentMin != Integer.MAX_VALUE) { 
                    min = Math.min(min</span><span class="s2">, </span><span class="s1">currentMin + </span><span class="s3">1</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
                } 
            } 
        } 
 
        </span><span class="s2">return </span><span class="s1">min == Integer.MAX_VALUE ? -</span><span class="s3">1 </span><span class="s1">: min</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s5">/** 
     * Dynamic programming solution 
     * </span><span class="s6">@param </span><span class="s5">denominations List of all coin denominations 
     * </span><span class="s6">@param </span><span class="s5">target        Target amount of money 
     * </span><span class="s6">@return              </span><span class="s5">Current minimum number of coins 
     */</span><span class="s1"> 
    </span><span class="s2">public static int </span><span class="s1">dynamicSolution(</span><span class="s2">int</span><span class="s1">[] denominations</span><span class="s2">, int </span><span class="s1">target) { 
        </span><span class="s2">int</span><span class="s1">[] solutions = </span><span class="s2">new int</span><span class="s1">[target + </span><span class="s3">1</span><span class="s1">]</span><span class="s2">;</span><span class="s1"> 
 
        </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">i = </span><span class="s3">1</span><span class="s2">; </span><span class="s1">i &lt; solutions.length</span><span class="s2">; </span><span class="s1">i++) { 
            solutions[i] = Integer.MAX_VALUE</span><span class="s2">;</span><span class="s1"> 
        } 
 
        </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s2">; </span><span class="s1">i &lt; solutions.length</span><span class="s2">; </span><span class="s1">i++) { 
            </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">j = </span><span class="s3">0</span><span class="s2">; </span><span class="s1">j &lt; denominations.length</span><span class="s2">; </span><span class="s1">j++) { 
                </span><span class="s2">int </span><span class="s1">sum = i + denominations[j]</span><span class="s2">;</span><span class="s1"> 
                </span><span class="s2">if </span><span class="s1">(sum &lt;= target) { 
                    solutions[sum] = Math.min(solutions[sum]</span><span class="s2">, </span><span class="s1">solutions[i] + </span><span class="s3">1</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
                } 
            } 
        } 
 
        </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s2">; </span><span class="s1">i &lt; solutions.length</span><span class="s2">; </span><span class="s1">i++) { 
            System.out.println(i + </span><span class="s4">&quot;: &quot; </span><span class="s1">+ solutions[i])</span><span class="s2">;</span><span class="s1"> 
        } 
 
        </span><span class="s2">return </span><span class="s1">solutions[target]</span><span class="s2">;</span><span class="s1"> 
    } 
}</span></pre>
</div>