{config_load file="settings.conf"}
{include file="global/head.tpl"}

<div id="main">
		{include file="global/errors.tpl"}

    <h2><center>{$title}</center><h2>

    <div class="col-md-4 col-md-offset-4" style="border:1px dashed;">
			{if $profile['error'] == NULL}         
        UserID: {$profile.id}<br/>
        Username:  {$profile.username}<br/>
        E-Mail: {$profile.email}<br/>
        Birthdate: {$profile.birthdate}<br/>
		    Account created: {$profile.created_at}<br/>
		    Last updated: {$profile.updated_at}<br/>
      {else}
        {$profile['error']}
      {/if}
      <a href="userlist.php">back to list</a>
    </div>

</div>
{include file="global/header.tpl"}
{include file="global/footer.tpl"}
