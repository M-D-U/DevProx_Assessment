
<?php


function randomName() {
    $names = array(
        'Juan',
        'Luis',
        'Pedro',
    );
    return $names[rand ( 0 , count($names) -1)];
}

print randomName();