<?php
/**
 * Inlis Members (inlis-members)
 * @var $this MemberController
 * @var $model InlisMembers
 * @var $form CActiveForm
 * version: 0.0.1
 *
 * @author Sigit Bayu Kusuma <sigitbayukusuma@gmail.com>
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @created date 23 May 2017, 18:43 WIB
 * @link http://opensource.ommu.co
 * @contact (+62)83869898725
 *
 */
?>

<?php $form=$this->beginWidget('application.components.system.OActiveForm', array(
	'id'=>'inlis-members-form',
	'enableAjaxValidation'=>true,
	//'htmlOptions' => array('enctype' => 'multipart/form-data')
)); ?>

<?php //begin.Messages ?>
<div id="ajax-message">
	<?php echo $form->errorSummary($model); ?>
</div>
<?php //begin.Messages ?>

<fieldset>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'MemberNo'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'MemberNo',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'MemberNo'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'Fullname'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'Fullname',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'Fullname'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'PlaceOfBirth'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'PlaceOfBirth',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'PlaceOfBirth'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'DateOfBirth'); ?>
		<div class="desc">
			<?php
			$model->DateOfBirth = !$model->isNewRecord ? (!in_array($model->DateOfBirth, array('0000-00-00','1970-01-01')) ? date('d-m-Y', strtotime($model->DateOfBirth)) : '') : '';
			//echo $form->textField($model,'DateOfBirth');
			$this->widget('application.components.system.CJuiDatePicker',array(
				'model'=>$model,
				'attribute'=>'DateOfBirth',
				//'mode'=>'datetime',
				'options'=>array(
					'dateFormat' => 'dd-mm-yy',
				),
				'htmlOptions'=>array(
					'class' => 'span-4',
				 ),
			)); ?>
			<?php echo $form->error($model,'DateOfBirth'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'Address'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'Address',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'Address'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'AddressNow'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'AddressNow',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'AddressNow'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'Phone'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'Phone',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'Phone'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'InstitutionName'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'InstitutionName',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'InstitutionName'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'InstitutionAddress'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'InstitutionAddress',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'InstitutionAddress'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'InstitutionPhone'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'InstitutionPhone',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'InstitutionPhone'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'IdentityType'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'IdentityType',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'IdentityType'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'IdentityNo'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'IdentityNo',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'IdentityNo'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'EducationLevel'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'EducationLevel',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'EducationLevel'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'Religion'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'Religion',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'Religion'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'Sex'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'Sex',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'Sex'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'MaritalStatus'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'MaritalStatus',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'MaritalStatus'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'JobName'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'JobName',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'JobName'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'RegisterDate'); ?>
		<div class="desc">
			<?php
			$model->RegisterDate = !$model->isNewRecord ? (!in_array($model->RegisterDate, array('0000-00-00','1970-01-01')) ? date('d-m-Y', strtotime($model->RegisterDate)) : '') : '';
			//echo $form->textField($model,'RegisterDate');
			$this->widget('application.components.system.CJuiDatePicker',array(
				'model'=>$model,
				'attribute'=>'RegisterDate',
				//'mode'=>'datetime',
				'options'=>array(
					'dateFormat' => 'dd-mm-yy',
				),
				'htmlOptions'=>array(
					'class' => 'span-4',
				 ),
			)); ?>
			<?php echo $form->error($model,'RegisterDate'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'EndDate'); ?>
		<div class="desc">
			<?php
			$model->EndDate = !$model->isNewRecord ? (!in_array($model->EndDate, array('0000-00-00','1970-01-01')) ? date('d-m-Y', strtotime($model->EndDate)) : '') : '';
			//echo $form->textField($model,'EndDate');
			$this->widget('application.components.system.CJuiDatePicker',array(
				'model'=>$model,
				'attribute'=>'EndDate',
				//'mode'=>'datetime',
				'options'=>array(
					'dateFormat' => 'dd-mm-yy',
				),
				'htmlOptions'=>array(
					'class' => 'span-4',
				 ),
			)); ?>
			<?php echo $form->error($model,'EndDate'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'BarCode'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'BarCode',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'BarCode'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'PicPath'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'PicPath',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'PicPath'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'MotherMaidenName'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'MotherMaidenName',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'MotherMaidenName'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'Email'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'Email',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'Email'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'JenisPermohonan'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'JenisPermohonan',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'JenisPermohonan'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'JenisPermohonanName'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'JenisPermohonanName',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'JenisPermohonanName'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'JenisAnggota'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'JenisAnggota',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'JenisAnggota'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'JenisAnggotaName'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'JenisAnggotaName',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'JenisAnggotaName'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'StatusAnggota'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'StatusAnggota',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'StatusAnggota'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'StatusAnggotaName'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'StatusAnggotaName',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'StatusAnggotaName'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'Handphone'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'Handphone',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'Handphone'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'ParentName'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'ParentName',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'ParentName'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'ParentAddress'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'ParentAddress',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'ParentAddress'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'ParentPhone'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'ParentPhone',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'ParentPhone'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'ParentHandphone'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'ParentHandphone',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'ParentHandphone'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'Nationality'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'Nationality',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'Nationality'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'LoanReturnLateCount'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'LoanReturnLateCount'); ?>
			<?php echo $form->error($model,'LoanReturnLateCount'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'Branch_id'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'Branch_id'); ?>
			<?php echo $form->error($model,'Branch_id'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'User_id'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'User_id'); ?>
			<?php echo $form->error($model,'User_id'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'CreateBy'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'CreateBy',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'CreateBy'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'CreateDate'); ?>
		<div class="desc">
			<?php
			$model->CreateDate = !$model->isNewRecord ? (!in_array($model->CreateDate, array('0000-00-00','1970-01-01')) ? date('d-m-Y', strtotime($model->CreateDate)) : '') : '';
			//echo $form->textField($model,'CreateDate');
			$this->widget('application.components.system.CJuiDatePicker',array(
				'model'=>$model,
				'attribute'=>'CreateDate',
				//'mode'=>'datetime',
				'options'=>array(
					'dateFormat' => 'dd-mm-yy',
				),
				'htmlOptions'=>array(
					'class' => 'span-4',
				 ),
			)); ?>
			<?php echo $form->error($model,'CreateDate'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'CreateTerminal'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'CreateTerminal',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'CreateTerminal'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'UpdateBy'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'UpdateBy',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'UpdateBy'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'UpdateDate'); ?>
		<div class="desc">
			<?php
			$model->UpdateDate = !$model->isNewRecord ? (!in_array($model->UpdateDate, array('0000-00-00','1970-01-01')) ? date('d-m-Y', strtotime($model->UpdateDate)) : '') : '';
			//echo $form->textField($model,'UpdateDate');
			$this->widget('application.components.system.CJuiDatePicker',array(
				'model'=>$model,
				'attribute'=>'UpdateDate',
				//'mode'=>'datetime',
				'options'=>array(
					'dateFormat' => 'dd-mm-yy',
				),
				'htmlOptions'=>array(
					'class' => 'span-4',
				 ),
			)); ?>
			<?php echo $form->error($model,'UpdateDate'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'UpdateTerminal'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'UpdateTerminal',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'UpdateTerminal'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'AlamatDomisili'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'AlamatDomisili',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'AlamatDomisili'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'RT'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'RT',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'RT'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'RW'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'RW',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'RW'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'Kelurahan'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'Kelurahan',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'Kelurahan'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'Kecamatan'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'Kecamatan',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'Kecamatan'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'Kota'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'Kota',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'Kota'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'KodePos'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'KodePos',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'KodePos'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'NoHp'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'NoHp',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'NoHp'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'NamaDarurat'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'NamaDarurat',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'NamaDarurat'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'TelpDarurat'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'TelpDarurat',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'TelpDarurat'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'AlamatDarurat'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'AlamatDarurat',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'AlamatDarurat'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'StatusHubunganDarurat'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'StatusHubunganDarurat',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'StatusHubunganDarurat'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'City'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'City',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'City'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'Province'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'Province',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'Province'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'CityNow'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'CityNow',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'CityNow'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'ProvinceNow'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'ProvinceNow',array('size'=>45,'maxlength'=>45)); ?>
			<?php echo $form->error($model,'ProvinceNow'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo $form->labelEx($model,'JobNameDetail'); ?>
		<div class="desc">
			<?php echo $form->textField($model,'JobNameDetail',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'JobNameDetail'); ?>
			<?php /*<div class="small-px silent"></div>*/?>
		</div>
	</div>

	<div class="submit clearfix">
		<label>&nbsp;</label>
		<div class="desc">
			<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('phrase', 'Create') : Yii::t('phrase', 'Save'), array('onclick' => 'setEnableSave()')); ?>
		</div>
	</div>

</fieldset>
<?php /*
<div class="dialog-content">
</div>
<div class="dialog-submit">
	<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('phrase', 'Create') : Yii::t('phrase', 'Save') ,array('onclick' => 'setEnableSave()')); ?>
	<?php echo CHtml::button(Yii::t('phrase', 'Cancel'), array('id'=>'closed')); ?>
</div>
*/?>
<?php $this->endWidget(); ?>


