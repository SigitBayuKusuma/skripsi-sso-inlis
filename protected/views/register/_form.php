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

			

			<div class="clearfix">
			<?php echo $form->labelEx($model,'email'); ?>
			<div class="desc">
				<?php echo $form->textField($model,'email',array('maxlength'=>32)); ?>
				<?php echo $form->error($model,'email'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'password_input'); ?>
			<div class="desc">
				<?php echo $form->passwordField($model,'password_input',array('maxlength'=>32,'class'=>'span-6')); ?>
				<?php echo $form->error($model,'password_input'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'confirm_password_input'); ?>
			<div class="desc">
				<?php echo $form->passwordField($model,'confirm_password_input',array('maxlength'=>32,'class'=>'span-6')); ?>
				<?php echo $form->error($model,'confirm_password_input'); ?>
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


