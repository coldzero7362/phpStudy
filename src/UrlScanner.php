<?php
    namespace coldzero;

    Class UrlScanner{
        protected $urls;
        protected $httpClient;

        public function __construct(array $urls){
            $this->urls = $urls;
            $this->httpClient = new \GuzzleHttp\Client();
        }

        public function getInvaildUrls(){
            $invaildurls = [];
            foreach($this -> urls as $url){
                try{
                    $statusCode = $this->getStatusCodeForUrl($url);
                }catch(\Exception $e){
                    $statusCode = 500;
                }
                if($statusCode >=400){
                    array_push($invaildurls,['url'=>$url,'status'=>$statusCode]);
                }
            }
            return $invaildurls;
        }
        private function getStatusCodeForUrl($url){
            $httpResponse = $this->httpClient->options($url);
            return $httpResponse->getStatusCode();
        }
    }
    