<?php
	/* echo "POST : ";
	print_r($_POST);
	
	echo "FILES : ";
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";
	
	echo "<pre>";
	print_r($_SERVER);
	echo "</pre>"; */
	
	if(!empty($_POST['action-ajouter-equipe'])){
		$site = new stdClass();
		$site->chemin = new stdClass();
		$site->chemin->racine = $_SERVER['DOCUMENT_ROOT'] . '/eSportHQ/src/';
		$site->chemin->illustration = $site->chemin->racine . 'illustration/';
		
		$source = $_FILES["logo"]["tmp_name"];
		$destination = $site->chemin->illustration . $_FILES['logo']['name'];
		/* echo "<div> Source " . $source . "</div>";
		echo "<div> Destination " . $destination . "</div>"; */
		
		move_uploaded_file($source, $destination); // prise de possession de limage de tmp vers le server

		/* if(move_uploaded_file($source, $destination))
		{?>
				<img src="../illustration/<?=$_FILES["logo"]["name"]?>">
		<?php
		} */

		// Chargement
		list($width, $height) = getimagesize($destination);
		//echo "widht ". $width . " height " .$height;
		$largeurSource = $width;
		$hauteurSource = $height;
		$largeurMiniature = 120;
		$hauteurMiniature = 120;
		$imageSource = imagecreatefromjpeg($destination);
		$imageMiniature = imagecreatetruecolor($largeurMiniature, $hauteurMiniature);
		//print_r(getimagesize($destination));

		// Redimmensionnement
		// Version deformante
		//imagecopyresized($imageMiniature, $imageSource, 0, 0, 0, 0, $largeurMiniature, $hauteurMiniature, $largeurSource, $hauteurSource);

		// Version qui coupe ce qui depasse dun carre
		if($largeurSource > $hauteurSource)
			$largeurSource = $hauteurSource;
		else
			$hauteurSource = $largeurSource;
		imagecopyresized($imageMiniature, $imageSource, 0, 0, 0, 0, $largeurMiniature, $hauteurMiniature, $largeurSource, $hauteurSource);
		
		$cheminMiniature = $site->chemin->illustration . "miniature/" . $_FILES["logo"]["name"];
		//print_r($cheminMiniature);

		// Sauvegarde
		imagejpeg($imageMiniature, $cheminMiniature, 100);
	}
?>