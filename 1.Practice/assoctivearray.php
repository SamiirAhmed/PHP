
<?php

// assoctive 

// $student_info = array (
//     "ID" =>1,
//     "name" => "John",
//     "age" => 20,
//     "city" => "New York"

// );

// print_r($student_info);

//  echo $student_info["name"];

//  echo "<br>";
//  echo $student_info["city"];



//2 multideminision numeric


// $student =  array (
//     array(101,"Samiir",21),
//     array(102,"borna",22),
//     array(103,"muscab",22),


// );

// print_r($student);



// mixed  2D associative array


// $student_info = array (
//       array(
//         "ID" => 1,
//         "name" => "Said",
//         "age" => 20,
//         "city" => "New York"
//     ),

//     array(
//         "ID" => 2,
//         "name" => "Borna",
//         "age" => 22,
//         "city" => "New York"
//     )

// );

// print_r($student_info);

// echo "bornas name " . $student_info[1]["ID"];


// 3 demensional array

$student_re = array(

    array(
        array(101, "Samiir", 19),
        array(90, 80, 70, 50)
    ),
    array(
        array(101, "sabirin", 20),
        array(82, 74, 89, 60)
    ),
    array(
        array(101, "Salma", 21),
        array(60, 80, 67, 59)
    )
);

foreach ($student_re  as $i => $person) {
    echo "<b>Student : " . ($i + 1) . "</b><br>";
    foreach ($person as $data) {
        foreach ($data as $v) {
            echo "$v,";
        }
        echo " </br>";
    }
    echo "<br>";
}
echo "<pre>";


var_dump($student_re);
print_r($student_re);
echo "</pre>";










?>