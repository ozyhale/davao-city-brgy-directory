<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand">List of Website Categories</a>
            <ul class="nav pull-right">
                <li><a href="#add_category" data-toggle="modal">Add Category</a></li>
            </ul>
        </div>
    </div>
</div>

<p class="well well-small">
    <button id="select_all" class="btn">Select All</button>
    <button id="select_none" class="btn">Select None</button>
    <button id="delete_selected_categories" class="btn">Delete Selected</button>
</p>

<table class="table table-bordered table-hover data-table">
    <thead>
        <tr>
            <th>Category Name</th>  
            <th>Controls</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$categories item=i}
            <tr>
                <td>
                    <label class="checkbox">
                        <input class="entry" type="checkbox" value="{$i['id']}" /> {$i['name']}
                    </label>
                </td>
                <td>
                    <a href="#" onclick="deleteCategory({$i['id']});">Delete</a>
                </td>
            </tr>
        {/foreach}
    </tbody>
</table>
