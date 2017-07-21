<?php

/* @var $this yii\web\View */

$this->title = 'Gamey Fii';
?>

<?php

 if(Yii::$app->user->isGuest){
     //not logged user
		include 'welcome.php';
	 
    }else{
     //loggedin user
	 	 include 'home.php';

    }
	 
?>

