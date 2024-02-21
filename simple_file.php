<?php
class SimpleObj {
    public function __construct() {
        global $argv;
        $this->image = new Phar($argv[1], 0); 
        $this->image->getMetadata();
    }
}
$obj = new SimpleObj();
