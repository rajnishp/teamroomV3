<?php
session_start();
function checkNCreateFolder($username,$dir){
	global $configs;

	$root = $configs['COLLAP_FILE_ROOT'];
	if (!file_exists($root.$username)) {

		mkdir($root.$username, 0777, true);
	}
	if (!file_exists($root.$username."/".$dir)) {
		mkdir($root.$username."/".$dir, 0777, true);
	}
	return $username."/".$dir;
}
	
function saveFile($filePath){
	global $configs;
	$root = $configs['COLLAP_FILE_ROOT'];

	if (file_exists($root.$filePath)) {
        
        //echo $_FILES["file"]["name"] . " already exists. ";
      } else {
        
        move_uploaded_file($_FILES["file"]["tmp_name"], $root.$filePath);
        //create 4 size img
        if($_FILES["file"]["type"] == "image/png"){
	        $image = imagecreatefrompng($root.$filePath);
			$bg = imagecreatetruecolor(imagesx($image), imagesy($image));
			imagefill($bg, 0, 0, imagecolorallocate($bg, 255, 255, 255));
			imagealphablending($bg, TRUE);
			imagecopy($bg, $image, 0, 0, 0, 0, imagesx($image), imagesy($image));
			imagedestroy($image);
			$quality = 50; // 0 = worst / smaller file, 100 = better / bigger file
			$fpExplode = explode(".", $filePath); 
			imagejpeg($bg, $root.$fpExplode['0'] . "_png.jpg", $quality);
			imagedestroy($bg);

        }
        //echo "File uploaded sucessfully";
      }
}

