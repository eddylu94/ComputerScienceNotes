<head>
<title>Queue.cs</title>
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
 
</span><span class="s0">public class </span><span class="s1">Queue 
{ 
    Node head</span><span class="s2">, </span><span class="s1">tail</span><span class="s2">;</span><span class="s1"> 
 
    </span><span class="s0">public </span><span class="s1">Queue(</span><span class="s0">int </span><span class="s1">d) 
    { 
        head = </span><span class="s0">new </span><span class="s1">Node(d)</span><span class="s2">;</span><span class="s1"> 
        tail = head</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public void </span><span class="s1">enqueue(</span><span class="s0">int </span><span class="s1">d) 
    { 
        Console.WriteLine(&quot;Enqueuing &quot; + d + &quot;...&quot;)</span><span class="s2">;</span><span class="s1"> 
        Node n = head</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(head == </span><span class="s0">null</span><span class="s1">) 
        { 
            head = </span><span class="s0">new </span><span class="s1">Node(d)</span><span class="s2">;</span><span class="s1"> 
            tail = head</span><span class="s2">;</span><span class="s1"> 
        } 
        </span><span class="s0">else</span><span class="s1"> 
        { 
            tail.next = </span><span class="s0">new </span><span class="s1">Node(d)</span><span class="s2">;</span><span class="s1"> 
            tail = tail.next</span><span class="s2">;</span><span class="s1"> 
        } 
        printQueue()</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public </span><span class="s1">Node dequeue() 
    { 
        Console.WriteLine(&quot;Dequeuing...&quot;)</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(head == </span><span class="s0">null</span><span class="s1">) 
        { 
            printQueue()</span><span class="s2">;</span><span class="s1"> 
            </span><span class="s0">return null</span><span class="s2">;</span><span class="s1"> 
        } 
        Node n = head</span><span class="s2">;</span><span class="s1"> 
        head = head.next</span><span class="s2">;</span><span class="s1"> 
        printQueue()</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">return </span><span class="s1">n</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public void </span><span class="s1">printQueue() 
    { 
        Node n = head</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">while </span><span class="s1">(n.next != </span><span class="s0">null</span><span class="s1">) 
        { 
            Console.Write(n.data + &quot; &quot;)</span><span class="s2">;</span><span class="s1"> 
            n = n.next</span><span class="s2">;</span><span class="s1"> 
        } 
        Console.Write(n.data + </span><span class="s3">&quot;\</span><span class="s1">n</span><span class="s3">\</span><span class="s1">n</span><span class="s3">&quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
    } 
} 
</span></pre>
</div>