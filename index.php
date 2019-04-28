<?php require 'inc/head.php';
require "connected.php";
if (!empty($_GET['add_to_cart'])){
switch ($_GET["add_to_cart"])
{
case "46":
if (empty($_COOKIE['panier']['pecanNuts'])){
setCookie("panier[pecanNuts]", 1);
header ("location: index.php");
break;
}
$_COOKIE['panier']["pecanNuts"]++;
setCookie("panier[pecanNuts]",$_COOKIE["panier"]["pecanNuts"]);
break;
case "36":
if (empty($_COOKIE['panier']['chocolateChips'])){
setCookie("panier[chocolateChips]", 1);
header ("location: index.php");
break;
}
$_COOKIE['panier']["chocolateChips"]++;
setCookie("panier[chocolateChips]",$_COOKIE["panier"]["chocolateChips"]);
break;
case "58":
if (empty($_COOKIE['panier']['chocolateCookie'])){
setCookie("panier[chocolateCookie]", 1);
header ("location: index.php");
break;
}
$_COOKIE['panier']["chocolateCookie"]++;
setCookie("panier[chocolateCookie]",$_COOKIE["panier"]["chocolateCookie"]);
break;
case "32":
if (empty($_COOKIE['panier']['mmsCookies'])){
setCookie("panier[mmsCookies]", 1);
header ("location: index.php");
break;
}
$_COOKIE['panier']["mmsCookies"]++;
setCookie("panier[mmsCookies]",$_COOKIE["panier"]["mmsCookies"]);
break;
}
}
?>
<section class="cookies container-fluid">
    <div class="row">



        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Pecan nuts</h3>
                    <h4><?= $_COOKIE['panier']['pecanNuts'] ?? '' ?></h4>
                    <p>Cooked by Penny !</p>
                    <form role="form" action="" method="GET">
                        <input type="hidden" name="add_to_cart" value="46" />
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Ajouter au Panier</button>
                    </form>
                </figcaption>
            </figure>
        </div>



        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate chips</h3>
                    <h4><?= $_COOKIE['panier']['chocolateChips'] ?? '' ?></h4>
                    <p>Cooked by Bernadette !</p>
                    <form role="form" action="" method="GET">
                        <input type="hidden" name="add_to_cart" value="36" />
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Ajouter au Panier</button>
                    </form>
                </figcaption>
            </figure>
        </div>


        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate cookie</h3>
                    <h4><?= $_COOKIE['panier']['chocolateCookie'] ?? '' ?></h4>
                    <p>Cooked by Bernadette !</p>
                    <form role="form" action="" method="GET">
                        <input type="hidden" name="add_to_cart" value="58" />
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Ajouter au Panier</button>
                    </form>
                </figcaption>
            </figure>
        </div>


        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>M&M's&copy; cookies</h3>
                    <h4><?= $_COOKIE['panier']['mmsCookies'] ?? '' ?></h4>
                    <p>Cooked by Penny !</p>
                    <form role="form" action="" method="GET">
                        <input type="hidden" name="add_to_cart" value="32" />
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Ajouter au Panier</button>
                    </form>
                </figcaption>
            </figure>
        </div>
    </div>
</section>
<?php require 'inc/foot.php'; ?>