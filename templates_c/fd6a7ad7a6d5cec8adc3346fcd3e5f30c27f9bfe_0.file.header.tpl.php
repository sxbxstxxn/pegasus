<?php
/* Smarty version 3.1.30, created on 2017-05-15 15:54:45
  from "/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/templates/global/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5919b325250f32_03517750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd6a7ad7a6d5cec8adc3346fcd3e5f30c27f9bfe' => 
    array (
      0 => '/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/templates/global/header.tpl',
      1 => 1494856463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:forms/login.tpl' => 1,
  ),
),false)) {
function content_5919b325250f32_03517750 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
	<div class="col-md-4 nopadding">
		<a href="/"><img src="/images/icons/icon_pegasus_32x32.jpg"/></a>
		<nav class="mainnav">
			<?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
				<a href="/myprofile.php">my profile</a>
			<?php } else { ?>
				<a href="/register.php">Register</a>				
			<?php }?>
			<?php echo $_smarty_tpl->tpl_vars['test']->value;?>

		</nav>
	</div>
	<div class="col-md-4 nopadding">
		<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
			<div class="errorheader"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
		<?php } else { ?>
			<div id="clock">Uhrzeit</div>
		<?php }?>
	</div>
	<div class="col-md-4 nopadding">
		<?php $_smarty_tpl->_subTemplateRender("file:forms/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		
	</div>
</header><?php }
}
