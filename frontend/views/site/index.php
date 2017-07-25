<?php

/* @var $this yii\web\View */

$this->title = 'Gamey Fii';

//<p><a href='index.php?add_cart=$pro_id'><button class='pull-right'>Buy</button></a></p>

?>

<?php

 if(Yii::$app->user->isGuest){
     //not logged user
		include 'welcome.php';
	 include 'reviews.php';
		
    }else{
     //loggedin user
	 	include 'home.php';

		//include 'reviews.php';
		
		
		

    }
	 
?>

