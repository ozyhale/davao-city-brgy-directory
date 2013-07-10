<script>
    function myFunction(link) {

        var dump = link;
        window.open(dump, '_blank');
    }
</script>

{if isset($searched)}

    <div class="container">

        <div class="row">

            <div class="span12">
                <h3 class="text-info">Searched results for "{$search}"</h2>
            </div>

            {if empty($searched)}
                <div class="span12">
                    <h3 class="text-error">Empty Results</h3>
                </div>
            {else}
                <div class="span12">

                    <table style="border-color: black;" class="text-info table table-bordered table-hover data-table-no-search">

                        <thead>
                            <tr>
                                <th style="border-color: black;" >Name</th>
                                <th style="border-color: black;" >Description</th>
                                <th style="border-color: black;" >District</th>
                                <th style="border-color: black;" >Logo</th>
                                <th style="border-color: black;" >URL</th>
                            </tr>
                        </thead>

                        <tbody>
                            {foreach from=$searched item=i}
                                <tr>
                                    <td style="border-color: black; color: rgb(32,77,92);">{str_replace($search, "<span class='text-error'><u>$search</u></span>", $i['name'])}</td>
                                    <td style="border-color: black; color: rgb(32,77,92);">{$i['description']}</td>
                                    <td style="border-color: black; color: rgb(32,77,92);">{$i['district']}</td>
                                    <td style="border-color: black;"><img height="50" width="50" src="{$base_url}{$i['logo']}" alt="{$i['name']}"/></td>
                                    <td style="border-color: black;"><a style="color: rgb(32,77,92);" href="{$base_url}{$i['url']}" target="_blank">{$base_url}{$i['url']}</a></td>
                                    {/foreach}
                        </tbody>
                    </table>

                </div>
            {/if}
        </div>
    </div>

