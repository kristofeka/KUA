<?php 
	include 'koneksi.php';
	session_start();

	$foto_suamiA = $_FILES['foto-suamiA']['name'];
	$ukuran	= $_FILES['foto-suamiA']['size'];
	$tmp = $_FILES['foto-suamiA']['tmp_name'];
	if ($ukuran > 1044070){
		$foto_suamiAnew = $_SESSION['id_user']. ' [ 2X3 ] '.$foto_suamiA;
		$path = "img/data/".$foto_suamiAnew;
		move_uploaded_file($tmp, $path);
		$foto_suamiB = $_FILES['foto-suamiB']['name'];
		$ukuran1	= $_FILES['foto-suamiB']['size'];
		$tmp = $_FILES['foto-suamiB']['tmp_name'];
		if($ukuran1 > 1044070){
			$foto_suamiBnew = $_SESSION['id_user']. ' [ 4X6 ] '.$foto_suamiB;
			$path = "img/data/".$foto_suamiBnew;
			move_uploaded_file($tmp, $path);
			$fcktp_suami = $_FILES['fc-ktp-suami']['name'];
			$ukuran2	= $_FILES['fc-ktp-suami']['size'];
			$tmp = $_FILES['fc-ktp-suami']['tmp_name'];
			if($ukuran2 > 1044070){
				$fcktp_suaminew = $_SESSION['id_user']. ' [ ktp ] '.$fcktp_suami;
				$path = "img/data/".$fcktp_suaminew;
				move_uploaded_file($tmp, $path);
				$fcktpwali_suami = $_FILES['fc-ktpwali-suami']['name'];
				$ukuran3	= $_FILES['fc-ktpwali-suami']['size'];
				$tmp = $_FILES['fc-ktpwali-suami']['tmp_name'];
				if($ukuran3 > 1044070){
					$fcktpwali_suaminew = $_SESSION['id_user']. ' [ ktpwali ] '.$fcktpwali_suami;
					$path = "img/data/".$fcktpwali_suaminew;
					move_uploaded_file($tmp, $path);
					$fcktportu_suami = $_FILES['fc-ktportu-suami']['name'];
					$ukuran4	= $_FILES['fc-ktportu-suami']['size'];
					$tmp = $_FILES['fc-ktportu-suami']['tmp_name'];
					if($ukuran4 > 1044070){
						$fcktportu_suaminew = $_SESSION['id_user']. ' [ ktportu ] '.$fcktportu_suami;
						$path = "img/data/".$fcktportu_suaminew;
						move_uploaded_file($tmp, $path);
						$fckk_suami = $_FILES['fc-kk-suami']['name'];
						$ukuran5	= $_FILES['fc-kk-suami']['size'];
						$tmp = $_FILES['fc-kk-suami']['tmp_name'];
						if($ukuran5 > 1044070){
							$fckk_suaminew = $_SESSION['id_user']. ' [ kk ] '.$fckk_suami;
							$path = "img/data/".$fckk_suaminew;
							move_uploaded_file($tmp, $path);
							$berkas = mysql_query("UPDATE `filedata_user` SET 
								foto_suami_2x3		= '$foto_suamiAnew',
								foto_suami_4x6		= '$foto_suamiBnew',
								fc_ktp_suami 		= '$fcktp_suaminew',
								fc_ktp_wali_suami	= '$fcktpwali_suaminew',
								fc_ktp_ortu_suami	= '$fcktportu_suaminew',
								fc_kk_suami		= '$fckk_suaminew'
								WHERE id_user = '{$_SESSION['id_user']}'");

							if(!$berkas) {
								die('Invalid query: ' . mysql_error());
							} else {
								header("location:finish-register.php");

							}
						}
						else{
							echo "<SCRIPT type='text/javascript'>
						alert('UKURAN FILE KK TERLALU BESAR');
						window.location.replace(\"berkassuami_register.php\");
						</SCRIPT>";
						}
					}
					else{
						echo "<SCRIPT type='text/javascript'>
						alert('UKURAN FILE KTP ORTU TERLALU BESAR');
						window.location.replace(\"berkaswaktu_register.php\");
						</SCRIPT>";
					}
				}
				else{
					echo "<SCRIPT type='text/javascript'>
					alert('UKURAN FILE KTP WALI TERLALU BESAR');
					window.location.replace(\"berkaswaktu_register.php\");
					</SCRIPT>";
				}
			}
			else{
				echo "<SCRIPT type='text/javascript'>
				alert('UKURAN FILE KTP TERLALU BESAR');
				window.location.replace(\"berkassuami_register.php\");
				</SCRIPT>";
			}

		}
		else{
			echo "<SCRIPT type='text/javascript'>
			alert('UKURAN FILE 4X6 TERLALU BESAR');
			window.location.replace(\"berkassuami_register.php\");
			</SCRIPT>";
		}
	}
	else{
		echo "<SCRIPT type='text/javascript'>
		alert('UKURAN FILE 2X3 TERLALU BESAR');
		window.location.replace(\"berkassuami_register.php\");
		</SCRIPT>";
	}

	
 
?>