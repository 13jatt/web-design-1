<?php defined('PHP_') OR die('Locking direct access to script');
if($index=='contact'){
	$form['email']=isset($_POST['email']) ?$_POST['email']:'';
		if (empty($form['email'])){
			$data['error']="Missing required fields";
			return $form;
		}
	
	if (!filter_var($form['email'],FILTER_VALIDATE_EMAIL)){
	$data['error']="Must be a valid email";
	return $form;	
	}
}
if($index=='contact'&& $action=='new'){
 //header('Location:index.php?status success')	
 $data['status']="success";
 return true;
}