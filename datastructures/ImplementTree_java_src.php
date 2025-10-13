<head>
<title>ImplementTree.java</title>
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

<span class="s0">public class </span><span class="s1">ImplementTree { 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
 
        System.out.println(</span><span class="s2">&quot;Initializing Tree with &quot; </span><span class="s1">+ </span><span class="s3">1</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        TreeNode root = </span><span class="s0">new </span><span class="s1">TreeNode(</span><span class="s3">1</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        root.printTree()</span><span class="s0">;</span><span class="s1"> 
 
        TreeNode a = root.addChild(</span><span class="s3">2</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        root.printTree()</span><span class="s0">;</span><span class="s1"> 
 
        TreeNode b = root.addChild(</span><span class="s3">3</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        root.printTree()</span><span class="s0">;</span><span class="s1"> 
 
        a.addChild(</span><span class="s3">4</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        root.printTree()</span><span class="s0">;</span><span class="s1"> 
 
        TreeNode c = a.addChild(</span><span class="s3">5</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        root.printTree()</span><span class="s0">;</span><span class="s1"> 
 
        c.addChild(</span><span class="s3">6</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        root.printTree()</span><span class="s0">;</span><span class="s1"> 
 
        b.addChild(</span><span class="s3">7</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        root.printTree()</span><span class="s0">;</span><span class="s1"> 
 
        root.breadthSearch()</span><span class="s0">;</span><span class="s1"> 
 
        root.depthSearch()</span><span class="s0">;</span><span class="s1"> 
 
    } 
 
}</span></pre>
</div>