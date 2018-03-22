<head>
<title>ImplementStack.cs</title>
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
 
</span><span class="s0">public class </span><span class="s1">ImplementStack 
{ 
    </span><span class="s0">public static int </span><span class="s1">Main() 
    { 
        Console.WriteLine(&quot;Initializing Stack with &quot; + 1)</span><span class="s2">;</span><span class="s1"> 
        Stack stack = </span><span class="s0">new </span><span class="s1">Stack(1)</span><span class="s2">;</span><span class="s1"> 
        stack.printStack()</span><span class="s2">;</span><span class="s1"> 
 
        stack.push(2)</span><span class="s2">;</span><span class="s1"> 
        stack.push(3)</span><span class="s2">;</span><span class="s1"> 
        stack.push(4)</span><span class="s2">;</span><span class="s1"> 
        stack.push(5)</span><span class="s2">;</span><span class="s1"> 
        stack.pop()</span><span class="s2">;</span><span class="s1"> 
        stack.push(6)</span><span class="s2">;</span><span class="s1"> 
        stack.push(7)</span><span class="s2">;</span><span class="s1"> 
        stack.pop()</span><span class="s2">;</span><span class="s1"> 
 
        </span><span class="s0">return </span><span class="s1">0</span><span class="s2">;</span><span class="s1"> 
    } 
} 
</span></pre>
</div>