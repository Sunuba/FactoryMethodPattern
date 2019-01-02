<?php require_once ('vendor/autoload.php');

use Factory\WebsiteFactory;
use Factory\Website;

$type = 'personal';
$website = (new WebsiteFactory())::getWebsite ($type);
print_r ($website);