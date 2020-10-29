<?php
$city = [
    ["kyiv", 50.4499875, 30.5234937],
    ["chernigiv", 51.494099, 31.294332],
    ["zhytomyr", 50.2598298, 28.6692345],
    ["vinnycya", 49.2320162, 28.467975],
    ["khmelnytskyi", 49.4196404, 26.9793793],
    ["lviv", 49.8419503, 24.031597],
    ["lutsk", 50.7450733, 25.320078],
    ["rivne", 50.6196175, 26.2513165],
    ["ternopil", 49.5557716, 25.591886],
    ["ivano-phrankivsk", 48.9225224, 24.7103188],
    ["sumy", 50.9133081, 34.7947025],
    ["poltava", 49.5895681, 34.5503455],
    ["kremenchuk", 49.0797222, 33.4325],
    ["kharkiv", 49.99026, 36.2303797],
    ["lozova", 48.88916, 36.31359],
    ["slavyansk", 48.8522691, 37.6058241],
    ["mykytivka", 48.3373636, 38.894928],
    ["yasynyvata", 48.1247511, 37.8512479],
    ["donetsk", 48.0010795, 37.8042198],
    ["laryne", 47.88983, 37.92884],
    ["dnipro", 48.4680221, 35.0417711],
    ["zaporizzhya", 47.8598576, 35.1097643],
    ["simpheropol", 44.9521394, 34.1024575],
    ["sevastopol", 44.6114503, 33.5224182],
    ["kryvyi_rig", 47.9059085, 33.3941061],
    ["cherkasy", 49.4453159, 32.0585778],
    ["kropyvnytskyi", 48.510613, 32.2656472],
    ["mykolaiv", 46.9635124, 32.0066825],
    ["odesa", 46.4713468, 30.7296333],
    ["kherson", 46.6551209, 32.6131115],
];
$connect = [
    [0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0],#"kyiv"               1
    [1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],#"chernigiv"          2
    [1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],#"zhytomyr"           3
    [1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0],#"vinnycya"           4
    [0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0],#"khmelnytskyi"       5
    [0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],#"lviv"               6
    [0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],#"lutsk"              7
    [0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],#"rivne"              8
    [0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],#"ternopil"           9
    [0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],#"ivano-phrankivsk"   10
    [1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],#"sumy"               11
    [1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0],#"poltava"            12
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],#"kremenchuk"         13
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],#"kharkiv"            14
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0],#"lozova"             15
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],#"slavyansk"          16
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],#"mykytivka"          17
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],#"yasynyvata"         18
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0],#"donetsk"            19
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],#"laryne"             20
    [1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 1, 0, 0, 0],#"dnipro"             21
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 1],#"zaporizzhya"        22
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1],#"simpheropol"        23
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0],#"sevastopol"         24
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 1, 0, 0],#"kryvyi_rig"         25
    [1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0],#"cherkasy"           26
    [1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 1, 0],#"kropyvnytskyi"      27
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 1],#"mykolaiv"           28
    [0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0],#"odesa"              29
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 1, 0, 0]#"kherson"             30
];
$graph2 = [
    'kyiv' => ['chernigiv', 'zhytomyr', 'vinnycya', 'cherkasy', 'sumy', 'poltava', 'dnipro', 'kropyvnytskyi'],
    'chernigiv' => ['kyiv'],
    'zhytomyr' => ['kyiv', 'rivne'],
    'vinnycya' => ['kyiv', 'khmelnytskyi', 'odesa'],
    'khmelnytskyi' => ['ternopil', 'vinnycya', 'odesa'],
    'lviv' => ['lutsk', 'rivne', 'ternopil', 'ivano-phrankivsk'],
    'lutsk' => ['lviv', 'rivne'],
    'rivne' => ['lviv', 'zhytomyr', 'lutsk'],
    'ternopil' => ['lviv', 'khmelnytskyi', 'ivano-phrankivsk'],
    'ivano-phrankivsk' => ['lviv', 'ternopil'],
    'sumy' => ['kyiv', 'kharkiv'],
    'poltava' => ['kyiv', 'cherkasy', 'kropyvnytskyi', 'kharkiv', 'kremenchuk'],
    'kremenchuk' => ['kharkiv', 'poltava'],
    'kharkiv' => ['sumy', 'poltava', 'kremenchuk', 'lozova'],
    'lozova' => ['kharkiv'],
    'slavyansk' => ['mykytivka'],
    'mykytivka' => ['slavyansk', 'yasynyvata', 'laryne'],
    'yasynyvata' => ['mykytivka', 'donetsk', 'laryne'],
    'donetsk' => ['dnipro', 'zaporizzhya', 'yasynyvata', 'laryne'],
    'laryne' => ['yasynyvata', 'mykytivka', 'donetsk'],
    'dnipro' => ['kropyvnytskyi', 'kryvyi_rig', 'zaporizzhya', 'donetsk', 'kyiv'],
    'zaporizzhya' => ['dnipro', 'kherson', 'simpheropol', 'donetsk', 'kryvyi_rig'],
    'simpheropol' => ['zaporizzhya', 'sevastopol', 'kherson'],
    'sevastopol' => ['simpheropol'],
    'kryvyi_rig' => ['dnipro', 'zaporizzhya', 'mykolaiv'],
    'cherkasy' => ['kyiv', 'poltava', 'odesa', 'kropyvnytskyi'],
    'kropyvnytskyi' => ['poltava', 'dnipro', 'odesa', 'cherkasy', 'kyiv'],
    'mykolaiv' => ['odesa', 'kherson', 'kryvyi_rig'],
    'odesa' => ['khmelnytskyi', 'cherkasy', 'vinnycya', 'kropyvnytskyi', 'mykolaiv'],
    'kherson' => ['mykolaiv', 'zaporizzhya', 'simpheropol']
];
$graph1 = [
    'A' => ['B', 'C', 'D'],
    'B' => ['G', 'H'],
    'C' => ['G'],
    'D' => ['E', 'F'],
    'E' => [],
    'F' => [],
    'G' => [],
    'H' => []
];
// https://forum.reverse4you.org/t/topic/679
/*стек пути;
хранитель состояний обхода;
хранитель зависимостей типа «дед-внук».*/


