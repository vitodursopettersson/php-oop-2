<?php

include __DIR__ . '/Models/Product.php';
include __DIR__ . '/Models/Food.php';
include __DIR__ . '/Models/Game.php';
include __DIR__ . '/Models/Kennels.php';

$products = [];

$monge_salmone_riso = new Food('Monge All Breeds Adult Salmone e Riso', 'Cane', '59,99');
$monge_salmone_riso->set_img('img/monge_salmone_riso.webp');
$products[] = $monge_salmone_riso;

$monge_agnello_riso_patate = new Food('Monge All Breeds Adult Agnello Riso e Patate', 'Cane', '19,99');
$monge_agnello_riso_patate->set_img('img/monge_agnello_riso_patate.webp');
$products[] = $monge_agnello_riso_patate;

$monge_pollo = new Food('Monge Medium Adult Ricco di Pollo', 'Cane', '16,99');
$monge_pollo->set_img('img/monge_pollo.webp');
$products[] = $monge_pollo;

$hi_pork_fresco = new Food('Hi Pork Adult All Breeds Maiale Fresco', 'Cane', '9,99');
$hi_pork_fresco->set_img('img/hi_pork_fresco.webp');
$products[] = $hi_pork_fresco;

$ghiottonerie_busta = new Food('Felix Le Ghiottonerie Cat Busta Multipack', 'Gatto', '37,99');
$ghiottonerie_busta->set_img('img/ghiottonerie_busta.webp');
$products[] = $ghiottonerie_busta;

$next_lattina_multipack = new Food('Next Natural Cat Lattina Multipack', 'Gatto', '5,79');
$next_lattina_multipack->set_img('img/next_lattina_multipack.webp');
$products[] = $next_lattina_multipack;

$gourmet_filettini = new Food('Gourmet Perle Filettini in Salsa Cat Busta Multipack', 'Gatto', '46,90');
$gourmet_filettini->set_img('img/gourmet_filettini.webp');
$products[] = $gourmet_filettini;

$pallina_corda = new Game('Gioco Pallina con Corda', 'Cane', '3,50');
$pallina_corda->set_img('img/pallina_corda.webp');
$products[] = $pallina_corda;

$kong_bone = new Game('KONG Extreme Goodie Bone', 'Cane', '18,49');
$kong_bone->set_img('img/kong_bone.webp');
$products[] = $kong_bone;

$trixie_palla_corda = new Game('Trixie Palla con Corda in Gomma', 'Cane', '4,99');
$trixie_palla_corda->set_img('img/trixie_palla_corda.webp');
$products[] = $trixie_palla_corda;

$tiragraffi_charlie = new Game('More Tiragraffi Charlie Ricambio Colonna in Sisal Grigia', 'Gatto', '19,99');
$tiragraffi_charlie->set_img('img/tiragraffi_charlie.webp');
$products[] = $tiragraffi_charlie;

$tiragraffi_leo = new Game('Tiragraffi Leo Beige', 'Gatto', '13,99');
$tiragraffi_leo->set_img('img/tiragraffi_leo.jpg');
$products[] = $tiragraffi_leo;

$cuccia_ciambella = new Kennels('Cuccia Ciambella Pelosa Rossa', 'Cane', '20,99');
$cuccia_ciambella->set_img('img/cuccia_ciambella.webp');
$products[] = $cuccia_ciambella;

$cuccia_zampa = new Kennels('Cuccia Zampa Pelosa', 'Cane', '29,99');
$cuccia_zampa->set_img('img/cuccia_zampa.webp');
$products[] = $cuccia_zampa;
