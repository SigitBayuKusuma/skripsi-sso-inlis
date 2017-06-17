<?php
/**
 * Users (users)
 * @var $this UserController
 * @var $model Users
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
		$model->user_id,
	);
?>

<div class="dialog-content">
	<?php $this->widget('application.components.system.FDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			array(
				'name'=>'user_id',
				'value'=>$model->user_id,
			),
			array(
				'name'=>'publish',
				'value'=>$model->publish == '1' ? CHtml::image(Yii::app()->theme->baseUrl.'/images/icons/publish.png') : CHtml::image(Yii::app()->theme->baseUrl.'/images/icons/unpublish.png'),
				'type'=>'raw',
			),
			array(
				'name'=>'level_id',
				'value'=>$model->level_id,
				//'value'=>$model->level_id != '' ? $model->level_id : '-',
			),
			array(
				'name'=>'member_id',
				'value'=>$model->member_id,
				//'value'=>$model->member_id != '' ? $model->member_id : '-',
			),
			array(
				'name'=>'email',
				'value'=>$model->email,
				//'value'=>$model->email != '' ? $model->email : '-',
			),
			array(
				'name'=>'password',
				'value'=>$model->password,
				//'value'=>$model->password != '' ? $model->password : '-',
			),
			array(
				'name'=>'creation_date',
				'value'=>!in_array($model->creation_date, array('0000-00-00 00:00:00','1970-01-01 00:00:00')) ? Utility::dateFormat($model->creation_date, true) : '-',
			),
		),
	)); ?>
</div>
<div class="dialog-submit">
	<?php echo CHtml::button(Yii::t('phrase', 'Close'), array('id'=>'closed')); ?>
</div>
