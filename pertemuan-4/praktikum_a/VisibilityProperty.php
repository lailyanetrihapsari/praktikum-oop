<?php
class MyClass {
public string $pub = 'Public';
protected string $prot = 'Protected';
private string $priv = 'Private';
public function dump(): void {
echo $this->pub . "\n";
echo $this->prot . "\n";
echo $this->priv . "\n";
}
}
class MyChild extends MyClass {
    private string $priv = 'Private Child';

    public function check(): void {
        echo $this->pub . "\n";
        echo $this->prot . "\n";
        echo $this->priv . "\n";
    }
}

$obj = new MyClass();
echo $obj->pub . "\n";
// echo $obj->prot; // ERROR
// echo $obj->priv; // ERROR
$obj->dump();
$child = new MyChild();
$child->check();
