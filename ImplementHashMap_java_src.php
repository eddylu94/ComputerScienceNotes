<html>
<head>
<title>ImplementHashMap.java</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: #606366; font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(104,151,187); }
.s3 { color: rgb(106,135,89); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>
<span class="s0">public class </span><span class="s1">ImplementHashMap { 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        HashMap map = </span><span class="s0">new </span><span class="s1">HashMap(</span><span class="s2">5</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
 
        map.put(</span><span class="s3">&quot;James&quot;</span><span class="s0">, </span><span class="s2">53</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">&quot;Mary&quot;</span><span class="s0">, </span><span class="s2">9</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">&quot;John&quot;</span><span class="s0">, </span><span class="s2">47</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">&quot;Patricia&quot;</span><span class="s0">, </span><span class="s2">10</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">&quot;Robert&quot;</span><span class="s0">, </span><span class="s2">17</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">&quot;Jennifer&quot;</span><span class="s0">, </span><span class="s2">34</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">&quot;Michael&quot;</span><span class="s0">, </span><span class="s2">71</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">&quot;Linda&quot;</span><span class="s0">, </span><span class="s2">36</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">&quot;William&quot;</span><span class="s0">, </span><span class="s2">12</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">&quot;Elizabeth&quot;</span><span class="s0">, </span><span class="s2">64</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">&quot;David&quot;</span><span class="s0">, </span><span class="s2">43</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">&quot;Barbara&quot;</span><span class="s0">, </span><span class="s2">74</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">&quot;Barbara&quot;</span><span class="s0">, </span><span class="s2">75</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">&quot;Richard&quot;</span><span class="s0">, </span><span class="s2">8</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">&quot;Susan&quot;</span><span class="s0">, </span><span class="s2">88</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">&quot;Joseph&quot;</span><span class="s0">, </span><span class="s2">31</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">&quot;Jessica&quot;</span><span class="s0">, </span><span class="s2">92</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">&quot;Thomas&quot;</span><span class="s0">, </span><span class="s2">21</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">&quot;Sarah&quot;</span><span class="s0">, </span><span class="s2">90</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">&quot;Charles&quot;</span><span class="s0">, </span><span class="s2">69</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.put(</span><span class="s3">&quot;Margaret&quot;</span><span class="s0">, </span><span class="s2">58</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
 
        map.printHashMap()</span><span class="s0">;</span><span class="s1"> 
 
        map.get(</span><span class="s3">&quot;David&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.get(</span><span class="s3">&quot;Barbara&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.get(</span><span class="s3">&quot;Christopher&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
 
        map.remove(</span><span class="s3">&quot;David&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.remove(</span><span class="s3">&quot;Susan&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
 
        System.out.println()</span><span class="s0">;</span><span class="s1"> 
 
        map.printHashMap()</span><span class="s0">;</span><span class="s1"> 
 
        map.get(</span><span class="s3">&quot;David&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.get(</span><span class="s3">&quot;Barbara&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
        map.get(</span><span class="s3">&quot;Christopher&quot;</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>