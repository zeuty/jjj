<?
class Zeuty{
	public $rt = 34;
	public $cv = 12;
	
	public function __construct($a, $b){$this->rt=$a;$this->cv=$b;}
	
	
	public function pr(){echo "<br/><br/><br/>������� �:".$this->rt."<br/>������� �:".$this->cv."<br/>"."������� �������������� �����: ".$this->rt*$this->cv."�� ��.<br/><br/><br/>";}
}

 $q = new Zeuty(14,67);
 $q->pr();
 

 
 // ������������ ������������� � ������� ��������� �����-��������� extends ��� ����������� ��� -�������� �������� extends-��������
class Xp extends Zeuty{
	public function fg($jk){echo $jk;}
}
 
 $ql = new Xp(1334,67333);
 $ql->fg("you!!!");
 $ql->pr();

// ������������ - ��� ������������ ������������ � �������� ������ �� ������ �� ���� ��������������� �� ��������
// ��������� ����������� ������������� ������
class Dc extends Zeuty{
	public function __construct($a, $s, $d){
		parent:: __construct($a, $s){}
	}
	
	
	
}


