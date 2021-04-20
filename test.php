<?php
namespace coldzero\Modules;
    // function trPrint($value){
    //     print "<tr><td>$value</td></tr>";
    // }

    // $dataArr = ['one', 'two', 'three'];
    // print '<table>';
    // foreach($dataArr as $key=>$value){
    //     trPrint($value);
    // }
    // print '</table>';

    // $varA = 2000;
    // function globalCheck(){
    //     global $varA;
    //     if(isset($varA)){
    //         print $varA;
    //     }else{
    //         print 'varA 변수가 선언되지 않았습니다.';
    //     }
    // }

    // globalCheck();
    // print "<br/> $varA";    

    // function countDown(int $top){
    //     while($top > 0){
    //         print "$top..";
    //         $top--;
    //     }
    //     print '<br/>end';
    // }
    // $counter = "5";
    // countDown($counter);

    // function countDown(int $top):int {
    //     return $top + 4.5;
    // }
    // print countDown(5);

    // require 'test-function.php';
    // countDown(5);

    // require 'src/part.php';
    
    // $cpu = new part($name, $compo);
    // $cpu->name = '컴퓨터 cpu';
    // $cpu->components=['a','b','c'];

    // $graphicCard = new part($name, $compo);
    // $graphicCard->name = '그ㅍ래픽카드';
    // $graphicCard->components = ['e','f','g'];

    // $inputString = $_POST['inputString'];
    // if($result = $cpu->hasComponent($inputString)){
    //     print "컴포넌트 $inputString 은 $cpu->name 부품안에 속한다";
    // }
    // if($result = $graphicCard->hasComponent($inputString)){
    //     print "컴포넌트 $inputString 은 $graphicCard->name 부품안에 속한다";
    // }

    //part::classInfo();

    // require 'myAutoLoader.php';

    // $name = '이름';
    // $compo  = ['a','b','c'];
    // $cpu = new part($name, $compo);

    require 'vendor/autoload.php';
    


    $urls =['http://www.naver.com/','http://www.dcinside.com/',"http://www.asdf.com/"];
    $scanner = new \coldzero\UrlScanner($urls);

    print_r($scanner->getInvaildUrls());