<div id="add_user" class="modal hide fade">
    <form class="form-horizontal" action="{$site_url}users/add" method="post">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Add User</h3>
        </div>

        <div class="modal-body">

            {if isset($add_user_alert)}
                {$add_user_alert}
            {/if}

            <legend>Login Information</legend>

            <div class="control-group">
                <label class="control-label">Username: </label>
                <div class="controls">
                    <input type="text" name="username" value="{if isset($val_username)}{$val_username}{/if}">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Password: </label>
                <div class="controls">
                    <input type="password" name="password">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Confirm Password: </label>
                <div class="controls">
                    <input type="password" name="confpass">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Email: </label>
                <div class="controls">
                    <input type="email" name="email" value="{if isset($val_email)}{$val_email}{/if}">
                </div>
            </div>
                
            <!-- 
            <div class="control-group">
                <label class="control-label">Assign To Upload: </label>
                <div class="controls">
                    <select name="assigned_to">
                        <option></option>
                        
                        {foreach from=$categories item=i}
                            <option value="{$i['id']}" {if isset($val_assigned_to) && $val_assigned_to == $i['id']}selected{/if}>{$i['name']}</option>
                        {/foreach}
                        
                    </select>
                </div>
            </div>
            -->

            <legend>Personal Information</legend>

            <div class="control-group">
                <label class="control-label">First Name: </label>
                <div class="controls">
                    <input type="text" name="firstname" value="{if isset($val_firstname)}{$val_firstname}{/if}">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Middle Name: </label>
                <div class="controls">
                    <input type="text" name="middlename" value="{if isset($val_middlename)}{$val_middlename}{/if}">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Last Name: </label>
                <div class="controls">
                    <input type="text" name="lastname" value="{if isset($val_lastname)}{$val_lastname}{/if}">
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
            <button class="btn btn-primary" type="submit">Add</button>
        </div>
    </form>
</div>