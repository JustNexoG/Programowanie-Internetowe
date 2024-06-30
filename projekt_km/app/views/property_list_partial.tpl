{foreach $properties as $row}
    <div class="u-container-style u-list-item u-repeater-item" style="margin-bottom: 50px; min-height: 375px;">
        <div class="u-container-layout u-similar-container u-container-layout-1">
            {if isset($row.main_image)}
                <img src="{$conf->app_url}/{$row.main_image}" alt="" class="u-image u-image-default u-preserve-proportions u-image-1" style="height: 400px; width: 550px;">
            {else}
                <img src="{$conf->app_url}/assets/images/default_image.jpg" alt="" class="u-image u-image-default u-preserve-proportions u-image-1" style="height: 400px; width: 550px;">
            {/if}
            <h2 class="u-text u-text-2" style="margin-top: -400px; margin-left: 600px">{$row.address}</h2>
            <h5 class="u-custom-font u-font-pt-sans u-text u-text-3" style="margin-left: 600px">Cena: {$row.price} PLN</h5>
            <a href="{url action='property_details' id=$row.idProperty}" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1" style="margin-left: 600px;">Więcej</a>
            {if isset($logged_user) && ($logged_user->idUser == $row.ownerId || \core\RoleUtils::inRole("moderator"))}
                <a href="{url action='property_edit' id=$row.idProperty}" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1" style="margin-left: 600px;">Edytuj</a>
                <a href="{url action='delete_property' id=$row.idProperty}" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1" style="margin-left: 600px;" onclick="return confirm('Czy na pewno chcesz usunąć tę nieruchomość?')">Usuń</a>
            {/if}
        </div>
    </div>
{/foreach}
