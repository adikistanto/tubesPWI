<!DOCTYPE HTML>
<html>
	<head>
		<title>Tugas PWI || Menganalisis Segitiga</title>
		<!-- sintax css -->
		<style type="text/css">

			h3{
				text-align:center;
				color:#fff;
			}
			#isi{
				width:50%;
				margin-left:25%;
				float:left;
				border:solid 1px silver;
				font-weight:bold;
				box-shadow: 10px 10px 5px #888888
			}
			#footer{
				position:fixed;
				left:0px;
				bottom:0px;
				float:right;
				background:grey;
				padding:10px 20px;
				box-shadow: 10px 10px 5px #888888
			}
			
			.judul{
				width:94%;
				float:left;
				margin:3%;
				text-align:center;
				background: linear-gradient(#232326, #8E9096);
			}
			.segitiga{
				float:left;
				clear:both;
				width:50%;
				margin:0px 0px 0px 30px;
			}
			input{
				margin:5px 0px 0px 0px;
				padding:2px 0px 2px 5px;
			}
			.aksi{
				clear:both;
				float:left;
				margin:20px 0px 0px 30px;
			}
			.hasil{
				background:#909195;
				clear:both;
				width:87%;
				float:left;
				margin:3%;
				padding:20px;
				line-height:1.5;
				color:#fff;
			}
		</style>
	</head>
	<body>
		<br />
		<?php
			$sisi1= null;
			$sisi2= null;
			$sisi3= null;
			$keliling = null;
			$luas = null;
						
				// fungsi untuk mencari sisi terpanjang
				function spanjang($a,$b,$c){
						if (($a == $b) && ($a == $c) && ($b = $c)){
							return $a; // semua sisi sama panjang
						}
						else if (($a > $b) && ($a > $c)){
							return $a;
						}
						else if (($b > $a) && ($b > $c)){
							return $b; 
						}
						else if (($c > $a) && ($c > $b)){
							return $c; 
						}
						else {
							if (($a == $b) && ($b > $c)){
								return $a; //sisi terpanjang a dan b
							}
							else if (($a == $c) && ($c > $b)){
								return $a; //sisi terpanjang a dan c
							}
							else if (($b == $c) && ($c > $a)){
								return $b; //sisi terpanjang b dan c
							}
						}
			}
		?>
		
		<div id="isi">
			<div class="judul">
				<h3><strong>Menganalisis Segitiga</strong></h3>
			</div>
			<div class="segitiga">
				<form method=POST action='<?php echo $_SERVER['PHP_SELF'];?>'>
					<label>Sisi 1 :</label> <input width="50px" type="number" name="sisi1"></input><br>
					<label>Sisi 2 :</label> <input width="50px" type="number" name="sisi2"></input><br>
					<label>Sisi 3 :</label> <input width="50px" type="number" name="sisi3"></input><br>
				
			</div>
			<div class="aksi">
				 <input type="submit" name="submit" value="Proses"/>
				 <input action='<?php echo $_SERVER['PHP_SELF'];?>'type="reset" name="reset" value="Reset"/>
				 </form>
			</div>
			<div class="hasil">
					<fieldset>
						<legend>Hasil</legend>
					
						<?php
						// Jika sudah di submit
						if(isset($_POST['submit'])){
							$sisi1 = $_POST['sisi1'];
							$sisi2 = $_POST['sisi2'];
							$sisi3 = $_POST['sisi3'];
							$keliling = $sisi1 + $sisi2 + $sisi3;
							$s = 0.5 * $keliling;
							$luas = sqrt($s * ($s - $sisi1) * ($s -$sisi2) * ($s - $sisi3));
							if(($sisi1 == null) && ($sisi2 == null) && ($sisi3 == null)){
								echo "Sisi belum dimasukkan. <br />";
							}
							else {
								if (($sisi1 == $sisi2)&&($sisi1 == $sisi3)&&($sisi2 == $sisi3)){
								echo "Jenis : Sama sisi <br />";
								//sisiTerpanjang();
								echo "Sisi1 = ".$sisi1."<br />";
								echo "Sisi2 = ".$sisi2."<br />";
								echo "Sisi3 = ".$sisi3."<br />";
								echo "Sisi terpanjang = ".sPanjang($sisi1,$sisi2,$sisi3)."<br />";
								echo "Keliling segitiga = ".$keliling;
								echo " <br />Luas segitiga = ".$luas;
								}
								else if (($sisi1 == $sisi2)||($sisi1 == $sisi3)||($sisi2 == $sisi3)){
									echo "Segitiga: Sama kaki<br />";
									//sisiTerpanjang();
									echo "Sisi1 = ".$sisi1."<br />";
									echo "Sisi2 = ".$sisi2."<br />";
									echo "Sisi3 = ".$sisi3."<br />";
									echo "Sisi terpanjang = ".sPanjang($sisi1,$sisi2,$sisi3)."<br />";
									echo "Keliling segitiga = ".$keliling;
									echo " <br />Luas segitiga = ".$luas;
								}
								else {
									echo "Segitiga: Sembarang<br />";
									//sisiTerpanjang();
									echo "Sisi1 = ".$sisi1."<br />";
									echo "Sisi2 = ".$sisi2."<br />";
									echo "Sisi3 = ".$sisi3."<br />";
									echo "Sisi terpanjang = ".sPanjang($sisi1,$sisi2,$sisi3)."<br />";
									echo "Keliling segitiga = ".$keliling;
									echo " <br />Luas segitiga = ".$luas;
								}
							}
						}		
					?>
				</fieldset>
			</div>
		</div>
		<div id="footer">
			<p>Created by:<br />
			1. Adik Istanto [24010312130046]<br/>
			2. Eko Wahyudi  [24010312130042]</p>
		</div>
	</body>
</html>