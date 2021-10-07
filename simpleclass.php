<?php
class SimpleClass
{
    // property declaration
    public $var ;

    // method declaration
    public function displayVar() {
        echo $this->var;
    }
}

$c = new SimpleClass;
$c->displayVar();
?>