<?php
/* Smarty version 3.1.30, created on 2016-12-22 12:05:16
  from "/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/templates/accessdenied.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585bb36c7c0682_54330327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1d9879b1fecbcab3d69d3186e312035426fc327' => 
    array (
      0 => '/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/templates/accessdenied.tpl',
      1 => 1479997160,
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
function content_585bb36c7c0682_54330327 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "settings.conf", null, 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:global/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="main">
    <h2><center>Access denied!</center><h2>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:global/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
