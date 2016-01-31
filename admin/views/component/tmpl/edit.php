<?php
/*--------------------------------------------------------------------------------------------------------|  www.vdm.io  |------/
    __      __       _     _____                 _                                  _     __  __      _   _               _
    \ \    / /      | |   |  __ \               | |                                | |   |  \/  |    | | | |             | |
     \ \  / /_ _ ___| |_  | |  | | _____   _____| | ___  _ __  _ __ ___   ___ _ __ | |_  | \  / | ___| |_| |__   ___   __| |
      \ \/ / _` / __| __| | |  | |/ _ \ \ / / _ \ |/ _ \| '_ \| '_ ` _ \ / _ \ '_ \| __| | |\/| |/ _ \ __| '_ \ / _ \ / _` |
       \  / (_| \__ \ |_  | |__| |  __/\ V /  __/ | (_) | |_) | | | | | |  __/ | | | |_  | |  | |  __/ |_| | | | (_) | (_| |
        \/ \__,_|___/\__| |_____/ \___| \_/ \___|_|\___/| .__/|_| |_| |_|\___|_| |_|\__| |_|  |_|\___|\__|_| |_|\___/ \__,_|
                                                        | |                                                                 
                                                        |_| 				
/-------------------------------------------------------------------------------------------------------------------------------/

	@version		2.0.8
	@build			31st January, 2016
	@created		30th April, 2015
	@package		Component Builder
	@subpackage		edit.php
	@author			Llewellyn van der Merwe <https://www.vdm.io/joomla-component-builder>
	@my wife		Roline van der Merwe <http://www.vdm.io/>	
	@copyright		Copyright (C) 2015. All Rights Reserved
	@license		GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html 
	
	Builds Complex Joomla Components 
                                                             
/-----------------------------------------------------------------------------------------------------------------------------*/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');
JHtml::_('behavior.keepalive');
$componentParams = JComponentHelper::getParams('com_componentbuilder');
?>

