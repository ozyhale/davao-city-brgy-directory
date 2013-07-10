<div id="add_category" class="modal hide fade">
    <form class="form-horizontal" action="{$site_url}categories/add" method="post">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Add Category</h3>
        </div>

        <div class="modal-body">

            {if isset($add_category_alert)}
                {$add_category_alert}
            {/if}
            
            <div class="control-group">
                <label class="control-label">Category Name: </label>
                <div class="controls">
                    <input type="text" name="category" value="" autofocus>
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
            <button class="btn btn-primary" type="submit">Add</button>
        </div>
    </form>
</div>