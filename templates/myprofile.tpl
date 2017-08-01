{config_load file="settings.conf"}
{include file="global/head.tpl"}

<div id="main">
		{include file="global/errors.tpl"}

    <h2><center>{$title}</center><h2>

    <div class="col-md-4 col-md-offset-4" style="border:1px dashed;">
			UserID: {$user.id}<br/>
			Username:  {$user.username}<br/>
			E-Mail: {$user.email}<br/>
			Birthdate: {$user.birthdate}<br/>
			Account created: {$user.created_at}<br/>
			Last updated: {$user.updated_at}
    </div>
</div>
{include file="global/header.tpl"}
{include file="global/footer.tpl"}
