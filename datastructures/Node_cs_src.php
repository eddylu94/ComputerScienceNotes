<head>
<title>Node.cs</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: #606366; font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); font-weight: bold; }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(204,120,50); }
.s3 { color: rgb(169,183,198); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>
<span class="s0">using </span><span class="s1">System</span><span class="s2">;</span><span class="s1"> 
 
</span><span class="s0">public class </span><span class="s1">Node 
{ 
    </span><span class="s0">public int </span><span class="s1">data</span><span class="s2">;</span><span class="s1"> 
    </span><span class="s0">public </span><span class="s1">Node next = </span><span class="s0">null</span><span class="s2">;</span><span class="s1"> 
 
    </span><span class="s0">public </span><span class="s1">Node(</span><span class="s0">int </span><span class="s1">d) 
    { 
        data = d</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public void </span><span class="s1">appendToTail(</span><span class="s0">int </span><span class="s1">d) 
    { 
        Console.WriteLine(&quot;Adding &quot; + d + &quot;...&quot;)</span><span class="s2">;</span><span class="s1"> 
        Node n = </span><span class="s0">this</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">while </span><span class="s1">(n.next != </span><span class="s0">null</span><span class="s1">) { } 
        { 
            n = n.next</span><span class="s2">;</span><span class="s1"> 
        } 
        n.next = </span><span class="s0">new </span><span class="s1">Node(d)</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">this</span><span class="s1">.printList()</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public </span><span class="s1">Node removeNode(</span><span class="s0">int </span><span class="s1">d) 
    { 
        Console.WriteLine(&quot;Removing &quot; + d + &quot;...&quot;)</span><span class="s2">;</span><span class="s1"> 
        Node n = </span><span class="s0">this</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(n.data == d) 
        { 
            </span><span class="s0">this</span><span class="s1">.printList()</span><span class="s2">;</span><span class="s1"> 
            </span><span class="s0">return this</span><span class="s1">.next</span><span class="s2">;</span><span class="s1"> 
        } 
        </span><span class="s0">while </span><span class="s1">(n.next != </span><span class="s0">null</span><span class="s1">) 
        { 
            </span><span class="s0">if </span><span class="s1">(n.next.data == d) 
            { 
                n.next = n.next.next</span><span class="s2">;</span><span class="s1"> 
                </span><span class="s0">this</span><span class="s1">.printList()</span><span class="s2">;</span><span class="s1"> 
                </span><span class="s0">return this</span><span class="s2">;</span><span class="s1"> 
            } 
            n = n.next</span><span class="s2">;</span><span class="s1"> 
        } 
        </span><span class="s0">this</span><span class="s1">.printList()</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">return null</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public void </span><span class="s1">printList() 
    { 
        Node n = </span><span class="s0">this</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">while </span><span class="s1">(n.next != </span><span class="s0">null</span><span class="s1">) 
        { 
            Console.WriteLine(n.data + &quot; &quot;)</span><span class="s2">;</span><span class="s1"> 
            n = n.next</span><span class="s2">;</span><span class="s1"> 
        } 
        Console.WriteLine(n.data + </span><span class="s3">&quot;\</span><span class="s1">n</span><span class="s3">\</span><span class="s1">n</span><span class="s3">&quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
    } 
} 
</span></pre>
</div>