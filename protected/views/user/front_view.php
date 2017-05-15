<?php
/**
 * Users (users)
 * @var $this UserController
 * @var $model Users
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @created date 15 May 2017, 18:25 WIB
 * @link http://opensource.ommu.co
 * @contact (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Users'=>array('manage'),
		$model->user_id,
	);
?>

<?php //begin.Messages ?>
<?php
if(Yii::app()->user->hasFlash('success'))
	echo Utility::flashSuccess(Yii::app()->user->getFlash('success'));
?>
<?php //end.Messages ?>

<?php $this->widget('application.components.system.FDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'name'=>'user_id',
			'value'=>$model->user_id,
			//'value'=>$model->user_id != '' ? $model->user_id : '-',
		),
		array(
			'name'=>'publish',
			'value'=>$model->publish == '1' ? Chtml::image(Yii::app()->theme->baseUrl.'/images/icons/publish.png') : Chtml::image(Yii::app()->theme->baseUrl.'/images/icons/unpublish.png'),
			//'value'=>$model->publish,
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

<div class="dialog-content">
</div>
<div class="dialog-submit">
	<?php echo CHtml::button(Yii::t('phrase', 'Close'), array('id'=>'closed')); ?>
</div>
