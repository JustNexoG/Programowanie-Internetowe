{extends file="template.tpl"}

{block name=content}
  
<body class="u-body">
    <section class="u-clearfix u-palette-5-dark-3 u-section-2" id="carousel_fd80">
        <div class="u-clearfix u-sheet u-sheet-1" style="min-height: 450px">
            <h1 class="u-text u-text-1" style="text-align: center; margin-bottom: 10px;">Edytuj nieruchomość</h1>
            <div class="u-expanded-width u-list u-list-1" style="min-height: 450px">
                <div class="u-repeater u-repeater-1" style="min-height: 450px">
                    <form class="pure-form pure-form-stacked" method="post" action="{$conf->action_root}update_property" enctype="multipart/form-data" id="update_property_form">
                        <fieldset style="width: 100px; margin: auto;">
                            <label for="address">Adres: </label>
                            <input type="text" name="address" id="address" placeholder="Adres" value="{$property.address}" style="color: black;"/>
                            
                            <label for="description">Opis: </label>
                            <textarea id="description" name="description" class="pure-input-1-2" placeholder="Opis nieruchomości." rows="10" cols="50" style="color: black; height: auto; width: auto; resize: none;">{$property.description}</textarea>
                            
                            <label for="price">Cena: </label>
                            <input type="text" name="price" id="price" placeholder="Cena" value="{$property.price}" style="color: black;"/>
                            
                            <label for="type">Typ nieruchomości: </label>
                            <input type="radio" id="wynajem" name="type" value="Wynajem" {if $property.type == 'Wynajem'}checked{/if} style="color: black; width: 10%; float:left;">
                            <label for="wynajem" style="color: white; width: 40%; float:left;">Wynajem</label>
                            <input type="radio" id="sprzedaz" name="type" value="Sprzedaż" {if $property.type == 'Sprzedaż'}checked{/if} style="color: black; width: 10%; float:left;">
                            <label for="sprzedaz" style="color: white;width: 40%; float:left;">Sprzedaż</label>
                            <input type="hidden" id="property_id" name="property_id" value="{$property.idProperty}"/>
                            
                            <label for="images">Dodaj nowe zdjęcia: </label>
                            <input type="file" name="images[]" id="images" multiple style="color: black;"/>
                            <button type="submit" class="pure-button pure-button-primary" style="background-color: #1cb841; margin-top: 5px;">Zapisz</button>
                        </fieldset>
                    </form>

                    <form method="post" action="{$conf->action_root}remove_all_images" style="text-align: center;">
                        <input type="hidden" name="property_id" value="{$property.idProperty}">
                        <button type="submit" class="pure-button pure-button-danger" style="background-color: #d22d35; margin-top: 10px;">Usuń wszystkie zdjęcia</button>
                    </form>

                    {foreach $msgs->getMessages() as $msg}
                        <p style="background-color: #d22d35; padding: 3px 3px 3px 6px; width: 300px; border-radius: 3px; margin: 0 auto 20px auto;">{$msg->text}</p>
                    {/foreach}
                </div>
            </div>
        </div>
    </section>
</body>
{/block}
