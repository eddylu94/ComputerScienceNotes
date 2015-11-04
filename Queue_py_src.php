<head>
<title>Queue.py</title>
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

<span class="s0">import </span><span class="s1">Node 
 
</span><span class="s0">import </span><span class="s1">sys 
 
</span><span class="s0">class </span><span class="s1">Queue: 
 
    head = None 
    tail = None 
 
    </span><span class="s0">def </span><span class="s1">__init__(self</span><span class="s2">, </span><span class="s1">d): 
        self.head = Node.Node(d) 
        self.tail = self.head 
 
    </span><span class="s0">def </span><span class="s1">enqueue(self</span><span class="s2">, </span><span class="s1">d): 
        </span><span class="s0">print </span><span class="s3">'Enqueuing ' </span><span class="s1">+ str(d) + </span><span class="s3">'...'</span><span class="s1"> 
        n = self.head 
        </span><span class="s0">if </span><span class="s1">(self.head == None): 
            self.head = Node.Node(d) 
            self.tail = self.head 
        </span><span class="s0">else</span><span class="s1">: 
            self.tail.next = Node.Node(d) 
            self.tail = self.tail.next 
        self.printQueue() 
 
    </span><span class="s0">def </span><span class="s1">dequeue(self): 
        </span><span class="s0">print </span><span class="s3">'Dequeuing...'</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(self.head == None): 
            self.printQueue() 
            </span><span class="s0">return </span><span class="s1">None 
        n = self.head 
        self.head = self.head.next 
        self.printQueue() 
        </span><span class="s0">return </span><span class="s1">n 
 
    </span><span class="s0">def </span><span class="s1">printQueue(self): 
        n = self.head 
        </span><span class="s0">while </span><span class="s1">(n.next != None): 
            sys.stdout.write(str(n.data) + </span><span class="s3">' '</span><span class="s1">) 
            n = n.next 
        sys.stdout.write(str(n.data)) 
        </span><span class="s0">print </span><span class="s3">'</span><span class="s2">\n\n</span><span class="s3">'</span></pre>
</div>