<?php 
	include 'koneksi.php';
	session_start();

	$foto_istriA = $_FILES['foto-istriA']['name'];
	$ukuran	= $_FILES['foto-istriA']['size'];
	$tmp = $_FILES['foto-istriA']['tmp_name'];
	if ($ukuran > 1044070){
		$foto_istriAnew = $_SESSION['id_user']. ' [ 2X3 ] '.$foto_istriA;
		$path = "img/data/".$foto_istriAnew;
		move_uploaded_file($tmp, $path);
		$foto_istriB = $_FILES['foto-istriB']['name'];
		$ukuran1	= $_FILES['foto-istriB']['size'];
		$tmp = $_FILES['foto-istriB']['tmp_name'];
		if($ukuran1 > 1044070){
			$foto_istriBnew = $_SESSION['id_user']. ' [ 4X6 ] '.$foto_istriB;
			$path = "img/data/".$foto_istriBnew;
			move_uploaded_file($tmp, $path);
			$fcktp_istri = $_FILES['fc-ktp-istri']['name'];
			$ukuran2	= $_FILES['fc-ktp-istri']['size'];
			$tmp = $_FILES['fc-ktp-istri']['tmp_name'];
			if($ukuran2 > 1044070){
				$fcktp_istrinew = $_SESSION['id_user']. ' [ ktp ] '.$fcktp_istri;
				$path = "img/data/".$fcktp_istrinew;
				move_uploaded_file($tmp, $path);
				$fcktpwali_istri = $_FILES['fc-ktpwali-istri']['name'];
				$ukuran3	= $_FILES['fc-ktpwali-istri']['size'];
				$tmp = $_FILES['fc-ktpwali-istri']['tmp_name'];
				if($ukuran3 > 1044070){
					$fcktpwali_istrinew = $_SESSION['id_user']. ' [ ktpwali ] '.$fcktpwali_istri;
					$path = "img/data/".$fcktpwali_istrinew;
					move_uploaded_file($tmp, $path);
					$fcktportu_istri = $_FILES['fc-ktportu-istri']['name'];
					$ukuran4	= $_FILES['fc-ktportu-istri']['size'];
					$tmp = $_FILES['fc-ktportu-istri']['tmp_name'];
					if($ukuran4 > 1044070){
						$fcktportu_istrinew = $_SESSION['id_user']. ' [ ktportu ] '.$fcktportu_istri;
						$path = "img/data/".$fcktportu_istrinew;
						move_uploaded_file($tmp, $path);
						$fckk_istri = $_FILES['fc-kk-istri']['name'];
						$ukuran5	= $_FILES['fc-kk-istri']['size'];
						$tmp = $_FILES['fc-kk-istri']['tmp_name'];
						if($ukuran5 > 1044070){
							$fckk_istrinew = $_SESSION['id_user']. ' [ kk ] '.$fckk_istri;
							$path = "img/data/".$fckk_istrinew;
							move_uploaded_file($tmp, $path);
							$berkas = mysql_query("INSERT INTO `filedata_user` (
							id_user,
							foto_istri_2x3,
							foto_istri_4x6,
							fc_ktp_istri,
							fc_ktp_wali_istri,
							fc_ktp_ortu_istri,
							fc_kk_istri)
							VALUES (
								'{$_SESSION['id_user']}', 
								'$foto_istriAnew', 
								'$foto_istriBnew', 
								'$fcktp_istrinew', 
								'$fcktpwali_istrinew', 
								'$fcktportu_istrinew', 
								'$fckk_istrinew')");

							if(!$berkas) {
								die('Invalid query: ' . mysql_error());
							} else {
								header("location:berkassuami-register.php");
							}
						}
						else{
							echo "<SCRIPT type='text/javascript'>
						alert('UKURAN FILE KK TERLALU BESAR');
						window.location.replace(\"berkasistri_register.php\");
						</SCRIPT>";
						}
					}
					else{
						echo "<SCRIPT type='text/javascript'>
						alert('UKURAN FILE KTP ORTU TERLALU BESAR');
						window.location.replace(\"berkasistri_register.php\");
						</SCRIPT>";
					}
				}
				else{
					echo "<SCRIPT type='text/javascript'>
					alert('UKURAN FILE KTP WALI TERLALU BESAR');
					window.location.replace(\"berkasistri_register.php\");
					</SCRIPT>";
				}
			}
			else{
				echo "<SCRIPT type='text/javascript'>
				alert('UKURAN FILE KTP TERLALU BESAR');
				window.location.replace(\"berkasistri_register.php\");
				</SCRIPT>";
			}

		}
		else{
			echo "<SCRIPT type='text/javascript'>
			alert('UKURAN FILE 4X6 TERLALU BESAR');
			window.location.replace(\"berkasistri_register.php\");
			</SCRIPT>";
		}
	}
	else{
		echo "<SCRIPT type='text/javascript'>
		alert('UKURAN FILE 2X3 TERLALU BESAR');
		window.location.replace(\"berkasistri_register.php\");
		</SCRIPT>";
	}

	
 
?>