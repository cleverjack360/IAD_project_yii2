<?php

use yii\helpers\Html;
//use app\models\Gameinfo;
use yii\widgets\DetailView;
/* 
	$allProducts = gameinfo::find()
    ->asArray()
    ->all();
 */
?>
<?= Html::csrfMetaTags() ?>
<div class="row">

	<h1>All Reviews List:</h1>
	
			<?php// foreach($allProducts as $item): ?>
			<?php// endforeach; ?>
			
			
			 <div class="form-group">
                   
					
					
					
					<a href="http://localhost/advanced/backend/web/index.php?r=gameinfo" class="btn btn-info" >Game</a>
					
					
					<a href="http://localhost/advanced/backend/web/index.php?r=companies" class="btn btn-info" >Companies</a>
					
					
					<a href="http://localhost/advanced/frontend/web/index.php?r=reviews" class="btn btn-info" >Reviews</a>
					
					<p><a href='http://localhost/advanced/frontend/web/index.php?r=site%2Freview'><button class='pull-right'>See All Reviews</button></a></p>

					
					
                </div>
			
</div>