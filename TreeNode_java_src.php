<head>
<title>TreeNode.java</title>
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

<span class="s0">import </span><span class="s1">java.util.ArrayList</span><span class="s0">;</span><span class="s1"> 
 
</span><span class="s0">public class </span><span class="s1">TreeNode { 
 
    </span><span class="s0">int </span><span class="s1">data</span><span class="s0">;</span><span class="s1"> 
    TreeNode parent = </span><span class="s0">null;</span><span class="s1"> 
    ArrayList&lt;TreeNode&gt; children = </span><span class="s0">new </span><span class="s1">ArrayList&lt;TreeNode&gt;()</span><span class="s0">;</span><span class="s1"> 
 
    ArrayList&lt;TreeNode&gt; breadthQueue = </span><span class="s0">new </span><span class="s1">ArrayList&lt;TreeNode&gt;()</span><span class="s0">;</span><span class="s1"> 
 
    </span><span class="s0">public </span><span class="s1">TreeNode(</span><span class="s0">int </span><span class="s1">d) { 
        data = d</span><span class="s0">;</span><span class="s1"> 
    } 
 
    TreeNode addChild(</span><span class="s0">int </span><span class="s1">d) { 
        System.out.println(</span><span class="s2">&quot;Adding child &quot; </span><span class="s1">+ d + </span><span class="s2">&quot;...&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        TreeNode child = </span><span class="s0">new </span><span class="s1">TreeNode(d)</span><span class="s0">;</span><span class="s1"> 
        children.add(child)</span><span class="s0">;</span><span class="s1"> 
        child.setParent(</span><span class="s0">this</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">return </span><span class="s1">child</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">setParent(TreeNode newParent) { 
        parent = newParent</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">printTree() { 
        TreeNode n = </span><span class="s0">this;</span><span class="s1"> 
        printSubTree(n</span><span class="s0">, </span><span class="s3">0</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">int </span><span class="s1">printSubTree(TreeNode n</span><span class="s0">, int </span><span class="s1">level) { 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">a = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">a &lt; level</span><span class="s0">; </span><span class="s1">a++) { 
            System.out.print(</span><span class="s2">&quot;-----&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println(n.data)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(n.children.size() == </span><span class="s3">0</span><span class="s1">) { 
            </span><span class="s0">return </span><span class="s1">n.data</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">int </span><span class="s1">size = n.children.size()</span><span class="s0">;</span><span class="s1"> 
        level++</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; size</span><span class="s0">; </span><span class="s1">i++) { 
            printSubTree(n.children.get(i)</span><span class="s0">, </span><span class="s1">level)</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">return </span><span class="s1">-</span><span class="s3">1</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">depthSearch() { 
        System.out.println(</span><span class="s2">&quot;Depth-first search:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        TreeNode n = </span><span class="s0">this;</span><span class="s1"> 
        depthSearchNode(n)</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">depthSearchNode(TreeNode n) { 
        System.out.print(n.data + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(n.children.size() &gt; </span><span class="s3">0</span><span class="s1">) { 
            </span><span class="s0">int </span><span class="s1">size = n.children.size()</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; size</span><span class="s0">; </span><span class="s1">i++) { 
                depthSearchNode(n.children.get(i))</span><span class="s0">;</span><span class="s1"> 
            } 
        } 
    } 
 
    </span><span class="s0">void </span><span class="s1">breadthSearch() { 
        System.out.println(</span><span class="s2">&quot;Breadth-first search:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        TreeNode n = </span><span class="s0">this;</span><span class="s1"> 
        breadthQueue.add(n)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">while </span><span class="s1">(breadthQueue.size() &gt; </span><span class="s3">0</span><span class="s1">) { 
            breadthSearchOneLevel()</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">breadthSearchOneLevel() { 
        TreeNode n = breadthQueue.get(</span><span class="s3">0</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.print(n.data + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        breadthQueue.remove(</span><span class="s3">0</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(n.children.size() &gt; </span><span class="s3">0</span><span class="s1">) { 
            </span><span class="s0">int </span><span class="s1">size = n.children.size()</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; size</span><span class="s0">; </span><span class="s1">i++) { 
                breadthQueue.add(n.children.get(i))</span><span class="s0">;</span><span class="s1"> 
            } 
        } 
    } 
 
}</span></pre>
</div>