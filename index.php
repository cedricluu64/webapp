<?php

// lancer le programme avec php morpion.php ( version >= 5.4 )

$t = array();

// remplir le tableau
function remplirTableau()
{
    for ($l = 0; $l <= 2; $l++) {
        $t[$l] = array();
        for ($c = 0; $c <= 2; $c++) {
            $t[$l][$c] = 0;

        }
    }
    return $t;
}

function afficherTableau(array $t)
{
    fwrite(STDOUT, "\n");
    for ($l = 0; $l <= 2; $l++) {
        for ($c = 0; $c <= 2; $c++) {
            fwrite(STDOUT, $t[$l][$c]);
        }
        fwrite(STDOUT, "\n");
    }
    return $t;
}

function tour($j, &$t)
{
    if ($j % 2 == 0) {
        $joueur = 1;
    } else {
        $joueur = 2;
    }
    $vrai = FALSE;
    do {
        fwrite(STDOUT, "joueur $joueur entrez le numéro de ligne");
        $l = trim(fread(STDIN));
        fwrite(STDOUT, "joueur $joueur entrez le numéro de colonne");
        if ($t[$l][$c] == 0) {
            $t[$l][$c] = $joueur;
        }
    } while ($vrai == FALSE);
}

function diag($t){
if(($t[0][0]==$t[1][1]=$t[2][2])||($t[0])
}

function ligne($t)
{
    for ($i = 0; $i <= 2, $i++) {
        if ($t[$i][0] == $t[$i][1] == $t[$i][2]){
            return 1;
        }
    }
    return 0;
}

function colonne($t)
{
    for ($i = 0; $i <= 2, $i++) {
        if ($t[0][$i] == $t[1][$i] == $t[2][$i]){
            return 1;
        }
    }
    return 0;
}

function morpion()
{
    $t = remplirTableau();
    $cpt = 9;
    $j = 0;
    while ($cpt > 0) {
        tour($j, $t);

    }
}

morpion();
