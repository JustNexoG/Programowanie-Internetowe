{extends file="template.tpl"}

{block name=content}
  
<body class="u-body">
    <section class="u-clearfix u-palette-5-dark-3 u-section-2" id="carousel_fd80">
        <div class="u-clearfix u-sheet u-sheet-1" style="min-height: 450px; text-align: center;">
            <h1 class="u-text u-text-1">Szczegóły nieruchomości</h1>
            {if \core\RoleUtils::inRole("moderator") || (isset($logged_user) && $property->ownerId == $logged_user->idUser)}
                <a href="{url action='property_edit' id=$property->idProperty}" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1 btn btn-primary" style="margin: 10px;">Edytuj</a>
                <a href="{url action='delete_property' id=$property->idProperty}" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1 btn btn-danger" style="margin: 10px;" onclick="return confirm('Czy na pewno chcesz usunąć tę nieruchomość?');">Usuń</a>
            {/if}
            {if isset($logged_user)}
                {if $is_favorite}
                    <a href="{url action='remove_from_favorites' id=$property->idProperty}" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1" style="margin-left: 10px;">Usuń z ulubionych</a>
                {else}
                    <a href="{url action='add_to_favorites' id=$property->idProperty}" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1" style="margin-left: 10px;">Dodaj do ulubionych</a>
                {/if}
            {/if}
            <div class="u-expanded-width u-list u-list-1" style="min-height: 450px">
                <div class="u-repeater u-repeater-1" style="min-height: 450px">
                    {if $property->images}
                        {foreach $property->images as $image}
                        <div class="u-container-style u-list-item u-repeater-item" style="margin-bottom: 75px; text-align: center;">
                            <div class="u-container-layout u-similar-container u-container-layout-1">
                                <img src="{$conf->app_url}/{$image}" alt="" class="u-image-default u-preserve-proportions" style="margin-bottom: 25px; max-width: 100%; height: auto; max-height: 1080px;">
                            </div>
                        </div>
                        {/foreach}
                    {/if}
                    <div class="u-container-style u-list-item u-repeater-item" style="margin-top: 200px; margin-bottom: 75px; text-align: left;">
                        <div class="u-container-layout u-similar-container u-container-layout-1">
                            <h2 class="u-text u-text-2">{$property->address}</h2>
                            <h5 class="u-custom-font u-font-pt-sans u-text u-text-3"><span style="text-decoration: underline;">Cena:</span> {$property->price} PLN</h5>
                            <h5 class="u-custom-font u-font-pt-sans u-text u-text-3"><span style="text-decoration: underline;">Typ:</span> {$property->type}</h5>
                            <h5 class="u-custom-font u-font-pt-sans u-text u-text-3" style="text-decoration: underline;">Opis:</h5>
                            <h6 class="u-custom-font u-font-pt-sans u-text u-text-3" style="margin-top: 0; font-size: 2rem;">{$property->description}</h6>
                            <h5 class="u-custom-font u-font-pt-sans u-text u-text-3"><span style="text-decoration: underline;">Data dodania:</span> {$property->datePosted}</h5>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

{/block}
