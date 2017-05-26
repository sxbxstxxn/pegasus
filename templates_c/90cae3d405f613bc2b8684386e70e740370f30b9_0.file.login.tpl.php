<?php
/* Smarty version 3.1.30, created on 2016-12-22 15:36:49
  from "/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585be5015444b4_57999462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90cae3d405f613bc2b8684386e70e740370f30b9' => 
    array (
      0 => '/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/templates/login.tpl',
      1 => 1482417395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:global/head.tpl' => 1,
    'file:forms/login.tpl' => 1,
    'file:global/header.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_585be5015444b4_57999462 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "settings.conf", null, 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:global/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div id="main">	
		<?php $_smarty_tpl->_subTemplateRender("file:forms/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php echo $_smarty_tpl->tpl_vars['loginerror']->value;?>

	</div>	
<?php $_smarty_tpl->_subTemplateRender("file:global/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
