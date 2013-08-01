<div id="edit_website" class="modal hide fade">

    <form id="load" class="form-horizontal" action="{$site_url}websites/update/{if isset($id)}{$id}{/if}" method="post" enctype="multipart/form-data">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Edit Barangay Website</h3>
        </div>

        <div class="modal-body">

            {if isset($edit_web_alert)}
                {$edit_web_alert}
            {/if}

            <legend>Site Information</legend>

            <div class="control-group">
                <label class="control-label">Name: </label>
                <div class="controls">
                    <input type="text" name="name" value="{if isset($val_name)}{$val_name}{/if}" />
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Description: </label>
                <div class="controls">
                    <textarea name="description">{if isset($val_desc)}{$val_desc}{/if}</textarea>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">District: </label>
                <div class="controls">
                    <select name="district">
                        <option></option>
                        <option {if isset($val_dist) && $val_dist == "District I"}selected{/if}>District I</option>
                        <option {if isset($val_dist) && $val_dist == "District II"}selected{/if}>District II</option>
                        <option {if isset($val_dist) && $val_dist == "District III"}selected{/if}>District III</option>
                    </select>
                </div>
            </div>
{*
            {if isset($account_type) && $account_type == "Super Admin"}
                <div class="control-group">
                    <label class="control-label">Category: </label>
                    <div class="controls">
                        <select name="category">
                            <option></option>

                            {foreach from=$categories item=i}
                                <option value="{$i['id']}" {if $i['id'] == $val_category}selected{/if}>{$i['name']}</option>
                            {/foreach}

                        </select>
                    </div>
                </div>
            {/if}
*}
            <div class="control-group">
                <label class="control-label">Logo: </label>
                <div class="controls">
                    <input type="file" name="logo" />
                    <span class="help-block">Recommended logo's dimensions: 200x200</span>
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>