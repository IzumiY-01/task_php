<?php
//PHP/Laravel 04 関数を理解しよう

function sum ($max){
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i ; 
    }
    return $result ;
}
echo sum(100);
echo "\n"; //改行

function print_number(){

    for($i = 0; $i < 10; $i++){
        echo $i;
    }
}
echo print_number() ;
echo "\n"; //改行

//strlen 文字の長さ（文字数）を返す

$string ="abcdefghijk";
echo strlen($string);
echo "\n"; //改行

//str_replace : 文字列を置換する

$string = "I love Ruby";
$new_string = str_replace("Ruby","PHP",$string);
echo $new_string ;
echo "\n"; //改行

//count : 配列の要素の個数を取得する
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo count($array);
echo "\n";

//asort, arsort : 配列をソート（並び替え）する
$array = array(2,5,9,7,3,1,8,6,4);
asort($array); //小さい順に並び替え
print_r($array);

arsort($array);
print_r($array); //大きい順に並び替え

/*課題１
引数に数値を指定して実行すると、数値を2倍にして返す関数を作成する*/

function double_score($i){
 $result = $i*2 ;
 return $result ;
}
echo double_score(25);
echo "\n";
/*課題２
$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成する*/
function myAdd($a,$b){
    $result = $a + $b ;
    return $result ;
}
echo myAdd(19,7);
echo "\n";

/*課題３
$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を
渡すとその要素をすべてかけた結果を返す関数を作成してください。*/

function myMultiply($arr){
    $result = $arr[0];
    $counts = count($arr);
    for($i = 1; $i < $counts; $i++  ){
        $result = $result*$arr[$i];
    }
    return $result ;
}
echo myMultiply(array(1,3,5,7,9));
echo "\n" ;

/*（応用）課題４
配列の中で一番大きい値を返す max_array という関数を実装
*/
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number < $a){
         $max_number = $a ;
     }
     
 }

 return $max_number;
 }

echo max_array(array(5,1,9,2,7)) ;
echo "\n";

/*課題5
次のビルトイン関数の用途、使い方を調べて実際に使ってみてください*/

//strip_tags 
// 文字列から HTML および PHP タグを取り除く

$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

//array_push
//一つ以上の要素を配列の最後に追加する

$curry = array("人参","玉ねぎ","じゃがいも");
array_push($curry,"鶏肉","ピーマン");
var_dump($curry) ;
echo "\n";

//array_merge
//ひとつまたは複数の配列をマージする
$arr1 = array("vegi"=> "tomato",3,9);
$arr2 = array("z","vegi"=>"onion",8,"k");
$merge = array_merge($arr1,$arr2);
print_r($merge);
echo "\n";

//time mktime
//time:現在の Unix タイムスタンプを返す
echo time();
echo "\n" ;

//mktime 日付を Unix のタイムスタンプとして取得する
//2020年4月10日のタイムスタンプを取得
echo mktime(0, 0, 0, 4, 10, 2020);
echo "\n";

//date
//ローカルの日付/時刻を書式化する
date_default_timezone_set('UTC');
echo date('l jS \of F Y h:i:s A');
echo "\n";

//今日の日付
echo date('Y/M/D',time());
echo "\n";