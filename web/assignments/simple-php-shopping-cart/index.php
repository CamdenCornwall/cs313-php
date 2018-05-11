<?php
session_start();

function showCart() {
    $cart = $_SESSION['cart'];
    if ($cart) {
        $items = explode(',',$cart);
        $contents = array();
        foreach ($items as $item) {
            $contents[$item] = (isset($contents[$item])) ? $contents[$item] + 1 : 1;
        }
        foreach ($contents as $id=>$qty) {
            $output[] = 'You have '.$qty.' items with ID: '.$id;
        }
    }
    else {
        $output[] = 'You don\'t have items in your cart';
    }
    return join('',$output);
}

if(isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
}
else {
    $cart = 0;
}

if(isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'add':
            if ($cart) {
                $cart .= ','.$_GET['id'];
            } else {
                $cart = $_GET['id'];
            }
            break;
        case 'delete':
            if ($cart) {
                $items = explode(',',$cart);
                $newcart = '';
                foreach ($items as $item) {
                    if ($_GET['id'] != $item) {
                        if ($newcart != '') {
                            $newcart .= ','.$item;
                        } else {
                            $newcart = $item;
                        }
                    }
                }
                $cart = $newcart;
            }
            break;
        case 'update':
        if ($cart) {
            $newcart = '';
            foreach ($_POST as $key=>$value) {
                if (stristr($key,'qty')) {
                    $id = str_replace('qty','',$key);
                    $items = ($newcart != '') ? explode(',',$newcart) : explode(',',$cart);
                    $newcart = '';
                    foreach ($items as $item) {
                        if ($id != $item) {
                            if ($newcart != '') {
                                $newcart .= ','.$item;
                            } else {
                                $newcart = $item;
                            }
                        }
                    }
                    for ($i=1;$i<=$value;$i++) {
                        if ($newcart != '') {
                            $newcart .= ','.$id;
                        } else {
                            $newcart = $id;
                        }
                    }
                }
            }
        }
        $cart = $newcart;
        break;
    }
}

$_SESSION['cart'] = $cart;

echo showCart();
echo '<br/>';
echo '<a href="?action=add&id=1">Add to Cart</a>';
?>