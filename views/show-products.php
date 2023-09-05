<?php
    $query = "SELECT * FROM products WHERE status=1";
    if (isset($_GET['brand_id'])) {
        $brand_id = $_GET['brand_id'];
        $query .= " AND brand_id=$brand_id";
    } else if (isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
        $query .= " AND name LIKE '%".$keyword."'";
    } else if (isset($_GET['range'])) {
        $range = $_GET['range'];
        $query .= " AND price <= $range";
    }

    $result = $connect->query($query);
?>
<section id='products-wrapper'>
    <?php foreach ($result as $product) :?>
        <section class='product-card'>
            <a href="?option=productdetail&id=<?= $product['id'] ?>">
                <img src="images/<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
            </a>
            <div><?= $product['name'] ?></div>
            <div><?= number_format($product['price'], 0, ',', '.') ?>đ</div>
            <input type="button" value='Add to cart'>
        </section>
    <?php endforeach; ?>
</section>