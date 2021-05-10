<!DOCTYPE html>
    <head>
    <meta charset="utf-8">
    </head>
    <body>
    <?php $fruits = ['apple', 'orange', 'strawberry']; ?>
        <form method = "post" action ="test1-2s.php">
            
            <input type="text" name="answer">
            <input type="submit" value="検索">
        </form>
            <?php
             if($fruits[0] === $_POST["answer2"]){
                 echo "<入力した文字>は、配列に含まれています。";}
            elseif($fruits[1] === $_POST["answer2"]){
                 echo "<入力した文字>は、配列に含まれています。";}
            elseif($fruits[2] === $_POST["answer2"]){
                 echo "<入力した文字>は、配列に含まれています。";}
             else{
                 echo "<入力した文字>は、配列に含まれていません。";}         
             ?>
    </body>
</html>