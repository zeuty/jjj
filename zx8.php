<?

 class St{
	 const AM=33;   
	  
	 // public function __construct($a) {self::A = $a;} 
	 
	 public function ppp(){echo "<br/>Вывожу константу методом обьекта(по ссылке ' self :: AM ' ). Вот она - ".self::AM;}
	 
	 }
	 
	 
	 echo "<h2>Постоянное свойство</h2>";
	 
	 
	 
	 $xz = new St(); // $xz = new St;  - можно и без скобок!!!
	 echo $xz::AM."   - (Это значчение константы AM / она же - постоянное свойство)";
	 echo $xz->ppp();
	 
	 
	 





 