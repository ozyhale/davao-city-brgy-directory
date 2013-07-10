<div id="edit_settings" class="modal hide fade">

    <form class="form-horizontal" method="post" action="{$site_url}administrator/update_settings">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Account Settings</h3>
        </div>

        <div class="modal-body">

            {if isset($edit_settings_alert)}
                {$edit_settings_alert}
            {/if}
            
            <legend>Login Information</legend>
            <div class="control-group">
                <label class="control-label">Username: </label>
                <div class="controls">
                    <input type="text" name="username" value="{$username}">
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
                    <input type="password" name="passconf">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Email: </label>
                <div class="controls">
                    <input type="email" name="email" value="{$email}">
                </div>
            </div>

            <legend>Personal Information</legend>

            <div class="control-group">
                <label class="control-label">First Name: </label>
                <div class="controls">
                    <input type="text" name="firstname" value="{$firstname}">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Middle Name: </label>
                <div class="controls">
                    <input type="text" name="middlename" value="{$middlename}">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Last Name: </label>
                <div class="controls">
                    <input type="text" name="lastname" value="{$lastname}">
                </div>
            </div>

            <legend>Authentication</legend>

            <div class="control-group">
                <label class="control-label">Password: </label>
                <div class="controls">
                    <input type="password" name="authpass">
                </div>
            </div>
            
        </div>

        <div class="modal-footer">
            <a href="{$site_url}administrator" class="btn" data-dismiss="modal">Close</a>
            <button type="submit" class="btn btn-primary">Save</button> 
        </div>
    </form>
</div>
