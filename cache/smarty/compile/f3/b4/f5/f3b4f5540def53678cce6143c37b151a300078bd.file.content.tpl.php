<?php /* Smarty version Smarty-3.1.19, created on 2015-08-18 14:20:47
         compiled from "/Applications/MAMP/htdocs/prestashop/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8328458655d3231fe40859-20002991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3b4f5540def53678cce6143c37b151a300078bd' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin/themes/default/template/content.tpl',
      1 => 1436343200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8328458655d3231fe40859-20002991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55d3231ff29d02_78480363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d3231ff29d02_78480363')) {function content_55d3231ff29d02_78480363($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
