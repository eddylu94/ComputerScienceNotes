<html>
<head>
<title>Practice13.java</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: #606366; font-weight: normal; font-style: normal; }
.s0 { color: rgb(98,151,85); font-style: italic; }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(204,120,50); }
.s3 { color: rgb(104,151,187); }
.s4 { color: rgb(106,135,89); }
.s5 { color: rgb(98,151,85); font-weight: bold; font-style: italic; }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>
<span class="s0">/** 
 * Given a list of different coin denominations and a target amount of money, 
 * determine the number of possible combinations of coins that sum to the amount 
 * 
 * More than one coin denomination can be used per combination 
 * Duplicate combinations are allowed 
 */</span><span class="s1"> 
 
</span><span class="s2">import </span><span class="s1">java.util.Arrays</span><span class="s2">;</span><span class="s1"> 
 
</span><span class="s2">public class </span><span class="s1">Practice13 { 
    </span><span class="s2">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s2">int</span><span class="s1">[] denominations = {</span><span class="s3">2</span><span class="s2">, </span><span class="s3">3</span><span class="s2">, </span><span class="s3">5</span><span class="s1">}</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">int </span><span class="s1">target = </span><span class="s3">8</span><span class="s2">;</span><span class="s1"> 
 
        System.out.println(</span><span class="s4">&quot;Denominations:&quot; </span><span class="s1">+ Arrays.toString(denominations))</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s4">&quot;Target: &quot; </span><span class="s1">+ target)</span><span class="s2">;</span><span class="s1"> 
 
        System.out.println()</span><span class="s2">;</span><span class="s1"> 
        System.out.println()</span><span class="s2">;</span><span class="s1"> 
 
        System.out.println(</span><span class="s4">&quot;Recursive solution:</span><span class="s2">\n</span><span class="s4">&quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">int </span><span class="s1">recursiveSolution = recursiveSolution(denominations</span><span class="s2">, </span><span class="s1">target</span><span class="s2">, </span><span class="s3">0</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        System.out.println()</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s4">&quot;Number of combinations: &quot; </span><span class="s1">+ recursiveSolution)</span><span class="s2">;</span><span class="s1"> 
 
        System.out.println()</span><span class="s2">;</span><span class="s1"> 
        System.out.println()</span><span class="s2">;</span><span class="s1"> 
 
        System.out.println(</span><span class="s4">&quot;Dynamic solution:</span><span class="s2">\n</span><span class="s4">&quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">int </span><span class="s1">dynamicSolution = dynamicSolution(denominations</span><span class="s2">, </span><span class="s1">target)</span><span class="s2">;</span><span class="s1"> 
        System.out.println()</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s4">&quot;Number of combinations: &quot; </span><span class="s1">+ dynamicSolution)</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">/** 
     * Recursive solution 
     * </span><span class="s5">@param </span><span class="s0">denominations List of all coin denominations 
     * </span><span class="s5">@param </span><span class="s0">remainder     Current remainder amount of moneuy 
     * </span><span class="s5">@param </span><span class="s0">currentDepth  For testing purposes: depth used to print tree of results 
     * </span><span class="s5">@return              </span><span class="s0">Current number of combinations 
     */</span><span class="s1"> 
    </span><span class="s2">public static int </span><span class="s1">recursiveSolution(</span><span class="s2">int</span><span class="s1">[] denominations</span><span class="s2">, int </span><span class="s1">remainder</span><span class="s2">, int </span><span class="s1">currentDepth) { 
        </span><span class="s2">if </span><span class="s1">(remainder == </span><span class="s3">0</span><span class="s1">) { 
            </span><span class="s2">return </span><span class="s3">0</span><span class="s2">;</span><span class="s1"> 
        } 
 
        String prefix = </span><span class="s4">&quot;&quot;</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s2">; </span><span class="s1">i &lt; currentDepth</span><span class="s2">; </span><span class="s1">i++) { 
            prefix += </span><span class="s4">&quot;---&quot;</span><span class="s2">;</span><span class="s1"> 
        } 
 
        </span><span class="s2">int </span><span class="s1">max = -</span><span class="s3">1</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s2">; </span><span class="s1">i &lt; denominations.length</span><span class="s2">; </span><span class="s1">i++) { 
            </span><span class="s2">int </span><span class="s1">difference = remainder - denominations[i]</span><span class="s2">;</span><span class="s1"> 
            </span><span class="s2">if </span><span class="s1">(difference &gt;= </span><span class="s3">0</span><span class="s1">) { 
                System.out.println(prefix + denominations[i] + </span><span class="s4">&quot;, &quot; </span><span class="s1">+ remainder)</span><span class="s2">;</span><span class="s1"> 
                </span><span class="s2">int </span><span class="s1">currentNumberOfCombinations = recursiveSolution(denominations</span><span class="s2">, </span><span class="s1">difference</span><span class="s2">, </span><span class="s1">currentDepth + </span><span class="s3">1</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
                </span><span class="s2">if </span><span class="s1">(currentNumberOfCombinations &gt;= </span><span class="s3">0</span><span class="s1">) { 
                    max = Math.max(max</span><span class="s2">, </span><span class="s1">currentNumberOfCombinations + </span><span class="s3">1</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
                } 
            } 
        } 
        </span><span class="s2">return </span><span class="s1">max</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">/** 
     * Dynamics programming solution 
     * </span><span class="s5">@param </span><span class="s0">denominations List of all coin denominations 
     * </span><span class="s5">@param </span><span class="s0">target        Target amount of money 
     * </span><span class="s5">@return              </span><span class="s0">Current number of combinations 
     */</span><span class="s1"> 
    </span><span class="s2">public static int </span><span class="s1">dynamicSolution(</span><span class="s2">int</span><span class="s1">[] denominations</span><span class="s2">, int </span><span class="s1">target) { 
        </span><span class="s2">int</span><span class="s1">[] solutions = </span><span class="s2">new int</span><span class="s1">[target + </span><span class="s3">1</span><span class="s1">]</span><span class="s2">;</span><span class="s1"> 
 
        </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s2">; </span><span class="s1">i &lt; solutions.length</span><span class="s2">; </span><span class="s1">i++) { 
            </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">j = </span><span class="s3">0</span><span class="s2">; </span><span class="s1">j &lt; denominations.length</span><span class="s2">; </span><span class="s1">j++) { 
                </span><span class="s2">int </span><span class="s1">sum = i + denominations[j]</span><span class="s2">;</span><span class="s1"> 
                </span><span class="s2">if </span><span class="s1">(sum &lt;= target) { 
                    solutions[sum] = Math.max(solutions[sum]</span><span class="s2">, </span><span class="s1">solutions[i] + </span><span class="s3">1</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
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