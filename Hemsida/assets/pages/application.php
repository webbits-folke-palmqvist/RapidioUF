<div class="box1 center">
	<center><img src="assets/img/logo.png"></center>
	<center><h3 class="menu">Fyll i din ansökan</h3></center>
	<br>
	<form action="?page=Process&action=application&do=add" method="POST">
		<table>
			<tr>
				<td><input type="text" name="fname" placeholder="Förnamn"></td>
			</tr>
			<tr>
				<td><input type="text" name="lname" placeholder="Efternamn"></td>
			</tr>
			<tr>
				<td><input type="text" name="phone" placeholder="Telefon"></td>
			</tr>
			<tr>
				<td><input type="text" name="email" placeholder="Email"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Skicka in ansökan"></td>
			</tr>
		</table>
	</form>
	<center><?php error(); ?></center>
	<center><?php success(); ?></center>
</div>
<div class="footer">
	<p>Made by <a target="_Blank" href="http://webbits.nu/">Webbits</a></p>
</div>