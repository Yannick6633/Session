<?php
session_start();
session_unset();
session_destroy();
setcookie("panier[pecanNuts]","", time()-3600);
setcookie("panier[chocolateChips]","", time()-3600);
setcookie("panier[chocolateCookie]","", time()-3600);
setcookie("panier[mmsCookies]","", time()-3600);
header("Location: login.php");