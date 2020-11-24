<?php
function ngram($data) {
    $tmp    = explode(' ',$data);
    $tmp2   = implode(', ', $tmp);
    
    // $result = array(); 
    // $result1 = array(); 
    // for ( $i = 0, $c = count( $tmp ) - 1; $i < $c; $i++ ){ 
    //         if ($tmp[$i] > $result[$i]) {
    //         $result[$i]  = $tmp[$i]." ".$tmp[$i + 1];
    //         $result1[$i]  = $tmp[$i]." ".$tmp[$i + 1]." ".$tmp[$i + 2];
    //     }
    // }
    // return print("<pre>".print_r($result,true)."</pre>").print("<pre>".print_r($result1,true)."</pre>");
    $reworkWord = [];
    $keep = 0;
    foreach ($tmp as $key => $value) {
        if (($key+1)%2 == 0) {
            $result = $reworkWord[$keep]." ".$value;
            $reworkWord[$keep] = $result;
            $keep +=1;
        }
        else{
            $reworkWord[$keep] = $value;
        }
    }
    
    $gram[] = $tmp2;
    $gram[] = implode(', ',$reworkWord);
    $gram[] = "cek";
    return $gram;
    // return print("<pre>".print_r($reworkWord,true)."</pre>").print("<pre>".print_r($reworkWord,true)."</pre>");

}

echo "<form action='index3.php' method='post'>
        <h5>Masukkan Kalimat</h5>
        <input type='text' value='' maxlength='100' name='string'>
        <input type='submit' value='submit' name=''>
        </form>";


$data = $_POST['string'];
$result = ngram($data);
// print_r($result);
echo "Unigram : ".$result[0]."<br>";
echo "Bigram : ".$result[1]."<br>";
echo "Trigram : ".$result[2]."<br>";
// echo "Unigram : ".$result."<br>";
// echo "Bigram : ".$result."<br>";
// echo "Trigram : ".$result."<br>";