<head>
<title>ImplementTree.cs</title>
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
 
</span><span class="s0">public class </span><span class="s1">ImplementTree 
{ 
    </span><span class="s0">public static void </span><span class="s1">Main() 
    { 
        Console.WriteLine(&quot;Initializing Tree with &quot; + 1)</span><span class="s2">;</span><span class="s1"> 
        TreeNode root = </span><span class="s0">new </span><span class="s1">TreeNode(1)</span><span class="s2">;</span><span class="s1"> 
        root.printTree()</span><span class="s2">;</span><span class="s1"> 
 
        TreeNode a = root.addChild(2)</span><span class="s2">;</span><span class="s1"> 
        root.printTree()</span><span class="s2">;</span><span class="s1"> 
 
        TreeNode b = root.addChild(3)</span><span class="s2">;</span><span class="s1"> 
        root.printTree()</span><span class="s2">;</span><span class="s1"> 
 
        a.addChild(4)</span><span class="s2">;</span><span class="s1"> 
        root.printTree()</span><span class="s2">;</span><span class="s1"> 
 
        TreeNode c = a.addChild(5)</span><span class="s2">;</span><span class="s1"> 
        root.printTree()</span><span class="s2">;</span><span class="s1"> 
 
        c.addChild(6)</span><span class="s2">;</span><span class="s1"> 
        root.printTree()</span><span class="s2">;</span><span class="s1"> 
 
        b.addChild(7)</span><span class="s2">;</span><span class="s1"> 
        root.printTree()</span><span class="s2">;</span><span class="s1"> 
 
        root.breadthSearch()</span><span class="s2">;</span><span class="s1"> 
 
        root.depthSearch()</span><span class="s2">;</span><span class="s1"> 
    } 
} 
</span></pre>
</div>