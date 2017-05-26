<?php
/* Smarty version 3.1.30, created on 2016-12-23 15:26:13
  from "/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/templates/global/head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585d34057e5da6_04164540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f248fb330a2034a95392fea96aa7f0116db2aed2' => 
    array (
      0 => '/www/htdocs/w0131f27/pegasus.sebastian-christoph.de/templates/global/head.tpl',
      1 => 1482503077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585d34057e5da6_04164540 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<!-- JQUERY -->
		<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"><?php echo '</script'; ?>
>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		<!-- BOOTSTRAP -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>
		<!-- SC CLOCK -->
		<?php echo '<script'; ?>
 src="/scripts/clock.js"><?php echo '</script'; ?>
>
		<!-- GOOGLE FONT -->
		<link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet"> 
		<!-- PEGASUS -->
		<link href="http://pegasus.sebastian-christoph.de/styles/style.css" type="text/css" rel="stylesheet"/>
		<title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pageTitle');
if (isset($_smarty_tpl->tpl_vars['title']->value)) {?> - <?php echo $_smarty_tpl->tpl_vars['title']->value;
}?></title>
		
		<?php echo '<script'; ?>
>
		$( function() {
			//$( "#datepicker" ).datepicker();
			$( "#datepicker" ).datepicker({
			  dateFormat: "yy-mm-dd",
			  firstDay: 1,
			  changeMonth: true,
			  changeYear: true,
			  minDate: "-100Y",
			  maxDate: 0,
			  defaultDate: "-30Y"
			  //showAnim: none
			});		
		});
		
		$( document ).ready(function() {
			
			//FILEINPUT
			$( '.inputfile' ).each( function()
			{
				var $input	 = $( this ),
					$label	 = $input.next( 'label' ),
					labelVal = $label.html();

				$input.on( 'change', function( e )
				{
					var fileName = '';

					if( this.files && this.files.length > 1 )
						fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '1', this.files.length );
					else if( e.target.value )
						fileName = e.target.value.split( '\\' ).pop();

					if( fileName )
						$label.find( 'span' ).html( fileName );
					else
						$label.html( labelVal );
				});

				// Firefox bug fix
				$input
				.on( 'focus', function(){ $input.addClass( 'has-focus' ); })
				.on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
			});
			//end FILEINPUT
			
		});
		
    
    
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
		(function(e,t,n){
			var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")}
		)
		(document,window,0);
		<?php echo '</script'; ?>
>
	</head>
<body><?php }
}
