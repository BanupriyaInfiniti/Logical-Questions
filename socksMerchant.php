<?php
    function socksMerchant($n,$arr){
        $unique_arr = array_unique($arr);
        foreach ($unique_arr as $key => $value) {
            $tempArr[$value] = 0;
            for ($i=0; $i <$n ; $i++) { 
                if ($value == $arr[$i]) {
                   $tempArr[$value]++;
                }
            }
        }
        $result=0;
        foreach ($tempArr as $key => $value) {
            $pairCount = (int)$value/2;
            $result +=(int)$pairCount;
        }
        return $result;
    }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Logical Questions</title>
</head>
<body>
	<form method="post"> 		
		<input type="number" name="n" placeholder="Enter Number of Colors"><br><br>
		<input type="text" name="arr" placeholder="Enter Space Seperated Colors"><br><br>
		<input type="submit" name="submit" value="Number">
	</form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
 	$n = $_POST['n'];
 	$spaceSeperated = $_POST['arr'];
     $arr = explode(" ", $spaceSeperated);   
     if ($n!=count($arr)) {
         echo "Please enter single space seperated value for n value";
         exit(0);
     }  
     echo socksMerchant($n,$arr);
     
 } 
 
 ?>
