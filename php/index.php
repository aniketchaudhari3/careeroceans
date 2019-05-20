<?php
$url = $_GET['url'];

$ch = curl_init();

// $url ="https://www.dmart.in/cooking-oil";
//$url ="https://www.dmart.in/tea---coffee";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST,false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$html = curl_exec($ch);
curl_close($ch);
$DOM = new DOMDocument;
libxml_use_internal_errors(true);
$DOM->loadHTML($html);


$elements = $DOM->getElementsByTagName('h4');
$price = $DOM->getElementsByTagName('span');
$sell = $DOM->getElementsByTagName('span');

// Array

$name = array();
$buy  = array();
$sell_p = array();

echo "<br>";


echo "<hr>";
$no1=0;
for($i=0;$i<$elements->length;$i++){
  
  if($elements->item($i)->getAttribute('class')=== 'product-listing--title'){
 
    array_push($name,$elements->item($i)->nodeValue);
    /*
    $no1++;
    echo "$no1 Name:- ".$elements->item($i)->nodeValue."<br>";
  */

}
}


echo "<hr>";

for($i=0;$i<$price->length;$i++){

  if($price->item($i)->getAttribute('class')=== 'strike-diagonal'){

    // echo "$no2 Price:- ".$price->item($i)->nodeValue."<br>";
    array_push($buy,$price->item($i)->nodeValue);

  
  }
  

}
echo "<hr>";

for($i=0;$i<$sell->length;$i++){


 if($sell->item($i)->getAttribute('class') === 'save-price'){

  // echo "$no3 Sell:- ".$sell->item($i)->nodeValue."<br>";
  array_push($sell_p,$sell->item($i)->nodeValue);

  
  }
  

}
echo "<hr>";
print_r($name);
echo "<hr>";
print_r($buy);
echo "<hr>";
print_r($sell_p);
echo "<hr>";
echo "Name Total :- ".count($name);
echo "<br>";
echo "buy Total :- ".count($buy);
echo "<br>";
echo "Sell Total :- ".count($sell);

?>
<marquee>Yaa Website la kel aahe <a href="https://www.dmart.in/"> https://www.dmart.in/tea </a></marquee>
<form action=" " method="get">
<input name="url" placeholder="https://www.dmart.in/tea---coffee" />
<button type="submit">GO</button>
</form>

<pre>
As Tak jo link <code>https://www.dmart.in/tea---coffee</code>
</pre>

