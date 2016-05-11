<head>
<title>Practice12.java</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: rgb(0,0,0); font-weight: normal; font-style: normal; }
.s0 { color: rgb(128,128,128); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(204,120,50); }
.s3 { color: rgb(104,151,187); }
.s4 { color: rgb(106,135,89); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>


</span><span class="s2">public class </span><span class="s1">Practice12 { 
 
    </span><span class="s2">private static int </span><span class="s1">length = </span><span class="s3">31</span><span class="s2">;</span><span class="s1"> 
    </span><span class="s2">private static char</span><span class="s1">[][] grid = </span><span class="s2">new char</span><span class="s1">[length][length]</span><span class="s2">;</span><span class="s1"> 
 
    </span><span class="s2">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s2">int </span><span class="s1">x = </span><span class="s3">2</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">int </span><span class="s1">y = </span><span class="s3">3</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">int </span><span class="s1">radius = </span><span class="s3">10</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s4">&quot;Center: (&quot; </span><span class="s1">+ x + </span><span class="s4">&quot;,&quot; </span><span class="s1">+ y + </span><span class="s4">&quot;)&quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        System.out.println(</span><span class="s4">&quot;Radius: &quot; </span><span class="s1">+ radius + </span><span class="s4">&quot;</span><span class="s2">\n</span><span class="s4">&quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        initializeGrid()</span><span class="s2">;</span><span class="s1"> 
        drawPoint(</span><span class="s3">0</span><span class="s2">, </span><span class="s3">0</span><span class="s2">, </span><span class="s3">0</span><span class="s2">, </span><span class="s3">0</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        draw(x</span><span class="s2">, </span><span class="s1">y</span><span class="s2">, </span><span class="s1">radius)</span><span class="s2">;</span><span class="s1"> 
        printGrid()</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s2">public static void </span><span class="s1">draw(</span><span class="s2">int </span><span class="s1">center_x</span><span class="s2">, int </span><span class="s1">center_y</span><span class="s2">, int </span><span class="s1">radius) { 
        drawOctet(center_x</span><span class="s2">, </span><span class="s1">center_y</span><span class="s2">, </span><span class="s1">radius</span><span class="s2">, </span><span class="s3">1</span><span class="s2">, </span><span class="s3">1</span><span class="s2">, </span><span class="s3">1</span><span class="s2">, true</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        drawOctet(center_x</span><span class="s2">, </span><span class="s1">center_y</span><span class="s2">, </span><span class="s1">radius</span><span class="s2">, </span><span class="s3">1</span><span class="s2">, </span><span class="s1">-</span><span class="s3">1</span><span class="s2">, </span><span class="s3">1</span><span class="s2">, true</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        drawOctet(center_x</span><span class="s2">, </span><span class="s1">center_y</span><span class="s2">, </span><span class="s1">radius</span><span class="s2">, </span><span class="s3">1</span><span class="s2">, </span><span class="s3">1</span><span class="s2">, </span><span class="s1">-</span><span class="s3">1</span><span class="s2">, true</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        drawOctet(center_x</span><span class="s2">, </span><span class="s1">center_y</span><span class="s2">, </span><span class="s1">radius</span><span class="s2">, </span><span class="s3">1</span><span class="s2">, </span><span class="s1">-</span><span class="s3">1</span><span class="s2">, </span><span class="s1">-</span><span class="s3">1</span><span class="s2">, true</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        drawOctet(center_x</span><span class="s2">, </span><span class="s1">center_y</span><span class="s2">, </span><span class="s1">radius</span><span class="s2">, </span><span class="s3">0</span><span class="s2">, </span><span class="s3">1</span><span class="s2">, </span><span class="s3">1</span><span class="s2">, false</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        drawOctet(center_x</span><span class="s2">, </span><span class="s1">center_y</span><span class="s2">, </span><span class="s1">radius</span><span class="s2">, </span><span class="s3">0</span><span class="s2">, </span><span class="s1">-</span><span class="s3">1</span><span class="s2">, </span><span class="s3">1</span><span class="s2">, false</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        drawOctet(center_x</span><span class="s2">, </span><span class="s1">center_y</span><span class="s2">, </span><span class="s1">radius</span><span class="s2">, </span><span class="s3">0</span><span class="s2">, </span><span class="s3">1</span><span class="s2">, </span><span class="s1">-</span><span class="s3">1</span><span class="s2">, false</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
        drawOctet(center_x</span><span class="s2">, </span><span class="s1">center_y</span><span class="s2">, </span><span class="s1">radius</span><span class="s2">, </span><span class="s3">0</span><span class="s2">, </span><span class="s1">-</span><span class="s3">1</span><span class="s2">, </span><span class="s1">-</span><span class="s3">1</span><span class="s2">, false</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
    } 
 
    </span><span class="s2">public static void </span><span class="s1">drawOctet(</span><span class="s2">int </span><span class="s1">center_x</span><span class="s2">, int </span><span class="s1">center_y</span><span class="s2">, int </span><span class="s1">radius</span><span class="s2">, int </span><span class="s1">y</span><span class="s2">, int </span><span class="s1">x_multipler</span><span class="s2">, int </span><span class="s1">y_multiplier</span><span class="s2">, boolean </span><span class="s1">inOrder) { 
        </span><span class="s2">int </span><span class="s1">x = radius</span><span class="s2">;</span><span class="s1"> 
        </span><span class="s2">while </span><span class="s1">(Math.abs(x) &gt; Math.abs(y)) { 
            </span><span class="s2">if </span><span class="s1">(inOrder) { 
                drawPoint(x * x_multipler</span><span class="s2">, </span><span class="s1">y * y_multiplier</span><span class="s2">, </span><span class="s1">center_x</span><span class="s2">, </span><span class="s1">center_y)</span><span class="s2">;</span><span class="s1"> 
            } 
            </span><span class="s2">else </span><span class="s1">{ 
                drawPoint(y * y_multiplier</span><span class="s2">, </span><span class="s1">x * x_multipler</span><span class="s2">, </span><span class="s1">center_x</span><span class="s2">, </span><span class="s1">center_y)</span><span class="s2">;</span><span class="s1"> 
            } 
            x = (</span><span class="s2">int</span><span class="s1">)Math.sqrt(Math.pow(radius</span><span class="s2">, </span><span class="s3">2</span><span class="s1">) - Math.pow(y</span><span class="s2">, </span><span class="s3">2</span><span class="s1">) - </span><span class="s3">2 </span><span class="s1">* y - </span><span class="s3">1</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
            y++</span><span class="s2">;</span><span class="s1"> 
        } 
    } 
 
    </span><span class="s2">public static void </span><span class="s1">initializeGrid() { 
        </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">i = length - </span><span class="s3">1</span><span class="s2">; </span><span class="s1">i &gt;= </span><span class="s3">0</span><span class="s2">; </span><span class="s1">i--) { 
            </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">j = </span><span class="s3">0</span><span class="s2">; </span><span class="s1">j &lt; length</span><span class="s2">; </span><span class="s1">j++) { 
                grid[i][j] = </span><span class="s4">'.'</span><span class="s2">;</span><span class="s1"> 
            } 
        } 
    } 
 
    </span><span class="s2">public static void </span><span class="s1">printGrid() { 
        </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">i = length - </span><span class="s3">1</span><span class="s2">; </span><span class="s1">i &gt;= </span><span class="s3">0</span><span class="s2">; </span><span class="s1">i--) { 
            </span><span class="s2">for </span><span class="s1">(</span><span class="s2">int </span><span class="s1">j = </span><span class="s3">0</span><span class="s2">; </span><span class="s1">j &lt; length</span><span class="s2">; </span><span class="s1">j++) { 
                System.out.print(grid[i][j] + </span><span class="s4">&quot; &quot;</span><span class="s1">)</span><span class="s2">;</span><span class="s1"> 
            } 
            System.out.println()</span><span class="s2">;</span><span class="s1"> 
        } 
    } 
 
    </span><span class="s2">public static void </span><span class="s1">drawPoint(</span><span class="s2">int </span><span class="s1">x</span><span class="s2">, int </span><span class="s1">y</span><span class="s2">, int </span><span class="s1">center_x</span><span class="s2">, int </span><span class="s1">center_y) { 
        grid[y + length / </span><span class="s3">2 </span><span class="s1">+ center_y][x + length / </span><span class="s3">2 </span><span class="s1">+ center_x] = </span><span class="s4">'X'</span><span class="s2">;</span><span class="s1"> 
    } 
 
}</span></pre>
</div>