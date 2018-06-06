<html>
<title> Trabalho Java Segundo Bimestre
</title>
<head>
Trabalho Java
</head>
<body>

<?php
include('configJav.php');	


if(@$_REQUEST ['botao'] == "Cadastrar"){
	
	$descricao = $_POST ['descricao'];
	$quantidade = $_POST ['quantidade'];
	$fornecedor = $_POST ['fornecedor'];
	$precoVenda = $_POST ['precoVenda'];
	$unidade = $_POST ['unidade'];
	$precoCompra = $_POST ['precoCompra'];
	$codBarras = $_POST ['codBarras'];
	$codReferencia = $_POST ['codReferencia'];
	
	//$query = ("insert into post values descricao= '$descricao', quantidade= '$quantidade', fornecedor= '$fornecedor'; precoVenda= '$precoVenda', unidade= '$unidade', precoCompra= '$precoCompra', codBarras= '$codBarras', codReferencia= '$codReferencia'");
	//$result = ($con, $query);
	
	


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8080",
  CURLOPT_URL => "http://localhost:8080/cadastro",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "\n    {\n        \n        \"descricao\": \"$descricao\",\n        \"quantidade\": \"$quantidade\",\n        \"fornecedor\": \"$fornecedor\",\n        \"precoVenda\": \"$precoVenda\",\n        \"unidade\": \"$unidade\",\n        \"precoCompra\": \"$precoCompra\",\n        \"codBarras\": \"$codBarras\",\n        \"codReferencia\": \"$codReferencia\"\n        \n    }\n",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "content-type: application/json",
    "postman-token: f9e05208-a0da-528f-f562-83c66643d7b8"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  ?>
  <script>
      alert("Produto Cadastrado");
      window.location.href ="get.php";
      </script>
  <?php
}
}	
     //echo $result;
?>


<table border=1>
<form action=# method=POST>

<tr> <td colspan=2 align=center> Cadastro mercadinho java </td></tr>

<tr><td>
Descrição :</td><td> <input type=textarea name=descricao><br>
</tr></td>
<tr><td>
Quantidade em estoque :</td><td>  <input type=text name=quantidade><br>
</tr></td>
<tr><td>
Fornecedor :</td><td>  <input type=text name=fornecedor><br>
</tr></td>
<tr><td>
Preço de venda :</td><td>  <input type=text name=precoVenda><br>
</tr></td>
<tr><td>
Preço da unidade : </td><td> <input type=text name=unidade><br>
</tr></td>
<tr><td>
Preço de compra : </td><td> <input type=text name=precoCompra><br>
</tr></td>
<tr><td>
Codigo de barras :</td><td>  <input type=text name=codBarras><br>
</tr></td>
<tr><td>
Codigo de referencia : </td><td> <input type=text name=codReferencia><br>
<tr><td colspan=2 align=center>
<input type=submit name=botao value=Cadastrar>
</tr></td>


</table>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="MeuController.js"



</form>

</body>
</html>