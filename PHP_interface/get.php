<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8080",
  CURLOPT_URL => "http://localhost:8080/posts",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    
    
  ),
));

$response  = curl_exec($curl);
$err = curl_error($curl);
$obj = json_decode($response,true);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $someArray = $obj; // Replace ... with your PHP Array
  ?>
  	<table border="1px">
		<tr>
			<th>ID</th>
			<th>Descrição</th>
			<th>Quantidade</th>
			<th>Fornecedor</th>
      <th>Preco de Venda</th>
      <th>Preco Unitario</th>
      <th>Preco de Compra</th>
      <th>Codigo de Barras</th>
      <th>Codigo de Referencia</th>
      <th>Data do Cadastro</th>
		</tr>
		<?php
  foreach ($someArray as $key => $value) {
    
  ?>

    <tr>
    <td><?= $value["id"] ?></td>
    <td><?= $value["descricao"] ?></td>
    <td><?= $value["quantidade"] ?></td>
	  <td><?= $value["fornecedor"] ?></td>
    <td><?= $value["precoVenda"] ?></td>
    <td><?= $value["unidade"] ?></td>
    <td><?= $value["precoCompra"] ?></td>
    <td><?= $value["codBarras"] ?></td>
    <td><?= $value["codReferencia"] ?></td>
    <td><?= $value["createdAt"] ?></td>
    <td width="1%">
	     <a href="editar.php?pag=editar&id=<?= $value["id"] ?>">editar</a>
      </td>
      <td width="1%">
	     <a href="deletar.php?pag=deletar&id=<?= $value["id"] ?>">deletar</a>
      </td>
  </tr>

  <?php
  }
 }
?>
</table>