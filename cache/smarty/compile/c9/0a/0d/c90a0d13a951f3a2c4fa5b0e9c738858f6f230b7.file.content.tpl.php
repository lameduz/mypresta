<?php /* Smarty version Smarty-3.1.19, created on 2015-08-18 14:39:44
         compiled from "/Applications/MAMP/htdocs/prestashop/admin971f3dilz/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116776857155d32790211369-48762018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c90a0d13a951f3a2c4fa5b0e9c738858f6f230b7' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin971f3dilz/themes/default/template/content.tpl',
      1 => 1436343200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116776857155d32790211369-48762018',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55d3279025c204_19153322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d3279025c204_19153322')) {function content_55d3279025c204_19153322($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
