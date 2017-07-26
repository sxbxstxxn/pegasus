{config_load file="settings.conf"}
{include file="global/head.tpl"}

<div id="main">
		{include file="global/errors.tpl"}

    <h2><center>{$title}</center><h2>

    <div class="col-md-8 col-md-offset-2" style="border:1px dashed;"> 
			
				<div class="row">
					<div class="col-md-4 nopadding">Username</div>
					<div class="col-md-4 nopadding">E-Mail</div>
					<div class="col-md-2 nopadding">Birthdate</div>
					<div class="col-md-2 nopadding">Account created</div>
				</div>
				{foreach from=$userlist item=user}	
				<a href="profile.php?id={$user['id']}">
					<div class="row">
						<div class="col-md-4 nopadding">{$user['username']}</div>
						<div class="col-md-4 nopadding">{$user['email']}</div>
						<div class="col-md-2 nopadding">{$user['birthdate']}</div>
						<div class="col-md-2 nopadding">{$user.created_at}</div>
					</div>
				</a>
				{/foreach}
			
		</div>

</div>
{include file="global/header.tpl"}
{include file="global/footer.tpl"}
