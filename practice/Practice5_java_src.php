<head>
<title>Practice5.java</title>
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

</span><span class="s2">import </span><span class="s1">java.util.LinkedList</span><span class="s2">;</span><span class="s1"> 
 
</span><span class="s2">public class </span><span class="s1">Practice5 { 
 
    </span><span class="s2">public static void </span><span class="s1">main(String[] args) { 
        Node listA = </span><span class="s2">new </span><span class="s1">Node(</span><span class="s3">1</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">i = </span><span class="s3">2</span><span class="s2">; </span><span class="s1">i &lt;= </span><span class="s3">6</span><span class="s2">; </span><span class="s1">i++) { 
            listA.appendToTail(i)</span><span class="s2">;</span><span class="s1"> 
        } 
        Node intersection = listA.appendToTail(</span><span class="s2">new </span><span class="s1">Node(</span><span class="s3">7</span><span class="s1">))</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">i = </span><span class="s3">8</span><span class="s2">; </span><span class="s1">i &lt;= </span><span class="s3">10</span><span class="s2">; </span><span class="s1">i++) { 
            listA.appendToTail(i)</span><span class="s2">;</span><span class="s1"> 
        } 
        Node listB = </span><span class="s2">new </span><span class="s1">Node(</span><span class="s3">11</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">i = </span><span class="s3">12</span><span class="s2">; </span><span class="s1">i &lt;= </span><span class="s3">13</span><span class="s2">; </span><span class="s1">i++) { 
            listB.appendToTail(i)</span><span class="s2">;</span><span class="s1"> 
        } 
        listB.appendToTail(intersection)</span><span class="s2">;</span><span class="s1"> 
 
        System.out.println(</span><span class="s4">&quot;ListA:&quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        listA.printList()</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s4">&quot;ListB:&quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        listB.printList()</span><span class="s2">;</span><span class="s1"> 
 
        System.out.println(</span><span class="s4">&quot;</span><span class="s2">\n</span><span class="s4">Intersection: &quot; </span><span class="s1">+ findIntersection(listA</span><span class="s2">, </span><span class="s1">listB).data)</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s2">public static </span><span class="s1">Node findIntersection(Node a</span><span class="s2">, </span><span class="s1">Node b) { 
 
        Node a1 = a</span><span class="s2">;</span><span class="s1"> 
        Node b1 = b</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">int </span><span class="s1">counterA = </span><span class="s3">0</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">int </span><span class="s1">counterB = </span><span class="s3">0</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">if </span><span class="s1">(a != </span><span class="s2">null</span><span class="s1">) { 
            counterA = </span><span class="s3">1</span><span class="s2">;</span><span class="s1"> 
        } 
        </span><span class="s2">if </span><span class="s1">(b != </span><span class="s2">null</span><span class="s1">) { 
            counterB = </span><span class="s3">1</span><span class="s2">;</span><span class="s1"> 
        } 
        </span><span class="s2">while </span><span class="s1">(a1.next != </span><span class="s2">null</span><span class="s1">) { 
            a1 = a1.next</span><span class="s2">;</span><span class="s1"> 
            counterA++</span><span class="s2">;</span><span class="s1"> 
        } 
        </span><span class="s2">while </span><span class="s1">(b1.next != </span><span class="s2">null</span><span class="s1">) { 
            b1 = b1.next</span><span class="s2">;</span><span class="s1"> 
            counterB++</span><span class="s2">;</span><span class="s1"> 
        } 
        System.out.println(</span><span class="s4">&quot;Size of listA: &quot; </span><span class="s1">+ counterA)</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s4">&quot;Size of listB: &quot; </span><span class="s1">+ counterB)</span><span class="s2">;</span><span class="s1"> 
 
        Node smaller</span><span class="s2">, </span><span class="s1">larger</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">if </span><span class="s1">(counterA &lt; counterB) { 
            smaller = a</span><span class="s2">;</span><span class="s1"> 
            larger = b</span><span class="s2">;</span><span class="s1"> 
        } 
        </span><span class="s2">else </span><span class="s1">{ 
            smaller = b</span><span class="s2">;</span><span class="s1"> 
            larger = a</span><span class="s2">;</span><span class="s1"> 
        } 
        </span><span class="s2">int </span><span class="s1">difference = Math.abs(counterA - counterB)</span><span class="s2">;</span><span class="s1"> 
 
        </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s2">; </span><span class="s1">i &lt; difference</span><span class="s2">; </span><span class="s1">i++) { 
            larger = larger.next</span><span class="s2">;</span><span class="s1"> 
        } 
        </span><span class="s2">while </span><span class="s1">(smaller.next != </span><span class="s2">null</span><span class="s1">) { 
            </span><span class="s2">if </span><span class="s1">(smaller == larger) { 
                </span><span class="s2">return </span><span class="s1">smaller</span><span class="s2">;</span><span class="s1"> 
            } 
            </span><span class="s2">else </span><span class="s1">{ 
                smaller = smaller.next</span><span class="s2">;</span><span class="s1"> 
                larger = larger.next</span><span class="s2">;</span><span class="s1"> 
            } 
        } 
 
        </span><span class="s2">return </span><span class="s1">larger</span><span class="s2">;</span><span class="s1"> 
    } 
 
}</span></pre>
</div>