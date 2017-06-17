<?php
/**
 * Inlis Members (inlis-members)
 * @var $this MemberController
 * @var $data InlisMembers
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

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MemberNo')); ?>:</b>
	<?php echo CHtml::encode($data->MemberNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fullname')); ?>:</b>
	<?php echo CHtml::encode($data->Fullname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PlaceOfBirth')); ?>:</b>
	<?php echo CHtml::encode($data->PlaceOfBirth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateOfBirth')); ?>:</b>
	<?php echo CHtml::encode($data->DateOfBirth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Address')); ?>:</b>
	<?php echo CHtml::encode($data->Address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AddressNow')); ?>:</b>
	<?php echo CHtml::encode($data->AddressNow); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Phone')); ?>:</b>
	<?php echo CHtml::encode($data->Phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InstitutionName')); ?>:</b>
	<?php echo CHtml::encode($data->InstitutionName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InstitutionAddress')); ?>:</b>
	<?php echo CHtml::encode($data->InstitutionAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InstitutionPhone')); ?>:</b>
	<?php echo CHtml::encode($data->InstitutionPhone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdentityType')); ?>:</b>
	<?php echo CHtml::encode($data->IdentityType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdentityNo')); ?>:</b>
	<?php echo CHtml::encode($data->IdentityNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EducationLevel')); ?>:</b>
	<?php echo CHtml::encode($data->EducationLevel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Religion')); ?>:</b>
	<?php echo CHtml::encode($data->Religion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sex')); ?>:</b>
	<?php echo CHtml::encode($data->Sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MaritalStatus')); ?>:</b>
	<?php echo CHtml::encode($data->MaritalStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JobName')); ?>:</b>
	<?php echo CHtml::encode($data->JobName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RegisterDate')); ?>:</b>
	<?php echo CHtml::encode($data->RegisterDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EndDate')); ?>:</b>
	<?php echo CHtml::encode($data->EndDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BarCode')); ?>:</b>
	<?php echo CHtml::encode($data->BarCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PicPath')); ?>:</b>
	<?php echo CHtml::encode($data->PicPath); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MotherMaidenName')); ?>:</b>
	<?php echo CHtml::encode($data->MotherMaidenName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->Email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JenisPermohonan')); ?>:</b>
	<?php echo CHtml::encode($data->JenisPermohonan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JenisPermohonanName')); ?>:</b>
	<?php echo CHtml::encode($data->JenisPermohonanName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JenisAnggota')); ?>:</b>
	<?php echo CHtml::encode($data->JenisAnggota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JenisAnggotaName')); ?>:</b>
	<?php echo CHtml::encode($data->JenisAnggotaName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StatusAnggota')); ?>:</b>
	<?php echo CHtml::encode($data->StatusAnggota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StatusAnggotaName')); ?>:</b>
	<?php echo CHtml::encode($data->StatusAnggotaName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Handphone')); ?>:</b>
	<?php echo CHtml::encode($data->Handphone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ParentName')); ?>:</b>
	<?php echo CHtml::encode($data->ParentName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ParentAddress')); ?>:</b>
	<?php echo CHtml::encode($data->ParentAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ParentPhone')); ?>:</b>
	<?php echo CHtml::encode($data->ParentPhone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ParentHandphone')); ?>:</b>
	<?php echo CHtml::encode($data->ParentHandphone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nationality')); ?>:</b>
	<?php echo CHtml::encode($data->Nationality); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LoanReturnLateCount')); ?>:</b>
	<?php echo CHtml::encode($data->LoanReturnLateCount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Branch_id')); ?>:</b>
	<?php echo CHtml::encode($data->Branch_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('User_id')); ?>:</b>
	<?php echo CHtml::encode($data->User_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CreateBy')); ?>:</b>
	<?php echo CHtml::encode($data->CreateBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CreateDate')); ?>:</b>
	<?php echo CHtml::encode($data->CreateDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CreateTerminal')); ?>:</b>
	<?php echo CHtml::encode($data->CreateTerminal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UpdateBy')); ?>:</b>
	<?php echo CHtml::encode($data->UpdateBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UpdateDate')); ?>:</b>
	<?php echo CHtml::encode($data->UpdateDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UpdateTerminal')); ?>:</b>
	<?php echo CHtml::encode($data->UpdateTerminal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AlamatDomisili')); ?>:</b>
	<?php echo CHtml::encode($data->AlamatDomisili); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RT')); ?>:</b>
	<?php echo CHtml::encode($data->RT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RW')); ?>:</b>
	<?php echo CHtml::encode($data->RW); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kelurahan')); ?>:</b>
	<?php echo CHtml::encode($data->Kelurahan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kecamatan')); ?>:</b>
	<?php echo CHtml::encode($data->Kecamatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kota')); ?>:</b>
	<?php echo CHtml::encode($data->Kota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KodePos')); ?>:</b>
	<?php echo CHtml::encode($data->KodePos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NoHp')); ?>:</b>
	<?php echo CHtml::encode($data->NoHp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NamaDarurat')); ?>:</b>
	<?php echo CHtml::encode($data->NamaDarurat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TelpDarurat')); ?>:</b>
	<?php echo CHtml::encode($data->TelpDarurat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AlamatDarurat')); ?>:</b>
	<?php echo CHtml::encode($data->AlamatDarurat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StatusHubunganDarurat')); ?>:</b>
	<?php echo CHtml::encode($data->StatusHubunganDarurat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('City')); ?>:</b>
	<?php echo CHtml::encode($data->City); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Province')); ?>:</b>
	<?php echo CHtml::encode($data->Province); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CityNow')); ?>:</b>
	<?php echo CHtml::encode($data->CityNow); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProvinceNow')); ?>:</b>
	<?php echo CHtml::encode($data->ProvinceNow); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JobNameDetail')); ?>:</b>
	<?php echo CHtml::encode($data->JobNameDetail); ?>
	<br />

	*/ ?>

</div>