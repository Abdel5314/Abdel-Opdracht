<?php

require_once 'Persoon.php';

use SchoolTrip\SchoolTripList;
use SchoolTrip\Persoon;
use SchoolTrip\Docent;

$schoolTripList = new SchoolTripList();

$schoolTripList->addPersoon(new Persoon("sod2a", true));
$schoolTripList->addPersoon(new Docent("sod2b", false));

$schoolTripList->printList();