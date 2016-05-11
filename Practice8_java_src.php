<head>
<title>Practice8.java</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(128,128,128); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(204,120,50); }
.s3 { color: rgb(104,151,187); }
.s4 { color: rgb(106,135,89); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

</span><span class="s2">public class </span><span class="s1">Practice8 { 
 
    </span><span class="s2">public static void </span><span class="s1">main(String[] args) { 
 
        Node l1 = </span><span class="s2">new </span><span class="s1">Node(</span><span class="s3">2</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        l1.appendToTail(</span><span class="s3">4</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        l1.appendToTail(</span><span class="s3">3</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        Node l2 = </span><span class="s2">new </span><span class="s1">Node(</span><span class="s3">5</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        l2.appendToTail(</span><span class="s3">6</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        l2.appendToTail(</span><span class="s3">4</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        l2.appendToTail(</span><span class="s3">1</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
 
        System.out.println(</span><span class="s4">&quot;List 1:&quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        l1.printList()</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s4">&quot;List 2:&quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        l2.printList()</span><span class="s2">;</span><span class="s1"> 
 
        System.out.println(</span><span class="s4">&quot;Result:&quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        createList(l1</span><span class="s2">, </span><span class="s1">l2).printList()</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s2">public static </span><span class="s1">Node createList(Node l1</span><span class="s2">, </span><span class="s1">Node l2) { 
 
        </span><span class="s2">if </span><span class="s1">(l1 == </span><span class="s2">null</span><span class="s1">) { 
            </span><span class="s2">return </span><span class="s1">l2</span><span class="s2">;</span><span class="s1"> 
        } 
        </span><span class="s2">if </span><span class="s1">(l2 == </span><span class="s2">null</span><span class="s1">) { 
            </span><span class="s2">return </span><span class="s1">l1</span><span class="s2">;</span><span class="s1"> 
        } 
 
        Node n = </span><span class="s2">new </span><span class="s1">Node(</span><span class="s3">0</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        Node result = n</span><span class="s2">;</span><span class="s1"> 
 
        </span><span class="s2">while </span><span class="s1">(l1 != </span><span class="s2">null </span><span class="s1">|| l2 != </span><span class="s2">null</span><span class="s1">) { 
            </span><span class="s2">if </span><span class="s1">(l1 == </span><span class="s2">null</span><span class="s1">) { 
                n.data += l2.data</span><span class="s2">;</span><span class="s1"> 
                l2 = l2.next</span><span class="s2">;</span><span class="s1"> 
            } 
            </span><span class="s2">else if </span><span class="s1">(l2 == </span><span class="s2">null</span><span class="s1">) { 
                n.data += l1.data</span><span class="s2">;</span><span class="s1"> 
                l1 = l1.next</span><span class="s2">;</span><span class="s1"> 
            } 
            </span><span class="s2">else </span><span class="s1">{ 
                n.data += l1.data + l2.data</span><span class="s2">;</span><span class="s1"> 
                l1 = l1.next</span><span class="s2">;</span><span class="s1"> 
                l2 = l2.next</span><span class="s2">;</span><span class="s1"> 
            } 
 
            </span><span class="s2">if </span><span class="s1">(n.data &gt;= </span><span class="s3">10</span><span class="s1">) { 
                n.data = n.data % </span><span class="s3">10</span><span class="s2">;</span><span class="s1"> 
                n.next = </span><span class="s2">new </span><span class="s1">Node(</span><span class="s3">1</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
                n = n.next</span><span class="s2">;</span><span class="s1"> 
            } 
            </span><span class="s2">else </span><span class="s1">{ 
                </span><span class="s2">if </span><span class="s1">(l1 != </span><span class="s2">null </span><span class="s1">|| l2 != </span><span class="s2">null</span><span class="s1">) { 
                    n.next = </span><span class="s2">new </span><span class="s1">Node(</span><span class="s3">0</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
                    n = n.next</span><span class="s2">;</span><span class="s1"> 
                } 
            } 
        } 
 
        </span><span class="s2">return </span><span class="s1">result</span><span class="s2">;</span><span class="s1"> 
    } 
 
}</span></pre>
</div>