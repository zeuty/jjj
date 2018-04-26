<?

class Rectangle{
	public $width;
	public $lon;
	
	public function __construct($w,$l){$this->width=$w;$this->lon=$l;}
	
	protected function area(){$area = $this->width*$this->lon; return $area;}
	public function printarea(){echo "<br/>Площадь прямоугольника равна: ".$this->area()."<br/>";}
}

$abcd = new Rectangle(12,6);
$abcd->printarea();



Class Capasity extends Rectangle{
	public $height;
	
	public function __construct($w,$l,$h){
		parent::__construct($w,$l);
		$this->height = $h;
	}
	
	public function capa(){return $this->height*parent::area();}
	
	public function printcapa(){echo "<br/>Обьем параллелепипеда равна: ".$this->capa()."<br/>";}
}


$Caparec = new Capasity(10,6,2);
$Caparec->printcapa();
