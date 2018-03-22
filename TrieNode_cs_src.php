<head>
<title>TrieNode.cs</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: #606366; font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); font-weight: bold; }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(204,120,50); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>
<span class="s0">using </span><span class="s1">System</span><span class="s2">;</span><span class="s1"> 
</span><span class="s0">using </span><span class="s1">System.Collections.Generic</span><span class="s2">;</span><span class="s1"> 
 
</span><span class="s0">public class </span><span class="s1">TrieNode 
{ 
    </span><span class="s0">char </span><span class="s1">letter</span><span class="s2">;</span><span class="s1"> 
    </span><span class="s0">int </span><span class="s1">value</span><span class="s2">;</span><span class="s1"> 
    TrieNode parent = </span><span class="s0">null</span><span class="s2">;</span><span class="s1"> 
    List&lt;TrieNode&gt; children = </span><span class="s0">new </span><span class="s1">List&lt;TrieNode&gt;()</span><span class="s2">;</span><span class="s1"> 
 
    </span><span class="s0">public </span><span class="s1">TrieNode(</span><span class="s0">char </span><span class="s1">c</span><span class="s2">, </span><span class="s0">int </span><span class="s1">v) 
    { 
        letter = c</span><span class="s2">;</span><span class="s1"> 
        value = v</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public void </span><span class="s1">addString(String s</span><span class="s2">, </span><span class="s0">int </span><span class="s1">y) 
    { 
        Console.Write(&quot;Adding String &quot; + &quot;\&quot;&quot; + s + &quot;\&quot;...&quot;)</span><span class="s2">;</span><span class="s1"> 
        Console.WriteLine()</span><span class="s2">;</span><span class="s1"> 
        Console.WriteLine()</span><span class="s2">;</span><span class="s1"> 
        TrieNode n = </span><span class="s0">this</span><span class="s2">;</span><span class="s1"> 
        Boolean noMoreMatching = false</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">while </span><span class="s1">(!noMoreMatching) 
        { 
            </span><span class="s0">int </span><span class="s1">i</span><span class="s2">;</span><span class="s1"> 
            </span><span class="s0">int </span><span class="s1">childrenSize = n.children.Count</span><span class="s2">;</span><span class="s1"> 
            </span><span class="s0">for </span><span class="s1">(i = 0</span><span class="s2">; </span><span class="s1">i &lt; n.children.Count</span><span class="s2">; </span><span class="s1">i++) 
            { 
                </span><span class="s0">if </span><span class="s1">(n.children[i].letter == s[0]) 
                { 
                    n = n.children[i]</span><span class="s2">;</span><span class="s1"> 
                    s = s.Substring(1</span><span class="s2">, </span><span class="s1">s.Length - 1)</span><span class="s2">;</span><span class="s1"> 
                    </span><span class="s0">break</span><span class="s2">;</span><span class="s1"> 
                } 
            } 
            </span><span class="s0">if </span><span class="s1">(i == childrenSize) 
            { 
                noMoreMatching = true</span><span class="s2">;</span><span class="s1"> 
            } 
        } 
        </span><span class="s0">if </span><span class="s1">(s.Length &gt; 0) 
        { 
            addRemainingString(n</span><span class="s2">, </span><span class="s1">s</span><span class="s2">, </span><span class="s1">y)</span><span class="s2">;</span><span class="s1"> 
        } 
        printTrie()</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public void </span><span class="s1">addRemainingString(TrieNode n</span><span class="s2">, </span><span class="s1">String s</span><span class="s2">, </span><span class="s0">int </span><span class="s1">y) 
    { 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = 0</span><span class="s2">; </span><span class="s1">i &lt; s.Length - 1</span><span class="s2">; </span><span class="s1">i++) 
        { 
            TrieNode m = n.addChild(s[i]</span><span class="s2">, </span><span class="s1">0)</span><span class="s2">;</span><span class="s1"> 
            n = m</span><span class="s2">;</span><span class="s1"> 
        } 
        n.addChild(s[s.Length - 1]</span><span class="s2">, </span><span class="s1">y)</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public </span><span class="s1">TrieNode addChild(</span><span class="s0">char </span><span class="s1">c</span><span class="s2">, </span><span class="s0">int </span><span class="s1">v) 
    { 
        TrieNode child = </span><span class="s0">new </span><span class="s1">TrieNode(c</span><span class="s2">, </span><span class="s1">v)</span><span class="s2">;</span><span class="s1"> 
        children.Add(child)</span><span class="s2">;</span><span class="s1"> 
        child.setParent(</span><span class="s0">this</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">return </span><span class="s1">child</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public void </span><span class="s1">setParent(TrieNode newParent) 
    { 
        parent = newParent</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public void </span><span class="s1">printTrie() 
    { 
        TrieNode n = </span><span class="s0">this</span><span class="s2">;</span><span class="s1"> 
        printSubTree(n</span><span class="s2">, </span><span class="s1">0)</span><span class="s2">;</span><span class="s1"> 
        Console.WriteLine()</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public int </span><span class="s1">printSubTree(TrieNode n</span><span class="s2">, </span><span class="s0">int </span><span class="s1">level) 
    { 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">a = 0</span><span class="s2">; </span><span class="s1">a &lt; level</span><span class="s2">; </span><span class="s1">a++) 
        { 
            Console.Write(&quot;---&quot;)</span><span class="s2">;</span><span class="s1"> 
        } 
        Console.Write(n.letter)</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(n.value != 0) 
        { 
            Console.Write(&quot; &quot; + n.value)</span><span class="s2">;</span><span class="s1"> 
        } 
        Console.WriteLine()</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(n.children.Count == 0) 
        { 
            </span><span class="s0">return </span><span class="s1">n.letter</span><span class="s2">;</span><span class="s1"> 
        } 
        </span><span class="s0">int </span><span class="s1">size = n.children.Count</span><span class="s2">;</span><span class="s1"> 
        level++</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = 0</span><span class="s2">; </span><span class="s1">i &lt; size</span><span class="s2">; </span><span class="s1">i++) 
        { 
            printSubTree(n.children[i]</span><span class="s2">, </span><span class="s1">level)</span><span class="s2">;</span><span class="s1"> 
        } 
        </span><span class="s0">return </span><span class="s1">-1</span><span class="s2">;</span><span class="s1"> 
    } 
} 
</span></pre>
</div>