{else}

    <div class="container">
        <div class="row">

            <div class="span4">

                {if !empty($district1)}

                    <ul class="bxslider">

                        {for $x=0 to (count($district1) - 1) step 6}
                            <li>
                                <table style="border-color: black;" class="table table-bordered logos">

                                    <thead>
                                        <tr>
                                            <th colspan="3"><h4 class="text-info text-center">District I</h4></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        {foreach from=array_slice($district1, $x, 6, true) item=i key=k name=d1}

                                            {if $k % 3 == 0}
                                                
                                                <tr>
                                                    <td>
                                                        <a href="{$base_url}{$i['url']}" target="_blank">
                                                            <img class="logo" src="{$base_url}{$i['logo']}" alt="{$i['name']}"/>
                                                        </a>
                                                        <p class="logo-caption">
                                                            <small>
                                                                <a href="{$base_url}{$i['url']}" target="_blank">{$i['name']}</a>
                                                            </small>
                                                        </p>
                                                    </td>

                                                    {if $smarty.foreach.d1.last}
                                                        
                                                        {if not $k < 2}
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            </tr>
                                                        {else}
                                                            </tr>
                                                        {/if}
                                                        
                                                    {/if}

                                                {elseif $k % 3 == 1}
                                                    
                                                    <td>
                                                        <a href="{$base_url}{$i['url']}" target="_blank">
                                                            <img class="logo" src="{$base_url}{$i['logo']}" alt="{$i['name']}"/>
                                                        </a>
                                                        <p class="logo-caption">
                                                            <small>
                                                                <a href="{$base_url}{$i['url']}" target="_blank">{$i['name']}</a>
                                                            </small>
                                                        </p>
                                                    </td>
                                                    
                                                    {if $smarty.foreach.d1.last}
                                                        
                                                        {if not ($k < 2)}
                                                            <td>&nbsp;</td>
                                                            </tr>
                                                        {else}
                                                            </tr>
                                                        {/if}
                                                        
                                                    {/if}
                                                    
                                                {elseif $k % 3 == 2}
                                                    
                                                    <td>
                                                        <a href="{$base_url}{$i['url']}" target="_blank">
                                                            <img class="logo" src="{$base_url}{$i['logo']}" alt="{$i['name']}"/>
                                                        </a>
                                                        <p class="logo-caption">
                                                            <small>
                                                                <a href="{$base_url}{$i['url']}" target="_blank">{$i['name']}</a>
                                                            </small>
                                                        </p>
                                                    </td>
                                                </tr>
                                            {/if}

                                            {if ($k + 1) == 6}
                                                {break}
                                            {/if}

                                        {/foreach}

                                    </tbody>
                                </table>
                            </li>
                        {/for}
                    </ul>
                {/if}

            </div>

            <div class="span4">

                {if !empty($district2)}

                    <ul class="bxslider">

                        {for $x=0 to (count($district2) - 1) step 6}
                            <li>
                                <table style="border-color: black;" class="table table-bordered logos">

                                    <thead>
                                        <tr>
                                            <th colspan="3"><h4 class="text-info text-center">District II</h4></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        {foreach from=array_slice($district2, $x, 6, true) item=i key=k name=d2}

                                            {if $k % 3 == 0}
                                                
                                                <tr>
                                                    <td>
                                                        <a href="{$base_url}{$i['url']}" target="_blank">
                                                            <img class="logo" src="{$base_url}{$i['logo']}" alt="{$i['name']}"/>
                                                        </a>
                                                        <p class="logo-caption">
                                                            <small>
                                                                <a href="{$base_url}{$i['url']}" target="_blank">{$i['name']}</a>
                                                            </small>
                                                        </p>
                                                    </td>

                                                    {if $smarty.foreach.d2.last}
                                                        
                                                        {if $k < 2}
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            </tr>
                                                        {else}
                                                            </tr>
                                                        {/if}
                                                        
                                                    {/if}

                                                {elseif $k % 3 == 1}
                                                    
                                                    <td>
                                                        <a href="{$base_url}{$i['url']}" target="_blank">
                                                            <img class="logo" src="{$base_url}{$i['logo']}" alt="{$i['name']}"/>
                                                        </a>
                                                        <p class="logo-caption">
                                                            <small>
                                                                <a href="{$base_url}{$i['url']}" target="_blank">{$i['name']}</a>
                                                            </small>
                                                        </p>
                                                    </td>
                                                    
                                                    {if $smarty.foreach.d2.last}
                                                        
                                                        {if not ($k < 2)}
                                                            <td>&nbsp;</td>
                                                            </tr>
                                                        {else}
                                                            </tr>
                                                        {/if}
                                                        
                                                    {/if}
                                                    
                                                {elseif $k % 3 == 2}
                                                    
                                                    <td>
                                                        <a href="{$base_url}{$i['url']}" target="_blank">
                                                            <img class="logo" src="{$base_url}{$i['logo']}" alt="{$i['name']}"/>
                                                        </a>
                                                        <p class="logo-caption">
                                                            <small>
                                                                <a href="{$base_url}{$i['url']}" target="_blank">{$i['name']}</a>
                                                            </small>
                                                        </p>
                                                    </td>
                                                </tr>
                                            {/if}

                                            {if ($k + 1) == 6}
                                                {break}
                                            {/if}

                                        {/foreach}

                                    </tbody>
                                </table>
                            </li>
                        {/for}
                    </ul>
                {/if}

            </div>

            <div class="span4">

                {if !empty($district3)}

                    <ul class="bxslider">

                        {for $x=0 to (count($district3) - 1) step 6}
                            <li>
                                <table style="border-color: black;" class="table table-bordered logos">

                                    <thead>
                                        <tr>
                                            <th colspan="3"><h4 class="text-info text-center">District III</h4></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        {foreach from=array_slice($district3, $x, 6, true) item=i key=k name=d3}

                                            {if $k % 3 == 0}
                                                
                                                <tr>
                                                    <td>
                                                        <a href="{$base_url}{$i['url']}" target="_blank">
                                                            <img class="logo" src="{$base_url}{$i['logo']}" alt="{$i['name']}"/>
                                                        </a>
                                                        <p class="logo-caption">
                                                            <small>
                                                                <a href="{$base_url}{$i['url']}" target="_blank">{$i['name']}</a>
                                                            </small>
                                                        </p>
                                                    </td>

                                                    {if $smarty.foreach.d3.last}
                                                        
                                                        {if not $k < 2}
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            </tr>
                                                        {else}
                                                            </tr>
                                                        {/if}
                                                        
                                                    {/if}

                                                {elseif $k % 3 == 1}
                                                    
                                                    <td>
                                                        <a href="{$base_url}{$i['url']}" target="_blank">
                                                            <img class="logo" src="{$base_url}{$i['logo']}" alt="{$i['name']}"/>
                                                        </a>
                                                        <p class="logo-caption">
                                                            <small>
                                                                <a href="{$base_url}{$i['url']}" target="_blank">{$i['name']}</a>
                                                            </small>
                                                        </p>
                                                    </td>
                                                    
                                                    {if $smarty.foreach.d3.last}
                                                        
                                                        {if not ($k < 2)}
                                                            <td>&nbsp;</td>
                                                            </tr>
                                                        {else}
                                                            </tr>
                                                        {/if}
                                                        
                                                    {/if}
                                                    
                                                {elseif $k % 3 == 2}
                                                    
                                                    <td>
                                                        <a href="{$base_url}{$i['url']}" target="_blank">
                                                            <img class="logo" src="{$base_url}{$i['logo']}" alt="{$i['name']}"/>
                                                        </a>
                                                        <p class="logo-caption">
                                                            <small>
                                                                <a href="{$base_url}{$i['url']}" target="_blank">{$i['name']}</a>
                                                            </small>
                                                        </p>
                                                    </td>
                                                </tr>
                                            {/if}

                                            {if ($k + 1) == 6}
                                                {break}
                                            {/if}

                                        {/foreach}

                                    </tbody>
                                </table>
                            </li>
                        {/for}
                    </ul>
                {/if}

            </div>
        </div>
    </div> 

{/if}
