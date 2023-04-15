<?php

require_once '../vendor/autoload.php';

$foto_original = 'mifoto.jpg';
$guardar_en = 'img/fotomodificada.jpg';

$thumb = new PHPThumb\GD($foto_original);
$thumb->resize(150, 150);
$thumb->show();
$thumb->save($guardar_en);