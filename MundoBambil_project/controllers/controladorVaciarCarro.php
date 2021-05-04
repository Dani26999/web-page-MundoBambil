<?php
    unset($_SESSION['cart']);
    $_SESSION['cart'] = array();
    $_SESSION['cart']['importe_total'] = 0;
    $_SESSION['cart']['total_productos'] = 0;
    $_SESSION['cart']['productos'] = array();
?>