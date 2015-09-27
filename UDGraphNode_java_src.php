<head>
<title>UDGraphNode.java</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(104,151,187); }
.s3 { color: rgb(106,135,89); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

<span class="s0">import </span><span class="s1">java.util.ArrayList</span><span class="s0">;</span><span class="s1"> 
 
</span><span class="s0">public class </span><span class="s1">UDGraphNode { 
 
    </span><span class="s0">int </span><span class="s1">data</span><span class="s0">;</span><span class="s1"> 
    </span><span class="s0">int </span><span class="s1">numEdges = </span><span class="s2">0</span><span class="s0">;</span><span class="s1"> 
    ArrayList&lt;UDGraphNode&gt; adjacent = </span><span class="s0">new </span><span class="s1">ArrayList&lt;UDGraphNode&gt;()</span><span class="s0">;</span><span class="s1"> 
 
    </span><span class="s0">public </span><span class="s1">UDGraphNode(</span><span class="s0">int </span><span class="s1">d) { 
        data = d</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">addAdjacentToList(UDGraphNode n) { 
        adjacent.add(n)</span><span class="s0">;</span><span class="s1"> 
        numEdges++</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">int </span><span class="s1">getNumEdges() { 
        System.out.println(</span><span class="s3">&quot;Number of edges connected to &quot; </span><span class="s1">+ data + </span><span class="s3">&quot;:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(numEdges)</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">return </span><span class="s1">numEdges</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">printAdjacents() { 
        System.out.println(</span><span class="s3">&quot;Node &quot; </span><span class="s1">+ </span><span class="s0">this</span><span class="s1">.data + </span><span class="s3">&quot; is connected to:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">i &lt; adjacent.size()</span><span class="s0">; </span><span class="s1">i++) { 
            System.out.print(adjacent.get(i).data + </span><span class="s3">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
    } 
 
    ArrayList&lt;UDGraphNode&gt; getAdjacentList() { 
        </span><span class="s0">return </span><span class="s1">adjacent</span><span class="s0">;</span><span class="s1"> 
    } 
 
}</span></pre>
</div>