<?

 class Gs{
	 private $a;
	 private $b;
	 
	 public function __construct($a,$b){$this->a=$a;$this->b=$b;}
	 
	 public function getter_a(){return $this->a;}
	 public function getter_b(){return $this->b;}
	 
	 
	 public function setter_a($a){$this->a=$a;}
	 public function setter_b($b){$this->b=$b;}
	 
 }
 
 
 $z=new Gs(3,5);
 //echo $z->a;
 //echo $z->b;
 
echo $z->getter_a()."<br/>";
echo $z->getter_b()."<hr/>";

echo $z->setter_a(333);
echo $z->setter_b(444);

echo $z->getter_a()."<br/>";
echo $z->getter_b()."<br/>";






 