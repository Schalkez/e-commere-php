<section>
    <form method="get">
        <input type="hidden" name="option" value="show_products">
        <input 
            type="range" 
            name="range" 
            id="range" 
            min="10000" 
            max="1000000" 
            step="50000" 
            value="<?= isset($_GET['range']) ? $_GET['range'] : null ?>"
            oninput="onInput(event)">
        <input type="submit" value="Search">
    </form>
    <span id='max'><?= isset($_GET['range']) ? $_GET['range'] : null ?></span>
</section>
<script>
    const onInput = (event) => {
        const rangeInputEl = document.getElementById('max');
        rangeInputEl.innerHTML = event.target.value;
    }
</script>