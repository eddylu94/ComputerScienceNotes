<html>
<head>
<title>HashMap.java</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: #606366; font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(98,151,85); font-style: italic; }
.s3 { color: rgb(98,151,85); font-weight: bold; font-style: italic; }
.s4 { color: rgb(106,135,89); }
.s5 { color: rgb(104,151,187); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>
<span class="s0">public class </span><span class="s1">HashMap { 
    HashMapNode[] buckets</span><span class="s0">;</span><span class="s1"> 
    </span><span class="s0">int </span><span class="s1">numberOfBuckets</span><span class="s0">;</span><span class="s1"> 
 
    </span><span class="s2">/** 
     * Constructor 
     * </span><span class="s3">@param </span><span class="s2">numberOfBuckets   Number of buckets 
     */</span><span class="s1"> 
    </span><span class="s0">public </span><span class="s1">HashMap(</span><span class="s0">int </span><span class="s1">numberOfBuckets) { 
        System.out.println(</span><span class="s4">&quot;Initializing HashMap with &quot; </span><span class="s1">+ numberOfBuckets + </span><span class="s4">&quot; buckets...</span><span class="s0">\n</span><span class="s4">&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">this</span><span class="s1">.buckets = </span><span class="s0">new </span><span class="s1">HashMapNode[numberOfBuckets]</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">this</span><span class="s1">.numberOfBuckets = numberOfBuckets</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s2">/** 
     * Hash function that adds sum of characters' ASCII values 
     * </span><span class="s3">@param </span><span class="s2">input Key of data point 
     * </span><span class="s3">@return      </span><span class="s2">Hash computed from Key 
     */</span><span class="s1"> 
    </span><span class="s0">private static int </span><span class="s1">hashFunction(String input) { 
        </span><span class="s0">int </span><span class="s1">output = </span><span class="s5">0</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s5">0</span><span class="s0">; </span><span class="s1">i &lt; input.length()</span><span class="s0">; </span><span class="s1">i++) { 
            output += (</span><span class="s0">int</span><span class="s1">)input.charAt(i)</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">return </span><span class="s1">output</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s2">/** 
     * Adds new data point to HashMap 
     * </span><span class="s3">@param </span><span class="s2">key   Key of data point 
     * </span><span class="s3">@param </span><span class="s2">value Value of data point 
     * </span><span class="s3">@return      </span><span class="s2">Old value if Key and Value already exist, otherwise new Value 
     */</span><span class="s1"> 
    </span><span class="s0">public int </span><span class="s1">put(String key</span><span class="s0">, int </span><span class="s1">value) { 
        </span><span class="s0">int </span><span class="s1">hash = hashFunction(key)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">bucketIndex = hash % numberOfBuckets</span><span class="s0">;</span><span class="s1"> 
 
        System.out.println(</span><span class="s4">&quot;Adding K: &quot; </span><span class="s1">+ key + </span><span class="s4">&quot;, H: &quot; </span><span class="s1">+ hash + </span><span class="s4">&quot;, V: &quot; </span><span class="s1">+ value + </span><span class="s4">&quot;...&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">if </span><span class="s1">(buckets[bucketIndex] == </span><span class="s0">null</span><span class="s1">) { 
            buckets[bucketIndex] = </span><span class="s0">new </span><span class="s1">HashMapNode(key</span><span class="s0">, </span><span class="s1">hash</span><span class="s0">, </span><span class="s1">value)</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">return </span><span class="s1">-</span><span class="s5">1</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">else </span><span class="s1">{ 
            </span><span class="s0">return </span><span class="s1">buckets[bucketIndex].add(</span><span class="s0">new </span><span class="s1">HashMapNode(key</span><span class="s0">, </span><span class="s1">hash</span><span class="s0">, </span><span class="s1">value))</span><span class="s0">;</span><span class="s1"> 
        } 
    } 
 
    </span><span class="s2">/** 
     * Retrieves Value corresponding to Key 
     * </span><span class="s3">@param </span><span class="s2">key   Key of data point 
     * </span><span class="s3">@return      </span><span class="s2">Value of data point, or -1 if Key does not exist 
     */</span><span class="s1"> 
    </span><span class="s0">public int </span><span class="s1">get(String key) { 
        </span><span class="s0">int </span><span class="s1">hash = hashFunction(key)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">bucketIndex = hash % numberOfBuckets</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(buckets[bucketIndex] == </span><span class="s0">null</span><span class="s1">) { 
            </span><span class="s0">int </span><span class="s1">result = -</span><span class="s5">1</span><span class="s0">;</span><span class="s1"> 
            System.out.println(</span><span class="s4">&quot;Value for K: &quot; </span><span class="s1">+ key + </span><span class="s4">&quot; is &quot; </span><span class="s1">+ result)</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">return </span><span class="s1">result</span><span class="s0">;</span><span class="s1"> 
        } 
        HashMapNode n = buckets[bucketIndex].find(key</span><span class="s0">, </span><span class="s1">hash)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">if </span><span class="s1">(n == </span><span class="s0">null</span><span class="s1">) { 
            </span><span class="s0">int </span><span class="s1">result = -</span><span class="s5">1</span><span class="s0">;</span><span class="s1"> 
            System.out.println(</span><span class="s4">&quot;Value for K: &quot; </span><span class="s1">+ key + </span><span class="s4">&quot; is &quot; </span><span class="s1">+ result)</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">return </span><span class="s1">result</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">int </span><span class="s1">result = n.value</span><span class="s0">;</span><span class="s1"> 
        System.out.println(</span><span class="s4">&quot;Value for K: &quot; </span><span class="s1">+ key + </span><span class="s4">&quot; is &quot; </span><span class="s1">+ result)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">return </span><span class="s1">result</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s2">/** 
     * Removes data point from HashMap 
     * </span><span class="s3">@param </span><span class="s2">key   Key of data point 
     * </span><span class="s3">@return      </span><span class="s2">Removed Value, or -1 if Key does not exist 
     */</span><span class="s1"> 
    </span><span class="s0">public int </span><span class="s1">remove(String key) { 
        </span><span class="s0">int </span><span class="s1">hash = hashFunction(key)</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">bucketIndex = hash % numberOfBuckets</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">if </span><span class="s1">(buckets[bucketIndex] == </span><span class="s0">null</span><span class="s1">) { 
            System.out.println(</span><span class="s4">&quot;No value is associated with K: &quot; </span><span class="s1">+ key)</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">return </span><span class="s1">-</span><span class="s5">1</span><span class="s0">;</span><span class="s1"> 
        } 
        </span><span class="s0">else </span><span class="s1">{ 
            HashMapNode previous = buckets[bucketIndex].delete(</span><span class="s0">new </span><span class="s1">HashMapNode(</span><span class="s4">&quot;&quot;</span><span class="s0">, </span><span class="s1">-</span><span class="s5">1</span><span class="s0">, </span><span class="s1">-</span><span class="s5">1</span><span class="s1">)</span><span class="s0">, </span><span class="s1">key</span><span class="s0">, </span><span class="s1">hash)</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">if </span><span class="s1">(previous == </span><span class="s0">null</span><span class="s1">) { 
                System.out.println(</span><span class="s4">&quot;No value is associated with K: &quot; </span><span class="s1">+ key)</span><span class="s0">;</span><span class="s1"> 
                </span><span class="s0">return </span><span class="s1">-</span><span class="s5">1</span><span class="s0">;</span><span class="s1"> 
            } 
 
            </span><span class="s0">if </span><span class="s1">(previous.hash == -</span><span class="s5">1</span><span class="s1">) { 
                </span><span class="s0">int </span><span class="s1">result = buckets[bucketIndex].value</span><span class="s0">;</span><span class="s1"> 
                buckets[bucketIndex] = </span><span class="s0">null;</span><span class="s1"> 
                System.out.println(</span><span class="s4">&quot;Removing K: &quot; </span><span class="s1">+ key + </span><span class="s4">&quot; with V: + &quot; </span><span class="s1">+ result + </span><span class="s4">&quot;...&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
                </span><span class="s0">return </span><span class="s1">result</span><span class="s0">;</span><span class="s1"> 
            } 
            </span><span class="s0">else </span><span class="s1">{ 
                </span><span class="s0">if </span><span class="s1">(previous.left.hash == hash &amp;&amp; previous.left.key == key) { 
                    HashMapNode n = previous.left</span><span class="s0">;</span><span class="s1"> 
                    </span><span class="s0">int </span><span class="s1">result = n.value</span><span class="s0">;</span><span class="s1"> 
 
                    </span><span class="s0">if </span><span class="s1">(n.left != </span><span class="s0">null</span><span class="s1">) { 
                        previous.left = n.left</span><span class="s0">;</span><span class="s1"> 
                    } 
                    </span><span class="s0">else </span><span class="s1">{ 
                        previous.left = n.right</span><span class="s0">;</span><span class="s1"> 
                    } 
 
                    System.out.println(</span><span class="s4">&quot;Removing K: &quot; </span><span class="s1">+ key + </span><span class="s4">&quot; with V: + &quot; </span><span class="s1">+ result + </span><span class="s4">&quot;...&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
                    </span><span class="s0">return </span><span class="s1">result</span><span class="s0">;</span><span class="s1"> 
                } 
                </span><span class="s0">else </span><span class="s1">{ 
                    HashMapNode n = previous.right</span><span class="s0">;</span><span class="s1"> 
                    </span><span class="s0">int </span><span class="s1">result = n.value</span><span class="s0">;</span><span class="s1"> 
 
                    </span><span class="s0">if </span><span class="s1">(n.left != </span><span class="s0">null</span><span class="s1">) { 
                        previous.left = n.left</span><span class="s0">;</span><span class="s1"> 
                    } 
                    </span><span class="s0">else </span><span class="s1">{ 
                        previous.left = n.right</span><span class="s0">;</span><span class="s1"> 
                    } 
 
                    System.out.println(</span><span class="s4">&quot;Removing K: &quot; </span><span class="s1">+ key + </span><span class="s4">&quot; with V: + &quot; </span><span class="s1">+ result + </span><span class="s4">&quot;...&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
                    </span><span class="s0">return </span><span class="s1">result</span><span class="s0">;</span><span class="s1"> 
                } 
            } 
        } 
    } 
 
    </span><span class="s2">/** 
     * Prints entire HashMap 
     */</span><span class="s1"> 
    </span><span class="s0">public void </span><span class="s1">printHashMap() { 
        System.out.println(</span><span class="s4">&quot;Current HashMap:</span><span class="s0">\n</span><span class="s4">&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s5">0</span><span class="s0">; </span><span class="s1">i &lt; numberOfBuckets</span><span class="s0">; </span><span class="s1">i++) { 
            System.out.println(</span><span class="s4">&quot;   Bucket &quot; </span><span class="s1">+ i + </span><span class="s4">&quot;:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
 
            HashMapNode n = buckets[i]</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">if </span><span class="s1">(n == </span><span class="s0">null</span><span class="s1">) { 
                System.out.println(</span><span class="s4">&quot;      Empty&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
            } 
            </span><span class="s0">else </span><span class="s1">{ 
                n.printTree(</span><span class="s5">0</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
            } 
 
            System.out.println()</span><span class="s0">;</span><span class="s1"> 
        } 
    } 
}</span></pre>
</div>