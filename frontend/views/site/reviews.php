<?php

use yii\helpers\Html;
//use app\..\backend\models\Gameinfo;
use app\models\Gameinfo;
use app\models\Review;
use yii\widgets\DetailView;


	$allReviews = Review::find()
    ->asArray()
    ->all();

?>

<div class="row">

	<h1>All Reviews:</h1>
	
			<?php foreach($allReviews as $r): ?>
			
			
				<?php
				$id = $r['game_id'];
					/* 
					$id = $r['id'];
					
					 $game = Gameinfo::find()
										->where(['game_id' => '$id'])
										->asArray()
										->all();
										
										
					$x = Reviews::find()->where(['id' => '$id'])->one();					
					$g = $x->gameinfo;
 */
									
					//$x = Review::find()->where(['id' => '$id']);

					//$g = $x->Gameinfo;
					
					$game = Gameinfo::find()
										//->where(['game_id' => '$id'])
										->asArray();
				?>
			

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">

						    <div class="caption">
							
                                <h4 class="pull-left"><?= "User - ".$r['user_name'] ?></h4>
								
								<br><hr>
								
								<h4 class="pull-left"><?= "Game - ".$r['game_name'] ?></h4>
								
								<br><hr>
								
								<h4 class="pull-left"><?= "Review: "?></h4>
								<br><br>
								<p><?= $r['review'] ?><p>

                                
								
                            </div>
							
                            <div class="ratings">
							
								
								<br><hr>
								
                                <p class="pull-right">15 reviews</p>
								
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
					
			<?php endforeach; ?>
</div>