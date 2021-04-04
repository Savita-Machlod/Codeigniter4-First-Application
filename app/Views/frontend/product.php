<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
</head>
<body>
    <h2>Welcome to product page</h2>
    <h1>Product Name: <?= $name; ?></h1>
    <h2>Product List: </h2>
    <ul>
        <?php foreach($prod_list as $item) : ?>
        <li><?= $item; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>