<?php
// Q1 変数と文字列
$myname = '戸田';
echo = '私の名前は「' . $myname . '」です。';

//-----------------------------------------------------------------
// Q2 四則演算
$num = 5 * 4;
echo $num . "\n";
echo $num / 2;

//-----------------------------------------------------------------
// Q3 日付操作
$currentTime = date('Y年m月d日 H時i分s秒');
echo '現在時刻は、' . $currentTime . 'です。';

//-----------------------------------------------------------------
// Q4 条件分岐-1 if文
$device = 'windows';

if ($device === 'windows' || $device === 'mac') {
    echo '使用OSは、' . $device . 'です。';
} else {
    echo 'どちらでもありません。';
}
//-----------------------------------------------------------------
// Q5 条件分岐-2 三項演算子
$age = 20;
$isMinor = $age < 18;
$result = $isMinor ? '未成年です。' : '成人です。';
echo $result;

//-----------------------------------------------------------------
// Q6 配列
$kanto = array('東京都', '神奈川県', '栃木県', '千葉県', '埼玉県', '茨城県', '群馬県');

echo $kanto[2] . 'と' . $kanto[3] . 'は関東地方の都道府県です。';

//-----------------------------------------------------------------
// Q7 連想配列-1
$kanto = array(
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
);

foreach ($kanto as $prefecture => $capital) {
    echo $capital . "\n";
}

//-----------------------------------------------------------------
// Q8 連想配列-2
$kanto = array(
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
);

foreach ($kanto as $prefecture => $capital) {
    if ($prefecture == '埼玉県') {
        echo $prefecture . 'の県庁所在地は、' . $capital . 'です。';
    }
}

//foreachループで配列の要素を取り出し、if 文で出力する条件を指定。

//-----------------------------------------------------------------
// Q9 連想配列-3

$kanto = array(
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市',
    '愛知県' => '名古屋市',
    '大阪府' => '大阪市'
);

foreach ($kanto as $prefecture => $capital) {
    if ($prefecture == '東京都' || $prefecture == '神奈川県' || $prefecture == '栃木県' || $prefecture == '千葉県' || $prefecture == '埼玉県' || $prefecture == '茨城県' || $prefecture == '群馬県') {
        echo $prefecture . 'の県庁所在地は、' . $capital . 'です。' . "\n";
    } else {
        echo $prefecture . 'は関東地方ではありません。' . "\n";
    }
}

//-----------------------------------------------------------------
// Q10 関数-1
function hello($name) {
    echo $name . "さん、こんにちは。\n";
}

hello('金谷');
hello('安藤');


//-----------------------------------------------------------------
// Q11 関数-2
function calcTaxInPrice($price) {
    $taxRate = 0.1;
    $tTaxInPrice = $price * (1 + $TaxRate);
    return $TaxInPrice;
}

$price = 1000;
$TaxInPrice = calcTaxInPrice($price);

echo $price . '円の商品の税込価格は' . $TaxInPrice . '円です。';
//-----------------------------------------------------------------
// Q12 関数とif文
function distinctNum($num) {
    if ($num % 2 == 0) {
        return $num . 'は偶数です。';
    } else {
        return $num . 'は奇数です。';
    }
}

echo distinctNum(11) . "\n";
echo distinctNum(24) . "\n";

//-----------------------------------------------------------------
// Q13 関数とswitch文
function evaluateGrade($grade) {
    switch ($grade) {
        case 'A':
        case 'B':
            return '合格です。';
        case 'C':
            return '合格ですが追加課題があります。';
        case 'D':
            return '不合格です。';
        default:
            return '判定不明です。講師に問い合わせてください。';
    }
}

echo evaluateGrade('A') . "\n";
echo evaluateGrade('E') . "\n";
//-----------------------------------------------------------------

?>
