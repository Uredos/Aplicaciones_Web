<?PHP
class Datos
{
	private $n;
	private $array = [];

	public function __construct($lim)
	{
		$this->n = $lim;
		for($i=0; $i < $this->n; $i++)
		{
			$this->array[$i] = rand(0, 50);
		}
	}
	
	public function ordena()
	{
        $ordenado = $this->array;
        sort($ordenado);
        echo '<br>'."Array ordenado:";
        foreach($ordenado as $key){
            echo " ".$key;
        }
	}
	
	public function cuenta()
	{
		$t=0;
		$cuen=[];
		for($i=0;$i<51;$i++)
		{
			$cuen[$i]=0;
		}
		for($i=0;$i<$this->n; $i++)
		{	
			$t=$this->array[$i];
			$cuen[$t]++;
		}
		for($i=0;$i<51;$i++)
		{
			$t=$cuen[$i];
			echo "[$i]=$t  ";
		}
		echo "<br><br>";        
	}
	
	public function medvar()
	{		
        $sum=0;
        for($i=0; $i < count($this->array); $i++){
	        $sum += $this->array[$i];
        }
        $media = $sum/count($this->array);

        $sum2=0;
        for($i=0; $i <count($this->array); $i++){
	        $sum2+=($this->array[$i]-$media)*($this->array[$i]-$media);
        }
        $vari = $sum2/count($this->array);

        echo "La media es: $media <br>";
        echo "La varianza es: $vari <br>";
	}
	
	public function muestra()
	{
		$t=0;
		echo "Array: ";
		for($i=0; $i<$this->n; $i++)
		{
			$t=$this->array[$i];
			echo "   $t   ";
		}
	}
}
?>