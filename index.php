<?php

require_once 'vendor/autoload.php';

print '<h1>Abstract factory</h1>';
print '<hr>';

// Unità irochesi
$iroBarrack = new \tune\AbstractFactory\barracks\IroquisBarrack();
$aenna = $iroBarrack->createSoldier('Aenna');
$tomahawk = $iroBarrack->createSoldier('Tomahawk');

// Unità spagnole
$spainBarrack = new \tune\AbstractFactory\barracks\SpanishBarrack();
$rodelero = $spainBarrack->createSoldier('Rodelero');

print $aenna;
print '<br>' . $tomahawk;
print '<br>' . $rodelero;
print 'Fine...';
