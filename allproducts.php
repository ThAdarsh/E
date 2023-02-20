<?php
ob_start();
// include header.php file
include('header.php');

// shuffle($product_shuffle);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['top_sale_submit'])) {
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
?>

<head>
    <title>Harvest vase</title>
    <link rel="stylesheet" href="allprd.css">

</head>
    <?php
    // $result  = mysqli_query($con->con, " Select * from product");
    // if (mysqli_num_rows($result) > 0) {
    //     while ($data = mysqli_fetch_array($result)) {
    # code...
    foreach ($product_shuffle as $data) {
    ?>
        <div class="wrapper123">
            <div class="product-img">
                <a href="<?php printf('%s?item_id=%s', 'product.php',  $data['item_id']); ?>"><img class="img1" src="<?php echo $data['item_image'] ?? "./assets/products/r8.png"; ?>" height="420" width="327"></a>
            </div>
            <div class="product-info">
                <div class="product-text">
                    <h1 class="t1"><?php echo $data['item_name'] ?? "Unknown"; ?></h1>
                    <h2 class="b"><?php echo $data['item_brand'] ?? '0'; ?></h2>
                    <p class="p1"><?php echo $data['item_desc'] ?></p>
                </div>
                <div class="product-price-btn1">
                    <p class="p1"><span class="s"><?php echo $data['item_price'] ?></span></p>
                    <!-- <a href="?id=<?php echo $data['item_id'] ?>"> <input class="btn1" type="submit" value="Add To Cart" name="addtoc"></a> -->
                    <form method="post">
                        <input type="hidden" name="item_id" value="<?php echo $data['item_id'] ?>">
                        <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                        <?php
                        if (in_array($data['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])) {
                            echo '<button type="submit" disabled class="btn btn1 font-size-12">In the Cart</button>';
                        } else {
                            echo '<button type="submit" name="top_sale_submit" class="btn1 font-size-12">Add to Cart</button>';
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    <?php
    }
    include("footer.php");
    ?>