<form action="<?php echo JRoute::_('index.php?option=com_componentbuilder&layout=edit&id='.(int) $this->item->id.$this->referral); ?>" method="post" name="adminForm" id="adminForm" class="form-validate" enctype="multipart/form-data">

	<?php echo JLayoutHelper::render('component.details_above', $this); ?><div class="form-horizontal">

	<?php echo JHtml::_('bootstrap.startTabSet', 'componentTab', array('active' => 'details')); ?>

	<?php echo JHtml::_('bootstrap.addTab', 'componentTab', 'details', JText::_('COM_COMPONENTBUILDER_COMPONENT_DETAILS', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span6">
				<?php echo JLayoutHelper::render('component.details_left', $this); ?>
			</div>
			<div class="span6">
				<?php echo JLayoutHelper::render('component.details_right', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php echo JHtml::_('bootstrap.addTab', 'componentTab', 'settings', JText::_('COM_COMPONENTBUILDER_COMPONENT_SETTINGS', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span6">
				<?php echo JLayoutHelper::render('component.settings_left', $this); ?>
			</div>
			<div class="span6">
				<?php echo JLayoutHelper::render('component.settings_right', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php echo JHtml::_('bootstrap.addTab', 'componentTab', 'scripts', JText::_('COM_COMPONENTBUILDER_COMPONENT_SCRIPTS', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
		</div>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<?php echo JLayoutHelper::render('component.scripts_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php echo JHtml::_('bootstrap.addTab', 'componentTab', 'readme', JText::_('COM_COMPONENTBUILDER_COMPONENT_README', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span6">
				<?php echo JLayoutHelper::render('component.readme_left', $this); ?>
			</div>
			<div class="span6">
				<?php echo JLayoutHelper::render('component.readme_right', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php echo JHtml::_('bootstrap.addTab', 'componentTab', 'admin_views', JText::_('COM_COMPONENTBUILDER_COMPONENT_ADMIN_VIEWS', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
		</div>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<?php echo JLayoutHelper::render('component.admin_views_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php echo JHtml::_('bootstrap.addTab', 'componentTab', 'site_views', JText::_('COM_COMPONENTBUILDER_COMPONENT_SITE_VIEWS', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
		</div>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<?php echo JLayoutHelper::render('component.site_views_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php echo JHtml::_('bootstrap.addTab', 'componentTab', 'publishing', JText::_('COM_COMPONENTBUILDER_COMPONENT_PUBLISHING', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span6">
				<?php echo JLayoutHelper::render('component.publishing', $this); ?>
			</div>
			<div class="span6">
				<?php echo JLayoutHelper::render('component.publlshing', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php echo JHtml::_('bootstrap.endTabSet'); ?>

	<div>
		<input type="hidden" name="task" value="component.edit" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</div>

<div class="clearfix"></div>
<?php echo JLayoutHelper::render('component.details_under', $this); ?>
</form>

<script type="text/javascript">

// #jform_add_php_helper_admin listeners for add_php_helper_admin_rNqIMxK function
jQuery('#jform_add_php_helper_admin').on('keyup',function()
{
	var add_php_helper_admin_rNqIMxK = jQuery("#jform_add_php_helper_admin input[type='radio']:checked").val();
	rNqIMxK(add_php_helper_admin_rNqIMxK);

});
jQuery('#adminForm').on('change', '#jform_add_php_helper_admin',function (e)
{
	e.preventDefault();
	var add_php_helper_admin_rNqIMxK = jQuery("#jform_add_php_helper_admin input[type='radio']:checked").val();
	rNqIMxK(add_php_helper_admin_rNqIMxK);

});

// #jform_add_php_helper_site listeners for add_php_helper_site_lLxdlLP function
jQuery('#jform_add_php_helper_site').on('keyup',function()
{
	var add_php_helper_site_lLxdlLP = jQuery("#jform_add_php_helper_site input[type='radio']:checked").val();
	lLxdlLP(add_php_helper_site_lLxdlLP);

});
jQuery('#adminForm').on('change', '#jform_add_php_helper_site',function (e)
{
	e.preventDefault();
	var add_php_helper_site_lLxdlLP = jQuery("#jform_add_php_helper_site input[type='radio']:checked").val();
	lLxdlLP(add_php_helper_site_lLxdlLP);

});

// #jform_add_css listeners for add_css_OVrrrls function
jQuery('#jform_add_css').on('keyup',function()
{
	var add_css_OVrrrls = jQuery("#jform_add_css input[type='radio']:checked").val();
	OVrrrls(add_css_OVrrrls);

});
jQuery('#adminForm').on('change', '#jform_add_css',function (e)
{
	e.preventDefault();
	var add_css_OVrrrls = jQuery("#jform_add_css input[type='radio']:checked").val();
	OVrrrls(add_css_OVrrrls);

});

// #jform_add_sql listeners for add_sql_cSdmGNF function
jQuery('#jform_add_sql').on('keyup',function()
{
	var add_sql_cSdmGNF = jQuery("#jform_add_sql input[type='radio']:checked").val();
	cSdmGNF(add_sql_cSdmGNF);

});
jQuery('#adminForm').on('change', '#jform_add_sql',function (e)
{
	e.preventDefault();
	var add_sql_cSdmGNF = jQuery("#jform_add_sql input[type='radio']:checked").val();
	cSdmGNF(add_sql_cSdmGNF);

});

// #jform_emptycontributors listeners for emptycontributors_ibZzdqp function
jQuery('#jform_emptycontributors').on('keyup',function()
{
	var emptycontributors_ibZzdqp = jQuery("#jform_emptycontributors input[type='radio']:checked").val();
	ibZzdqp(emptycontributors_ibZzdqp);

});
jQuery('#adminForm').on('change', '#jform_emptycontributors',function (e)
{
	e.preventDefault();
	var emptycontributors_ibZzdqp = jQuery("#jform_emptycontributors input[type='radio']:checked").val();
	ibZzdqp(emptycontributors_ibZzdqp);

});

// #jform_add_license listeners for add_license_VWpKNgV function
jQuery('#jform_add_license').on('keyup',function()
{
	var add_license_VWpKNgV = jQuery("#jform_add_license input[type='radio']:checked").val();
	VWpKNgV(add_license_VWpKNgV);

});
jQuery('#adminForm').on('change', '#jform_add_license',function (e)
{
	e.preventDefault();
	var add_license_VWpKNgV = jQuery("#jform_add_license input[type='radio']:checked").val();
	VWpKNgV(add_license_VWpKNgV);

});

// #jform_add_admin_event listeners for add_admin_event_naMIcxF function
jQuery('#jform_add_admin_event').on('keyup',function()
{
	var add_admin_event_naMIcxF = jQuery("#jform_add_admin_event input[type='radio']:checked").val();
	naMIcxF(add_admin_event_naMIcxF);

});
jQuery('#adminForm').on('change', '#jform_add_admin_event',function (e)
{
	e.preventDefault();
	var add_admin_event_naMIcxF = jQuery("#jform_add_admin_event input[type='radio']:checked").val();
	naMIcxF(add_admin_event_naMIcxF);

});

// #jform_add_site_event listeners for add_site_event_bzkuBno function
jQuery('#jform_add_site_event').on('keyup',function()
{
	var add_site_event_bzkuBno = jQuery("#jform_add_site_event input[type='radio']:checked").val();
	bzkuBno(add_site_event_bzkuBno);

});
jQuery('#adminForm').on('change', '#jform_add_site_event',function (e)
{
	e.preventDefault();
	var add_site_event_bzkuBno = jQuery("#jform_add_site_event input[type='radio']:checked").val();
	bzkuBno(add_site_event_bzkuBno);

});

// #jform_addreadme listeners for addreadme_rnECSmO function
jQuery('#jform_addreadme').on('keyup',function()
{
	var addreadme_rnECSmO = jQuery("#jform_addreadme input[type='radio']:checked").val();
	rnECSmO(addreadme_rnECSmO);

});
jQuery('#adminForm').on('change', '#jform_addreadme',function (e)
{
	e.preventDefault();
	var addreadme_rnECSmO = jQuery("#jform_addreadme input[type='radio']:checked").val();
	rnECSmO(addreadme_rnECSmO);

});

// #jform_add_license listeners for add_license_TBnHnlh function
jQuery('#jform_add_license').on('keyup',function()
{
	var add_license_TBnHnlh = jQuery("#jform_add_license input[type='radio']:checked").val();
	TBnHnlh(add_license_TBnHnlh);

});
jQuery('#adminForm').on('change', '#jform_add_license',function (e)
{
	e.preventDefault();
	var add_license_TBnHnlh = jQuery("#jform_add_license input[type='radio']:checked").val();
	TBnHnlh(add_license_TBnHnlh);

});



<?php $fieldNrs = range(1,10,1); ?>
<?php foreach($fieldNrs as $nr): ?>jQuery('body').on('change', 'select[name="icomoon-<?php echo $nr; ?>"]',function (e) {
	// update the icon if changed
	var val_<?php echo $nr; ?> = jQuery('select[name="icomoon-<?php echo $nr; ?>"] option:selected').val();
	var key_<?php echo $nr; ?> = jQuery('select[name="icomoon-<?php echo $nr; ?>"]').attr('id').split('-');
	var target_<?php echo $nr; ?> = key_<?php echo $nr; ?>[0]+'_'+key_<?php echo $nr; ?>[1]+'_chzn';
	var div_<?php echo $nr; ?> = jQuery('#'+target_<?php echo $nr; ?>);
	// build new span
	var span = '<span id="icon_'+target_<?php echo $nr; ?>+'" class="icon-'+val_<?php echo $nr; ?>+'"></span>';
	// remove old one 
	jQuery('#icon_'+target_<?php echo $nr; ?>).remove();
	// add the new icon
	div_<?php echo $nr; ?>.closest("td").append(span);
});

jQuery(document).ready(function() {
	// get type value
	var val_<?php echo $nr; ?> = jQuery('select[name="icomoon-<?php echo $nr; ?>"] option:selected').val();
	var key_<?php echo $nr; ?> = jQuery('select[name="icomoon-<?php echo $nr; ?>"]').attr('id').split('-');
	var target_<?php echo $nr; ?> = key_<?php echo $nr; ?>[0]+'_'+key_<?php echo $nr; ?>[1]+'_chzn';
	var div_<?php echo $nr; ?> = jQuery('#'+target_<?php echo $nr; ?>);
	// build new span
	var span = '<span id="icon_'+target_<?php echo $nr; ?>+'" class="icon-'+val_<?php echo $nr; ?>+'"></span>';
	// remove old one 
	jQuery('#icon_'+target_<?php echo $nr; ?>).remove();
	// add the new icon
	div_<?php echo $nr; ?>.closest("td").append(span);
});
<?php endforeach; ?>
</script>
