<html>
<head>
<title>Problem19.java</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.ln { color: #606366; font-weight: normal; font-style: normal; }
.s0 { color: rgb(204,120,50); }
.s1 { color: rgb(169,183,198); }
.s2 { color: rgb(104,151,187); }
</style>
</head>
<div style="background-color: #2b2b2b; padding: 10px;">
<pre>
<span class="s0">public class </span><span class="s1">Problem19 { 
 
    </span><span class="s2">/** 
     * Monday -&gt; 0, Sunday -&gt; 6 
     * January -&gt; 1, December -&gt; 12 
     */</span><span class="s1"> 
 
    </span><span class="s0">public static void </span><span class="s1">main(String[] args) { 
        </span><span class="s0">int </span><span class="s1">result = findNumberOfFirstSundays()</span><span class="s0">;</span><span class="s1"> 
        System.out.println(result)</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">findNumberOfFirstSundays() { 
         
        </span><span class="s0">int </span><span class="s1">findNumberOfFirstSundays = </span><span class="s3">0</span><span class="s0">;</span><span class="s1"> 
 
        </span><span class="s0">int </span><span class="s1">currentDayOfWeek = </span><span class="s3">0</span><span class="s0">;</span><span class="s1"> 
        </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">year = </span><span class="s3">1900</span><span class="s0">; </span><span class="s1">year &lt;= </span><span class="s3">2000</span><span class="s0">; </span><span class="s1">year++) { 
            </span><span class="s0">for </span><span class="s1">(</span><span class="s0">int </span><span class="s1">month = </span><span class="s3">1</span><span class="s0">; </span><span class="s1">month &lt;= </span><span class="s3">12</span><span class="s0">; </span><span class="s1">month++) { 
 
                </span><span class="s0">if </span><span class="s1">(currentDayOfWeek == </span><span class="s3">6 </span><span class="s1">&amp;&amp; year != </span><span class="s3">1900</span><span class="s1">) { 
                    findNumberOfFirstSundays++</span><span class="s0">;</span><span class="s1"> 
                } 
 
                </span><span class="s4">// Day of week of the first day of the following month</span><span class="s1"> 
                currentDayOfWeek = (currentDayOfWeek + getNumberOfDaysInMonth(month</span><span class="s0">, </span><span class="s1">year)) % </span><span class="s3">7</span><span class="s0">;</span><span class="s1"> 
            } 
        } 
 
        </span><span class="s0">return </span><span class="s1">findNumberOfFirstSundays</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static int </span><span class="s1">getNumberOfDaysInMonth(</span><span class="s0">int </span><span class="s1">month</span><span class="s0">, int </span><span class="s1">year) { 
 
        </span><span class="s0">int </span><span class="s1">numberOfDaysInMonth = </span><span class="s3">31</span><span class="s0">;</span><span class="s1"> 
         
        </span><span class="s0">switch </span><span class="s1">(month) { 
            </span><span class="s0">case </span><span class="s3">1</span><span class="s1">: 
            </span><span class="s0">case </span><span class="s3">3</span><span class="s1">: 
            </span><span class="s0">case </span><span class="s3">5</span><span class="s1">: 
            </span><span class="s0">case </span><span class="s3">7</span><span class="s1">: 
            </span><span class="s0">case </span><span class="s3">8</span><span class="s1">: 
            </span><span class="s0">case </span><span class="s3">10</span><span class="s1">: 
            </span><span class="s0">case </span><span class="s3">12</span><span class="s1">: 
                numberOfDaysInMonth = </span><span class="s3">31</span><span class="s0">;</span><span class="s1"> 
                </span><span class="s0">break;</span><span class="s1"> 
            </span><span class="s0">case </span><span class="s3">4</span><span class="s1">: 
            </span><span class="s0">case </span><span class="s3">6</span><span class="s1">: 
            </span><span class="s0">case </span><span class="s3">9</span><span class="s1">: 
            </span><span class="s0">case </span><span class="s3">11</span><span class="s1">: 
                numberOfDaysInMonth = </span><span class="s3">30</span><span class="s0">;</span><span class="s1"> 
                </span><span class="s0">break;</span><span class="s1"> 
            </span><span class="s0">case </span><span class="s3">2</span><span class="s1">: 
                numberOfDaysInMonth = isLeapYear(year) ? </span><span class="s3">29 </span><span class="s1">: </span><span class="s3">28</span><span class="s0">;</span><span class="s1"> 
                </span><span class="s0">break;</span><span class="s1"> 
        } 
 
        </span><span class="s0">return </span><span class="s1">numberOfDaysInMonth</span><span class="s0">;</span><span class="s1"> 
    } 
 
    </span><span class="s0">public static boolean </span><span class="s1">isLeapYear(</span><span class="s0">int </span><span class="s1">year) { 
        </span><span class="s0">return </span><span class="s1">year % </span><span class="s3">4 </span><span class="s1">== </span><span class="s3">0 </span><span class="s1">&amp;&amp; (year % </span><span class="s3">4 </span><span class="s1">!= </span><span class="s3">100 </span><span class="s1">|| year % </span><span class="s3">400 </span><span class="s1">== </span><span class="s3">0</span><span class="s1">)</span><span class="s0">;</span><span class="s1"> 
    } 
}</span></pre>
</div>