<!doctype html>
	<head>
	    <meta charset="UTF-8">
	    <title>Imprime 1 - 100</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	</head>

	<body>
		<?php
			class Contador {
				function fizz($i){
					return ($i % 3) === 0;
				}
				function buzz($i){
					return ($i % 5) === 0;
				}
				function multiplos($i){
					return ($this->fizz($i)?1:0)+($this->buzz($i)?1:0);
				}
				function contar(){
					echo "Contador: múltiplos de 3(Fizz), múltiplos de 5(Buzz)<br/>";
					for($i=1; $i <= 100; $i++){
						switch($this->multiplos($i)){
							case 0:
								echo $i."<br/>";
								break;
							case 2:
								echo "FizzBuzz<br/>";
								break;
							default:
								if($this->fizz($i)){
									echo "Fizz<br/>";
								}else{
									echo "Buzz<br/>";
								}
						}
					}
				}
			}
			
			$contador = new Contador();
			$contador->contar(); 
		?>
	</body>

</html>
