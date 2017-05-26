<table cellpadding="5" cellspacing="0" width="100%" bgcolor="#000000" style="color:#00FD00;font-family:'VT323',monospace">
	<thead>
		<tr>
			<th width="32px"><img src="http://pegasus.sebastian-christoph.de/images/icons/icon_pegasus_32x32.jpg"></th>
			<th>Pegasus - Registration</th>
			<th width="32px"><img src="http://pegasus.sebastian-christoph.de/images/icons/icon_pegasus_32x32.jpg"></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>&nbsp;</td>
			<td style="border:1px dashed #00FD00;padding:25px;font-family:'VT323',monospace">
				<p>Hello <b>{$username}</b>,<br/>thank you for your registration.</p>
				<p>To confirm your registration click the following link: </p>
				<p><a href="{$confirmationlink}" target="_blank" style="background-color:#00FD00;color:#000000;padding:5px;text-decoration:none;font-family:'VT323',monospace">
					{$confirmationlink}
				</a></p>
				<p>To delete the request and your email from our database click </p>
				<p><a href="{$contradictlink}" target="_blank" style="background-color:#00FD00;color:#000000;padding:5px;text-decoration:none;font-family:'VT323',monospace">
					{$contradictlink}
				</a></p>
				<p>Have fun,<br/>your Pegasus Team</p>
			</td>
			<td>&nbsp;</td>
		</tr>		
	</tbody>
	<tfoot>
		<tr>
			<td>&nbsp;</td>
			<td style="text-align:center;">&copy; <a href="http://pegasus.sebastian-christoph.de" target="_blank" style="color:#00FD00;font-family:'VT323',monospace">Pegasus</td>
			<td>&nbsp;</td>
		</tr>
	</tfoot>
</table>