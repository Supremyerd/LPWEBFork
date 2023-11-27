<?php
	
	require_once("../../controller/connection.php");
	require_once("../../models/Produto.php");

	$sql = "SELECT * FROM produto;";
	$stmt = $conn->prepare($sql);
	$products = array();
	try {
		$stmt->execute();
		$result = $stmt->fetchAll();
		// echo 'result:'.implode(',',$result[2]);
			foreach ($result as $prod) {
				$product = new Produto($prod['id'], $prod['desc_produto'], $prod['id_modelo'], $prod['capacidade'], $prod['vlr_sugerido'], $prod['vlr_custo'], $prod['voltagem'], $prod['id_cor'], $prod['image']);
				array_push($products, $product);
				
			}
			echo $products[0]->getDescProduto();//'result:'.implode(',',$products[0]);
	} catch (PDOException $e) {
		echo "Erro ao buscar Produto: " . $e->getMessage();
		
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <header>
    <a href="../admin.php">
      voltar
    </a>
  </header>

  <section>
    <a href="./form.php">
        <div> Criar novo produto </div>
    </a>
    <?php

      foreach ($products as $product) {
        echo $product->getDescProduto();
        echo "  <a href=\"./form.update.php?id=".$product->getId()."\"> editar </a>";
        echo "</br>";
      }
    ?>
  </section>

</body>
</html>