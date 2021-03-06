
<?php
$baseurl = $_SERVER['DOCUMENT_ROOT']."/test";

require $baseurl.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// This assumes that you have placed the Firebase credentials in the same directory
// as this PHP file.
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/portfolio-450c6-firebase-adminsdk-hky4u-8286603702.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    // The following line is optional if the project id in your credentials file
    // is identical to the subdomain of your Firebase project. If you need it,
    // make sure to replace the URL with the URL of your project.
    ->withDatabaseUri('https://portfolio-450c6.firebaseio.com/')
    ->create();

$database = $firebase->getDatabase();

?>