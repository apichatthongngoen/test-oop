<?php
class myclass{
    public  $pri='AAp';
    function med(){
        echo '01';
    }
}
$obj=new myclass();
$obj->med();
echo $obj->pri;
myclass::med();

class protect1{
    private $private='private!';
    protected $protected ='protected!';



}