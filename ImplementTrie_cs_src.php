<head>
<title>ImplementTrie.cs</title>
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
 
</span><span class="s0">public class </span><span class="s1">ImplementTrie 
{ 
    </span><span class="s0">public static void </span><span class="s1">Main() 
    { 
        Console.WriteLine(&quot;Initializing Trie&quot;)</span><span class="s2">;</span><span class="s1"> 
        TrieNode trie = createTrie()</span><span class="s2">;</span><span class="s1"> 
 
        trie.printTrie()</span><span class="s2">;</span><span class="s1"> 
 
        trie.addString(&quot;as&quot;</span><span class="s2">, </span><span class="s1">2)</span><span class="s2">;</span><span class="s1"> 
        trie.addString(&quot;assign&quot;</span><span class="s2">, </span><span class="s1">8)</span><span class="s2">;</span><span class="s1"> 
        trie.addString(&quot;chocolate&quot;</span><span class="s2">, </span><span class="s1">6)</span><span class="s2">;</span><span class="s1"> 
        trie.addString(&quot;nat&quot;</span><span class="s2">, </span><span class="s1">7)</span><span class="s2">;</span><span class="s1"> 
        trie.addString(&quot;assignment&quot;</span><span class="s2">, </span><span class="s1">5)</span><span class="s2">;</span><span class="s1"> 
        trie.addString(&quot;nation&quot;</span><span class="s2">, </span><span class="s1">3)</span><span class="s2">;</span><span class="s1"> 
        trie.addString(&quot;national&quot;</span><span class="s2">, </span><span class="s1">1)</span><span class="s2">;</span><span class="s1"> 
        trie.addString(&quot;assignments&quot;</span><span class="s2">, </span><span class="s1">9)</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static </span><span class="s1">TrieNode createTrie() 
    { 
        TrieNode root = </span><span class="s0">new </span><span class="s1">TrieNode(</span><span class="s3">'</span><span class="s1">.</span><span class="s3">'</span><span class="s2">, </span><span class="s1">0)</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">return </span><span class="s1">root</span><span class="s2">;</span><span class="s1"> 
    } 
} 
</span></pre>
</div>