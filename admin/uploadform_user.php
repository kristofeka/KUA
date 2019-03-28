<?php 
	include 'koneksi.php';
	session_start();

	$N1_berkas = $_FILES['N1_file']['name'];
	$ukuran1	= $_FILES['N1_file']['size'];
	$tmp = $_FILES['N1_file']['tmp_name'];
	if ($ukuran1 > 1044070){
		$N1_berkasnew = $_SESSION['id_user']. '[ N1 ]'.$N1_berkas;
		$path = "img/form/".$N1_berkasnew;
		move_uploaded_file($tmp, $path);
		$N2_berkas = $_FILES['N2_file']['name'];
		$ukuran2	= $_FILES['N2_file']['size'];
		$tmp = $_FILES['N2_file']['tmp_name'];
		if ($ukuran2 > 1044070){
			$N2_berkasnew = $_SESSION['id_user']. '[ N2 ]'.$N2_berkas;
			$path = "img/form/".$N2_berkasnew;
			move_uploaded_file($tmp, $path);
			$N3_berkas = $_FILES['N3_file']['name'];
			$ukuran3	= $_FILES['N3_file']['size'];
			$tmp = $_FILES['N3_file']['tmp_name'];
			if ($ukuran3 > 1044070){
				$N3_berkasnew = $_SESSION['id_user']. '[ N3 ]'.$N3_berkas;
				$path = "img/form/".$N3_berkasnew;
				move_uploaded_file($tmp, $path);
				$N4_berkas = $_FILES['N4_file']['name'];
				$ukuran4	= $_FILES['N4_file']['size'];
				$tmp = $_FILES['N4_file']['tmp_name'];
				if ($ukuran4 > 1044070){
					$N4_berkasnew = $_SESSION['id_user']. '[ N4 ]'.$N4_berkas;
					$path = "img/form/".$N4_berkasnew;
					move_uploaded_file($tmp, $path);
					$N5_berkas = $_FILES['N5_file']['name'];
					$ukuran5	= $_FILES['N5_file']['size'];
					$tmp = $_FILES['N5_file']['tmp_name'];
					if ($ukuran5 > 1044070){
						$N5_berkasnew = $_SESSION['id_user']. '[ N5 ]'.$N5_berkas;
						$path = "img/form/".$N5_berkasnew;
						move_uploaded_file($tmp, $path);
						$N6_berkas = $_FILES['N6_file']['name'];
						$ukuran6	= $_FILES['N6_file']['size'];
						$tmp = $_FILES['N6_file']['tmp_name'];
						if ($ukuran6 > 1044070){
							$N6_berkasnew = $_SESSION['id_user']. '[ N6 ]'.$N6_berkas;
							$path = "img/form/".$N6_berkasnew;
							move_uploaded_file($tmp, $path);
							$N7_berkas = $_FILES['N7_file']['name'];
							$ukuran7	= $_FILES['N7_file']['size'];
							$tmp = $_FILES['N7_file']['tmp_name'];
							if ($ukuran7 > 1044070){
								$N7_berkasnew = $_SESSION['id_user']. '[ N7 ]'.$N7_berkas;
								$path = "img/form/".$N7_berkasnew;
								move_uploaded_file($tmp, $path);

								$berkas = mysql_query("INSERT INTO `form_persyaratan_nikah` (
									id_user, N1, N2, N3, N4, N5, N6, N7) VALUES (
										'{$_SESSION['id_user']}', 
										'$N1_berkasnew', 
										'$N2_berkasnew', 
										'$N3_berkasnew', 
										'$N4_berkasnew', 
										'$N5_berkasnew', 
										'$N6_berkasnew',
										'$N7_berkasnew'
									)");

								if(!$berkas) {
									die('Invalid query: ' . mysql_error());
								} else {
									header("location:dashboard-user.php");

								}
							}
							else{
								echo "<SCRIPT type='text/javascript'>
								alert('UKURAN FILE N7 TERLALU BESAR');
								window.location.replace(\"download_berkas.php\");
								</SCRIPT>";
							}
						}
						else{
							echo "<SCRIPT type='text/javascript'>
							alert('UKURAN FILE N6 TERLALU BESAR');
							window.location.replace(\"download_berkas.php\");
							</SCRIPT>";
						}
					}
					else{
						echo "<SCRIPT type='text/javascript'>
						alert('UKURAN FILE N5 TERLALU BESAR');
						window.location.replace(\"download_berkas.php\");
						</SCRIPT>";
					}
				}
				else{
					echo "<SCRIPT type='text/javascript'>
					alert('UKURAN FILE N4 TERLALU BESAR');
					window.location.replace(\"download_berkas.php\");
					</SCRIPT>";
				}
			}
			else{
				echo "<SCRIPT type='text/javascript'>
				alert('UKURAN FILE N3 TERLALU BESAR');
				window.location.replace(\"download_berkas.php\");
				</SCRIPT>";
			}
		}
		else{
			echo "<SCRIPT type='text/javascript'>
			alert('UKURAN FILE N2 TERLALU BESAR');
			window.location.replace(\"download_berkas.php\");
			</SCRIPT>";
		}
	}
	else{
		echo "<SCRIPT type='text/javascript'>
		alert('UKURAN FILE N1 TERLALU BESAR');
		window.location.replace(\"download_berkas.php\");
		</SCRIPT>";
	}

?>