<head>
<title>ImplementTrie.java</title>
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

<span class="s0">public class </span><span class="s1">ImplementTrie { 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
 
        System.out.println(</span><span class="s2">&quot;Initializing Trie&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        TrieNode trie = createTrie()</span><span class="s0">;</span><span class="s1"> 
 
        trie.printTrie()</span><span class="s0">;</span><span class="s1"> 
 
        trie.addString(</span><span class="s2">&quot;as&quot;</span><span class="s0">, </span><span class="s3">2</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        trie.addString(</span><span class="s2">&quot;assign&quot;</span><span class="s0">, </span><span class="s3">8</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        trie.addString(</span><span class="s2">&quot;chocolate&quot;</span><span class="s0">, </span><span class="s3">6</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        trie.addString(</span><span class="s2">&quot;nat&quot;</span><span class="s0">, </span><span class="s3">7</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        trie.addString(</span><span class="s2">&quot;assignment&quot;</span><span class="s0">, </span><span class="s3">5</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        trie.addString(</span><span class="s2">&quot;nation&quot;</span><span class="s0">, </span><span class="s3">3</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        trie.addString(</span><span class="s2">&quot;national&quot;</span><span class="s0">, </span><span class="s3">1</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        trie.addString(</span><span class="s2">&quot;assignments&quot;</span><span class="s0">, </span><span class="s3">9</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
 
    } 
 
    </span><span class="s0">public static </span><span class="s1">TrieNode createTrie() { 
        TrieNode root = </span><span class="s0">new </span><span class="s1">TrieNode(</span><span class="s2">'.'</span><span class="s0">, </span><span class="s3">0</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">return </span><span class="s1">root</span><span class="s0">;</span><span class="s1"> 
    } 
 
}</span></pre>
</div>