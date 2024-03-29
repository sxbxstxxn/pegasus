{if isset($user) }
	<form class="logoutform col-md-12 nopadding" method="post">
		<div class="col-md-10"><p class="welcometext">Hello {$user.username}!</p></div>
		<div class="hidden">
			<input type="hidden" name="action" value="logout">
			<input type="hidden" name="currentPage" value="{$smarty.server.REQUEST_URI}">
		</div>
		<div class="col-md-2"><button class="logbtn" type="submit">Logout</button></div>
	</form>
{else}
	<form class="loginform col-md-12 nopadding" method="post">
		<div class="col-md-5"><input type="text" placeholder="Username" name="username"></div>
		<div class="col-md-5"><input type="password" placeholder="Password" name="password"></div>
		<div class="hidden">
			<input type="hidden" name="action" value="login">
			<input type="hidden" name="currentPage" value="{$smarty.server.REQUEST_URI}">
		</div>
		<div class="col-md-2"><button class="logbtn" type="submit">Login</button></div>
	</form>
{/if}