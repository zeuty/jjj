<?

 class St{
	 const AM=33;   
	  
	 // public function __construct($a) {self::A = $a;} 
	 
	 public function ppp(){echo "<br/>������ ��������� ������� �������(�� ������ ' self :: AM ' ). ��� ��� - ".self::AM;}
	 
	 }
	 
	 
	 echo "<h2>���������� ��������</h2>";
	 
	 
	 
	 $xz = new St(); // $xz = new St;  - ����� � ��� ������!!!
	 echo $xz::AM."   - (��� ��������� ��������� AM / ��� �� - ���������� ��������)";
	 echo $xz->ppp();
	 
	 
	 





 