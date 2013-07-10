<script>
    function myFunction(link) {

    var dump = link;
    window.open(dump, '_blank');
}

</script>

{*
<div class="container">
    
<div class="span10">
             
<p>District 1</p>
{if !empty($district1)}

<table class="table table-bordered table-hover data-table">

<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Description</th>
<th>Logo</th>
<th>URL</th>
</tr>
</thead>

<tbody>
{foreach from=$district1 item=i}
<tr>
<td>{$i['id']}</td>
<td>{$i['name']}</td>
<td>{$i['description']}</td>
<td>{$base_url}{$i['logo']}</td>
<td>{$base_url}{$i['url']}</td>
{/foreach}
</tbody>
</table>
    
<div id="content">
<h2 class="title1">District 1</h2>
<div class="scroller dist1">
<div class="inside">
    
{foreach from=$district1 item=i}       
                  
<a href="{$base_url}{$i['url']}"><img src="{$base_url}{$i['logo']}" alt="{$i['name']}"/></a>
{/foreach}


</div>
</div>
</div>

{else}
<h2>No Barangay has been uploaded yet!</h2>


{/if}
</div>
</div>
*}

<div id="content">

    {if !empty($district1)}

        <table style=" border-color: black;"class="text-info table table-bordered table-hover data-table-no-search">

            <thead>
                <tr>
                    <th style=" border-color: black;" colspan="3">DISTRICT 1</th>
                </tr>
                <tr>
                    <th style=" border-color: black;">Name</th>
                    <th style=" border-color: black;">Description</th>
                    <th style=" border-color: black;">URL</th>
                </tr>
            </thead>

            <tbody>
                {foreach from=$district1 item=i}
                    <tr>
                        <td style="border-color: black;color: rgb(32,77,92);">{$i['name']}</td>
                        <td style="border-color: black;color: rgb(32,77,92);">{$i['description']}</td>
                        <td style="border-color: black;"><a style="color: rgb(32,77,92);" href="{$base_url}{$i['url']}" target="_blank">{$base_url}{$i['url']}</td>
                    {/foreach}
            </tbody>
        </table>

        <div id="content">
            <h5 style="color: rgb(58,135,173); font-family: inherit; font-size: 35px;" class="title1">District 1</h5>
            <div class="scroller dist1">
                <div class="inside">

                    {if count($district1) <= 2 }
                        <a href="#" ><img src="{$base_url}application/views/img/arrowleft.png"  alt="more"><button style="color: transparent; outline: 0px; position: absolute; background-color: transparent; left: 40%; top: 40%; bottom: 40%; height: 20px; width: 40px;" class="btn btn-link"></button></img></a>
                            {foreach from=$district1 item=i} 
                            <a href="{$base_url}{$i['url']}" ><img src="{$base_url}{$i['logo']}"  alt="{$i['name']}"><button style="color: transparent; outline: 0px; position: absolute; background-color: transparent; left: 40%; top: 40%; bottom: 40%; height: 30px; width: 40px;"onclick="myFunction('{$base_url}{$i['url']}');" class="btn btn-link"></button></img></a>                           
                            {/foreach}
                        <a href="#" ><img src="{$base_url}application/views/img/arrowright.png"  alt="more"><button style="color: transparent; outline: 0px; position: absolute; background-color: transparent; left: 40%; top: 40%; bottom: 40%; height: 20px; width: 40px;" class="btn btn-link"></button></img></a>
                        {else}
                        <a href="#" ><img src="{$base_url}application/views/img/arrowleft.png"  alt="more"><button style="color: transparent; outline: 0px; position: absolute; background-color: transparent; left: 40%; top: 40%; bottom: 40%; height: 20px; width: 40px;" class="btn btn-link"></button></img></a>
                            {foreach from=$district1 item=i}                            
                            <a href="{$base_url}{$i['url']}" ><img src="{$base_url}{$i['logo']}"  alt="{$i['name']}"><button style="color: transparent; outline: 0px; position: absolute; background-color: transparent; left: 40%; top: 40%; bottom: 40%; height: 20px; width: 40px;"onclick="myFunction('{$base_url}{$i['url']}');" class="btn btn-link"></button></img></a>                           
                            {/foreach}
                        <a href="#" ><img src="{$base_url}application/views/img/arrowright.png"  alt="more"><button style="color: transparent; outline: 0px; position: absolute; background-color: transparent; left: 40%; top: 40%; bottom: 40%; height: 20px; width: 40px;" class="btn btn-link"></button></img></a>
                        {/if}          

                {else}
                    <div class="span10">
                        <h2 class="text-info">District 1</h2>
                        <h3 class="muted">Empty Directory</h3>                  
                    </div>
                {/if} 


            </div>
        </div>
    </div>

</div>
