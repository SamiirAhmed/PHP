<?php
// First Assignment by A/hafiid Ahmed Wehliye


echo "
<table border='1' cellpadding='8' style='margin-bottom:20px; text-align:center;'>
    <tr><th>Name</th><th>ID</th><th>Class</th></tr>
    <tr><td>A/hafiid Ahmed Wehliye</td><td>C1220557</td><td>CA223</td></tr>
</table>
";

// Assignment 1: Largest & Smallest
echo "Assignment 1<br>";

$numA = 3;
$numB = 12;
$numC = 3;

// Largest
if ($numA >= $numB && $numA >= $numC) {
    echo "Largest = $numA<br>";
} elseif ($numB >= $numA && $numB >= $numC) {
    echo "Largest = $numB<br>";
} else {
    echo "Largest = $numC<br>";
}

// Smallest
if ($numA <= $numB && $numA <= $numC) {
    echo "Smallest = $numA<br>";
} elseif ($numB <= $numA && $numB <= $numC) {
    echo "Smallest = $numB<br>";
} else {
    echo "Smallest = $numC<br>";
}

echo "<br>Assignment 2<br>";

$countVal = 1;
echo "<table border='1' cellpadding='10'>";
for ($row = 1; $row <= 10; $row++) {
    echo "<tr style='text-align:center;'>";
    for ($col = 1; $col <= 10; $col++) {
        if ($countVal % 3 == 0 && $countVal % 5 == 0) {
            echo "<td style='background:red'>$countVal</td>";
        } elseif ($countVal % 3 == 0) {
            echo "<td style='background:green'>$countVal</td>";
        } elseif ($countVal % 5 == 0) {
            echo "<td style='background:blue'>$countVal</td>";
        } else {
            echo "<td style='background:yellow'>$countVal</td>";
        }
        $countVal++;
    }
    echo "</tr>";
}
echo "</table>";

echo "<br>Assignment 3<br>";

echo "Odd Numbers (2–20):<br>";
for ($x = 2; $x <= 20; $x++) {
    if ($x % 2 != 0) echo "$x ";
}
echo "<br>Even Numbers (35–7):<br>";
for ($y = 35; $y >= 7; $y--) {
    if ($y % 2 == 0) echo "$y ";
}

echo "<br><br>Assignment 4<br>";

for ($k = 2; $k <= 50; $k++) {
    if ($k % 2 == 0 && $k % 5 == 0) echo "$k <br>";
}

echo "<br>Assignment 5<br>";

$val = 12345;
$temp = $val;
$rev = 0;
while ($val > 0) {
    $last = $val % 10;
    $rev = $rev * 10 + $last;
    $val = (int)($val / 10);
}
echo "Reverse of $temp = $rev";

echo "<br><br>Assignment 6<br>";

$a = 8;
$b = 12;
$m = $a;
$n = $b;

while ($n != 0) {
    $swap = $n;
    $n = $m % $n;
    $m = $swap;
}
$gcd = $m;
$lcm = ($a * $b) / $gcd;
echo "LCM of $a and $b = $lcm";

echo "<br><br>Assignment 7<br>";

$num1 = 18;
$num2 = 24;
$p = $num1;
$q = $num2;

while ($q != 0) {
    $swap = $q;
    $q = $p % $q;
    $p = $swap;
}
$hcf = $p;
echo "HCF of $num1 and $num2 = $hcf";

echo "<br><br>Assignment 8<br>";

echo "<h3>Multiplication Table</h3>";
echo "<table border='1' cellpadding='6'>";
for ($i = 1; $i <= 12; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 12; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<br><br>Assignment 9<br>";

$checkNum = 4;
$isPrime = true;

if ($checkNum < 2) {
    $isPrime = false;
} elseif ($checkNum == 2) {
    $isPrime = true;
} elseif ($checkNum % 2 == 0) {
    $isPrime = false;
} else {
    for ($z = 3; $z * $z <= $checkNum; $z += 2) {
        if ($checkNum % $z == 0) {
            $isPrime = false;
            break;
        }
    }
}
echo $isPrime ? "$checkNum is Prime" : "$checkNum is not Prime";

echo "<br><br>Assignment 10<br>";

for ($num = 2; $num <= 50; $num++) {
    $primeFlag = true;
    if ($num < 2) {
        $primeFlag = false;
    } elseif ($num == 2) {
        $primeFlag = true;
    } elseif ($num % 2 == 0) {
        $primeFlag = false;
    } else {
        for ($d = 3; $d * $d <= $num; $d += 2) {
            if ($num % $d == 0) {
                $primeFlag = false;
                break;
            }
        }
    }
    if ($primeFlag) echo "$num <br>";
}
?>
