{extends file="template.tpl"}

{block name=content}
    <body class="u-body">
	<section class="u-clearfix u-palette-5-dark-3 u-section-2" id="carousel_fd80">
            <div class="u-clearfix u-sheet u-sheet-1" style="min-height: 623px;">
              <h1 class="u-text u-text-1" style="text-align: center; margin-bottom: 10px;">Logowanie</h1>
              
                <form class="pure-form pure-form-stacked" method="post" action="{$conf->action_root}login">
                    <fieldset style="width: 100px; margin: auto;">
                        <label for="login">Login: </label>
                        <input type="text" name="login" id="login" placeholder="Login" style="color: black;" {if isset($login)}value="{$login}"{/if}/>
                        <label for="password">Hasło: </label>
                        <input type="password" name="password" id="password" placeholder="Hasło" style="color: black;"/>
                        <button type="submit" class="pure-button pure-button-primary" style="background-color: #6e2aad; margin-top: 5px;">Zaloguj</button>
                    </fieldset>
                </form>  

                <div style="text-align: center;">
                    <a href="{$conf->action_root}show_register">Nie posiadasz konta? Zarejestruj się!</a>
                </div>
                        
                {foreach $msgs->getMessages() as $msg}
                    <p style="background-color: #d22d35; padding: 3px 3px 3px 6px; width: 300px; border-radius: 3px; margin: 20px auto 20px auto;">{$msg->text}</p>
                {/foreach}         
            </div>
        </section>
{/block}