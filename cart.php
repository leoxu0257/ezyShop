<body>
<h1>Check Cart</h1>
<table width="100%" border="1"cellspacing="0" cellpadding="0">
    <tr>
        <td>Goods name</td>
        <td>Price</td>
        <td>Number</td>
        <td>Total Price</td>
        <td>Action</td>
    </tr>
   <?php
    session_start();
    $arr = array();
    if (!empty($_SESSION["cartNow"])) {
        $arr = array();
        $arr = $_SESSION["cartNow"];
    }
    $goodsInfo = $_SESSION["goods"];
    $totalNumber = 0;
    foreach ($arr as $key => $v) {
        $totalPrice = $goodsInfo[$v[0]]['price'] * $v[1];
        echo "<tr><td>{$goodsInfo[$v[0]]['name']}</td><td>{$goodsInfo[$v[0]]['price']}</td><td>{$v[1]}</td><td>{$totalPrice}</td><td><a href='deletegoods.php?ids={$key}'>Delete</a></td></tr> ";
        $totalNumber += $v[1];
    }
    echo "Total Number:{$totalNumber}";
    ?>
    </table>
<a href="index.php">Back</a>
</body>