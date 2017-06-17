<?php
/**
 * Users (users)
 * @var $this RegisterController
 * @var $model Users
 * @var $form CActiveForm
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @created date 17 June 2017, 10:43 WIB
 * @link http://opensource.ommu.co
 * @contact (+62)856-299-4114
 *
 */
?>

<?php $form=$this->beginWidget('application.components.system.OActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>true,
	'htmlOptions' => array(
		'enctype' => 'multipart/form-data',
		'on_post' => '',
	),
)); ?>

<div class="dialog-content">
	<fieldset>
		<?php if($step == 1) {?>
			<div class="clearfix">
				<label>Member Number</label>
				<div class="desc">
					<input type="text" name="MemberNo">
					<?php if(Yii::app()->user->hasFlash('errorMemberNumberNull')) {
						echo '<div class="errorMessage">'.Yii::app()->user->getFlash('errorMemberNumberNull').'</div>';
					}?>
				</div>
			</div>
		
		<?php } else if($step == 2) {?>
			<div class="clearfix">
				<label>Fullname</label>
				<div class="desc">
					<input type="text" name="Fullname" value="<?php echo $member->Fullname;?>">
				</div>
			</div>
			
			<div class="clearfix">
				<label>DateOfBirth</label>
				<div class="desc">
					<input type="text" name="DateOfBirth">
					<?php if(Yii::app()->user->hasFlash('errorMemberDateOfBirthNull')) {
						echo '<div class="errorMessage">'.Yii::app()->user->getFlash('errorMemberDateOfBirthNull').'</div>';
					}?>
				</div>
			</div>
		
		<?php } else if($step == 3) {?>
			<?php //begin.Messages ?>
			<div id="ajax-message">
				<?php echo $form->errorSummary($model); ?>
			</div>
			<?php //begin.Messages ?>

			<div class="clearfix publish">
				<?php echo $form->labelEx($model,'publish'); ?>
				<div class="desc">
					<?php echo $form->checkBox($model,'publish'); ?>
					<?php echo $form->labelEx($model,'publish'); ?>
					<?php echo $form->error($model,'publish'); ?>
					<?php /*<div class="small-px silent"></div>*/?>
				</div>
			</div>

			<div class="clearfix">
				<?php echo $form->labelEx($model,'level_id'); ?>
				<div class="desc">
					<?php echo $form->textField($model,'level_id'); ?>
					<?php echo $form->error($model,'level_id'); ?>
					<?php /*<div class="small-px silent"></div>*/?>
				</div>
			</div>

			<div class="clearfix">
				<?php echo $form->labelEx($model,'member_id'); ?>
				<div class="desc">
					<?php echo $form->textField($model,'member_id',array('size'=>11,'maxlength'=>11)); ?>
					<?php echo $form->error($model,'member_id'); ?>
					<?php /*<div class="small-px silent"></div>*/?>
				</div>
			</div>

			<div class="clearfix">
				<?php echo $form->labelEx($model,'email'); ?>
				<div class="desc">
					<?php echo $form->textField($model,'email',array('size'=>32,'maxlength'=>32)); ?>
					<?php echo $form->error($model,'email'); ?>
					<?php /*<div class="small-px silent"></div>*/?>
				</div>
			</div>

			<div class="clearfix">
				<?php echo $form->labelEx($model,'password'); ?>
				<div class="desc">
					<?php echo $form->passwordField($model,'password',array('size'=>32,'maxlength'=>32)); ?>
					<?php echo $form->error($model,'password'); ?>
					<?php /*<div class="small-px silent"></div>*/?>
				</div>
			</div>		
		<?php }?>

	</fieldset>
</div>
<div class="dialog-submit">
	<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('phrase', 'Create') : Yii::t('phrase', 'Save') ,array('onclick' => 'setEnableSave()')); ?>
	<?php echo CHtml::button(Yii::t('phrase', 'Cancel'), array('id'=>'closed')); ?>
</div>
<?php $this->endWidget(); ?>


