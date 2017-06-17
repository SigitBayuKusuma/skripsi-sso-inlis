<?php
/**
 * Users (users)
 * @var $this UserController
 * @var $model Users
 * @var $form CActiveForm
 * version: 0.0.1
 *
 * @author Sigit Bayu Kusuma <sigitbayukusuma@gmail.com>
 * @copyright Copyright (c) 2017 Sigit Bayu Kusuma
 * @created date 15 May 2017, 18:25 WIB
 * @link https://www.instagram.com/s.bayukusuma/
 * @contact (+62)83869898725
 *
 */

	$this->breadcrumbs=array(
		'Users'=>array('manage'),
		$model->user_id=>array('view','id'=>$model->user_id),
		'Update',
	);
?>

<div class="form">
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
