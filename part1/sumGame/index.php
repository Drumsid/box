<?php require_once 'sum.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game sum</title>
</head>

<body>
    <h2>Посчитайте выражение!</h2>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" name="formSum" method="POST">
        <input type="hidden" value="<?= $sourceOperator1; ?>" name="op1" />
        <input type="hidden" value="<?= $sourceSum; ?>" name="sum" />

        <div>
            <span><?= $sourceOperator1 ?> +</span>
            <input type="text" value="<?= $sourceOperator2; ?>" size='2' name="op2" />
            <span>= <?= $sourceSum ?></span>
        </div>
        <br>
        <input type="submit" value="try" name="resultSum" />

    </form>

    <?php if (isset($resultString)) {
        $resultString;
    } ?>
    <?php if (isset($success)) : ?>
        <font color="green">
            <?= $success ?>
        </font>
    <?php endif; ?>
    <?php if (isset($error)) : ?>
        <font color="red">
            <?= $error ?>
        </font>
    <?php endif; ?>
    <br>
    <form action="/part1/sumGame/" name="formSum" method="POST">
        <input type="submit" value="reset data and run new exp" />
    </form>
</body>

</html>