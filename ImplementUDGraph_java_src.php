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

<span class="s0">public class </span><span class="s1">ImplementUDGraph { 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
 
        UDGraph graph = </span><span class="s0">new </span><span class="s1">UDGraph(</span><span class="s2">0</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
 
        UDGraphNode[] node = </span><span class="s0">new </span><span class="s1">UDGraphNode[</span><span class="s2">11</span><span class="s1">]</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s2">1</span><span class="s0">; </span><span class="s1">i &lt;= </span><span class="s2">10</span><span class="s0">; </span><span class="s1">i++) { 
            System.out.println(</span><span class="s3">&quot;Creating UDGraphNode &quot; </span><span class="s1">+ i)</span><span class="s0">;</span><span class="s1"> 
            node[i] = </span><span class="s0">new </span><span class="s1">UDGraphNode(i)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
 
        graph.connectTwoNodes(graph.root</span><span class="s0">, </span><span class="s1">node[</span><span class="s2">5</span><span class="s1">]</span><span class="s0">, </span><span class="s2">1</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        graph.connectTwoNodes(node[</span><span class="s2">2</span><span class="s1">]</span><span class="s0">, </span><span class="s1">node[</span><span class="s2">5</span><span class="s1">]</span><span class="s0">, </span><span class="s2">2</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        graph.connectTwoNodes(node[</span><span class="s2">2</span><span class="s1">]</span><span class="s0">, </span><span class="s1">node[</span><span class="s2">3</span><span class="s1">]</span><span class="s0">, </span><span class="s2">3</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        graph.connectTwoNodes(node[</span><span class="s2">7</span><span class="s1">]</span><span class="s0">, </span><span class="s1">node[</span><span class="s2">10</span><span class="s1">]</span><span class="s0">, </span><span class="s2">4</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        graph.connectTwoNodes(node[</span><span class="s2">8</span><span class="s1">]</span><span class="s0">, </span><span class="s1">node[</span><span class="s2">10</span><span class="s1">]</span><span class="s0">, </span><span class="s2">5</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        graph.connectTwoNodes(node[</span><span class="s2">10</span><span class="s1">]</span><span class="s0">, </span><span class="s1">node[</span><span class="s2">7</span><span class="s1">]</span><span class="s0">, </span><span class="s2">3</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
 
        graph.printGraph()</span><span class="s0">;</span><span class="s1"> 
 
    } 
 
}</span></pre>
</div>