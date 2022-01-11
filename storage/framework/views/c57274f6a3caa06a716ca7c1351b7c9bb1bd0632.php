<!DOCTYPE html>
<html>
<head>
    <title>
        <?php echo $__env->yieldContent('title', 'TOP BAKERY'); ?>
    </title>
</head>
<body>
    

    <ul>
        <li><a href="/login">Login</a></li>
        <li><a href="/fastFoods">Fast Foods</a></li>
        <li><a href="/chocolates&sweets">Chocolates & Sweets</a></li>
        <li><a href="/cakes">Cakes</a></li>
        <li><a href="/cart">Cart</a></li>
        <li><a href="/about">About</a></li>
    </ul>

    <?php echo $__env->yieldContent('content'); ?>

</body>
</html>