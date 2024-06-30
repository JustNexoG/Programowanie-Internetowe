{extends file="template.tpl"}

{block name=content}
  
    <body class="u-body">
    
        <!-- Dodawanie nieruchomości -->
        <section class="u-clearfix u-palette-5-dark-3 u-section-2" id="carousel_fd80">
          <div class="u-clearfix u-sheet u-sheet-1" style="min-height: 450px">
            <h1 class="u-text u-text-1" style="text-align: center; margin-bottom: 10px;">Dodaj nieruchomość</h1>
            <div class="u-expanded-width u-list u-list-1" style="min-height: 450px">
              <div class="u-repeater u-repeater-1" style="min-height: 450px">
                
                <form class="pure-form pure-form-stacked" method="post" action="{$conf->action_root}add_property" enctype="multipart/form-data" id="add_property_form">
                    <fieldset style="width: 100px; margin: auto;">
                        <label for="address">Adres: </label>
                        <input type="text" name="address" id="address" placeholder="Adres" style="color: black;"/>
                        
                        <label for="price">Cena: </label>
                        <input type="text" name="price" id="price" placeholder="Cena" style="color: black;"/>
                        
                        <label for="type">Typ: </label>
                        <input type="radio" id="wynajem" name="type" value="Wynajem" style="color: black; width: 10%; float:left;">
                        <label for="wynajem" style="color: white; width: 40%; float:left;">Wynajem</label>

                        <input type="radio" id="sprzedaż" name="type" value="Sprzedaż" style="color: black; width: 10%; float:left;">
                        <label for="sprzedaż" style="color: white;width: 40%; float:left;">Sprzedaż</label>

                            
                        <label for="description">Opis: </label>
                        <textarea id="description" name="description" form="add_property_form" class="pure-input-1-2" placeholder="Opis nieruchomości." rows="10" cols="50" style="color: black; height: auto; width: auto; resize: none;"></textarea>
                        
                        <label for="images">Zdjęcia: </label>
                        <input type="file" name="images[]" id="images" multiple style="color: black;"/>
                        <button type="submit" class="pure-button pure-button-primary" style="background-color: #6e2aad; margin-top: 5px;">Zapisz</button>
                    </fieldset>
                </form>  
                
                {foreach $msgs->getMessages() as $msg}
                        <p style="background-color: #d22d35; padding: 3px 3px 3px 6px; width: 300px; border-radius: 3px; margin: 0 auto 20px auto;">{$msg->text}</p>
                    {/foreach}
                    
              </div>
            </div>
          </div>
        </section>
                
        
{/block}
