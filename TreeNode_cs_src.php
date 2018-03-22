<head>
<title>TreeNode.cs</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: #606366; font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); font-weight: bold; }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(204,120,50); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>
<span class="s0">using </span><span class="s1">System</span><span class="s2">;</span><span class="s1"> 
</span><span class="s0">using </span><span class="s1">System.Collections.Generic</span><span class="s2">;</span><span class="s1"> 
 
</span><span class="s0">public class </span><span class="s1">TreeNode 
{ 
    </span><span class="s0">int </span><span class="s1">data</span><span class="s2">;</span><span class="s1"> 
    TreeNode parent = </span><span class="s0">null</span><span class="s2">;</span><span class="s1"> 
    List&lt;TreeNode&gt; children = </span><span class="s0">new </span><span class="s1">List&lt;TreeNode&gt;()</span><span class="s2">;</span><span class="s1"> 
 
    List&lt;TreeNode&gt; breadthQueue = </span><span class="s0">new </span><span class="s1">List&lt;TreeNode&gt;()</span><span class="s2">;</span><span class="s1"> 
 
    </span><span class="s0">public </span><span class="s1">TreeNode(</span><span class="s0">int </span><span class="s1">d) 
    { 
        data = d</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public </span><span class="s1">TreeNode addChild(</span><span class="s0">int </span><span class="s1">d) 
    { 
        Console.WriteLine(&quot;Adding child &quot; + d + &quot;...&quot;)</span><span class="s2">;</span><span class="s1"> 
        TreeNode child = </span><span class="s0">new </span><span class="s1">TreeNode(d)</span><span class="s2">;</span><span class="s1"> 
        children.Add(child)</span><span class="s2">;</span><span class="s1"> 
        child.setParent(</span><span class="s0">this</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">return </span><span class="s1">child</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public void </span><span class="s1">setParent(TreeNode newParent) 
    { 
        parent = newParent</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public void </span><span class="s1">printTree() 
    { 
        TreeNode n = </span><span class="s0">this</span><span class="s2">;</span><span class="s1"> 
        printSubTree(n</span><span class="s2">, </span><span class="s1">0)</span><span class="s2">;</span><span class="s1"> 
        Console.WriteLine()</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">int </span><span class="s1">printSubTree(TreeNode n</span><span class="s2">, </span><span class="s0">int </span><span class="s1">level) 
    { 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">a = 0</span><span class="s2">; </span><span class="s1">a &lt; level</span><span class="s2">; </span><span class="s1">a++) 
        { 
            Console.Write(&quot;-----&quot;)</span><span class="s2">;</span><span class="s1"> 
        } 
        Console.WriteLine(n.data)</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(n.children.Count == 0) 
        { 
            </span><span class="s0">return </span><span class="s1">n.data</span><span class="s2">;</span><span class="s1"> 
        } 
        </span><span class="s0">int </span><span class="s1">size = n.children.Count</span><span class="s2">;</span><span class="s1"> 
        level++</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = 0</span><span class="s2">; </span><span class="s1">i &lt; size</span><span class="s2">; </span><span class="s1">i++) 
        { 
            printSubTree(n.children[i]</span><span class="s2">, </span><span class="s1">level)</span><span class="s2">;</span><span class="s1"> 
        } 
        </span><span class="s0">return </span><span class="s1">-1</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public void </span><span class="s1">depthSearch() 
    { 
        Console.WriteLine(&quot;Depth-first search:&quot;)</span><span class="s2">;</span><span class="s1"> 
        TreeNode n = </span><span class="s0">this</span><span class="s2">;</span><span class="s1"> 
        depthSearchNode(n)</span><span class="s2">;</span><span class="s1"> 
        Console.WriteLine()</span><span class="s2">;</span><span class="s1"> 
        Console.WriteLine()</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public void </span><span class="s1">depthSearchNode(TreeNode n) 
    { 
        Console.Write(n.data + &quot; &quot;)</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(n.children.Count &gt; 0) 
        { 
            </span><span class="s0">int </span><span class="s1">size = n.children.Count</span><span class="s2">;</span><span class="s1"> 
            </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = 0</span><span class="s2">; </span><span class="s1">i &lt; size</span><span class="s2">; </span><span class="s1">i++) 
            { 
                depthSearchNode(n.children[i])</span><span class="s2">;</span><span class="s1"> 
            } 
        } 
    } 
 
    </span><span class="s0">public void </span><span class="s1">breadthSearch() 
    { 
        Console.WriteLine(&quot;Breadth-first search:&quot;)</span><span class="s2">;</span><span class="s1"> 
        TreeNode n = </span><span class="s0">this</span><span class="s2">;</span><span class="s1"> 
        breadthQueue.Add(n)</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">while </span><span class="s1">(breadthQueue.Count &gt; 0) 
        { 
            breadthSearchOneLevel()</span><span class="s2">;</span><span class="s1"> 
        } 
        Console.WriteLine()</span><span class="s2">;</span><span class="s1"> 
        Console.WriteLine()</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public void </span><span class="s1">breadthSearchOneLevel() 
    { 
        TreeNode n = breadthQueue[0]</span><span class="s2">;</span><span class="s1"> 
        Console.Write(n.data + &quot; &quot;)</span><span class="s2">;</span><span class="s1"> 
        breadthQueue.RemoveAt(0)</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(n.children.Count &gt; 0) 
        { 
            </span><span class="s0">int </span><span class="s1">size = n.children.Count</span><span class="s2">;</span><span class="s1"> 
            </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = 0</span><span class="s2">; </span><span class="s1">i &lt; size</span><span class="s2">; </span><span class="s1">i++) 
            { 
                breadthQueue.Add(n.children[i])</span><span class="s2">;</span><span class="s1"> 
            } 
        } 
    } 
} 
</span></pre>
</div>