{config_load file="settings.conf"}
{include file="global/head.tpl"}

	<div id="main">	
		{if isset($loginerror)}
		<div class="col-md-12">
			<div class="col-md-4 col-md-offset-4 errormessage">{$loginerror}</div>
		</div>
		{/if}
		{if isset($user) }
			<h2><center>Welcome to {#pageTitle#}, {$user.username}</center></h2>
		{else}
			<h2><center>Welcome to {#pageTitle#}</center></h2>
		{/if}
		<div class="startimage col-md-12">
			<img src="/images/icons/icon_pegasus_240x240.jpg"/>
		</div>
		<p><center>I hope this tool will be useful later.</center></p>
		<h3><center>Impressum</center></h3>
		<p><center>Sebastian Christoph<br/>admin@sebastian-christoph.de</center></p>
	</div>	
{include file="global/header.tpl"}
{include file="global/footer.tpl"}
