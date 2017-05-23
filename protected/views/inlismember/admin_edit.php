<?php
/**
 * Inlis Members (inlis-members)
 * @var $this InlismemberController
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

	$this->breadcrumbs=array(
		'Inlis Members'=>array('manage'),
		$model->ID=>array('view','id'=>$model->ID),
		'Update',
	);
?>

<div class="form">
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
