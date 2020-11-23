<?php
    $nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
    echo $nilai;
    echo "<br>";
    //mengubah nilai menjadi array dan membuatnya menjadi integer 
    $integerNilai = array_map('intval', explode(' ', $nilai));
    // menampilkan data array integer dari nilai
    print("<pre>".print_r($integerNilai,true)."</pre>");
    // memasukkan rumus mencari rata-rata pada nilai yang telah terubah
    // menampilkan hasil 
    echo "<br>";
    echo "<br>";
    echo "<br>";

function AverageNilai($data)
{
    $averageNilai = array_sum($data)/count($data);
    return $averageNilai;
    
}
    // mencari 7 nilai tertinggi
    function NilaiTertinggi($data)
    {
        $max7 = array();
        for ($p=0; $p < 8; $p++) { 
            for($i=1; $i < count($data) ; $i++){
                for($j = count($data)-1 ; $j>=$i; $j--){
                    if($data[$j] > $data[$j-1]){
                    $temp 	= $data[$j];
                    $data[$j] 	= $data[$j-1];
                    $data[$j-1] = $temp;
                    }
                }
            }
            $max7[] = array_shift($data);
            
        };
        return print("<pre>".print_r($max7,true)."</pre>");

    };
    // mencari 7 nilai terendah
    function NilaiTerendah($data)
    {
        $max7 = array();
        for ($p=0; $p < 8; $p++) { 
            for($i=1; $i < count($data) ; $i++){
                for($j = count($data)-1 ; $j>=$i; $j--){
                    if($data[$j] < $data[$j-1]){
                    $temp 	= $data[$j];
                    $data[$j] 	= $data[$j-1];
                    $data[$j-1] = $temp;
                    }
                }
            }
            $max7[] = array_shift($data);
            
        };
        return print("<pre>".print_r($max7,true)."</pre>");

    };


    echo "1. Nilai Rata-rata ".AverageNilai($integerNilai);
    echo "<br>";
    echo "<br>";
    echo "2. 7 Nilai tertinggi";
    NilaiTertinggi($integerNilai);
    echo "3. 7  Nilai terendah";
    NilaiTerendah($integerNilai);
?>