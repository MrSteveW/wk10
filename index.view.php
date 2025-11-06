<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Demonstration</title>
</head>
<body>
    <h1>The Dough Main</h1>

    <h2>Biscuit information</h2>

    <form method="GET" style="margin-bottom: 20px;">
    <label for="stock_filter">Filter by stock:</label>
    <input type="number" 
           id="stock_filter" 
           name="stock_filter" 
           value="<?= ($stockFilter); ?>" 
           min="0" 
           style="margin: 0 10px; padding: 5px;">
    <button type="submit">Filter</button>
</form>

    <div class="biscuit-container">

        <?php foreach ($filteredBiscuits as $biscuit): ?>
            <div class="biscuit-card">
                <h3><?= ($biscuit['biscuit_name']); ?></h3>
                <p>Stock: <?= $biscuit['stock']; ?></p>
                <p>Price: £<?= $biscuit['sale_price']; ?></p>
                <p>Gluten Free: <?= $biscuit['gluten_free'] ? 'Yes' : 'No'; ?></p>
                <p>Sugar Free: <?= $biscuit['sugar_free'] ? 'Yes' : 'No'; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>