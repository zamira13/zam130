<?php
/* First method to associate create array. */
$salaries = array(
    "Zamira" => 2000,
    "Rijal" => 1000,
    "RamaRami" => 500
);
echo "Salary of Zamira is ". $salaries['Zamira'] . "<br />";
echo "Salary of Rijal is ". $salaries['Rijal'] . "<br />";
echo "Salary of RamaRami is ". $salaries['RamaRami'] . "<br />";
/* Second method to create array. */
$salaries['Zamira'] = "high";
$salaries['Rijal'] = "medium";
$salaries['RamaRami'] = "low";
echo "Salary of Zamira is ". $salaries['Zamira'] . "<br />";
echo "Salary of Rijal is ". $salaries['Rijal'] . "<br />";
echo "Salary of RamaRami is ". $salaries['RamaRami'] . "<br />";
?>