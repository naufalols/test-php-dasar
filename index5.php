<?php
	
	# Encrypt : +1 -2 +3 ... -n

	function encrypt($data){
        foreach( range('A', 'Z') as $elements) { 
      
             $char[] = $elements; 
        } 
	  
		$data = strtoupper($data);
		$arr_input = str_split($data);

		$plus = true;
		$result = '';
		$x = 1;
		$tmp = 0;
		for ($i=0; $i < count($arr_input); $i++) { 
			$tmp = array_search($arr_input[$i], $char);
			if ($plus == true) {
				$result .= $char[$tmp+$x];
				$plus = false;
			} else {
				$ne = $tmp-$x;
				if ($ne < 0) {
					$ne = count($char) + ($ne);
				}
				$result .= $char[$ne];
				$plus = true;
			}
			$x++;
		}
		
	  return $result;
	}

    echo "<form action='index5.php' method='post'>
        <h5>Masukkan Kata Encrypt</h5>
        <input type='text' value='' maxlength='100' name='string'>
        <input type='submit' value='submit' name=''>
        </form>";
    $data = $_POST['string'];
    $result = encrypt($data);
    echo "Hasil Enkripsi dari <b>$data</b> ialah <b>$result</b>";

?>