$graph3 = [
    'kyiv' => ['zhytomyr', 'vinnycya'],
    'zhytomyr' => ['kyiv', 'rivne'],
    'vinnycya' => ['kyiv', 'khmelnytskyi'],
    'khmelnytskyi' => ['ternopil', 'vinnycya'],
    'lviv' => ['lutsk', 'rivne', 'ternopil', 'ivano-phrankivsk'],
    'lutsk' => ['lviv', 'rivne'],
    'rivne' => ['lviv', 'zhytomyr', 'lutsk'],
    'ternopil' => ['lviv', 'khmelnytskyi', 'ivano-phrankivsk'],
    'ivano-phrankivsk' => ['lviv', 'ternopil'],
];
function wayDoor($way, $finish, $graph, $temp)
{
    $woop = [];
    $way[] = $temp; //добавили к пути новую точку
    $lastWay = array_key_last($way);
    $lastValueWay = $way[$lastWay];
    $near = $graph[$lastValueWay]; //по точке получили соседей

    /*f (count($way) > count($graph)) {
         die;
     };*///ghjdt
    for ($i = 0; $i < count($way); $i++) //удалили в соседях все повторения с пути
    {
        for ($u = 0; $u < count($near); $u++) {
            if ($way[$i] == $near[$u]) {
                array_splice($near, array_search($way[$i], $near), 1);
            }
        }
    };
    //print_r("near after delete way");
    //print_r($near);
    //print_r("\n");

    if ($near == true) //если соседи есть проводим рекурсию
    {
        for ($i = 0; $i < count($near); $i++) {
            $lastWay = array_key_last($way);
            $lastValueWay = $way[$lastWay];
            if ($lastValueWay == $finish) {
                //print_r("делается ретурн удачный:\n");
                //print_r($way);
                // print_r("\m");

                return $way;
            }
            $temp = $near[$i];
            $woop[] = wayDoor($way, $finish, $graph, $temp);

        }
    }
    if ($woop) {
        return $woop;
    }
}

