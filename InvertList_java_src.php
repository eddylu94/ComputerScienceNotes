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

<span class="s0">public class </span><span class="s1">InvertList { 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
 
        System.out.println(</span><span class="s2">&quot;Initializing Node with &quot; </span><span class="s1">+ </span><span class="s3">1</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        Node list = </span><span class="s0">new </span><span class="s1">Node(</span><span class="s3">1</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        list.printList()</span><span class="s0">;</span><span class="s1"> 
 
        list.appendToTail(</span><span class="s3">2</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        list.appendToTail(</span><span class="s3">3</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        list.appendToTail(</span><span class="s3">4</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        list.appendToTail(</span><span class="s3">5</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
 
        Node prev = </span><span class="s0">null;</span><span class="s1"> 
        Node current = list.next</span><span class="s0">;</span><span class="s1"> 
 
        list.next = prev</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">while </span><span class="s1">(current != </span><span class="s0">null</span><span class="s1">) { 
            prev = list</span><span class="s0">;</span><span class="s1"> 
            list = current</span><span class="s0">;</span><span class="s1"> 
            current = list.next</span><span class="s0">;</span><span class="s1"> 
            list.next = prev</span><span class="s0">;</span><span class="s1"> 
        } 
 
        System.out.println(</span><span class="s2">&quot;Inverted List&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        list.printList()</span><span class="s0">;</span><span class="s1"> 
 
    } 
}</span></pre>
</div>