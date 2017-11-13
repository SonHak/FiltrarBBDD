<html>
	<style>
		img{height: 30px; width: 40px;border: 1px solid black;}
	</style>
	<body>	
		<?php
			$conn = mysqli_connect('localhost','root','Kemaku12');
			mysqli_select_db($conn, 'world');
			
			$consulta = "SELECT Code,Name FROM country;";
			
			$resultat = mysqli_query($conn, $consulta);
			$arrayPaises = array();
			$arrayCode = array();
			
			
			while($registre = mysqli_fetch_assoc($resultat)){
				array_push($arrayPaises,$registre['Name']);
				array_push($arrayCode,$registre['Code']);
			}

			
			echo "<form action='world.php' method='post'>";
				echo "<select name='pais'>";
				for($i = 0;$i < sizeof($arrayPaises);$i++){
					echo "<option value='$arrayCode[$i]'>$arrayPaises[$i]</option>";
				}
				echo "</select>";
			echo "<input type='submit'/>
			</form>";
			
		?>
		<h3>------------------------------------------------------</h3>
		<?php
			$conn = mysqli_connect('localhost','root','Kemaku12');
			mysqli_select_db($conn, 'world');
			
			$consulta = "SELECT Code,Code2 FROM country;";
			
			$resultat = mysqli_query($conn, $consulta);
			$arrayCode2 = array();
			$arrayCode = array();
			$contador = 0;
			
			while($registre = mysqli_fetch_assoc($resultat)){
				array_push($arrayCode2,$registre['Code2']);
				array_push($arrayCode,$registre['Code']);
			}
			
			echo "<table>";
			echo "<form action='world.php' method='post'\n>";
				for($i = 0;$i < sizeof($arrayPaises);$i++){
					if($contador == 15){
						echo "<tr></tr>";
						$contador = 0;
					}else{
						echo "<td>
								<input type='radio' name='pais' value='$arrayCode[$i]'>
									<img src='/FiltrarBBDD/flags/png/256/".$arrayCode2[$i].".png'/>
								</input> 
							  </td>\n";
						$contador++;
					}
				}
			echo "<input type='submit'\n/>
			</form\n>";
			echo "</table>";
		?>
	</body>
</html>
