<?php
echo "
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f6f9;
        margin: 20px;
        color: #333;
    }
    h2 {a
        color: #007BFF;
    }
    table {
        border-collapse: collapse;
        margin: 20px auto;
        box-shadow: 0 0 10px rgba(0,0,0,0.15);
    }
    th {
        background: #007BFF;
        color: white;
        padding: 10px 15px;
        font-size: 16px;
    }
    td {
        padding: 8px 12px;
        border: 1px solid #ddd;
        text-align: center;
        font-size: 15px;
    }
    tr:nth-child(even) {
        background: #f9f9f9;
    }
    tr:hover {
        background: #f1f1f1;
    }
    .color-table td {
        width: 40px;
        height: 40px;
        font-weight: bold;
    }
</style>
";

echo "
<table>
    <tr><th>Name</th><th>ID</th><th>Class</th></tr>
    <tr><td>Maida Hashi Adani</td><td>C1220616</td><td>CA223</td></tr>
</table>
";

echo "<h2>Task 1: Largest & Smallest</h2>";

$numA = 3;
$numB = 12;
$numC = 3;

if ($numA >= $numB && $numA >= $numC) {
    echo "Largest = $numA<br>";
} elseif ($numB >= $numA && $numB >= $numC) {
    echo "Largest = $numB<br>";
} else {
    echo "Largest = $numC<br>";
}

if ($numA <= $numB && $numA <= $numC) {
    echo "Smallest = $numA<br>";
} elseif ($numB <= $numA && $numB <= $numC) {
    echo "Smallest = $numB<br>";
} else {
    echo "Smallest = $numC<br>";
}

echo "<h2>Task 2: Numbers Divisible by 3 & 5</h2>";

$countVal = 1;
echo "<table class='color-table'>";
for ($row = 1; $row <= 10; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 10; $col++) {
        if ($countVal % 3 == 0 && $countVal % 5 == 0) {
            echo "<td style='background:#e74c3c; color:white;'>$countVal</td>";
        } elseif ($countVal % 3 == 0) {
            echo "<td style='background:#2ecc71; color:white;'>$countVal</td>";
        } elseif ($countVal % 5 == 0) {
            echo "<td style='background:#3498db; color:white;'>$countVal</td>";
        } else {
            echo "<td style='background:#f9e79f;'>$countVal</td>";
        }
        $countVal++;
    }
    echo "</tr>";
}
echo "</table>";

echo "<h2>Task 3: Odd & Even Numbers</h2>";

echo "Odd Numbers (2–20):<br>";
for ($x = 2; $x <= 20; $x++) {
    if ($x % 2 != 0) echo "$x ";
}
echo "<br><br>Even Numbers (35–7):<br>";
for ($y = 35; $y >= 7; $y--) {
    if ($y % 2 == 0) echo "$y ";
}

echo "<h2>Task 4: Divisible by 2 & 5 (2–50)</h2>";
for ($k = 2; $k <= 50; $k++) {
    if ($k % 2 == 0 && $k % 5 == 0) echo "$k <br>";
}

echo "<h2>Task 5: Reverse a Number</h2>";

$val = 12345;
$temp = $val;
$rev = 0;
while ($val > 0) {
    $last = $val % 10;
    $rev = $rev * 10 + $last;
    $val = (int)($val / 10);
}
echo "Reverse of $temp = $rev";

echo "<h2>Task 6: LCM of Two Numbers</h2>";

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

echo "<h2>Task 7: HCF of Two Numbers</h2>";

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

echo "<h2>Task 8: Multiplication Table</h2>";

echo "<table>";
for ($i = 1; $i <= 12; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 12; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<h2>Task 9: Check if Number is Prime</h2>";

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

echo "<h2>Task 10: Prime Numbers (2–50)</h2>";

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
