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
<?php $total =0;  ?>
<?php while ($data = $products->fetch()):?>
    <?php $quantity = $data['quantity']; $price = $data['sale_price']; ?>
    name : <?= $data['name']?><br>
    designation : <?= $data['designation']?> <br>
    quantity : <?= $quantity?><br>
    price: <?= $price?><br>
    color : <?= $data['color']?><br>
    picture :<img src="Public/images/<?= $data['picture']?>"> <br>
    <a href="index.php?action=cancelProductInPanier&amp;id=<?=$data['idpro']?>">Cancel</a>
    <hr>
    <?php $total +=  $quantity * $price?>
<?php endwhile; ?>

<h2>total price : <?= $total?> DA</h2>

<a href="index.php?action=buyAllPanier">Buy</a>



</body>
</html>
