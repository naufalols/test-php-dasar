<?php
    function hurufKecil($data) {
        return strlen(preg_replace('![^a-z]+!', '', $data));
    }

    echo "<form action='index2.php' method='post'>
            <h5>Masukkan Kata</h5>
            <input type='text' value='' maxlength='30' name='string'>
            <input type='submit' value='hitung' name=''>
            </form>";


    $data = $_POST['string'];
    $result = hurufKecil($data);

    echo "'".$data."'"." mengandung ".$result." buah huruf kapital";