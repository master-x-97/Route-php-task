<?php
echo "<pre>";
for ($row = 0; $row < 11; $row++) {
    for ($col = 0; $col <= 11; $col++) {
        if ($col == 1 or (($row == 0 or $row == 5) and $col > 1 and $col < 9) or ($col == 9 and $row != 0 and $row < 5) or ($col == $row - 2 and $row > 4)) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
echo "</pre>";
?>