<!DOCTYPE html>
    <head>
    <meta charset="utf-8">
    </head>
    <body>
        <?php $tokyo = "東京";?>
        <form method = "post" action ="test2.php">
            <p>日本の首都は？</p>
            <input type="text" name="answer">
            <input type="submit" value="OK">
        </form>
             <?php if($tokyo == $_POST["answer2"]):?>
                <p><?php echo "正解"; ?></p>
            <?php else :?>
                <p><?php echo "不正解"; ?></p>         
            <?php endif ?>
    </body>
</html>