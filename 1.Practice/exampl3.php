<?php

$marks=60;

if ($marks >= 90) {
	    echo "Grade: Excellent";
}

elseif ($marks >= 80 && $marks <=89) {
	    echo "Grade: Very Good";

} elseif ($marks >= 50 && $marks <= 79) {
    echo "Grade: Pass";
} else {
    echo "Grade: Fail";
}

?>