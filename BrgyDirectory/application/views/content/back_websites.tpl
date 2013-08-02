<div class="navbar">
    <div class="navbar-inner">
        <div class="container">

            {if isset($mysites)}
                <a class="brand">My Websites</a>
            {else}
                <a class="brand">List of Websites</a>
            {/if}

            <ul class="nav pull-right">
                <li>
                    <a href="#upload_website" data-toggle="modal">Upload Website</a>
                </li>

                {if isset($account_type) && $account_type == "Super Admin"}
                    <li>
                        <a href="{$site_url}websites/discover_sites">Discover Sites</a>
                    </li>
                {/if}

                <li><a href="{$base_url}" target="_blank">View Homepage</a></li>
            </ul>
        </div>
    </div>
</div>

<p class="well well-small">
    <button id="select_all" class="btn">Select All</button>
    <button id="select_none" class="btn">Select None</button>
    <button id="delete_selected" class="btn">Delete Selected</button>

    {if isset($account_type) && $account_type == "Super Admin"}
        <button id="activate_selected" class="btn">Activate Selected</button>
        <button id="deactivate_selected" class="btn">Deactivate Selected</button>
    {/if}

</p>

<table style="border-color: black;"class="table table-bordered table-hover data-table">

    <thead>
        <tr>
            <th style="border-color: black;">Name</th>  
            <th style="border-color: black;">Districts</th>
            <th style="border-color: black; max-width: 200px;">Description</th>
            <th style="border-color: black;">Date Activated</th>
            <!-- <th>Category</th>-->
            <th style="border-color: black;">Uploaded By</th>
            <th style="border-color: black;">Status</th>
            <th style="border-color: black;">Controls</th>
        </tr>
    </thead>

    <tbody>
        {foreach from=$brgys item=i}
            <tr>
                <td style="border-color: black;">
                    <label class="checkbox">
                        <input class="entry" type="checkbox" value="{$i['id']}" /> {$i['name']|capitalize}
                    </label>
                </td>
                <td style="border-color: black;">{$i['district']}</td>
                <td style="border-color: black;">{$i['description']}</td>
                <td style="border-color: black;">{$i['date_registered']}</td>
                <!-- <td>{$i['category']}</td>-->
                <td style="border-color: black;">{$i['uploaded_by']}</td>

                <td style="border-color: black;">
                    {if {$i['status']} == 'active'}
                        <span class="label label-success">{$i['status']|capitalize}</span>
                    {else}
                        <span class="label label-important">{$i['status']|capitalize}</span>
                    {/if}

                    <div id="view_logo_{$i['id']}" class="lightbox hide fade">
                        <div class='lightbox-header'>
                            <a href="#" class="close" data-dismiss="lightbox">&times;</a>
                        </div>
                        <div class='lightbox-content'>
                            <img src="{$base_url}{$i['logo']}" />
                        </div>
                    </div>

                </td>
                <td style="border-color: black;">

                    <div class="btn-group">
                        <button style="max-height: 26px;"class="btn dropdown-toggle btn-small" data-toggle="dropdown">
                            Action <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">

                            {if isset($account_type) && $account_type == "Super Admin"}

                                {if $i['status'] == 'active'}
                                    <li><a href="{$site_url}websites/deactivate/{$i['id']}">Deactivate</a></li>
                                    {else}
                                    <li><a href="{$site_url}websites/activate/{$i['id']}">Activate</a></li>
                                    {/if}

                            {/if}

                            {if $username == $i['uploaded_by'] || $account_type == "Super Admin"}
                                <li><a href="{$site_url}websites/edit/{$i['id']}">Edit</a></li>
                                <li><a href="#" onclick="deleteWebsite({$i['id']});">Delete</a></li>
                                {/if}

                            <li><a href="{$base_url}{$i['url']}" target="_blank">View Site</a></li>
                                {if isset($i['logo'])}
                                <li><a href="#view_logo_{$i['id']}" data-toggle="lightbox">View Logo</a></li>
                                {/if}
                        </ul>
                    </div>
                </td>
            </tr>
        {/foreach}
    </tbody>
</table>