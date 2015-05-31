{* _navigation *}
{foreach from=$included_template item=item}
    <li>

    {if isset($item.captions)}
         
        {if isset($item.url)}
            {assign var="url" value=$item.url}
        {else}
            {assign var="url" value="#"}
        {/if}
        
        {if isset($item.cssclass)}
            {assign var="cssclass" value=$item.cssclass}
        {else}
            {assign var="cssclass" value=''}
        {/if}
        
        <a href="{$url}"><i class="{$cssclass}"></i> {$item.captions} {if isset($item.cssmnlv)}{#arrow_sign#}{/if}</a>
    {/if}

    {if isset($item.cssmnlv)}
        <ul class="{$item.cssmnlv}">
    {/if}
    
    {if isset($item.values)}
        {include file="`$site_dir`/_nav.tpl" included_template=$item.values}        
    {/if}
    
    {if isset($item.cssmnlv)}
        </ul>
    {/if}
    
    </li>
{/foreach}