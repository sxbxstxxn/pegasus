<header>
	<div class="col-md-4 nopadding">
		<a href="/"><img src="/images/icons/icon_pegasus_32x32.jpg"/></a>
		<nav class="mainnav">
			{if isset($user) }
				<a href="/myprofile.php">my profile</a>
			{else}
				<a href="/register.php">Register</a>				
			{/if}
			{$test}
		</nav>
	</div>
	<div class="col-md-4 nopadding">
		{if isset($error)}
			<div class="errorheader">{$error}</div>
		{else}
			<div id="clock">Uhrzeit</div>
		{/if}
	</div>
	<div class="col-md-4 nopadding">
		{include file="forms/login.tpl"}		
	</div>
</header>