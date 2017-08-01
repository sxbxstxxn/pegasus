<?php
/* Smarty version 3.1.30, created on 2017-08-01 15:07:18
  from "/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/templates/forms/register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59807d06edb405_89026599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bf59ba7c73af0799f12e2c5de6994fc088b0a00' => 
    array (
      0 => '/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/templates/forms/register.tpl',
      1 => 1501592822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59807d06edb405_89026599 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['alreadyregistered']->value)) {?>
	<div class="col-md-4 col-md-offset-4"><p>You are already registered and logged in at the moment. Please logout if you want to register a new account!</p></div>
<?php } else { ?>
	<form autocomplete="off" action="register.php" class="registerform col-md-4 col-md-offset-4 nopadding" method="post" enctype="multipart/form-data">
		<div class="formheader col-md-12 nopadding">
			<h2>Register new account</h2>
			<p class="legend">* = required fields</p>
		</div>
		<div class="col-md-12 nopadding">
			<label for="username" class="col-md-6">Username *
			<?php if (isset($_smarty_tpl->tpl_vars['registererror']->value['username'])) {?>
				<span class="errorsign glyphicon glyphicon-alert"></span>
			<?php }?>
			</label>	
			<input class="col-md-6" type="text" placeholder="Username" name="username" <?php if (isset($_smarty_tpl->tpl_vars['registerprocess']->value['username'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['registerprocess']->value['username'];?>
"<?php }?>>	
		</div>
		<div class="col-md-12 nopadding">
			<label for="password" class="col-md-6">Password
			<?php if (isset($_smarty_tpl->tpl_vars['registererror']->value['password'])) {?>
				<span class="errorsign glyphicon glyphicon-alert"></span>
			<?php }?>
			</label>
			<input class="col-md-6" type="password" placeholder="Password" name="password">
		</div>
		<div class="col-md-12 nopadding">
			<label for="retypepassword" class="col-md-6">Retype Password
			<?php if (isset($_smarty_tpl->tpl_vars['registererror']->value['retypepassword'])) {?>
				<span class="errorsign glyphicon glyphicon-alert"></span>
			<?php }?>		
			</label>
			<input class="col-md-6" type="password" placeholder="Retype Password" name="retypepassword">
		</div>
		<div class="col-md-12 nopadding">		
			<label for="email" class="col-md-6">E-Mail *
			<?php if (isset($_smarty_tpl->tpl_vars['registererror']->value['email'])) {?>
				<span class="errorsign glyphicon glyphicon-alert"></span>
			<?php }?>
			</label>
			<input class="col-md-6" type="text" placeholder="E-Mail" name="email" <?php if (isset($_smarty_tpl->tpl_vars['registerprocess']->value['email'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['registerprocess']->value['email'];?>
"<?php }?>>
		</div>
		<div class="col-md-12 nopadding">		
			<label for="birthdate" class="col-md-6">Birthdate</label><input id="datepicker" class="col-md-6" type="text" placeholder="Birthdate" name="birthdate">
		</div>


		<?php if (isset($_smarty_tpl->tpl_vars['registererror']->value)) {?>
			<div class="errormessage col-md-12">
			<?php if (isset($_smarty_tpl->tpl_vars['registererror']->value['username'])) {?><p><?php echo $_smarty_tpl->tpl_vars['registererror']->value['username'];?>
</p><?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['registererror']->value['email'])) {?><p><?php echo $_smarty_tpl->tpl_vars['registererror']->value['email'];?>
</p><?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['registererror']->value['password'])) {?><p><?php echo $_smarty_tpl->tpl_vars['registererror']->value['password'];?>
</p><?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['registererror']->value['retypepassword'])) {?><p><?php echo $_smarty_tpl->tpl_vars['registererror']->value['retypepassword'];?>
</p><?php }?>		
			</div>
		<?php }?>
		<div class="hidden"><input type="hidden" name="action" value="register"></div>
		<div class="col-md-12 nopadding"><button type="submit">Register</button></div>
	</form>
<?php }
}
}
