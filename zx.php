<?
class Zeuty{
	//public $rt = 34;  // ���� ���� ����������� , �� ��������� ���������� ������� , ���� ������ - public/private/protected
	//public $cv = 12;  // ���� ���� ����������� , �� ��������� ���������� ������� , ���� ������ - public/private/protected
	
	private $cv = 12;
	
	public function __construct($a, $b){$this->rt=$a;$this->cv=$b;}
	
	
	public function pr(){echo "<br/><br/><br/>������� �:".$this->rt."<br/>������� �:".$this->cv."<br/>"."������� �������������� �����: ".$this->rt*$this->cv."�� ��.<br/><br/><br/>";}
}

 $q = new Zeuty(143,674);
 $q->pr();
 
 // echo $q->cv+3000; //����� ��������� ����� ���-���  ��������-$q->cv ����� ������� ��������� private - �.�. ���������������
 