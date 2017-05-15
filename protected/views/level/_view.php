<?php
/**
 * User Levels (user-level)
 * @var $this LevelController
 * @var $data UserLevel
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @created date 15 May 2017, 18:25 WIB
 * @link http://opensource.ommu.co
 * @contact (+62)856-299-4114
 *
 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('level_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->level_id), array('view', 'id'=>$data->level_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('publish')); ?>:</b>
	<?php echo CHtml::encode($data->publish); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level_name')); ?>:</b>
	<?php echo CHtml::encode($data->level_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level_desc')); ?>:</b>
	<?php echo CHtml::encode($data->level_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_date')); ?>:</b>
	<?php echo CHtml::encode($data->creation_date); ?>
	<br />


</div>