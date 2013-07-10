<div id="upload_website" class="modal hide fade">

    <form id="load" class="form-horizontal" action="{$site_url}websites/upload" method="post" enctype="multipart/form-data">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Upload Baranggay Website</h3>
        </div>

        <div class="modal-body">

            {if isset($upload_web_alert)}
                {$upload_web_alert}
            {/if}

            <legend>Site Information</legend>

            <div class="control-group">
                <label class="control-label">Site Name: </label>
                <div class="controls">
                    <input type="text" name="site_name" placeholder="Brgy Name" />
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label">Web Files: </label>
                <div class="controls">
                    <input type="file" name="web_files" />
                    <span class="help-block">The file to be uploaded must be in zip format and have no spaces on its name. In a zip file, must have 1 folder and in that folder must have all the web files. The Folder's name(Barangay name) inside the zip file must match the zip's filename. For more information click <a href="{$site_url}help" target="_blank">here</a></span>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Description: </label>
                <div class="controls">
                    <textarea name="description"></textarea>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">District: </label>
                <div class="controls">
                    <select name="district">
                        <option></option>
                        <option>District I</option>
                        <option>District II</option>
                        <option>District III</option>
                    </select>
                </div>
            </div>

            <!--
            {if isset($account_type) && $account_type == "Super Admin"}
                <div class="control-group">
                    <label class="control-label">Category: </label>
                    <div class="controls">
                        <select name="category">
                            <option></option>
                            
                            {foreach from=$categories item=i}
                                <option value="{$i['id']}">{$i['name']}</option>
                            {/foreach}
                            
                        </select>
                    </div>
                </div>
            {/if}
            -->

            <div class="control-group">
                <label class="control-label">Logo: </label>
                <div class="controls">
                    <input type="file" name="logo" />
                    <span class="help-block">Recommended logo's dimensions: 200x200</span>
                </div>
            </div>

            <legend>Database Information</legend>

            <div class="control-group">
                <label class="control-label">Database Name: </label>
                <div class="controls">
                    <input type="text" name="database" />
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">SQL File: </label>
                <div class="controls">
                    <input type="file" name="sql" />
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</div>