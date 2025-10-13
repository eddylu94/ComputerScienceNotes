<head>
<title>BucketSort.java</title>
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

<span class="s0">public class </span><span class="s1">BucketSort { 
 
    </span><span class="s0">public static int</span><span class="s1">[] input</span><span class="s0">;</span><span class="s1"> 
    </span><span class="s0">public static int </span><span class="s1">length</span><span class="s0">;</span><span class="s1"> 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
 
        String inputString = </span><span class="s2">&quot;4143675351981074&quot;</span><span class="s0">;</span><span class="s1"> 
        length = inputString.length()</span><span class="s0">;</span><span class="s1"> 
 
        input = </span><span class="s0">new int</span><span class="s1">[length]</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">min = input[</span><span class="s3">0</span><span class="s1">]</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int </span><span class="s1">max = input[</span><span class="s3">0</span><span class="s1">]</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; length</span><span class="s0">; </span><span class="s1">i++) { 
            input[i] = Character.getNumericValue(inputString.charAt(i))</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">if </span><span class="s1">(input[i] &lt; min) { 
                min = input[i]</span><span class="s0">;</span><span class="s1"> 
            } 
            </span><span class="s0">if </span><span class="s1">(input[i] &gt; max) { 
                max = input[i]</span><span class="s0">;</span><span class="s1"> 
            } 
        } 
 
        System.out.println(</span><span class="s2">&quot;Unsorted list:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        printList()</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
 
        System.out.println(</span><span class="s2">&quot;Min value: &quot; </span><span class="s1">+ min)</span><span class="s0">;</span><span class="s1"> 
        System.out.println(</span><span class="s2">&quot;Max value: &quot; </span><span class="s1">+ max)</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">int </span><span class="s1">numOfBuckets = (</span><span class="s0">int</span><span class="s1">) Math.sqrt(max - min) + </span><span class="s3">1</span><span class="s0">;</span><span class="s1"> 
        System.out.println(</span><span class="s2">&quot;Number of buckets: &quot; </span><span class="s1">+ numOfBuckets)</span><span class="s0">;</span><span class="s1"> 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">int</span><span class="s1">[][] buckets = </span><span class="s0">new int</span><span class="s1">[numOfBuckets][length]</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">int</span><span class="s1">[] counter = </span><span class="s0">new int</span><span class="s1">[numOfBuckets]</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; length</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">int </span><span class="s1">bucketNum = input[i] / ((</span><span class="s0">int</span><span class="s1">) Math.sqrt(max - min))</span><span class="s0">;</span><span class="s1"> 
            buckets[bucketNum][counter[bucketNum]] = input[i]</span><span class="s0">;</span><span class="s1"> 
            counter[bucketNum]++</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; numOfBuckets</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">int</span><span class="s1">[] bucketArray = </span><span class="s0">new int</span><span class="s1">[counter[i]]</span><span class="s0">;</span><span class="s1"> 
            System.out.println(</span><span class="s2">&quot;Bucket &quot; </span><span class="s1">+ i + </span><span class="s2">&quot; unsorted:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
            </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">j = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">j &lt; counter[i]</span><span class="s0">; </span><span class="s1">j++) { 
                bucketArray[j] = buckets[i][j]</span><span class="s0">;</span><span class="s1"> 
                System.out.print(buckets[i][j] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
            } 
            System.out.println()</span><span class="s0">;</span><span class="s1"> 
 
            System.out.println(</span><span class="s2">&quot;Bucket &quot; </span><span class="s1">+ i + </span><span class="s2">&quot; sorted:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
 
            InsertionSort_Implemented insertionSort = </span><span class="s0">new </span><span class="s1">InsertionSort_Implemented(bucketArray)</span><span class="s0">;</span><span class="s1"> 
            bucketArray = insertionSort.insertionSort()</span><span class="s0">;</span><span class="s1"> 
 
            </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">a = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">a &lt; bucketArray.length</span><span class="s0">; </span><span class="s1">a++) { 
                buckets[i][a] = bucketArray[a]</span><span class="s0">;</span><span class="s1"> 
                System.out.print(bucketArray[a] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
            } 
            System.out.println()</span><span class="s0">;</span><span class="s1"> 
            System.out.println()</span><span class="s0">;</span><span class="s1"> 
        } 
 
        </span><span class="s0">int </span><span class="s1">overallCounter = </span><span class="s3">0</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; numOfBuckets</span><span class="s0">; </span><span class="s1">i++) { 
            </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">j = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">j &lt; counter[i]</span><span class="s0">; </span><span class="s1">j++) { 
                input[overallCounter] = buckets[i][j]</span><span class="s0">;</span><span class="s1"> 
                overallCounter++</span><span class="s0">;</span><span class="s1"> 
            } 
        } 
 
        System.out.println(</span><span class="s2">&quot;Sorted list:&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        printList()</span><span class="s0">;</span><span class="s1"> 
 
    } 
 
    </span><span class="s0">public static void </span><span class="s1">printList() { 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = </span><span class="s3">0</span><span class="s0">; </span><span class="s1">i &lt; input.length</span><span class="s0">; </span><span class="s1">i++) { 
            System.out.print(input[i] + </span><span class="s2">&quot; &quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        } 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
    } 
 
}</span></pre>
</div>