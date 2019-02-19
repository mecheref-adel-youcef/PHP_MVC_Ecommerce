<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Public/css/home.css">
    <link rel="stylesheet" type="text/css" href="Public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<body>



    <h3>products : </h3>
    <?php while ($data = $products->fetch()):
        $quantityStock =  $data['quantity'];
        $idpro =$data['idpro'];?>
        name : <?= $data['name']?><br>
        designation : <?= $data['designation']?> <br>
        quantity : <?= $quantityStock ?><br>
        price: <?= $data['sale_price']?><br>
        color : <?= $data['color']?><br>
        picture :<img src="Public/images/<?= $data['picture']?>"> <br>
        <form action="index.php?action=addProductInPanier" method="post">
            <input type="hidden" name="idpro" value="<?= $idpro?>">
            <input type="hidden" name="quantityStock" value="<?= $quantityStock?>" required="required">
            quantity to buy : <input type="number" value="qunatityToAdd" name="quantity">
            <input type="submit" value="add to panier">
        </form>
        <a href="index.php?action=buyOneProduct&amp;idpro=<?= $idpro?>&amp;quantityStock=<?= $quantityStock?>">Buy</a>
        <hr>
    <?php endwhile; ?>





</body>
</html>
