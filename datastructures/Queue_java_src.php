<head>
<title>Queue.java</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(106,135,89); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

<span class="s0">public class </span><span class="s1">Queue { 
 
    Node head</span><span class="s0">, </span><span class="s1">tail</span><span class="s0">;</span><span class="s1"> 
 
    </span><span class="s0">public </span><span class="s1">Queue(</span><span class="s0">int </span><span class="s1">d) { 
        head = </span><span class="s0">new </span><span class="s1">Node(d)</span><span class="s0">;</span><span class="s1"> 
        tail = head</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">enqueue(</span><span class="s0">int </span><span class="s1">d) { 
        System.out.println(</span><span class="s2">&quot;Enqueuing &quot; </span><span class="s1">+ d + </span><span class="s2">&quot;...&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        Node n = head</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(head == </span><span class="s0">null</span><span class="s1">) { 
            head = </span><span class="s0">new </span><span class="s1">Node(d)</span><span class="s0">;</span><span class="s1"> 
            tail = head</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">else </span><span class="s1">{ 
            tail.next = </span><span class="s0">new </span><span class="s1">Node(d)</span><span class="s0">;</span><span class="s1"> 
            tail = tail.next</span><span class="s0">;</span><span class="s1"> 
        } 
        printQueue()</span><span class="s0">;</span><span class="s1"> 
    } 
 
    Node dequeue() { 
        System.out.println(</span><span class="s2">&quot;Dequeuing...&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(head == </span><span class="s0">null</span><span class="s1">) { 
            printQueue()</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">return null;</span><span class="s1"> 
        } 
        Node n = head</span><span class="s0">;</span><span class="s1"> 
        head = head.next</span><span class="s0">;</span><span class="s1"> 
        printQueue()</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">return </span><span class="s1">n</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">printQueue() { 
        Node n = head</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">while </span><span class="s1">(n.next != </span><span class="s0">null</span><span class="s1">) { 
            System.out.print(n.data + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
            n = n.next</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.print(n.data)</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
    } 
 
}</span></pre>
</div>