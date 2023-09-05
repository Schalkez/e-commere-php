<?php
    $id = $_GET['id'];
    $query = "SELECT * FROM products WHERE id=$id";
    $result = $connect->query($query);
    $item = mysqli_fetch_array($result);
?>
<section class="product-detail-wrapper">
    <img src="images/<?= $item['image'] ?>" alt="<?= $item['name'] ?>">
    <section class='product-detail'>
        <h1><?= $item['name'] ?></h1>
        <div class='price'><?= number_format($item['price'], 0, ',', '.') ?>đ</div>
        <div><?= $item['description'] ?></div>
        <input type="button" value='Add to cart'>
    </section>
</section>