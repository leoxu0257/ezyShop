<body>
<h1>ezyVet Shop</h1>
<table border="1" cellpadding="0" cellspacing="0" width="100%" >
    <tr><td>Id</td><td>Goods Name</td><td>Price</td><td>Action</td></tr>
   <?php
    session_start();
    $_SESSION["zhang"] = "ezyshop";
    $goods = array( 1=>array('name'=>'Sledgehammer','price'=> 125.75),
                    2=>array('name'=>'Axe','price'=> 190.50),
                    3=>array('name'=>'Bandsaw','price'=> 562.131),
                    4=>array('name'=>'Chisel','price'=> 12.9),
                    5=>array('name'=>'Hacksaw','price'=> 18.45));
    $_SESSION["goods"] = $goods;
    foreach ($goods as $key => $value) {
        echo " <tr> <td>{$key}</td> <td>{$value['name']}</td><td>{$value['price']}</td><td><a href='./ezyshop.php?ids={$key}'>Join</a></td></tr>";
    }
    //Total goods and total price
    $array = array();
    if (!empty($_SESSION["cartNow"])) {
        $array = $_SESSION["cartNow"];
    }
    $kind = count($array);
    $i = 0;
    foreach ($array as $v) {
        $unitPrice = $goods[$v[0]]['price'];
        $i = $i + $unitPrice * $v[1];
    }
    echo"Kind：{$kind}<br/>Total Price:{$i}";
    ?>
</table>
<a href="cart.php">Check Cart</a>
</body>
