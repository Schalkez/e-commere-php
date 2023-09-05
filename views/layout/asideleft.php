<?php
    $query = "SELECT * FROM brands WHERE status='1'";
    $result = $connect->query($query);
?>
<ul>
    <?php foreach ($result as $brand) :?>
        <li><a href="?option=show_products&brand_id=<?= $brand['id'] ?>"><?= $brand['name'] ?></a></li>
    <?php endforeach ;?>
</ul>