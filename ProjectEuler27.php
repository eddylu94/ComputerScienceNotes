<?php include 'Header.php'?>

<h1>Project Euler Problem 27</h1>

Euler discovered the remarkable quadratic formula:
<br>
<br>n^2+n+41
<br>It turns out that the formula will produce 40 primes for the consecutive integer values 0≤n≤39. However, when n=40,402+40+41=40(40+1)+41 is divisible by 41, and certainly when n=41,41^2+41+41 is clearly divisible by 41.
<br>
<br>The incredible formula n^2−79n+1601 was discovered, which produces 80 primes for the consecutive values 0≤n≤79. The product of the coefficients, −79 and 1601, is −126479.
<br>
<br>Considering quadratics of the form:
<br>
<br>n^2+an+b, where |a|<1000 and |b|≤1000

where |n| is the modulus/absolute value of n
e.g. |11|=11 and |−4|=4
Find the product of the coefficients, a and b, for the quadratic expression that produces the maximum number of primes for consecutive values of n, starting with n=0.

<h2>Java</h2>

<?php include 'ProjectEuler27_java_src.php'?>

<h2>Console Output</h2>

<?php include 'ProjectEuler27_output.php'?>

<?php include 'Footer.php'?>