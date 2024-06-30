{extends file="template.tpl"}

{block name=content}
  
<body class="u-body">
    <section class="u-clearfix u-palette-5-dark-3 u-section-2" id="carousel_fd80">
      <div class="u-clearfix u-sheet u-sheet-1" style="min-height: 450px">
        <h1 class="u-text u-text-1" style="text-align: center; margin-bottom: 10px;">Edycja użytkownika</h1>
        <div class="u-expanded-width u-list u-list-1" style="min-height: 450px">
          <div class="u-repeater u-repeater-1" style="min-height: 450px">
            
            <form class="pure-form pure-form-stacked" method="post" action="{$conf->action_root}update_user">
                <fieldset style="width: 100px; margin: auto;">
                    <label for="email">Email: </label>
                    <input type="email" name="email" placeholder="Email" value="{$form->email}" style="color: black;"/>
                    
                    <label for="firstName">Imię: </label>
                    <input type="text" name="firstName" placeholder="Imię" value="{$form->firstName}" style="color: black;"/>
                    
                    <label for="lastName">Nazwisko: </label>
                    <input type="text" name="lastName" placeholder="Nazwisko" value="{$form->lastName}" style="color: black;"/>
                    
                    <label for="password">Nowe hasło: </label>
                    <input type="password" name="password" placeholder="Nowe hasło" style="color: black;"/>
                    
                    <label for="confirm_password">Potwierdź hasło: </label>
                    <input type="password" name="confirm_password" placeholder="Potwierdź hasło" style="color: black;"/>
                    
                    <button type="submit" class="pure-button pure-button-primary" style="background-color: #6e2aad; margin-top: 5px;">Zapisz</button>
                </fieldset>
                    <label for="not_mandatory" style="color: #6e2aad; text-align: center;">Zmiana hasła nie jest obowiązkowa, w razie braku zmiany proszę zostawić puste. </label>
            </form>  
            
            {if isset($messages)}
                {foreach $messages as $msg}
                    <p style="background-color: #d22d35; padding: 3px 3px 3px 6px; width: 300px; border-radius: 3px; margin: 0 auto 20px auto;">{$msg->text}</p>
                {/foreach}
            {/if}
          </div>
        </div>
      </div>
    </section>
            
</body>

{/block}
