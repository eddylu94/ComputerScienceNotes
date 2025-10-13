<head>
<title>UDGraph.java</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(106,135,89); }
.s3 { color: rgb(104,151,187); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

<span class="s0">import </span><span class="s1">java.util.HashMap</span><span class="s0">;</span><span class="s1"> 
</span><span class="s0">import </span><span class="s1">java.util.ArrayList</span><span class="s0">;</span><span class="s1"> 
 
</span><span class="s0">public class </span><span class="s1">UDGraph { 
 
    HashMap&lt;UDGraphNode</span><span class="s0">, </span><span class="s1">ArrayList&lt;UDGraphPair&gt;&gt; adjacencyList = </span><span class="s0">new </span><span class="s1">HashMap&lt;UDGraphNode</span><span class="s0">, </span><span class="s1">ArrayList&lt;UDGraphPair&gt;&gt;()</span><span class="s0">;</span><span class="s1"> 
    ArrayList&lt;UDGraphNode&gt; nodeList = </span><span class="s0">new </span><span class="s1">ArrayList&lt;UDGraphNode&gt;()</span><span class="s0">;</span><span class="s1"> 
 
    UDGraphNode root</span><span class="s0">;</span><span class="s1"> 
 
    </span><span class="s0">public </span><span class="s1">UDGraph(</span><span class="s0">int </span><span class="s1">d) { 
        System.out.println(</span><span class="s2">&quot;Initializing Undirected Graph Node with &quot; </span><span class="s1">+ d)</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        root = </span><span class="s0">new </span><span class="s1">UDGraphNode(d)</span><span class="s0">;</span><span class="s1"> 
        nodeList.add(root)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">connectTwoNodes(UDGraphNode x</span><span class="s0">, </span><span class="s1">UDGraphNode y</span><span class="s0">, int </span><span class="s1">weight) { 
        </span><span class="s0">if </span><span class="s1">(!nodeList.contains(x)) { 
            nodeList.add(x)</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">if </span><span class="s1">(!nodeList.contains(y)) { 
            nodeList.add(y)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println(</span><span class="s2">&quot;Connecting &quot; </span><span class="s1">+ x.data + </span><span class="s2">&quot; with &quot; </span><span class="s1">+ y.data + </span><span class="s2">&quot;...&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        x.addAdjacentToList(y</span><span class="s0">, </span><span class="s1">weight)</span><span class="s0">;</span><span class="s1"> 
        y.addAdjacentToList(x</span><span class="s0">, </span><span class="s1">weight)</span><span class="s0">;</span><span class="s1"> 
        adjacencyList.put(x</span><span class="s0">, </span><span class="s1">x.getAdjacentList())</span><span class="s0">;</span><span class="s1"> 
        adjacencyList.put(y</span><span class="s0">, </span><span class="s1">y.getAdjacentList())</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">printGraph() { 
        System.out.println(</span><span class="s2">&quot;Printing Graph:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; nodeList.size()</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">if </span><span class="s1">(adjacencyList.get(nodeList.get(i)) != </span><span class="s0">null</span><span class="s1">) { 
                System.out.println(</span><span class="s2">&quot;   Node &quot; </span><span class="s1">+ nodeList.get(i).data)</span><span class="s0">;</span><span class="s1"> 
                ArrayList&lt;UDGraphPair&gt; list = adjacencyList.get(nodeList.get(i))</span><span class="s0">;</span><span class="s1"> 
                </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">j = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">j &lt; list.size()</span><span class="s0">; </span><span class="s1">j++) { 
                    System.out.println(</span><span class="s2">&quot;      connected to &quot; </span><span class="s1">+ list.get(j).getKey().data 
                            + </span><span class="s2">&quot; by weight of &quot; </span><span class="s1">+ list.get(j).getValue())</span><span class="s0">;</span><span class="s1"> 
                } 
                System.out.println()</span><span class="s0">;</span><span class="s1"> 
            } 
        } 
    } 
 
}</span></pre>
</div>