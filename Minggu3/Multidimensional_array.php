<?php
$marks = array (
    "Zamira" => array (
        "physics" => 35,
        "maths" => 30,
        "chemistry" => 39
    ),
    "Rijal" => array (
        "physics" => 30,
        "maths" => 35,
        "chemistry" => 38
    ),
    "RamaRami" => array (
        "physics" => 31,
        "maths" => 22,
        "chemistry" => 37
    )
);
/* Accessing multi-dimensional array values */
echo "Marks for Zamira in physics : " ;
echo $marks['Zamira']['physics'] . "<br /";
echo "Marks for Rijal in maths : " ;
echo $marks['Rijal']['maths'] . "<br /";
echo "Marks for RamaRami in chemistry : " ;
echo $marks['RamaRami']['chemistry'] . "<br /";
?>