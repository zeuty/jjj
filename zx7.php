<?

 class St{
	 public static $a = 25;  // статическое свойство
	  
	 
	 public static function zzz(){echo "Я статическй метод вывожу статическое свойство. Вот оно:  ".self::$a;} // статический ментод
	 
	 }
	 
	 
	 echo St::$a." - это статическое свойство класса";
	 
	 echo "<br/>";
	 
	 echo St::zzz();
	 





 