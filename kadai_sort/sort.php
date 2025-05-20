<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order){
            if($order === true){
                echo '昇順にソートします。'.'<br>';
                sort($array); // 配列を昇順にソート
                foreach($array as $num){
                    echo $num.'<br>';
                }
            } elseif ($order === false) {
                echo '降順にソートします。'.'<br>';
                rsort($array); // 配列を降順にソート
                foreach($array as $num){
                    echo $num.'<br>';
                }
            } else {
                echo '不正なソート順序です。'.'<br>';
            }
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        // 昇順ソートの呼び出し
        sort_2way($nums, true);

        // 降順ソートの呼び出し
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>