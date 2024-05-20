{extends file="main.tpl"}

{block name=top}
<form action="{$conf->action_root}register" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Rejestracja użytkownika</legend>
	{if isset($msg)}
	<p>{$msg}</p>
	{/if}
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login" value="{$form->login}" required/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">Hasło: </label>
			<input id="id_pass" type="password" name="password" required/><br />
		</div>
        <div class="pure-control-group">
			<label for="id_email">Email: </label>
			<input id="id_email" type="email" name="email" value="{$form->email}" />
		</div>
        <div class="pure-control-group">
			<label for="id_firstName">Imię: </label>
			<input id="id_firstName" type="text" name="firstName" value="{$form->firstName}" />
		</div>
        <div class="pure-control-group">
			<label for="id_lastName">Nazwisko: </label>
			<input id="id_lastName" type="text" name="lastName" value="{$form->lastName}" />
		</div>
		<div class="pure-controls">
			<input type="submit" value="Zarejestruj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	
{/block}
