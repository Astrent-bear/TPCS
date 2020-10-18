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
/*
print_r("maxX = {$maxX} ; minX = {$minX}\n");
print_r("maxY = {$maxY} ; minY = {$minY}\n");
print_r($maxX-$minX." - X \n");
print_r($maxY-$minY." - Y \n"); */ //testprintmax
/*
 *  maxX = 51.494099 ; minX = 44.6114503
    maxY = 38.894928 ; minY = 24.031597
 */ //state

/*
function createMap($city)
{

    $maxX = 0;
    $minX = 100;
    $maxY = 0;
    $minY = 100;
    for ($i = 0; $i < count($city); $i++) {
        if ($maxY <= $city[$i][1]) {
            $maxY = $city[$i][1];
        }
        if ($maxX <= $city[$i][2]) {
            $maxX = $city[$i][2];
        }
        if ($minY >= $city[$i][1]) {
            $minY = $city[$i][1];
        }
        if ($minX >= $city[$i][2]) {
            $minX = $city[$i][2];
        }
    }
        for ($i = 0; $i < count($city); $i++) {
            $x = 1500 - (150 + 1200 * (($maxX - $city[$i][2]) / ($maxX - $minX)));
            $y = 50 + 450 * (($maxY - $city[$i][1]) / ($maxY - $minY));
            print_r("<circle cx=\"{$x}\" cy=\"{$y}\" r=\"5\" fill=\"red\" /> \n");
        }

        for ($i = 0; $i < count($city); $i++) {
            $x = 1500 - (140 + 1200 * (($maxX - $city[$i][2]) / ($maxX - $minX)));
            $y = 50 + 450 * (($maxY - $city[$i][1]) / ($maxY - $minY));
            print_r("<text x=\"{$x}\" y=\"{$y}\" font-size=\"20\" text-anchor=\"start\" fill=\"black\">{$city[$i][0]}</text> \n");
        }
} */ //createmap in text(print_r)

function createMapInFile($city, $connect, $fileName)
{
    $fp = fopen($fileName, "w");


    fwrite($fp, "<svg version=\"1.1\" \n");
    fwrite($fp, "baseProfile=\"full\" \n");
    fwrite($fp, "width=\"1600\" height=\"600\" \n");
    fwrite($fp, "xmlns=\"http://www.w3.org/2000/svg\"> \n");
    fwrite($fp, "<rect width=\"100%\" height=\"100%\" fill=\"black\" /> \n");
    fwrite($fp, "<rect x=\"1%\" y=\"1%\" width=\"98%\" height=\"98%\" fill=\"white\" /> \n");

    $maxX = 0;
    $minX = 100;
    $maxY = 0;
    $minY = 100;
    for ($i = 0; $i < count($city); $i++) {
        if ($maxY <= $city[$i][1]) {
            $maxY = $city[$i][1];
        }
        if ($maxX <= $city[$i][2]) {
            $maxX = $city[$i][2];
        }
        if ($minY >= $city[$i][1]) {
            $minY = $city[$i][1];
        }
        if ($minX >= $city[$i][2]) {
            $minX = $city[$i][2];
        }
    }

    for ($i = 0; $i < count($city); $i++) {
        $x = 1500 - (150 + 1200 * (($maxX - $city[$i][2]) / ($maxX - $minX)));
        $y = 50 + 450 * (($maxY - $city[$i][1]) / ($maxY - $minY));
        $text = ("<circle cx=\"{$x}\" cy=\"{$y}\" r=\"5\" fill=\"red\" /> \n");
        fwrite($fp, $text);
    }

    for ($i = 0; $i < count($city); $i++) {
        $x = 1500 - (140 + 1200 * (($maxX - $city[$i][2]) / ($maxX - $minX)));
        $y = 50 + 450 * (($maxY - $city[$i][1]) / ($maxY - $minY));
        $text = ("<text x=\"{$x}\" y=\"{$y}\" font-size=\"20\" text-anchor=\"start\" fill=\"black\">{$city[$i][0]}</text> \n");
        fwrite($fp, $text);
    }
    for ($i = 0; $i < count($city); $i++) {
        for ($u = 0; $u <= $i; $u++) {
            if ($connect[$i][$u] == true) {
                $x1 = 1500 - (150 + 1200 * (($maxX - $city[$i][2]) / ($maxX - $minX)));
                $y1 = 50 + 450 * (($maxY - $city[$i][1]) / ($maxY - $minY));
                $x2 = 1500 - (150 + 1200 * (($maxX - $city[$u][2]) / ($maxX - $minX)));
                $y2 = 50 + 450 * (($maxY - $city[$u][1]) / ($maxY - $minY));
                fwrite($fp, " <line x1=\"{$x1}\" x2=\"{$x2}\" y1=\"{$y1}\" y2=\"{$y2}\" stroke=\"green\" stroke-width=\"1\" stroke-linecap=\"round\"/> \n");

            }
        }
    }

    fwrite($fp, "</svg>");
    fclose($fp);
}

$name = "map1.svg";
createMapInFile($city, $connect, $name);
//createMap($city);

//<text x="150" y="125" font-size="60" text-anchor="middle" fill="white">SVG</text>
//<polyline points="60 110, 65 120, 70 115, 75 130, 80 125, 85 140, 90 135, 95 150, 100 145"/>
//<text x="700.87280132562" y="93.265895221414" font-size="20" text-anchor="start" fill="black">SVG</text>