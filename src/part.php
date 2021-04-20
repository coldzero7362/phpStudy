<?php
namespace coldzero\Modules;
    class part{
        public $name;
        public $components = array();

        public function hasComponent($componentName){
            return in_array($componentName, $this->components);
        }

        public static function classInfo(){
            print '부품을 나타내는클래스입니다.';
        }

        public function __construct($name, array $components)
        {
            $this->name = $name;
            $this->components = $components;
            print '생성자 실행!!!<br/>';
        }
    }