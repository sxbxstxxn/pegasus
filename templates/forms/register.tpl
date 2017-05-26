<form autocomplete="off" action="register.php" class="registerform col-md-4 col-md-offset-4 nopadding" method="post" enctype="multipart/form-data">
	<div class="formheader col-md-12 nopadding">
		<h2>Register new account</h2>
		<p class="legend">* = required fields</p>
	</div>
	<div class="col-md-12 nopadding">
		<label for="username" class="col-md-6">Username *
		{if isset($registererror.username)}
			<span class="errorsign glyphicon glyphicon-alert"></span>
		{/if}
		</label>	
		<input class="col-md-6" type="text" placeholder="Username" name="username" {if isset ($registerprocess.username)}value="{$registerprocess.username}"{/if}>	
	</div>
	<div class="col-md-12 nopadding">
		<label for="password" class="col-md-6">Password
		{if isset($registererror.password)}
			<span class="errorsign glyphicon glyphicon-alert"></span>
		{/if}
		</label>
		<input class="col-md-6" type="password" placeholder="Password" name="password">
	</div>
	<div class="col-md-12 nopadding">
		<label for="retypepassword" class="col-md-6">Retype Password
		{if isset($registererror.retypepassword)}
			<span class="errorsign glyphicon glyphicon-alert"></span>
		{/if}		
		</label>
		<input class="col-md-6" type="password" placeholder="Retype Password" name="retypepassword">
	</div>
	<div class="col-md-12 nopadding">		
		<label for="email" class="col-md-6">E-Mail *
		{if isset($registererror.email)}
			<span class="errorsign glyphicon glyphicon-alert"></span>
		{/if}
		</label>
		<input class="col-md-6" type="text" placeholder="E-Mail" name="email" {if isset ($registerprocess.email)}value="{$registerprocess.email}"{/if}>
	</div>
	<div class="col-md-12 nopadding">		
		<label for="birthdate" class="col-md-6">Birthdate</label><input id="datepicker" class="col-md-6" type="text" placeholder="Birthdate" name="birthdate">
	</div>
	<div class="col-md-12 nopadding">		
		<div class="col-md-6">
			<label class="col-md-12 nopadding">Picture
			{if isset($registererror.picture)}
				<span class="errorsign glyphicon glyphicon-alert"></span>
			{/if}
			</label>
		</div>
		<!--
		<label for="profilepicture" class="col-md-6">Picture
		{if isset($registererror.picture)}
			<span class="errorsign glyphicon glyphicon-alert"></span>
		{/if}
		</label><input class="col-md-6" type="file" accept="image/*" size="10" placeholder="Picture" name="profilepicture">
		-->
		<div class="col-md-6 nopadding">
			<input type="file" name="profilepicture" id="profilepicture" class="inputfile" />
			<label for="profilepicture"><span class="col-md-6"><span class="placeholder">Picture</span></span><div class="col-md-6 ppclick">Choose a file</div></label>
		</div>
	</div>	
	
		
		
	{if isset($registererror)}
		<div class="errormessage col-md-12">
		{if isset($registererror.username)}<p>{$registererror.username}</p>{/if}
		{if isset($registererror.email)}<p>{$registererror.email}</p>{/if}
		{if isset($registererror.password)}<p>{$registererror.password}</p>{/if}
		{if isset($registererror.retypepassword)}<p>{$registererror.retypepassword}</p>{/if}		
		{if isset($registererror.picture)}<p>{$registererror.picture}</p>{/if}		
		</div>
	{/if}
	<div class="hidden"><input type="hidden" name="action" value="register"></div>
	<div class="col-md-12 nopadding"><button type="submit">Register</button></div>
</form>