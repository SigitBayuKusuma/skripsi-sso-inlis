<?php
/**
 * User Levels (user-level)
 * @var $this LevelController
 * @var $model UserLevel
 * @var $form CActiveForm
 * version: 0.0.1
 *
 * @author Sigit Bayu Kusuma <sigitbayukusuma@gmail.com>
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @created date 15 May 2017, 18:25 WIB
 * @link http://opensource.ommu.co
 * @contact (+62)83869898725
 *
 */

	$this->breadcrumbs=array(
		'User Levels'=>array('manage'),
		'Publish',
	);
?>

<?php $form=$this->beginWidget('application.components.system.OActiveForm', array(
	'id'=>'user-level-form',
	'enableAjaxValidation'=>true,
	//'htmlOptions' => array('enctype' => 'multipart/form-data')
)); ?>

	<div class="dialog-content">
		<?php echo $model->publish == 1 ? Yii::t('phrase', 'Are you sure you want to unpublish this item?') : Yii::t('phrase', 'Are you sure you want to publish this item?')?>
		<?php //echo $model->actived == 1 ? Yii::t('phrase', 'Are you sure you want to deactived this item?') : Yii::t('phrase', 'Are you sure you want to actived this item?')?>
		<?php //echo $model->enabled == 1 ? Yii::t('phrase', 'Are you sure you want to disabled this item?') : Yii::t('phrase', 'Are you sure you want to enabled this item?')?>
		<?php //echo $model->status == 1 ? Yii::t('phrase', 'Are you sure you want to unresolved this item?') : Yii::t('phrase', 'Are you sure you want to resolved this item?')?>
	</div>
	<div class="dialog-submit">
		<?php echo CHtml::submitButton($title, array('onclick' => 'setEnableSave()')); ?>
		<?php echo CHtml::button(Yii::t('phrase', 'Cancel'), array('id'=>'closed')); ?>
	</div>
	
<?php $this->endWidget(); ?>
