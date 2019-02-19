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
<?php if (isset($_SESSION['success'])): ?>
    <h3>
        <?php
        echo $_SESSION['success'];
        unset($_SESSION['success'])
        ?>
    </h3>
<?php endif; ?>
<?php if (isset($_SESSION['errors'])): ?>
    <h3>
        <?php
        echo $_SESSION['errors'];
        unset($_SESSION['errors']);
        ?>
    </h3>
<?php endif;?>
<?php if (isset($_SESSION['congrat'])): ?>
    <h3>
        <?php
        echo $_SESSION['congrat'];
        unset($_SESSION['congrat']);
        ?>
    </h3>
<?php endif;?>


    <?php if (isset($_SESSION['first_name'])&& $_SESSION['type'] == 'client'): ?>
        <p>Welcome , <strong><?php echo $_SESSION['first_name'] ?></strong></p>
        <p><a href="index.php?action=logout" style="color:red;">Logout</a></p>





            <?php $data = $countInPanier->fetch() ?>
        <p><a href="index.php?action=listProductsInPanier">panier(<?=$data['nbProducts']?>)</a></p>
        <h2>categories : </h2>
        <ul>
            <?php while ($data = $categories->fetch()):?>
            <li><a href="index.php?action=product-by-categorie&amp;id=<?= $data['idcat']?>"><?= $data['type']?></a> </li>
            <?php endwhile; ?>
        </ul>



        <h3>new product</h3>
        <?php while ($data = $new_products->fetch()):
            $quantityStock =  $data['quantity'];
            $idpro =$data['idpro']; ?>

            name : <?= $data['name']?><br>
            designation : <?= $data['designation']?> <br>
        quantity : <?=$quantityStock?><br>
            price: <?= $data['sale_price']?> DA<br>
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

        <h3>best mounth</h3>
        <?php while ($data = $best_products->fetch()):
            $quantityStock =  $data['quantity'];
            $idpro =$data['idpro'];?>
            name : <?= $data['name']?><br>
            designation : <?= $data['designation']?> <br>
            quantity : <?=$quantityStock ?><br>
            price: <?= $data['sale_price']?> DA<br>
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



    <?php else : ?>
        <h1>you are not allowed litle hacker</h1>
    <?php endif ?>




</body>
</html>
