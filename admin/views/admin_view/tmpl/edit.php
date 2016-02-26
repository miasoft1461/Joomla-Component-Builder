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

	@version		2.1.0
	@build			26th February, 2016
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

	<?php echo JLayoutHelper::render('admin_view.settings_above', $this); ?><div class="form-horizontal">

	<?php echo JHtml::_('bootstrap.startTabSet', 'admin_viewTab', array('active' => 'settings')); ?>

	<?php echo JHtml::_('bootstrap.addTab', 'admin_viewTab', 'settings', JText::_('COM_COMPONENTBUILDER_ADMIN_VIEW_SETTINGS', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span6">
				<?php echo JLayoutHelper::render('admin_view.settings_left', $this); ?>
			</div>
			<div class="span6">
				<?php echo JLayoutHelper::render('admin_view.settings_right', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php if ($this->canDo->get('field.access')) : ?>
	<?php echo JHtml::_('bootstrap.addTab', 'admin_viewTab', 'fields', JText::_('COM_COMPONENTBUILDER_ADMIN_VIEW_FIELDS', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
		</div>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<?php echo JLayoutHelper::render('admin_view.fields_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>
	<?php endif; ?>

	<?php echo JHtml::_('bootstrap.addTab', 'admin_viewTab', 'css', JText::_('COM_COMPONENTBUILDER_ADMIN_VIEW_CSS', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
		</div>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<?php echo JLayoutHelper::render('admin_view.css_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php echo JHtml::_('bootstrap.addTab', 'admin_viewTab', 'javascript', JText::_('COM_COMPONENTBUILDER_ADMIN_VIEW_JAVASCRIPT', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
		</div>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<?php echo JLayoutHelper::render('admin_view.javascript_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php echo JHtml::_('bootstrap.addTab', 'admin_viewTab', 'php', JText::_('COM_COMPONENTBUILDER_ADMIN_VIEW_PHP', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
		</div>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<?php echo JLayoutHelper::render('admin_view.php_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php echo JHtml::_('bootstrap.addTab', 'admin_viewTab', 'mysql', JText::_('COM_COMPONENTBUILDER_ADMIN_VIEW_MYSQL', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<?php echo JLayoutHelper::render('admin_view.mysql_left', $this); ?>
			</div>
		</div>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<?php echo JLayoutHelper::render('admin_view.mysql_fullwidth', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>

	<?php if ($this->canDo->get('core.delete') || $this->canDo->get('core.edit.created_by') || $this->canDo->get('core.edit.state') || $this->canDo->get('core.edit.created')) : ?>
	<?php echo JHtml::_('bootstrap.addTab', 'admin_viewTab', 'publishing', JText::_('COM_COMPONENTBUILDER_ADMIN_VIEW_PUBLISHING', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span6">
				<?php echo JLayoutHelper::render('admin_view.publishing', $this); ?>
			</div>
			<div class="span6">
				<?php echo JLayoutHelper::render('admin_view.publlshing', $this); ?>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>
	<?php endif; ?>

	<?php if ($this->canDo->get('core.admin')) : ?>
	<?php echo JHtml::_('bootstrap.addTab', 'admin_viewTab', 'permissions', JText::_('COM_COMPONENTBUILDER_ADMIN_VIEW_PERMISSION', true)); ?>
		<div class="row-fluid form-horizontal-desktop">
			<div class="span12">
				<fieldset class="adminform">
					<div class="adminformlist">
					<?php foreach ($this->form->getFieldset('accesscontrol') as $field): ?>
						<div>
							<?php echo $field->label; echo $field->input;?>
						</div>
						<div class="clearfix"></div>
					<?php endforeach; ?>
					</div>
				</fieldset>
			</div>
		</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>
	<?php endif; ?>

	<?php echo JHtml::_('bootstrap.endTabSet'); ?>

	<div>
		<input type="hidden" name="task" value="admin_view.edit" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</div>

<div class="clearfix"></div>
<?php echo JLayoutHelper::render('admin_view.settings_under', $this); ?>
</form>

<script type="text/javascript">

// #jform_add_css_view listeners for add_css_view_olEnATZ function
jQuery('#jform_add_css_view').on('keyup',function()
{
	var add_css_view_olEnATZ = jQuery("#jform_add_css_view input[type='radio']:checked").val();
	olEnATZ(add_css_view_olEnATZ);

});
jQuery('#adminForm').on('change', '#jform_add_css_view',function (e)
{
	e.preventDefault();
	var add_css_view_olEnATZ = jQuery("#jform_add_css_view input[type='radio']:checked").val();
	olEnATZ(add_css_view_olEnATZ);

});

// #jform_add_css_views listeners for add_css_views_rZwwVZX function
jQuery('#jform_add_css_views').on('keyup',function()
{
	var add_css_views_rZwwVZX = jQuery("#jform_add_css_views input[type='radio']:checked").val();
	rZwwVZX(add_css_views_rZwwVZX);

});
jQuery('#adminForm').on('change', '#jform_add_css_views',function (e)
{
	e.preventDefault();
	var add_css_views_rZwwVZX = jQuery("#jform_add_css_views input[type='radio']:checked").val();
	rZwwVZX(add_css_views_rZwwVZX);

});

// #jform_add_javascript_view_file listeners for add_javascript_view_file_TceEjdO function
jQuery('#jform_add_javascript_view_file').on('keyup',function()
{
	var add_javascript_view_file_TceEjdO = jQuery("#jform_add_javascript_view_file input[type='radio']:checked").val();
	TceEjdO(add_javascript_view_file_TceEjdO);

});
jQuery('#adminForm').on('change', '#jform_add_javascript_view_file',function (e)
{
	e.preventDefault();
	var add_javascript_view_file_TceEjdO = jQuery("#jform_add_javascript_view_file input[type='radio']:checked").val();
	TceEjdO(add_javascript_view_file_TceEjdO);

});

// #jform_add_javascript_views_file listeners for add_javascript_views_file_MBcuWCp function
jQuery('#jform_add_javascript_views_file').on('keyup',function()
{
	var add_javascript_views_file_MBcuWCp = jQuery("#jform_add_javascript_views_file input[type='radio']:checked").val();
	MBcuWCp(add_javascript_views_file_MBcuWCp);

});
jQuery('#adminForm').on('change', '#jform_add_javascript_views_file',function (e)
{
	e.preventDefault();
	var add_javascript_views_file_MBcuWCp = jQuery("#jform_add_javascript_views_file input[type='radio']:checked").val();
	MBcuWCp(add_javascript_views_file_MBcuWCp);

});

// #jform_add_javascript_view_footer listeners for add_javascript_view_footer_KyXacUa function
jQuery('#jform_add_javascript_view_footer').on('keyup',function()
{
	var add_javascript_view_footer_KyXacUa = jQuery("#jform_add_javascript_view_footer input[type='radio']:checked").val();
	KyXacUa(add_javascript_view_footer_KyXacUa);

});
jQuery('#adminForm').on('change', '#jform_add_javascript_view_footer',function (e)
{
	e.preventDefault();
	var add_javascript_view_footer_KyXacUa = jQuery("#jform_add_javascript_view_footer input[type='radio']:checked").val();
	KyXacUa(add_javascript_view_footer_KyXacUa);

});

// #jform_add_javascript_views_footer listeners for add_javascript_views_footer_EZNHJZQ function
jQuery('#jform_add_javascript_views_footer').on('keyup',function()
{
	var add_javascript_views_footer_EZNHJZQ = jQuery("#jform_add_javascript_views_footer input[type='radio']:checked").val();
	EZNHJZQ(add_javascript_views_footer_EZNHJZQ);

});
jQuery('#adminForm').on('change', '#jform_add_javascript_views_footer',function (e)
{
	e.preventDefault();
	var add_javascript_views_footer_EZNHJZQ = jQuery("#jform_add_javascript_views_footer input[type='radio']:checked").val();
	EZNHJZQ(add_javascript_views_footer_EZNHJZQ);

});

// #jform_add_php_ajax listeners for add_php_ajax_kOOohMM function
jQuery('#jform_add_php_ajax').on('keyup',function()
{
	var add_php_ajax_kOOohMM = jQuery("#jform_add_php_ajax input[type='radio']:checked").val();
	kOOohMM(add_php_ajax_kOOohMM);

});
jQuery('#adminForm').on('change', '#jform_add_php_ajax',function (e)
{
	e.preventDefault();
	var add_php_ajax_kOOohMM = jQuery("#jform_add_php_ajax input[type='radio']:checked").val();
	kOOohMM(add_php_ajax_kOOohMM);

});

// #jform_add_php_getitem listeners for add_php_getitem_urzsmvi function
jQuery('#jform_add_php_getitem').on('keyup',function()
{
	var add_php_getitem_urzsmvi = jQuery("#jform_add_php_getitem input[type='radio']:checked").val();
	urzsmvi(add_php_getitem_urzsmvi);

});
jQuery('#adminForm').on('change', '#jform_add_php_getitem',function (e)
{
	e.preventDefault();
	var add_php_getitem_urzsmvi = jQuery("#jform_add_php_getitem input[type='radio']:checked").val();
	urzsmvi(add_php_getitem_urzsmvi);

});

// #jform_add_php_getitems listeners for add_php_getitems_bhtOPXQ function
jQuery('#jform_add_php_getitems').on('keyup',function()
{
	var add_php_getitems_bhtOPXQ = jQuery("#jform_add_php_getitems input[type='radio']:checked").val();
	bhtOPXQ(add_php_getitems_bhtOPXQ);

});
jQuery('#adminForm').on('change', '#jform_add_php_getitems',function (e)
{
	e.preventDefault();
	var add_php_getitems_bhtOPXQ = jQuery("#jform_add_php_getitems input[type='radio']:checked").val();
	bhtOPXQ(add_php_getitems_bhtOPXQ);

});

// #jform_add_php_getlistquery listeners for add_php_getlistquery_QEGHNPm function
jQuery('#jform_add_php_getlistquery').on('keyup',function()
{
	var add_php_getlistquery_QEGHNPm = jQuery("#jform_add_php_getlistquery input[type='radio']:checked").val();
	QEGHNPm(add_php_getlistquery_QEGHNPm);

});
jQuery('#adminForm').on('change', '#jform_add_php_getlistquery',function (e)
{
	e.preventDefault();
	var add_php_getlistquery_QEGHNPm = jQuery("#jform_add_php_getlistquery input[type='radio']:checked").val();
	QEGHNPm(add_php_getlistquery_QEGHNPm);

});

// #jform_add_php_save listeners for add_php_save_sDiMRCk function
jQuery('#jform_add_php_save').on('keyup',function()
{
	var add_php_save_sDiMRCk = jQuery("#jform_add_php_save input[type='radio']:checked").val();
	sDiMRCk(add_php_save_sDiMRCk);

});
jQuery('#adminForm').on('change', '#jform_add_php_save',function (e)
{
	e.preventDefault();
	var add_php_save_sDiMRCk = jQuery("#jform_add_php_save input[type='radio']:checked").val();
	sDiMRCk(add_php_save_sDiMRCk);

});

// #jform_add_php_postsavehook listeners for add_php_postsavehook_nPPEHII function
jQuery('#jform_add_php_postsavehook').on('keyup',function()
{
	var add_php_postsavehook_nPPEHII = jQuery("#jform_add_php_postsavehook input[type='radio']:checked").val();
	nPPEHII(add_php_postsavehook_nPPEHII);

});
jQuery('#adminForm').on('change', '#jform_add_php_postsavehook',function (e)
{
	e.preventDefault();
	var add_php_postsavehook_nPPEHII = jQuery("#jform_add_php_postsavehook input[type='radio']:checked").val();
	nPPEHII(add_php_postsavehook_nPPEHII);

});

// #jform_add_php_allowedit listeners for add_php_allowedit_mZvYGoQ function
jQuery('#jform_add_php_allowedit').on('keyup',function()
{
	var add_php_allowedit_mZvYGoQ = jQuery("#jform_add_php_allowedit input[type='radio']:checked").val();
	mZvYGoQ(add_php_allowedit_mZvYGoQ);

});
jQuery('#adminForm').on('change', '#jform_add_php_allowedit',function (e)
{
	e.preventDefault();
	var add_php_allowedit_mZvYGoQ = jQuery("#jform_add_php_allowedit input[type='radio']:checked").val();
	mZvYGoQ(add_php_allowedit_mZvYGoQ);

});

// #jform_add_php_batchcopy listeners for add_php_batchcopy_PYvXLtz function
jQuery('#jform_add_php_batchcopy').on('keyup',function()
{
	var add_php_batchcopy_PYvXLtz = jQuery("#jform_add_php_batchcopy input[type='radio']:checked").val();
	PYvXLtz(add_php_batchcopy_PYvXLtz);

});
jQuery('#adminForm').on('change', '#jform_add_php_batchcopy',function (e)
{
	e.preventDefault();
	var add_php_batchcopy_PYvXLtz = jQuery("#jform_add_php_batchcopy input[type='radio']:checked").val();
	PYvXLtz(add_php_batchcopy_PYvXLtz);

});

// #jform_add_php_batchmove listeners for add_php_batchmove_xCXtlFV function
jQuery('#jform_add_php_batchmove').on('keyup',function()
{
	var add_php_batchmove_xCXtlFV = jQuery("#jform_add_php_batchmove input[type='radio']:checked").val();
	xCXtlFV(add_php_batchmove_xCXtlFV);

});
jQuery('#adminForm').on('change', '#jform_add_php_batchmove',function (e)
{
	e.preventDefault();
	var add_php_batchmove_xCXtlFV = jQuery("#jform_add_php_batchmove input[type='radio']:checked").val();
	xCXtlFV(add_php_batchmove_xCXtlFV);

});

// #jform_add_php_before_delete listeners for add_php_before_delete_QkgqkLC function
jQuery('#jform_add_php_before_delete').on('keyup',function()
{
	var add_php_before_delete_QkgqkLC = jQuery("#jform_add_php_before_delete input[type='radio']:checked").val();
	QkgqkLC(add_php_before_delete_QkgqkLC);

});
jQuery('#adminForm').on('change', '#jform_add_php_before_delete',function (e)
{
	e.preventDefault();
	var add_php_before_delete_QkgqkLC = jQuery("#jform_add_php_before_delete input[type='radio']:checked").val();
	QkgqkLC(add_php_before_delete_QkgqkLC);

});

// #jform_add_php_after_delete listeners for add_php_after_delete_XngtmPJ function
jQuery('#jform_add_php_after_delete').on('keyup',function()
{
	var add_php_after_delete_XngtmPJ = jQuery("#jform_add_php_after_delete input[type='radio']:checked").val();
	XngtmPJ(add_php_after_delete_XngtmPJ);

});
jQuery('#adminForm').on('change', '#jform_add_php_after_delete',function (e)
{
	e.preventDefault();
	var add_php_after_delete_XngtmPJ = jQuery("#jform_add_php_after_delete input[type='radio']:checked").val();
	XngtmPJ(add_php_after_delete_XngtmPJ);

});

// #jform_add_sql listeners for add_sql_UjFSwVr function
jQuery('#jform_add_sql').on('keyup',function()
{
	var add_sql_UjFSwVr = jQuery("#jform_add_sql input[type='radio']:checked").val();
	UjFSwVr(add_sql_UjFSwVr);

});
jQuery('#adminForm').on('change', '#jform_add_sql',function (e)
{
	e.preventDefault();
	var add_sql_UjFSwVr = jQuery("#jform_add_sql input[type='radio']:checked").val();
	UjFSwVr(add_sql_UjFSwVr);

});

// #jform_source listeners for source_FzELQMp function
jQuery('#jform_source').on('keyup',function()
{
	var source_FzELQMp = jQuery("#jform_source input[type='radio']:checked").val();
	var add_sql_FzELQMp = jQuery("#jform_add_sql input[type='radio']:checked").val();
	FzELQMp(source_FzELQMp,add_sql_FzELQMp);

});
jQuery('#adminForm').on('change', '#jform_source',function (e)
{
	e.preventDefault();
	var source_FzELQMp = jQuery("#jform_source input[type='radio']:checked").val();
	var add_sql_FzELQMp = jQuery("#jform_add_sql input[type='radio']:checked").val();
	FzELQMp(source_FzELQMp,add_sql_FzELQMp);

});

// #jform_add_sql listeners for add_sql_FzELQMp function
jQuery('#jform_add_sql').on('keyup',function()
{
	var source_FzELQMp = jQuery("#jform_source input[type='radio']:checked").val();
	var add_sql_FzELQMp = jQuery("#jform_add_sql input[type='radio']:checked").val();
	FzELQMp(source_FzELQMp,add_sql_FzELQMp);

});
jQuery('#adminForm').on('change', '#jform_add_sql',function (e)
{
	e.preventDefault();
	var source_FzELQMp = jQuery("#jform_source input[type='radio']:checked").val();
	var add_sql_FzELQMp = jQuery("#jform_add_sql input[type='radio']:checked").val();
	FzELQMp(source_FzELQMp,add_sql_FzELQMp);

});

// #jform_source listeners for source_RnZUdkE function
jQuery('#jform_source').on('keyup',function()
{
	var source_RnZUdkE = jQuery("#jform_source input[type='radio']:checked").val();
	var add_sql_RnZUdkE = jQuery("#jform_add_sql input[type='radio']:checked").val();
	RnZUdkE(source_RnZUdkE,add_sql_RnZUdkE);

});
jQuery('#adminForm').on('change', '#jform_source',function (e)
{
	e.preventDefault();
	var source_RnZUdkE = jQuery("#jform_source input[type='radio']:checked").val();
	var add_sql_RnZUdkE = jQuery("#jform_add_sql input[type='radio']:checked").val();
	RnZUdkE(source_RnZUdkE,add_sql_RnZUdkE);

});

// #jform_add_sql listeners for add_sql_RnZUdkE function
jQuery('#jform_add_sql').on('keyup',function()
{
	var source_RnZUdkE = jQuery("#jform_source input[type='radio']:checked").val();
	var add_sql_RnZUdkE = jQuery("#jform_add_sql input[type='radio']:checked").val();
	RnZUdkE(source_RnZUdkE,add_sql_RnZUdkE);

});
jQuery('#adminForm').on('change', '#jform_add_sql',function (e)
{
	e.preventDefault();
	var source_RnZUdkE = jQuery("#jform_source input[type='radio']:checked").val();
	var add_sql_RnZUdkE = jQuery("#jform_add_sql input[type='radio']:checked").val();
	RnZUdkE(source_RnZUdkE,add_sql_RnZUdkE);

});


<?php $fieldNrs = range(1,500,1); ?>
jQuery('#jform_addconditions_modal').on('show.bs.modal', function (e) {
 	<?php foreach($fieldNrs as $fieldNr): ?>jQuery('#jform_addconditions_modal').on('change', '#jform_addconditions_fields_match_field-<?php echo $fieldNr ?>',function (e) {
		e.preventDefault();
		// get options
		var fieldId_<?php echo $fieldNr ?> = jQuery("#jform_addconditions_fields_match_field-<?php echo $fieldNr ?> option:selected").val();
		getFieldSelectOptions(fieldId_<?php echo $fieldNr ?>,<?php echo $fieldNr ?>);
	});
	<?php endforeach; ?>
});
jQuery('#jform_addtables_modal').on('show.bs.modal', function (e) {
 	<?php foreach($fieldNrs as $fieldNr): ?>jQuery('#jform_addtables_modal').on('change', '#jform_addtables_fields_table-<?php echo $fieldNr ?>',function (e) {
		e.preventDefault();
		// get options
		var tableName_<?php echo $fieldNr ?> = jQuery("#jform_addtables_fields_table-<?php echo $fieldNr ?> option:selected").val();
		getTableColumns(tableName_<?php echo $fieldNr ?>,<?php echo $fieldNr ?>);
	});
	<?php endforeach; ?>
});

</script>
