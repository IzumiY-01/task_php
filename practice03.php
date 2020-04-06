<?php
//PHP/Laravel 03 プログラムの実行を条件分岐構文と繰り返し構文で制御
$height = 230 ;
if ($height < 150 ){
    echo "150cm 未満の方はご乗車できません。";
}else if ($height >= 200){
    echo "200cm 以上の方はご乗車できません。";
}else{
    echo "ご乗車になれます。";
}

//switch
$weekday = "木曜";
switch($weekday) {
    case "月曜":
    case "木曜":
      echo "可燃ゴミの日です";
    break ;
    case "水曜":
      echo "資源ゴミの日です";
    break ;
    default:
        echo "回収はありません";
    break;
}

//var_dump
$a = 3 ;
$b = 3 ;
$c = "3";

var_dump($a == $b);
var_dump($a != $b);
var_dump($a > $b);
var_dump($a >= $b);
var_dump($a < $b);
var_dump($a <= $b);
var_dump($a === $c);
var_dump($a !== $c);

// for文
//例１
for( $i = 0; $i<10; $i++){
    echo $i ;
}
echo "\n"; //改行

//例２
$total = 0;
echo $total;
echo "\n"; //改行
for ($i = 0; $i <= 100; $i++) {
  $total += $i;
}
echo $total;
echo "\n"; //改行

//例３
$fruits = array("apple", "orange", "lemon");
echo count($fruits);

echo "\n"; //改行

for ($i = 0; $i < count($fruits); $i++) {
  echo "要素は" . $fruits[$i];
  echo "\n";
}
//例４

$animals = array("dog", "cat", "panda");

foreach($animals as $animal){
  echo "要素は" . $animal;
  echo "\n";
}

//課題１
/*$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
もし違ったら「あなたの名前ではありません」と表示するように実装してください。
*/

$neme = "いずみ";
if($neme == "いずみ"){
    echo "私は" .$neme. " です";
}else{
    echo "私はあなたの名前ではありません";
}
echo "\n"; //改行

//課題２
/*for文を使って、1から10000までの合計の値を表示してください*/
$total = 0;
for ($i = 1; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;
echo "\n"; //改行

//課題３
/*$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。*/

$fruits = array("イチゴ","メロン","バナナ","ブドウ","モモ");
foreach($fruits as $fruit){
    echo $fruit ;
    echo "\n" ;
}

//（応用）課題４
/*次のプログラムのバグを修正し、1から100までの間で5の倍数のみ
表示するようにしてみてください。*/

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i ;
    echo "\n";
  }
}
//done