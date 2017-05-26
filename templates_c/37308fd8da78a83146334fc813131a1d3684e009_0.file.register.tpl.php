<?php
/* Smarty version 3.1.30, created on 2016-12-22 14:51:18
  from "/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/templates/register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585bda562d38c1_71473899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37308fd8da78a83146334fc813131a1d3684e009' => 
    array (
      0 => '/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/templates/register.tpl',
      1 => 1482414123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:global/head.tpl' => 1,
    'file:forms/register.tpl' => 1,
    'file:global/header.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_585bda562d38c1_71473899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "settings.conf", null, 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:global/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="main">
	<?php if (isset($_smarty_tpl->tpl_vars['registersuccess']->value)) {?>
		<div class="successmessage col-md-4 col-md-offset-4">
			<h2>Registration successfully sent!</h2>
			<p>An E-Mail was send to confirm your registration.</p>
		</div>
	<?php } elseif (isset($_smarty_tpl->tpl_vars['registerconfirmed']->value)) {?>
		<div class="successmessage col-md-4 col-md-offset-4">
			<h2>Registration successfully confirmed!</h2>
			<p>You can now log in. Have fun!</p>
		</div>
	<?php } elseif (isset($_smarty_tpl->tpl_vars['registercontradicted']->value)) {?>
		<div class="successmessage col-md-4 col-md-offset-4">
			<h2>Success!</h2>
			<p>We deleted your email adress from our database.</p>
		</div>
	<?php } else { ?>
		<?php $_smarty_tpl->_subTemplateRender("file:forms/register.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:global/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
