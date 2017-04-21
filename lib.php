<?php

if(!session_id()) session_start();//If session is not started start session

function getDBConnection(){
	try{
		//$db = new mysqli("sql10.freemysqlhosting.net","sql10166023","fNe6cp3r6y","sql10166023");
		$db = new mysqli("localhost","web_project","admin","web_project");
		if ($db == null && $db->connect_errno > 0)return null;
		return $db;
	}catch(Exception $e){ } 
	return null;
}

function checkLogin($email, $password){
	$password = sha1($password);
	$sql = "SELECT * FROM `user` where `email`='$email'";
	$db = getDBConnection();
	if($db != NULL){
		$res = $db->query($sql);
		if ($res && $row = $res->fetch_assoc()){
			if($row['password'] == $password){
				$_SESSION["user"] = $row['fname'];
				$_SESSION["id"] = $row['uid'];
				return true;
			}
		}
        $db->close();
	}
	return false;
}

function saveUser($email,$fname, $lname, $password, $role){
	$password = sha1($password);
	$sql = "INSERT INTO `user` (`uid`,`fname`, `lname`, `email`, `password`,`type`, `role`) VALUES (NULL,'$fname', '$lname', '$email', '$password','Student', '$role');";
	$id = -1;
	$db = getDBConnection();
	if ($db != NULL){
		$res = $db->query($sql);
			if ($res && $db->insert_id > 0){
			$id = $db->insert_id;
			$_SESSION["user"] = $fname;
			$_SESSION["id"] = $id;

			$storage = new \Upload\Storage\FileSystem('./images/profile');
			$file = new \Upload\File('pic', $storage);

			// Optionally you can rename the file on upload
			$new_filename = uniqid();
			$file->setName($new_filename);

			// Validate file upload
			// MimeType List => http://www.iana.org/assignments/media-types/media-types.xhtml
			$file->addValidations(array(
				// Ensure file is of type "image/png"
				//new \Upload\Validation\Mimetype('image/png', 'image/jpeg', 'image/jpg'),

				//You can also add multi mimetype validation
				new \Upload\Validation\Mimetype(array('image/png','image/jpeg', 'image/jpg')),

				// Ensure file is no larger than 5M (use "B", "K", M", or "G")
				new \Upload\Validation\Size('10M')
			));

			// Access data about the file that has been uploaded
			$data = array(
				'name'       => $file->getNameWithExtension(),
				'extension'  => $file->getExtension(),
				'mime'       => $file->getMimetype(),
				'size'       => $file->getSize(),
				'md5'        => $file->getMd5(),
				'dimensions' => $file->getDimensions()
			);

			// Try to upload file
			try {
				// Success!
				$file->upload();
				$filename = $data['name'];
				$filepath = "images/profile/".$data['name'];
				$filetype = $data['mime'];
				$sql = "INSERT INTO `pro_pic` (`pic_id` , `uid` ,`img_name` , `img_path` , `img_type`) VALUES (NULL,'$id','$filename','$filepath','$filetype')";
				$result = $db->query($sql);
			} catch (\Exception $e) {
				// Fail!
				$errors = $file->getErrors();
			}


		}
		$db->close();
	}
	return $id;
}
/*
function loadProjects(){
			$db = getDBConnection();
                    $sql = "SELECT * FROM `project_details` INNER JOIN `project_image` ON project_image.proj_id = project_details.proj_id";
                    if ($db != NULL){
		                $res = $db->query($sql);
                        while($row = $res->fetch_assoc()){
                            echo "<div class=\"col-sm-6 col-md-4 col-lg-3 mt-4\">";
                            echo "<div class=\"card\">";
                                echo "<img class=\"card-img-top\" src=\"".$row['image_path']."\">";
                                echo "<div class=\"card-block\">";
                                    echo "<figure class=\"profile\">";
                                        echo "<img src=\"../templates/images/placeholder.png\" class=\"profile-avatar\" alt=\"\">";
                                    echo "</figure>";
                                    echo "<h4 class=\"card-title mt-3\">".$row['name']."</h4>";
                                    echo "<div class=\"meta\">";
                                        echo "<a>UWE-Find Inc &copy;</a></div>";
                                    echo "<div class=\"card-text\">".$row['proj_description']."</div>";
                                    echo "<div class=\"card-footer\">";
                                    echo "<small>".$row['last_updated']."</small>";
                                    echo "<button class=\"btn btn-secondary btn-md\" id =\"btn-today\">Read More <span><i class=\"glyphicon glyphicon-star\"></i></span></button>";
                                    echo "</div></div></div>";
                                    $row = $res->fetch_assoc();
                        }
						$db->close();
                    }
                    
}*/

function getProjects(){
	$db = getDBConnection();
	$projects = [];
	if ($db != null){
		$sql = "SELECT * FROM `project_details` INNER JOIN `project_image` ON project_image.proj_id = project_details.proj_id";
		$res = $db->query($sql);
		while($res && $row = $res->fetch_assoc()){
			$projects[] = $row;
		}
		$db->close();
	}
	return $projects;
}