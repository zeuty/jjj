<?
class Zeuty{
	public $aside;  
	public $bside;  
	
 
	
	public function __construct($a, $b){$this->aside=$a;$this->bside=$b;}
	
	
	public function pr(){echo "<br/><br/><br/>������� �:".$this->aside."<br/>������� �:".$this->bside."<br/>"."������� �������������� �����: ".$this->aside*$this->bside."�� ��.<br/><br/><br/>";}
}

 $q = new Zeuty(3,4);
 $q->pr();
 
 
 