<?php

// Move this file to config/cli-config.php

require __DIR__.'/vendor/autoload.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use App\Kernel;

$kernel = new Kernel('prod', false);
$kernel->boot();

/** @var \Doctrine\Bundle\DoctrineBundle\Registry $registry */
$registry = $kernel->getContainer()->get('doctrine');

/** @var \Doctrine\ORM\EntityManagerInterface $manager */
$manager = $registry->getManager();

return ConsoleRunner::createHelperSet($manager);