if(isset($_SESSION['username'])){
  $username = $_SESSION['username'];
  //echo $_FILES["file"]["type"];
  if(($_FILES["file"]["type"] == "image/jpeg")
            || ($_FILES["file"]["type"] == "image/jpg") 
            ||  ($_FILES["file"]["type"] == "image/png")
            ||  ($_FILES["file"]["type"] == "image/gif")){
		
		switch($route[2]){
			case "dashboard":
				$filePath = checkNCreateFolder($username,"dashboard")."/".date("Y-m-d_h:i:sa")."_".$_FILES["file"]["name"];
				
				saveFile($filePath);
				
				if($_FILES["file"]["type"] == "image/png"){
					$temp = explode(".", $_FILES["file"]["name"]);
					echo 'uploads/'.$username."/dashboard/".date("Y-m-d_h:i:sa")."_".$temp[0]."_png.jpg";
				}
				else
					echo 'uploads/'.$filePath ;
				exit;
				
				break;
			
			case "profilePic":
				$pic = explode(".", $_FILES["file"]["name"]) ;
				$pict = $pic['1'] ;
				global $configs;

				$root = $configs['COLLAP_FILE_ROOT'];
				if ($pict == "jpg") {
					$picname = $username.".".$pict ;
				}
				else { 
					$picname = $username.".jpg" ;
				}
				$filePath = "profilePictures/".$picname;
				if(!file_exists($root.$filePath)) {
					saveFile($filePath); 
				} 
				 else {
					 unlink($root."profilePictures/".$username.".jpg") ;
					 unlink($root."profilePictures/".$username.".png") ;
					 unlink($root."profilePictures/".$username.".jpeg") ;
					 unlink($root."profilePictures/".$username.".gif") ;
					 saveFile($filePath);
					 rename($root.$filePath.".jpg",
							$root.'profilePictures/'.$username.".jpg");					 
					 }
				echo 'uploads/'.$filePath;
				exit;
				
				break;
				
			case "project"	:
					
					$filePath = checkNCreateFolder($username,"project")."/".date("Y-m-d_h:i:sa")."_".$_FILES["file"]["name"];
				
				saveFile($filePath);
				
				if($_FILES["file"]["type"] == "image/png"){
					$temp = explode(".", $_FILES["file"]["name"]);
					echo 'uploads/'.$username."/project/".date("Y-m-d_h:i:sa")."_".$temp[0]."_png.jpg";
				}
				else
					echo 'uploads/'.$filePath ;
				exit;
				
				break;
				
			case "ideaPic":
			
					$filePath = checkNCreateFolder($username,"ideaPic")."/".date("Y-m-d_h:i:sa")."_".$_FILES["file"]["name"];
					saveFile($filePath) ;
					if($_FILES["file"]["type"] == "image/png"){
						$temp = explode(".", $_FILES["file"]["name"]);
						echo 'uploads/'.$username."/ideaPic/".date("Y-m-d_h:i:sa")."_".$temp[0]."_png.jpg";
					}
					else
						echo $filePath;
					exit;
					
				break;
				
			case "photoPic":
			
					$filePath = checkNCreateFolder($username,"photoPic")."/".date("Y-m-d_h:i:sa")."_".$_FILES["file"]["name"];
					saveFile($filePath) ;
					if($_FILES["file"]["type"] == "image/png"){
						$temp = explode(".", $_FILES["file"]["name"]);
						echo 'uploads/'.$username."/photoPic/".date("Y-m-d_h:i:sa")."_".$temp[0]."_png.jpg";
					}
					else
						echo $filePath;
					exit;
					
				break;
				
			case "projectPic":
			
					$filePath = checkNCreateFolder($username,"projectPic")."/".date("Y-m-d_h:i:sa")."_".$_FILES["file"]["name"];
					saveFile($filePath) ;
					if($_FILES["file"]["type"] == "image/png"){
						$temp = explode(".", $_FILES["file"]["name"]);
						echo 'uploads/'.$username."/projectPic/".date("Y-m-d_h:i:sa")."_".$temp[0]."_png.jpg";
					}
					else
						echo $filePath;
					exit;
					
				break;
				
			case "taskPic":
			
					$filePath = checkNCreateFolder($username,"taskPic")."/".date("Y-m-d_h:i:sa")."_".$_FILES["file"]["name"];
					saveFile($filePath) ;
					if($_FILES["file"]["type"] == "image/png"){
						$temp = explode(".", $_FILES["file"]["name"]);
						echo 'uploads/'.$username."/taskPic/".date("Y-m-d_h:i:sa")."_".$temp[0]."_png.jpg";
					}
					else
						echo $filePath;
					exit;
					
				break;
				
			case "projectchalPic":
			
					$filePath = checkNCreateFolder($username,"projectchalPic")."/".date("Y-m-d_h:i:sa")."_".$_FILES["file"]["name"];
					saveFile($filePath) ;
					if($_FILES["file"]["type"] == "image/png"){
						$temp = explode(".", $_FILES["file"]["name"]);
						echo 'uploads/'.$username."/projectchalPic/".date("Y-m-d_h:i:sa")."_".$temp[0]."_png.jpg";
					}
					else
						echo $filePath;
					exit;
					
				break;
				
			case "projectnotesPic":
			
					$filePath = checkNCreateFolder($username,"projectnotesPic")."/".date("Y-m-d_h:i:sa")."_".$_FILES["file"]["name"];
					saveFile($filePath) ;
					if($_FILES["file"]["type"] == "image/png"){
						$temp = explode(".", $_FILES["file"]["name"]);
						echo 'uploads/'.$username."/projectnotesPic/".date("Y-m-d_h:i:sa")."_".$temp[0]."_png.jpg";
					}
					else
						echo $filePath;
					exit;
					
				break;
				
			case "projectissuePic":
			
					$filePath = checkNCreateFolder($username,"projectissuePic")."/".date("Y-m-d_h:i:sa")."_".$_FILES["file"]["name"];
					saveFile($filePath) ;
					if($_FILES["file"]["type"] == "image/png"){
						$temp = explode(".", $_FILES["file"]["name"]);
						echo 'uploads/'.$username."/projectissuePic/".date("Y-m-d_h:i:sa")."_".$temp[0]."_png.jpg";
					}
					else
						echo $filePath;
					exit;
					
				break;
				
			case "answerPic":
			
					$filePath = checkNCreateFolder($username,"answerPic")."/".date("Y-m-d_h:i:sa")."_".$_FILES["file"]["name"];
					saveFile($filePath) ;
					if($_FILES["file"]["type"] == "image/png"){
						$temp = explode(".", $_FILES["file"]["name"]);
						echo 'uploads/'.$username."/answerPic/".date("Y-m-d_h:i:sa")."_".$temp[0]."_png.jpg";
					}
					else
						echo $filePath;
					exit;
					
				break;
		}
    //  echo "fileName: ".$fileName; taskPic
  } 
  else if (($_FILES["file"]["type"] == "application/msword")
            ||  ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") 
            ||  ($_FILES["file"]["type"] == "application/pdf")
            ||  ($_FILES["file"]["type"] == "application/vnd.ms-powerpoint")
            ||  ($_FILES["file"]["type"] == "application/vnd.oasis.opendocument.text")
            ||  ($_FILES["file"]["type"] == "application/x-rar")
            ||  ($_FILES["file"]["type"] == "application/x-zip")
            ||  ($_FILES["file"]["type"] == "application/vnd.ms-excel")
            ||  ($_FILES["file"]["type"] == "text/plain")){
				$pictu = explode(".", $_FILES["file"]["name"]) ;
				$picture = $pictu['1'] ;
				$link = "<img src= \"img/".$picture.".jpg\" style= \"max-width: 100%;\" />" ;
				$filePath = checkNCreateFolder($username,"files")."/".date("Y-m-d_h:i:sa")."_".$_FILES["file"]["name"];
					saveFile($filePath) ;
					echo "<a href=\"".$filePath."\" >".$link."</a> ";
	  
	  }
  else {
    echo "File Format Not Supported";
    //echo "Type: " . $_FILES["file"]["type"] . "<br>";
  }
}
?> 
