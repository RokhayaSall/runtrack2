<?php
for ($i = 0; $i <= 100; $i++) {
    $result = $i;

    if ($i == 42) {
        $result = "La Plateforme_";
    } elseif ($i >= 0 && $i <= 20) {
        $result = "<i>$i</i>";
    } elseif ($i >= 25 && $i <= 50) {
        $result = "<u>$i</u>";
    }

    echo "$result<br />";
}
?>
