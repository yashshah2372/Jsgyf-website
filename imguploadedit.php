<?php
    if ($_FILES["file"]["error"] > 0)
  {
  	echo "Error: " . $_FILES["file"]["error"] . "<br>";
  }
 else
  {
  	$ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
  	$filesize=$_FILES["file"]["size"]/1000;
    
  // move_uploaded_file($_FILES["file"]["tmp_name"],
  //     "upload/" . "bla.".$ext);

  	if($filesize>=250)
  	{
  		if($ext=='jpeg' || $ext=='jpg')
  	{
  		$sample=imagecreatefromjpeg($_FILES["file"]["tmp_name"]);
  		imagejpeg($sample,'photos/'.$firstName.' '.$lastName.' '.$newrand.'.jpg',18);
  		$filepath='./photos/'.$firstName.' '.$lastName.' '.$newrand.'.jpg';
  	}
  	else if($ext=='png')
  	{
  		$sample=imagecreatefrompng($_FILES["file"]["tmp_name"]);
  		imagejpeg($sample,'photos/'.$firstName.' '.$lastName.' '.$newrand.'.png',18);
  		$filepath='./photos/'.$firstName.' '.$lastName.' '.$newrand.'.png';
  	}
  	
     echo $ext;
     echo $_FILES["file"]["size"]/1000;
  	}
  	else
  	{
  		move_uploaded_file($_FILES["file"]["tmp_name"],"photos/" .$firstName.' '.$lastName.' '.$newrand.'.'.$ext);
  		$filepath='./photos/'.$firstName.' '.$lastName.' '.$newrand.'.'.$ext;
  	}
  	
  }
?>