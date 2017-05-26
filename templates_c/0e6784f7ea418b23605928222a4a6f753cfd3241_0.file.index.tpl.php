<?php
/* Smarty version 3.1.30, created on 2017-05-15 16:13:08
  from "/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5919b774c8c1e7_11756145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e6784f7ea418b23605928222a4a6f753cfd3241' => 
    array (
      0 => '/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/templates/index.tpl',
      1 => 1494857569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:global/head.tpl' => 1,
    'file:global/header.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5919b774c8c1e7_11756145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "settings.conf", null, 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:global/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div id="main">	
		<?php if (isset($_smarty_tpl->tpl_vars['loginerror']->value)) {?>
		<div class="col-md-12">
			<div class="col-md-4 col-md-offset-4 errormessage"><?php echo $_smarty_tpl->tpl_vars['loginerror']->value;?>
</div>
		</div>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
			<h2><center>Welcome to <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pageTitle');?>
, <?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</center></h2>
		<?php } else { ?>
			<h2><center>Welcome to <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pageTitle');?>
</center></h2>
		<?php }?>
		<div class="startimage col-md-12">
			<img src="/images/icons/icon_pegasus_240x240.jpg"/>
		</div>
		<p><center>I hope this tool will be useful later.</center></p>
		<h3><center>Impressum</center></h3>
		<p><center>Sebastian Christoph<br/>admin@sebastian-christoph.de</center></p>
	</div>	
<?php $_smarty_tpl->_subTemplateRender("file:global/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
