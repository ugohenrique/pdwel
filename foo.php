<?php
class Foo {
    public $aMemberVar = 'aMemberVar Member Variable';
    public $aFuncName = 'aMemberFunc';
   
   
    function aMemberFunc() {
        print 'Inside `aMemberFunc()`';
    }
}

$foo = new Foo;
echo $foo->aMemberFunc();
?>