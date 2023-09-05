<div id='header-top'>
    <form method="get">
        <input type="hidden" name="option" value="show_products">
        <input type="search" name="keyword" value="<?= isset($_GET['keyword']) ? $_GET['keyword'] : null ?>">
        <input type="submit" value="Search">
    </form>
</div>