
{if !$fields.address_street.hidden}
    {counter name="panelFieldCount"}

    <table border='0' cellpadding='0' cellspacing='0' width='100%'>
        <tr>
            <td width='99%'>
                <input type="hidden" class="sugar_field" id="primary_address_state" value="{$fields.primary_address_state.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
                <input type="hidden" class="sugar_field" id="primary_address_country" value="{$fields.primary_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
                <input type="hidden" class="sugar_field" id="primary_address_street" value="{$fields.primary_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
                <input type="hidden" class="sugar_field" id="primary_address_city" value="{$fields.primary_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
                <input type="hidden" class="sugar_field" id="address_house" value="{$fields.address_house.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
                <input type="hidden" class="sugar_field" id="address_apartment" value="{$fields.address_apartment.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">

				{$fields.primary_address_country.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}

				{$fields.primary_address_state.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}

                {$fields.primary_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}<br>

                {$fields.primary_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}

                {$fields.address_house.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br},
                {$fields.address_apartment.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}<br>

            </td>
            <td class='dataField' width='1%'>
                {$custom_code_primary}
            </td>
        </tr>
    </table>
{/if}
