<?php 

$url = "https://api.themoviedb.org/3/search/movie?query=homem&api_key=CHAVEAQUI&language=pt-BR";


// retornar todo o contudo da minha url
$json = file_get_contents($url);
//decodificando json
$obj = json_decode($json);


//listando titulos relacionado
foreach($obj->results as $resultado){
	echo $resultado->title;
	echo "<br/>";
}
//print_r($obj);
?>