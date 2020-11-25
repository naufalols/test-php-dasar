<?php
$data = array();
for ($i=1; $i <= 64; $i++) { 
    $data[] = $i;
}

echo "<table style='padding: 8px 20px;border-collapse: collapse;'>"; 
echo "<tr>";
$count = 0;
for ($i=0; $i < count($data); $i++) { 
    if (($count%8) == 0) {
        echo "</tr>";
    }
    if (($count%3) == 2) {
        echo "<td style='padding: 8px 20px;border: 1px solid black;'>".$data[$i]."</td>";
    } elseif($data[$i]%4 == 0) {
            echo "<td style='padding: 8px 20px;border: 1px solid black;'>".$data[$i]."</td>";
    } else {
        echo "<td style='padding: 8px 20px;border: 1px solid black;background-color:black;color:white;'>".$data[$i]."</td>";
    }
    $count+=1;
}
echo "</table>"; 