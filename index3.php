<?php
function ngram($data) {
    $tmp    = explode(' ',$data);
    $tmp2   = implode(', ', $tmp);
    return $tmp2;
}

echo "<form action='index3.php' method='post'>
        <h5>Masukkan Kalimat</h5>
        <input type='text' value='' maxlength='100' name='string'>
        <input type='submit' value='submit' name=''>
        </form>";


$data = $_POST['string'];
$result = ngram($data);

echo "Unigram : ".$result."<br>";
echo "Bigram : ".$result."<br>";
echo "Trigram : ".$result."<br>";