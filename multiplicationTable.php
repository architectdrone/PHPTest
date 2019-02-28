<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
echo "<table style='width:100%'>";
for ($x = 0; $x <= 100; $x++)
{
    echo "<tr>";
    for ($y = 0; $y <= 100; $y++)
    {
        echo "<td>";
        if (($x == 0) && ($y == 0))
        {
            echo "<b>X</b";
        }
        elseif ($x == 0)
        {
            echo "<b>" . $y . "</b";
        }
        elseif ($y == 0)
        {
            echo "<b>" . $x . "</b";
        }
        else
        {
            echo $x*$y;
        }
        echo "</td>";

    }
    echo "</tr>";
}
echo "</table>"
?>