<?php
// Q1 変数と文字列
$myname = '戸田';
$message = '私の名前は「' . $myname . '」です。';
var_dump($message);

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

if ($device == 'windows') {
    echo '使用OSは、windowsです。';
} else {
    if ($device == 'mac') {
        echo '使用OSは、macです。';
    } else {
        echo 'どちらでもありません。'
;
    }
}

//-----------------------------------------------------------------
// Q5 条件分岐-2 三項演算子
$age = 20;

$result = ($age < 18) ? '未成年です。' : '成人です。';
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

//foreach ループを使ってバリューを縦に表示
//\n を使って改行を挿入

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
        break;
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
    return $name . "さん、こんにちは。\n";
}

echo hello('金谷');
echo hello('安藤');

//\nの改行を反映させるため""を使用

//-----------------------------------------------------------------
// Q11 関数-2
function tax($price) {
    $TaxRate = 0.1; // 消費税率（10%）を指定
    $TaxPrice = $price * (1 + $TaxRate); // 税込価格を計算
    return $TaxPrice;
}

$price = 1000; // 税抜き価格を定義
$TaxPrice = tax($price); // 関数を実行して税込価格を取得

echo $price . '円の商品の税込価格は' . $TaxPrice . '円です。';
//-----------------------------------------------------------------
// Q12 関数とif文
function DeterminedNumber($num) {
    if ($num % 2 == 0) {
        return $num . 'は偶数です。';
    } else {
        return $num . 'は奇数です。';
    }
}

echo DeterminedNumber(11) . "\n";
echo DeterminedNumber(24) . "\n";

//-----------------------------------------------------------------
// Q13 関数とswitch文
function result($grade) {
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

echo result('A') . "\n";
echo result('E') . "\n";
//-----------------------------------------------------------------

?>