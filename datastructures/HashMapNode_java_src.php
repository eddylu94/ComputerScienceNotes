<html>
<head>
<title>HashMapNode.java</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: #606366; font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(98,151,85); font-style: italic; }
.s3 { color: rgb(98,151,85); font-weight: bold; font-style: italic; }
.s4 { color: rgb(104,151,187); }
.s5 { color: rgb(106,135,89); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>
<span class="s0">public class </span><span class="s1">HashMapNode { 
    HashMapNode left</span><span class="s0">;</span><span class="s1"> 
    HashMapNode right</span><span class="s0">;</span><span class="s1"> 
    String key</span><span class="s0">;</span><span class="s1"> 
    </span><span class="s0">int </span><span class="s1">hash</span><span class="s0">;</span><span class="s1"> 
    </span><span class="s0">int </span><span class="s1">value</span><span class="s0">;</span><span class="s1"> 
 
    </span><span class="s2">/** 
     * Constructor 
     * </span><span class="s3">@param </span><span class="s2">key   Key of data point 
     * </span><span class="s3">@param </span><span class="s2">hash  Hash of data point 
     * </span><span class="s3">@param </span><span class="s2">value Value of data point 
     */</span><span class="s1"> 
    </span><span class="s0">public </span><span class="s1">HashMapNode(String key</span><span class="s0">, int </span><span class="s1">hash</span><span class="s0">, int </span><span class="s1">value) { 
        </span><span class="s0">this</span><span class="s1">.key = key</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">this</span><span class="s1">.hash = hash</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">this</span><span class="s1">.value = value</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s2">/** 
     * Adds new node to binary tree 
     * </span><span class="s3">@param </span><span class="s2">n New node 
     * </span><span class="s3">@return  </span><span class="s2">Old Value if Key and Hash already exist, otherwise -1 
     */</span><span class="s1"> 
    </span><span class="s0">public int </span><span class="s1">add(HashMapNode n) { 
        </span><span class="s0">if </span><span class="s1">(n.hash == </span><span class="s0">this</span><span class="s1">.hash &amp;&amp; n.key == </span><span class="s0">this</span><span class="s1">.key) { 
            </span><span class="s0">int </span><span class="s1">oldValue = </span><span class="s0">this</span><span class="s1">.value</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">this</span><span class="s1">.value = n.value</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">return </span><span class="s1">oldValue</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">else if </span><span class="s1">(n.hash &lt;= </span><span class="s0">this</span><span class="s1">.hash) { 
            </span><span class="s0">if </span><span class="s1">(</span><span class="s0">this</span><span class="s1">.left == </span><span class="s0">null</span><span class="s1">) { 
                </span><span class="s0">this</span><span class="s1">.left = n</span><span class="s0">;</span><span class="s1"> 
                </span><span class="s0">return </span><span class="s1">-</span><span class="s4">1</span><span class="s0">;</span><span class="s1"> 
            } 
            </span><span class="s0">else </span><span class="s1">{ 
                </span><span class="s0">this</span><span class="s1">.left.add(n)</span><span class="s0">;</span><span class="s1"> 
            } 
        } 
        </span><span class="s0">else </span><span class="s1">{ 
            </span><span class="s0">if </span><span class="s1">(</span><span class="s0">this</span><span class="s1">.right == </span><span class="s0">null</span><span class="s1">) { 
                </span><span class="s0">this</span><span class="s1">.right = n</span><span class="s0">;</span><span class="s1"> 
                </span><span class="s0">return </span><span class="s1">-</span><span class="s4">1</span><span class="s0">;</span><span class="s1"> 
            } 
            </span><span class="s0">else </span><span class="s1">{ 
                </span><span class="s0">this</span><span class="s1">.right.add(n)</span><span class="s0">;</span><span class="s1"> 
            } 
        } 
        </span><span class="s0">return </span><span class="s1">-</span><span class="s4">1</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s2">/** 
     * Finds data point based on Key and Hash 
     * </span><span class="s3">@param </span><span class="s2">key   Key of data point 
     * </span><span class="s3">@param </span><span class="s2">hash  Hash computed from Key 
     * </span><span class="s3">@return      </span><span class="s2">Node corresponding to Key and Hash, or null if not found 
     */</span><span class="s1"> 
    </span><span class="s0">public </span><span class="s1">HashMapNode find(String key</span><span class="s0">, int </span><span class="s1">hash) { 
        </span><span class="s0">if </span><span class="s1">(</span><span class="s0">this</span><span class="s1">.hash == hash &amp;&amp; </span><span class="s0">this</span><span class="s1">.key == key) { 
            </span><span class="s0">return this;</span><span class="s1"> 
        } 
        </span><span class="s0">if </span><span class="s1">(hash &lt;= </span><span class="s0">this</span><span class="s1">.hash) { 
            </span><span class="s0">if </span><span class="s1">(</span><span class="s0">this</span><span class="s1">.left == </span><span class="s0">null</span><span class="s1">) { 
                </span><span class="s0">return null;</span><span class="s1"> 
            } 
            </span><span class="s0">return this</span><span class="s1">.left.find(key</span><span class="s0">, </span><span class="s1">hash)</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">if </span><span class="s1">(</span><span class="s0">this</span><span class="s1">.right == </span><span class="s0">null</span><span class="s1">) { 
            </span><span class="s0">return null;</span><span class="s1"> 
        } 
        </span><span class="s0">return this</span><span class="s1">.right.find(key</span><span class="s0">, </span><span class="s1">hash)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s2">/** 
     * Deletes node from binary tree 
     * </span><span class="s3">@param </span><span class="s2">parent    Current parent of visited node 
     * </span><span class="s3">@param </span><span class="s2">key       Key of data point 
     * </span><span class="s3">@param </span><span class="s2">hash      Hash computed from Key 
     * </span><span class="s3">@return          </span><span class="s2">Parent of candidate node to be deleted, or null if not found 
     */</span><span class="s1"> 
    </span><span class="s0">public </span><span class="s1">HashMapNode delete(HashMapNode parent</span><span class="s0">, </span><span class="s1">String key</span><span class="s0">, int </span><span class="s1">hash) { 
        </span><span class="s0">if </span><span class="s1">(</span><span class="s0">this</span><span class="s1">.hash == hash &amp;&amp; </span><span class="s0">this</span><span class="s1">.key == key) { 
            </span><span class="s0">return </span><span class="s1">parent</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">if </span><span class="s1">(hash &lt;= </span><span class="s0">this</span><span class="s1">.hash) { 
            </span><span class="s0">if </span><span class="s1">(</span><span class="s0">this</span><span class="s1">.left == </span><span class="s0">null</span><span class="s1">) { 
                </span><span class="s0">return null;</span><span class="s1"> 
            } 
            </span><span class="s0">return this</span><span class="s1">.left.delete(</span><span class="s0">this, </span><span class="s1">key</span><span class="s0">, </span><span class="s1">hash)</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">if </span><span class="s1">(</span><span class="s0">this</span><span class="s1">.right == </span><span class="s0">null</span><span class="s1">) { 
            </span><span class="s0">return null;</span><span class="s1"> 
        } 
        </span><span class="s0">return this</span><span class="s1">.right.delete(</span><span class="s0">this, </span><span class="s1">key</span><span class="s0">, </span><span class="s1">hash)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s2">/** 
     * Prints entire binary tree 
     */</span><span class="s1"> 
    </span><span class="s0">public void </span><span class="s1">printTree(</span><span class="s0">int </span><span class="s1">depth) { 
        String prefix = </span><span class="s5">&quot;      &quot;</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s4">0</span><span class="s0">; </span><span class="s1">i &lt; depth</span><span class="s0">; </span><span class="s1">i++) { 
            prefix += </span><span class="s5">&quot;---&quot;</span><span class="s0">;</span><span class="s1"> 
        } 
 
        System.out.println(prefix + </span><span class="s5">&quot;K: &quot; </span><span class="s1">+ key + </span><span class="s5">&quot;, H: &quot; </span><span class="s1">+ hash + </span><span class="s5">&quot;, V: &quot; </span><span class="s1">+ value)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(</span><span class="s0">this</span><span class="s1">.left != </span><span class="s0">null</span><span class="s1">) { 
            </span><span class="s0">this</span><span class="s1">.left.printTree(depth + </span><span class="s4">1</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">if </span><span class="s1">(</span><span class="s0">this</span><span class="s1">.right != </span><span class="s0">null</span><span class="s1">) { 
            </span><span class="s0">this</span><span class="s1">.right.printTree(depth + </span><span class="s4">1</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
    } 
}</span></pre>
</div>