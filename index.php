<?php

if(!isset($_GET['año1']) || !isset($_GET['año2']) || !isset($_GET['año3']) || !isset($_GET['año4']) || !isset($_GET['año5'])){
    echo 'Debe indicar todos los años, del 1 al 5';
}else{
//"variables para concatenar
    $añosmenoresa1989 = ' ';
    $añosmayoresa2020 = ' ';
    $añosmenoresa1816 = ' ';
    $añosmayoresa1778 = ' ';
//variables
    $año1 = $_GET['año1'];
    $año2 = $_GET['año2'];
    $año3 = $_GET['año3'];
    $año4 = $_GET['año4'];
    $año5 = $_GET['año5'];
//Caida del muro
    if($año1 < 1989){
        $añosmenoresa1989 = $añosmenoresa1989 . $año1 . '. ';
    }
    if($año2 < 1989){
        $añosmenoresa1989 = $añosmenoresa1989 . $año2  . '. ';
    }
    if($año3 < 1989){
        $añosmenoresa1989 = $añosmenoresa1989 . $año3 . '. ';
    }
    if($año4 < 1989){
        $añosmenoresa1989 = $añosmenoresa1989 . $año4 . '. ';
    }
    if($año5 < 1989){
        $añosmenoresa1989 = $añosmenoresa1989 . $año5 . '. ';
    }
//COVID
    if($año1 > 2020){
        $añosmayoresa2020 = $añosmayoresa2020 . $año1 . '. ';
    }
    if($año2 > 2020){
        $añosmayoresa2020 = $añosmayoresa2020 . $año2 . '. ';
    }
    if($año3 > 2020){
        $añosmayoresa2020 = $añosmayoresa2020 . $año3 . '. ';
    }
    if($año4 > 2020){
        $añosmayoresa2020 = $añosmayoresa2020 . $año4 . '. ';
    }
    if($año5 > 2020){
        $añosmayoresa2020 = $añosmayoresa2020 . $año5 . '. ';
    }
//independencia Argentina
    if($año1 < 1816){
        $añosmenoresa1816 = $añosmenoresa1816 . $año1 . '. ';
    }
    if($año2 < 1816){
        $añosmenoresa1816 = $añosmenoresa1816 . $año2 . '. ';
    }
    if($año3 < 1816){
        $añosmenoresa1816 = $añosmenoresa1816 . $año3 . '. ';
    }
    if($año4 < 1816){
        $añosmenoresa1816 = $añosmenoresa1816 . $año4 . '. ';
    }
    if($año5 < 1816){
        $añosmenoresa1816 = $añosmenoresa1816 . $año5 . '. ';
    }
//nacimiento San Martin
if($año1 > 1778){
    $añosmayoresa1778 = $añosmayoresa1778 . $año1 . '. ';
}
if($año2 > 1778){
    $añosmayoresa1778 = $añosmayoresa1778 . $año2 . '. ';
}
if($año3 > 1778){
    $añosmayoresa1778 = $añosmayoresa1778 . $año3 . '. ';
}
if($año4 > 1778){
    $añosmayoresa1778 = $añosmayoresa1778 . $año4 . '. ';
}
if($año5 > 1778){
    $añosmayoresa1778 = $añosmayoresa1778 . $año5 . '. ';
}
echo 'Los años menores al año de la  caída del muro de Berlín son: ' . $añosmenoresa1989;
echo '<br>';
echo 'Los años mayores al año de inicio de la pandemia por COVID son: ' . $añosmayoresa2020;
echo '<br>';
echo 'Los años menores al año de independencia de Argentina son: ' . $añosmenoresa1816;
echo '<br>';
echo 'Los años mayores al año en que nació El general San Martin son: ' . $añosmayoresa1778;
}

