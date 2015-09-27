<head>
<title>ImplementUDGraph.java</title>
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

<span class="s0">import </span><span class="s1">java.util.HashMap</span><span class="s0">;</span><span class="s1"> 
</span><span class="s0">import </span><span class="s1">java.util.ArrayList</span><span class="s0">;</span><span class="s1"> 
 
</span><span class="s0">public class </span><span class="s1">ImplementUDGraph { 
 
    </span><span class="s0">private static </span><span class="s1">HashMap&lt;String</span><span class="s0">, </span><span class="s1">Integer&gt; edges = </span><span class="s0">new </span><span class="s1">HashMap&lt;String</span><span class="s0">, </span><span class="s1">Integer&gt;()</span><span class="s0">;</span><span class="s1"> 
    </span><span class="s0">private static </span><span class="s1">HashMap&lt;Integer</span><span class="s0">, </span><span class="s1">UDGraphNode&gt; vertices = </span><span class="s0">new </span><span class="s1">HashMap&lt;Integer</span><span class="s0">, </span><span class="s1">UDGraphNode&gt;()</span><span class="s0">;</span><span class="s1"> 
 
    </span><span class="s0">private static </span><span class="s1">ArrayList&lt;Integer&gt; nodes = </span><span class="s0">new </span><span class="s1">ArrayList&lt;Integer&gt;()</span><span class="s0">;</span><span class="s1"> 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">1</span><span class="s0">; </span><span class="s1">i &lt;= </span><span class="s2">10</span><span class="s0">; </span><span class="s1">i++) { 
            System.out.println(</span><span class="s3">&quot;Initializing Undirected Graph Node with &quot; </span><span class="s1">+ i)</span><span class="s0">;</span><span class="s1"> 
            System.out.println()</span><span class="s0">;</span><span class="s1"> 
            vertices.put(i</span><span class="s0">, new </span><span class="s1">UDGraphNode(i))</span><span class="s0">;</span><span class="s1"> 
            nodes.add(i)</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">1</span><span class="s0">; </span><span class="s1">i &lt;= </span><span class="s2">9</span><span class="s0">; </span><span class="s1">i++) { 
            connectTwoNodes(i</span><span class="s0">, </span><span class="s1">i + </span><span class="s2">1</span><span class="s0">, </span><span class="s2">2</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        connectTwoNodes(</span><span class="s2">1</span><span class="s0">, </span><span class="s2">5</span><span class="s0">, </span><span class="s2">1</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        connectTwoNodes(</span><span class="s2">2</span><span class="s0">, </span><span class="s2">5</span><span class="s0">, </span><span class="s2">2</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        connectTwoNodes(</span><span class="s2">2</span><span class="s0">, </span><span class="s2">3</span><span class="s0">, </span><span class="s2">3</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        connectTwoNodes(</span><span class="s2">7</span><span class="s0">, </span><span class="s2">10</span><span class="s0">, </span><span class="s2">4</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        connectTwoNodes(</span><span class="s2">8</span><span class="s0">, </span><span class="s2">10</span><span class="s0">, </span><span class="s2">5</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
 
        edgeExist(</span><span class="s2">1</span><span class="s0">, </span><span class="s2">2</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        edgeExist(</span><span class="s2">1</span><span class="s0">, </span><span class="s2">3</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
 
        printEdgeWeight(</span><span class="s2">1</span><span class="s0">, </span><span class="s2">2</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        printEdgeWeight(</span><span class="s2">1</span><span class="s0">, </span><span class="s2">3</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        printEdgeWeight(</span><span class="s2">8</span><span class="s0">, </span><span class="s2">10</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
 
        vertices.get(</span><span class="s2">2</span><span class="s1">).printAdjacents()</span><span class="s0">;</span><span class="s1"> 
 
        vertices.get(</span><span class="s2">2</span><span class="s1">).getNumEdges()</span><span class="s0">;</span><span class="s1"> 
 
        printGraph()</span><span class="s0">;</span><span class="s1"> 
 
    } 
 
    </span><span class="s0">public static void </span><span class="s1">printEdgeWeight(</span><span class="s0">int </span><span class="s1">x</span><span class="s0">, int </span><span class="s1">y) { 
        System.out.println(</span><span class="s3">&quot;Weight of edge between &quot; </span><span class="s1">+ </span><span class="s2">1 </span><span class="s1">+ </span><span class="s3">&quot; and &quot; </span><span class="s1">+ </span><span class="s2">2 </span><span class="s1">+ </span><span class="s3">&quot;:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(edgeWeight(x</span><span class="s0">, </span><span class="s1">y) == -</span><span class="s2">1</span><span class="s1">) { 
            System.out.println(</span><span class="s3">&quot;Edge does not exist&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">else </span><span class="s1">{ 
            System.out.println(edgeWeight(x</span><span class="s0">, </span><span class="s1">y))</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static void </span><span class="s1">connectTwoNodes(</span><span class="s0">int </span><span class="s1">x</span><span class="s0">, int </span><span class="s1">y</span><span class="s0">, int </span><span class="s1">weight) { 
        UDGraphNode a = vertices.get(x)</span><span class="s0">;</span><span class="s1"> 
        UDGraphNode b = vertices.get(y)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(</span><span class="s3">&quot;Connecting &quot; </span><span class="s1">+ a.data + </span><span class="s3">&quot; with &quot; </span><span class="s1">+ b.data + </span><span class="s3">&quot;...&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(edges.get(x + </span><span class="s3">&quot;,&quot; </span><span class="s1">+ y) == </span><span class="s0">null</span><span class="s1">) { 
            System.out.println()</span><span class="s0">;</span><span class="s1"> 
            a.addAdjacentToList(b)</span><span class="s0">;</span><span class="s1"> 
            b.addAdjacentToList(a)</span><span class="s0">;</span><span class="s1"> 
            edges.put(x + </span><span class="s3">&quot;,&quot; </span><span class="s1">+ y</span><span class="s0">, </span><span class="s1">weight)</span><span class="s0">;</span><span class="s1"> 
            edges.put(y + </span><span class="s3">&quot;,&quot; </span><span class="s1">+ x</span><span class="s0">, </span><span class="s1">weight)</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">else </span><span class="s1">{ 
            System.out.println(x + </span><span class="s3">&quot; and &quot; </span><span class="s1">+ y + </span><span class="s3">&quot; are already connected&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
            System.out.println()</span><span class="s0">;</span><span class="s1"> 
        } 
    } 
 
    </span><span class="s0">public static boolean </span><span class="s1">edgeExist(</span><span class="s0">int </span><span class="s1">x</span><span class="s0">, int </span><span class="s1">y) { 
        System.out.println(</span><span class="s3">&quot;Checking if edge exists between &quot; </span><span class="s1">+ x + </span><span class="s3">&quot; and &quot; </span><span class="s1">+ y + </span><span class="s3">&quot;:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        Integer value = edges.get(x + </span><span class="s3">&quot;,&quot; </span><span class="s1">+ y)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(value == </span><span class="s0">null</span><span class="s1">) { 
            System.out.println(</span><span class="s0">false</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
            System.out.println()</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">return false;</span><span class="s1"> 
        } 
        System.out.println(</span><span class="s0">true</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">return true;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">edgeWeight(</span><span class="s0">int </span><span class="s1">x</span><span class="s0">, int </span><span class="s1">y) { 
        </span><span class="s0">if </span><span class="s1">(edges.get(x + </span><span class="s3">&quot;,&quot; </span><span class="s1">+ y) == </span><span class="s0">null</span><span class="s1">) { 
            </span><span class="s0">return </span><span class="s1">-</span><span class="s2">1</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">return </span><span class="s1">(edges.get(x + </span><span class="s3">&quot;,&quot; </span><span class="s1">+ y))</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static void </span><span class="s1">printGraph() { 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        System.out.println(</span><span class="s3">&quot;Printing Graph:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">1</span><span class="s0">; </span><span class="s1">i &lt;= nodes.size()</span><span class="s0">; </span><span class="s1">i++) { 
            System.out.println(</span><span class="s3">&quot;   Node &quot; </span><span class="s1">+ i + </span><span class="s3">&quot;:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
            ArrayList&lt;UDGraphNode&gt; adjacents = vertices.get(i).getAdjacentList()</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">j = </span><span class="s2">0</span><span class="s0">; </span><span class="s1">j &lt; adjacents.size()</span><span class="s0">; </span><span class="s1">j++) { 
                System.out.println(</span><span class="s3">&quot;      connected to &quot; </span><span class="s1">+ adjacents.get(j).data + </span><span class="s3">&quot; by weight of &quot;</span><span class="s1"> 
                        + edgeWeight(i</span><span class="s0">, </span><span class="s1">adjacents.get(j).data))</span><span class="s0">;</span><span class="s1"> 
            } 
            System.out.println()</span><span class="s0">;</span><span class="s1"> 
        } 
    } 
 
}</span></pre>
</div>