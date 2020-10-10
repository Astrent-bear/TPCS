<?php
//$sity = [ "kyiv", "chernigiv", "zhytomyr", "vinnycya", "khmelnytskyi", "lviv", "lutsk", "rivne", "ternopil", "ivano-phrankivsk","sumy", "poltava", "kremenchuk", "kharkiv", "lozova", "slavyansk", "mykytivka", "yasynyvata", "donetsk", "laryne", "dnipro","zaporizzhya", "simpheropol", "sevastopol", "kryvyi_rig", "cherkasy", "kropyvnytskyi", "mykolaiv", "odesa", "kherson" ];

$sity = [
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

/*
print_r("maxX = {$maxX} ; minX = {$minX}\n");
print_r("maxY = {$maxY} ; minY = {$minY}\n");
print_r($maxX-$minX." - X \n");
print_r($maxY-$minY." - Y \n"); */ //testprintmax
/*
 *  maxX = 51.494099 ; minX = 44.6114503
    maxY = 38.894928 ; minY = 24.031597
 */ //state

function createMap($stantions)
{

    $maxX = 0;
    $minX = 100;
    $maxY = 0;
    $minY = 100;
    for ($i = 0; $i < count($stantions); $i++) {
        if ($maxY <= $stantions[$i][1]) {
            $maxY = $stantions[$i][1];
        }
        if ($maxX <= $stantions[$i][2]) {
            $maxX = $stantions[$i][2];
        }
        if ($minY >= $stantions[$i][1]) {
            $minY = $stantions[$i][1];
        }
        if ($minX >= $stantions[$i][2]) {
            $minX = $stantions[$i][2];
        }
    }
        for ($i = 0; $i < count($stantions); $i++) {
            $x = 1500 - (150 + 1200 * (($maxX - $stantions[$i][2]) / ($maxX - $minX)));
            $y = 50 + 450 * (($maxY - $stantions[$i][1]) / ($maxY - $minY));
            print_r("<circle cx=\"{$x}\" cy=\"{$y}\" r=\"5\" fill=\"red\" /> \n");
        }

        for ($i = 0; $i < count($stantions); $i++) {
            $x = 1500 - (140 + 1200 * (($maxX - $stantions[$i][2]) / ($maxX - $minX)));
            $y = 50 + 450 * (($maxY - $stantions[$i][1]) / ($maxY - $minY));
            print_r("<text x=\"{$x}\" y=\"{$y}\" font-size=\"20\" text-anchor=\"start\" fill=\"black\">{$stantions[$i][0]}</text> \n");
        }
}

function createMapInFile($stantions,$fileName)
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
    for ($i = 0; $i < count($stantions); $i++) {
        if ($maxY <= $stantions[$i][1]) {
            $maxY = $stantions[$i][1];
        }
        if ($maxX <= $stantions[$i][2]) {
            $maxX = $stantions[$i][2];
        }
        if ($minY >= $stantions[$i][1]) {
            $minY = $stantions[$i][1];
        }
        if ($minX >= $stantions[$i][2]) {
            $minX = $stantions[$i][2];
        }
    }
        for ($i = 0; $i < count($stantions); $i++) {
            $x = 1500 - (150 + 1200 * (($maxX - $stantions[$i][2]) / ($maxX - $minX)));
            $y = 50 + 450 * (($maxY - $stantions[$i][1]) / ($maxY - $minY));
            $text = ("<circle cx=\"{$x}\" cy=\"{$y}\" r=\"5\" fill=\"red\" /> \n");
            fwrite($fp, $text);
        }

        for ($i = 0; $i < count($stantions); $i++) {
            $x = 1500 - (140 + 1200 * (($maxX - $stantions[$i][2]) / ($maxX - $minX)));
            $y = 50 + 450 * (($maxY - $stantions[$i][1]) / ($maxY - $minY));
            $text = ("<text x=\"{$x}\" y=\"{$y}\" font-size=\"20\" text-anchor=\"start\" fill=\"black\">{$stantions[$i][0]}</text> \n");
            fwrite($fp, $text);
        }
    fwrite($fp,"</svg>");
    fclose($fp);
}

$name = "map2.svg";
createMapInFile($sity, $name);
//createMap($sity);





//<text x="150" y="125" font-size="60" text-anchor="middle" fill="white">SVG</text>
//<polyline points="60 110, 65 120, 70 115, 75 130, 80 125, 85 140, 90 135, 95 150, 100 145"/>
//<text x="700.87280132562" y="93.265895221414" font-size="20" text-anchor="start" fill="black">SVG</text>