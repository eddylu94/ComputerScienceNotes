<head>
<title>TrieNode.java</title>
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

<span class="s0">import </span><span class="s1">java.util.ArrayList</span><span class="s0">;</span><span class="s1"> 
 
</span><span class="s0">public class </span><span class="s1">TrieNode { 
 
    </span><span class="s0">char </span><span class="s1">letter</span><span class="s0">;</span><span class="s1"> 
    </span><span class="s0">int </span><span class="s1">value</span><span class="s0">;</span><span class="s1"> 
    TrieNode parent = </span><span class="s0">null;</span><span class="s1"> 
    ArrayList&lt;TrieNode&gt; children = </span><span class="s0">new </span><span class="s1">ArrayList&lt;TrieNode&gt;()</span><span class="s0">;</span><span class="s1"> 
 
    </span><span class="s0">public </span><span class="s1">TrieNode(</span><span class="s0">char </span><span class="s1">c</span><span class="s0">, int </span><span class="s1">v) { 
        letter = c</span><span class="s0">;</span><span class="s1"> 
        value = v</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">addString(String s</span><span class="s0">, int </span><span class="s1">y) { 
        System.out.print(</span><span class="s2">&quot;Adding String &quot; </span><span class="s1">+ </span><span class="s2">&quot;</span><span class="s0">\&quot;</span><span class="s2">&quot; </span><span class="s1">+ s + </span><span class="s2">&quot;</span><span class="s0">\&quot;</span><span class="s2">...&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        TrieNode n = </span><span class="s0">this;</span><span class="s1"> 
        </span><span class="s0">boolean </span><span class="s1">noMoreMatching = </span><span class="s0">false;</span><span class="s1"> 
        </span><span class="s0">while </span><span class="s1">(!noMoreMatching) { 
            </span><span class="s0">int </span><span class="s1">i</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">int </span><span class="s1">childrenSize = n.children.size()</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">for </span><span class="s1">(i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; n.children.size()</span><span class="s0">; </span><span class="s1">i++) { 
                </span><span class="s0">if </span><span class="s1">(n.children.get(i).letter == s.charAt(</span><span class="s3">0</span><span class="s1">)) { 
                    n = n.children.get(i)</span><span class="s0">;</span><span class="s1"> 
                    s = s.substring(</span><span class="s3">1</span><span class="s0">, </span><span class="s1">s.length())</span><span class="s0">;</span><span class="s1"> 
                    </span><span class="s0">break;</span><span class="s1"> 
                } 
            } 
            </span><span class="s0">if </span><span class="s1">(i == childrenSize) { 
                noMoreMatching = </span><span class="s0">true;</span><span class="s1"> 
            } 
        } 
        </span><span class="s0">if </span><span class="s1">(s.length() &gt; </span><span class="s3">0</span><span class="s1">) { 
            addRemainingString(n</span><span class="s0">, </span><span class="s1">s</span><span class="s0">, </span><span class="s1">y)</span><span class="s0">;</span><span class="s1"> 
        } 
        printTrie()</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">addRemainingString(TrieNode n</span><span class="s0">, </span><span class="s1">String s</span><span class="s0">, int </span><span class="s1">y) { 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; s.length() - </span><span class="s3">1</span><span class="s0">; </span><span class="s1">i++) { 
            TrieNode m = n.addChild(s.charAt(i)</span><span class="s0">, </span><span class="s3">0</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
            n = m</span><span class="s0">;</span><span class="s1"> 
        } 
        n.addChild(s.charAt(s.length() - </span><span class="s3">1</span><span class="s1">)</span><span class="s0">, </span><span class="s1">y)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    TrieNode addChild(</span><span class="s0">char </span><span class="s1">c</span><span class="s0">, int </span><span class="s1">v) { 
        TrieNode child = </span><span class="s0">new </span><span class="s1">TrieNode(c</span><span class="s0">, </span><span class="s1">v)</span><span class="s0">;</span><span class="s1"> 
        children.add(child)</span><span class="s0">;</span><span class="s1"> 
        child.setParent(</span><span class="s0">this</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">return </span><span class="s1">child</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">setParent(TrieNode newParent) { 
        parent = newParent</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">void </span><span class="s1">printTrie() { 
        TrieNode n = </span><span class="s0">this;</span><span class="s1"> 
        printSubTree(n</span><span class="s0">, </span><span class="s3">0</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">int </span><span class="s1">printSubTree(TrieNode n</span><span class="s0">, int </span><span class="s1">level) { 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">a = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">a &lt; level</span><span class="s0">; </span><span class="s1">a++) { 
            System.out.print(</span><span class="s2">&quot;---&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.print(n.letter)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(n.value != </span><span class="s3">0</span><span class="s1">) { 
            System.out.print(</span><span class="s2">&quot; &quot; </span><span class="s1">+ n.value)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(n.children.size() == </span><span class="s3">0</span><span class="s1">) { 
            </span><span class="s0">return </span><span class="s1">n.letter</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">int </span><span class="s1">size = n.children.size()</span><span class="s0">;</span><span class="s1"> 
        level++</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; size</span><span class="s0">; </span><span class="s1">i++) { 
            printSubTree(n.children.get(i)</span><span class="s0">, </span><span class="s1">level)</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">return </span><span class="s1">-</span><span class="s3">1</span><span class="s0">;</span><span class="s1"> 
    } 
 
}</span></pre>
</div>