<?php

require_once('car.php');
require_once('UberX.php');
require_once('account.php');
require_once('UberPool.php');
require_once('UberVan.php');

// $uberX = new UberX("CB123", new Account("Andres Herrera","AND456"),"Chevrolet","Spark");
// $uberX->printDataCar();

// $uberPool = new UberPool("TYU567", new Account("Andrea Ferran","AND765"),"Dodge","Attitude");
// $uberPool->printDataCar();

// $uberVan = new UberVan("OJL395", new Account("Raúl Ramírez", "AND456"), "Nissan", "Versa");
// $uberVan->setPassenger(6);
// $uberVan->printDataCar();

$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberX->setPassenger(4);
$uberX->printDataCar();