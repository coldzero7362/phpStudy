<?php   
    require 'vendor/autoload.php';

    $client = new \GuzzleHttp\Client();
    $stream = fopen('url.csv', 'r');
    $csv = \League\Csv\Reader::createFromStream($stream);

    foreach($csv as $csvRow){
        try{
            $httpResponse = $client->options($csvRow[0]);
            print $httpResponse->getStatusCode().",".$csvRow[0];
            if($httpResponse->getStatusCode() >= 400){
                throw new \Exception();
            }
        }catch(\Exception $e){
            print $csvRow[0].PHP_EOL;
        }
    }