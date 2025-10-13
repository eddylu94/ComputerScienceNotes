<head>
<title>ImplementQueue.py</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); font-weight: bold; }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(165,194,97); }
.s3 { color: rgb(104,151,187); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>

<span class="s0">import </span><span class="s1">Queue 
 
</span><span class="s0">print </span><span class="s2">'Initializing Queue with ' </span><span class="s1">+ str(</span><span class="s3">1</span><span class="s1">) 
queue = Queue.Queue(</span><span class="s3">1</span><span class="s1">) 
queue.printQueue(); 
 
queue.enqueue(</span><span class="s3">2</span><span class="s1">) 
queue.enqueue(</span><span class="s3">3</span><span class="s1">) 
queue.enqueue(</span><span class="s3">4</span><span class="s1">) 
queue.enqueue(</span><span class="s3">5</span><span class="s1">) 
queue.dequeue() 
queue.enqueue(</span><span class="s3">6</span><span class="s1">) 
queue.enqueue(</span><span class="s3">7</span><span class="s1">) 
queue.dequeue() 
queue.enqueue(</span><span class="s3">8</span><span class="s1">)</span></pre>
</div>