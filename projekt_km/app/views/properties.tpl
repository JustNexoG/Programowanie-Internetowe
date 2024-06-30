{extends file="template.tpl"}

{block name=content}
  
<body class="u-body">
    <section class="u-clearfix u-palette-5-dark-3 u-section-2" id="carousel_fd80" style="padding-bottom: 100px;">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-text-1" style="margin-bottom: 20px;">Nieruchomości</h1>
            {if isset($logged_user) && \core\RoleUtils::inRole("user")}
                <a href="{$conf->action_root}property_insert" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1" style="margin-left: 0;">Dodaj nieruchomość</a>
            {/if}
            <form id="property-search-form" class="pure-form" method="post" action="{$conf->action_root}find_properties" onsubmit="ajaxPostForm('property-search-form', '{$conf->action_root}find_properties', 'property-listings'); return false;">

                <fieldset>
                    <input type="text" id="address" name="address" placeholder="Wyszukaj nieruchomości" style="color: black; margin-top: 5px; width: 300px;" />
                    <input type="hidden" id="page" name="page" value="1" />
                    <button type="submit" class="pure-button pure-button-primary" style="background-color: #6e2aad; margin-top: 5px;">Wyszukaj</button>
                </fieldset>
            </form>
                
            <div id="property-listings" class="u-expanded-width u-list u-list-1">
                {include file="property_list_partial.tpl"}
            </div>

                <div style="margin-top: 50px; position: relative;">
                    {if $page != 1}
                        <a class="pure-button" href="{url action='property_list' page=$page-1}" title="Poprzednia strona" style="font-size: 200%; color: black; position: absolute; left: -50px;"><<i class="fas fa-angle-left"></i></a>
                    {/if}
                    <p style="font-size: 200%; position: absolute; right: 50%; margin-top: 0;">> {$page} <</p>
                    {if $page < $max_page}
                        <a class="pure-button" href="{url action='property_list' page=$page+1}" title="Następna strona" style="font-size: 200%; color: black; position: absolute; right: -50px;">><i class="fas fa-angle-right"></i></a>
                    {/if}
                </div>
        </div>
    </section>
</body>
{/block}
