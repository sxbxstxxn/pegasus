{config_load file="settings.conf"}
{include file="global/head.tpl"}

<div id="main">
		{include file="global/errors.tpl"}

    <h2><center>{$title}</center><h2>

    <div class="col-md-4 col-md-offset-4" style="border:1px dashed;"> 
       
      {foreach from=$userlist item=user}
       {$user['username']}<br>
      {/foreach}
    </div>

</div>
{include file="global/header.tpl"}
{include file="global/footer.tpl"}
