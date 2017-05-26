<?php
/* Smarty version 3.1.30, created on 2016-12-22 15:42:35
  from "/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/templates/global/errors.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585be65bbd1817_81516781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03d8a330d875e8bffe2ac61a5cdb90ece1c127c5' => 
    array (
      0 => '/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/templates/global/errors.tpl',
      1 => 1482416192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585be65bbd1817_81516781 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
<div id="errors">
	<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

</div>
<?php }
}
}
