{config_load file="settings.conf"}
{include file="global/head.tpl"}

<div id="main">
	{if isset($registersuccess)}
		<div class="successmessage col-md-4 col-md-offset-4">
			<h2>Registration successfully sent!</h2>
			<p>An E-Mail was send to confirm your registration.</p>
		</div>
	{elseif isset($registerconfirmed)}
		<div class="successmessage col-md-4 col-md-offset-4">
			<h2>Registration successfully confirmed!</h2>
			<p>You can now log in. Have fun!</p>
		</div>
	{elseif isset($registercontradicted)}
		<div class="successmessage col-md-4 col-md-offset-4">
			<h2>Success!</h2>
			<p>We deleted your email adress from our database.</p>
		</div>
	{else}
		{include file="forms/register.tpl"}
	{/if}
</div>
{include file="global/header.tpl"}
{include file="global/footer.tpl"}
