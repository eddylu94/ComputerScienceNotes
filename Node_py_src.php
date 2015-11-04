<head>
<title>Node.py</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); font-weight: bold; }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(204,120,50); }
.s3 { color: rgb(165,194,97); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

<span class="s0">import </span><span class="s1">sys 
 
</span><span class="s0">class </span><span class="s1">Node: 
 
    data = None 
    next = None 
 
    </span><span class="s0">def </span><span class="s1">__init__(self</span><span class="s2">, </span><span class="s1">d): 
        self.data = d; 
 
    </span><span class="s0">def </span><span class="s1">appendToTail(self</span><span class="s2">, </span><span class="s1">d): 
        </span><span class="s0">print </span><span class="s3">'Adding ' </span><span class="s1">+ str(d) + </span><span class="s3">'...'</span><span class="s1"> 
        n = self 
        </span><span class="s0">while </span><span class="s1">(n.next != None): 
            n = n.next 
        n.next = Node(d) 
        self.printList() 
 
    </span><span class="s0">def </span><span class="s1">removeNode(self</span><span class="s2">, </span><span class="s1">d): 
        </span><span class="s0">print </span><span class="s3">'Removing ' </span><span class="s1">+ str(d) + </span><span class="s3">'...'</span><span class="s1"> 
        n = self 
        </span><span class="s0">if </span><span class="s1">(n.data == d): 
            self.printList() 
            </span><span class="s0">return </span><span class="s1">self.next 
        </span><span class="s0">while </span><span class="s1">(n.next != None): 
            </span><span class="s0">if </span><span class="s1">(n.next.data == d): 
                n.next = n.next.next 
                self.printList() 
                </span><span class="s0">return </span><span class="s1">self 
            n = n.next 
        self.printList() 
        </span><span class="s0">return </span><span class="s1">None 
 
    </span><span class="s0">def </span><span class="s1">printList(self): 
        n = self 
        </span><span class="s0">while </span><span class="s1">(n.next != None): 
            sys.stdout.write(str(n.data) + </span><span class="s3">' '</span><span class="s1">) 
            n = n.next 
        sys.stdout.write(str(n.data)) 
        </span><span class="s0">print </span><span class="s3">'</span><span class="s2">\n\n</span><span class="s3">'</span></pre>
</div>