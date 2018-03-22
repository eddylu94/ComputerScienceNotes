<head>
<title>SelectionSort.cs</title>
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
 
</span><span class="s0">public class </span><span class="s1">SelectionSort 
{ 
    </span><span class="s0">public static int</span><span class="s1">[] input</span><span class="s2">;</span><span class="s1"> 
    </span><span class="s0">public static int </span><span class="s1">length</span><span class="s2">;</span><span class="s1"> 
 
    </span><span class="s0">public static void </span><span class="s1">Main() 
    { 
        String inputString = &quot;4143675351981074&quot;</span><span class="s2">;</span><span class="s1"> 
        length = inputString.Length</span><span class="s2">;</span><span class="s1"> 
 
        input = </span><span class="s0">new int</span><span class="s1">[length]</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = 0</span><span class="s2">; </span><span class="s1">i &lt; length</span><span class="s2">; </span><span class="s1">i++) 
        { 
            input[i] = (</span><span class="s0">int</span><span class="s1">)Char.GetNumericValue(inputString[i])</span><span class="s2">;</span><span class="s1"> 
        } 
 
        Console.WriteLine(&quot;Unsorted list:&quot;)</span><span class="s2">;</span><span class="s1"> 
        printList()</span><span class="s2">;</span><span class="s1"> 
        Console.WriteLine()</span><span class="s2">;</span><span class="s1"> 
 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">i = 0</span><span class="s2">; </span><span class="s1">i &lt; length</span><span class="s2">; </span><span class="s1">i++) 
        { 
            Console.WriteLine(</span><span class="s3">&quot;</span><span class="s1">Iterating:</span><span class="s3">\</span><span class="s1">n&quot;); 
            int index = findLowest(i); 
            int value = input[findLowest(i)]; 
            if (index != i) 
            { 
                for (int j = index; j &gt; i; j--) 
                { 
                    input[j] = input[j - 1]; 
                    printList(); 
                } 
                input[i] = value; 
                printList(); 
            } 
            Console.WriteLine(); 
        } 
 
        Console.WriteLine(&quot;Sorted list:&quot;); 
        printList(); 
    } 
 
    public static int findLowest(int startingValue) 
    { 
        int lowestValue = input[startingValue]; 
        int lowestIndex = startingValue; 
        for (int i = startingValue; i &lt; length; i++) 
        { 
            if (input[i] &lt; lowestValue) 
            { 
                lowestValue = input[i]; 
                lowestIndex = i; 
            } 
        } 
        return lowestIndex; 
    } 
 
    public static void printList() 
    { 
        for (int i = 0; i &lt; input.Length; i++) 
        { 
            Console.Write(input[i] + &quot; </span><span class="s3">&quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        } 
        Console.WriteLine()</span><span class="s2">;</span><span class="s1"> 
    } 
} 
</span></pre>
</div>