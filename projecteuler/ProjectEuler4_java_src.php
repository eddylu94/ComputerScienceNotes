<html>
<head>
<title>Problem4.java</title>
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
<span class="s0">public class </span><span class="s1">Problem4 { 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s0">int </span><span class="s1">result = findLargestPalindrome(</span><span class="s2">3</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
     
    </span><span class="s0">public static int </span><span class="s1">findLargestPalindrome(</span><span class="s0">int </span><span class="s1">n) { 
         
        </span><span class="s0">int </span><span class="s1">result = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
         
        </span><span class="s0">int </span><span class="s1">upperBound = (</span><span class="s0">int</span><span class="s1">)Math.pow(</span><span class="s2">10</span><span class="s0">, </span><span class="s1">n)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">i &lt; upperBound</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">j = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">j &lt; upperBound</span><span class="s0">; </span><span class="s1">j++) { 
                </span><span class="s0">if </span><span class="s1">(isPalindrome(i * j)) { 
                    result = Math.max(result</span><span class="s0">, </span><span class="s1">i * j)</span><span class="s0">;</span><span class="s1"> 
                } 
            } 
        } 
 
        </span><span class="s0">return </span><span class="s1">result</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static boolean </span><span class="s1">isPalindrome(</span><span class="s0">int </span><span class="s1">n) { 
        String numberAsString = Integer.toString(n)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">i &lt; numberAsString.length() / </span><span class="s2">2</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">if </span><span class="s1">(numberAsString.charAt(i) != numberAsString.charAt(numberAsString.length() - </span><span class="s2">1 </span><span class="s1">- i)) { 
                </span><span class="s0">return false;</span><span class="s1"> 
            } 
        } 
        </span><span class="s0">return true;</span><span class="s1"> 
    } 
}</span></pre>
</div>