<html>
<head>
<title>Problem2.java</title>
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
<span class="s0">public class </span><span class="s1">Problem2 { 
     
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
         
        </span><span class="s0">int</span><span class="s1">[] values1 = {</span><span class="s2">5</span><span class="s1">}</span><span class="s0">;</span><span class="s1"> 
        ListNode l1 = initializeList(values1</span><span class="s0">, </span><span class="s2">0</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">int</span><span class="s1">[] values2 = {</span><span class="s2">5</span><span class="s1">}</span><span class="s0">;</span><span class="s1"> 
        ListNode l2 = initializeList(values2</span><span class="s0">, </span><span class="s2">0</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
         
        </span><span class="s3">// printList(l1);</span><span class="s1"> 
        </span><span class="s3">// printList(l2);</span><span class="s1"> 
 
        ListNode result = addTwoNumbers(l1</span><span class="s0">, </span><span class="s1">l2)</span><span class="s0">;</span><span class="s1"> 
        printList(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static </span><span class="s1">ListNode addTwoNumbers(ListNode l1</span><span class="s0">, </span><span class="s1">ListNode l2) { 
         
        ListNode result = </span><span class="s0">new </span><span class="s1">ListNode(</span><span class="s2">0</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        ListNode n = result</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">while </span><span class="s1">(n != </span><span class="s0">null</span><span class="s1">) { 
             
            </span><span class="s0">if </span><span class="s1">(l1 == </span><span class="s0">null </span><span class="s1">&amp;&amp; l2 == </span><span class="s0">null</span><span class="s1">) { 
                </span><span class="s0">return </span><span class="s1">result</span><span class="s0">;</span><span class="s1"> 
            } 
            </span><span class="s0">if </span><span class="s1">(l1 == </span><span class="s0">null</span><span class="s1">) { 
                n.val += l2.val</span><span class="s0">;</span><span class="s1"> 
                l2 = l2.next</span><span class="s0">;</span><span class="s1"> 
            } 
            </span><span class="s0">else if </span><span class="s1">(l2 == </span><span class="s0">null</span><span class="s1">) { 
                n.val += l1.val</span><span class="s0">;</span><span class="s1"> 
                l1 = l1.next</span><span class="s0">;</span><span class="s1"> 
            } 
            </span><span class="s0">else </span><span class="s1">{ 
                n.val += l1.val + l2.val</span><span class="s0">;</span><span class="s1"> 
                l1 = l1.next</span><span class="s0">;</span><span class="s1"> 
                l2 = l2.next</span><span class="s0">;</span><span class="s1"> 
            } 
 
            </span><span class="s0">if </span><span class="s1">(n.val &gt;= </span><span class="s2">10</span><span class="s1">) { 
                n.val = n.val % </span><span class="s2">10</span><span class="s0">;</span><span class="s1"> 
                n.next = </span><span class="s0">new </span><span class="s1">ListNode(</span><span class="s2">1</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
            } 
            </span><span class="s0">else </span><span class="s1">{ 
                </span><span class="s0">if </span><span class="s1">(l1 != </span><span class="s0">null </span><span class="s1">|| l2 != </span><span class="s0">null</span><span class="s1">) { 
                    n.next = </span><span class="s0">new </span><span class="s1">ListNode(</span><span class="s2">0</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
                } 
            } 
            n = n.next</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">return </span><span class="s1">result</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static </span><span class="s1">ListNode initializeList(</span><span class="s0">int</span><span class="s1">[] values</span><span class="s0">, int </span><span class="s1">index) { 
        ListNode list = </span><span class="s0">new </span><span class="s1">ListNode(values[</span><span class="s2">0</span><span class="s1">])</span><span class="s0">;</span><span class="s1"> 
        ListNode n = list</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">i &lt; values.length - </span><span class="s2">1</span><span class="s0">; </span><span class="s1">i++) { 
            n.next = </span><span class="s0">new </span><span class="s1">ListNode(values[i + </span><span class="s2">1</span><span class="s1">])</span><span class="s0">;</span><span class="s1"> 
            n = n.next</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">return </span><span class="s1">list</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static void </span><span class="s1">printList(ListNode l) { 
        </span><span class="s0">while </span><span class="s1">(l.next != </span><span class="s0">null</span><span class="s1">) { 
            System.out.print(l.val + </span><span class="s4">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
            l = l.next</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println(l.val + </span><span class="s4">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>