function hell($start, $finish, $graph) // город откуда/городкуда/ ассоциативный граф связности
{
    $result = [];
    $way = [];
    if ($finish == $start) {
        return (false);
    }

    $result [] = wayDoor($way, $finish, $graph, $start);
    //print_r($way);
    return $result;


}

$tuk = hell("kyiv", "lviv", $graph2);
//print_r('tuk:');
//print_r($tuk);
//print_r($city);


$la = null;
//$fp = fopen("Test.json", "w");
foreach ($tuk as $value) {
    $la = $la . json_encode($value);
    // fwrite($fp, $la);
    // print_r("\n");
}

//fclose($fp);


/*print_r($la);
print_r("\n ky:");
print_r(strripos($la, '["')); //142
print_r("\n lvy:");
print_r(strripos($la, '"]')); //211  +2
print_r("\n sub: ");
print_r(substr($la, 142, 213 - 142));
$la = substr_replace($la, '', 141, 213 - 142);
print_r("\n minus: ");*/
//print_r($la);
//print_r("\n");
$ways = [];

while (strripos($la, '["')) {
    $startPos = strripos($la, '["');
    $lastPos = strripos($la, '"]') + 2;
    $ways[] = substr($la, $startPos , $lastPos - $startPos);
    $la = substr_replace($la, '', $startPos - 1, strlen($la)-1);
    //print_r($la);
    //print_r("\n");
}
print_r($ways);
/*
function wayDoor($way,$finish,$graph,$temp)
{
    $near = [];
    $way[] = $temp; //добавили к пути новую точку
    $near = $graph[$way[array_key_last($way)]]; //по точке получили соседей
    for ($i = 0; $i < count($way); $i++) //удалили в соседях все повторения с пути
    {
        if (array_search($way[$i], $near)) {
            array_splice($near, array_search($way[$i], $near), 1);
        }
    };

    if ($near == true) //если соседи есть проводим рекурсию киев и черновцы (черновцы с киевом)
        {
        for ($i = 0; $i < count($near); $i++) {
            if (array_search($finish, $near)) {
                return $way[]=$near[$i]};
            $near[$i] = $temp;
            wayDoor($way, $finish, $graph, $temp);
        }
    }
}*/ //waydoor


/*
$startNode = 'chernigiv';
$endNode   = 'sumy';

$searchQueue = [];
$searched    = [];
$searchList  = [];
foreach($graph2[$startNode] as $value) {
    $searchQueue[] = $value;
}

while($searchQueue) {
    $node = array_shift($searchQueue);

    if(!in_array($node, $searched)) {
        if($node === $endNode) {
            echo "Целевая точка найдена: ";
            print_r($searched);
            die();
        } else {
            foreach($graph2[$node] as $value) {
                $searchQueue[] = $value;
            }

            $searched[] = $node;
        }
    }
}

echo 'Целевая точка не найдена';

*/ //в ширину
/*
$countC = count($connect);
$mas = [];
for ($i = 0; $i < $countC; $i++) {
    $mas[] = 0;
}
$n = count($connect);
//print_r($mas);
print_r("\n");

function dfc(&$a, &$mass,$n,$c,$v)
{

    $mass[$v] = $c;
    for ($i = 0; $i < $n - 1; $i++)
    {
        print_r("pered ifom v=");
        print_r($v);
        print_r("\n");
        if (($a[$v][$i]) and ($mass[$i]==0)) {
            dfc($a,$mass,$n,$c,$i);
        }
    }
}

function connectedParts(&$a, &$mass, $n)
{
    $c = 0;
    for ($i = 0; $i < count($a) ; $i++) {

        if ($mass[$i] == 0) {
            dfc($a, $mass, $n, $c, $i);
            $c++;
        }
    }
}

connectedParts($connect, $mas, 29);
//dfc($connect, $mas,29,1,0);
print_r($mas);
print_r("\n");



print_r("pered ifom i=");
print_r($i);
print_r("\n");*/ //ссаное говно от сюда http://kuimova.ucoz.ru/modul_10-grafy-bazovye_algoritmy.pdf
