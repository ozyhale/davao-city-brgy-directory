<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand">List of Users</a>
            <ul class="nav pull-right">
                <li><a href="#add_user" data-toggle="modal">Add User <!--<i class="icon-check"></i>--></a></li>
            </ul>
        </div>
    </div>
</div>

<p class="well well-small">
    <button id="select_all" class="btn">Select All</button>
    <button id="select_none" class="btn">Select None</button>
    <button id="delete_selected_users" class="btn">Delete Selected</button>
</p>

<table class="table table-bordered table-hover data-table">

    <thead>
        <tr>
            <th>Username</th>  
            <th>Name</th>
            <th>Email</th>
            <!-- <th>Assigned to upload</th>-->
            <th>Controls</th>
        </tr>
    </thead>

    <tbody>
        {foreach from=$users item=i}
            <tr>
                <td>
                    <label class="checkbox">
                        <input class="entry" type="checkbox" value="{$i['id']}" /> {$i['username']}
                    </label>
                </td>
                <td>{$i['firstname']} {$i['middlename']} {$i['lastname']}</td>
                <td>{$i['email']}</td>
                <!-- <td>{$i['assigned_to']}</td>-->

                <td>
                    <a href="#" class="btn btn-small" onclick="deleteUser({$i['id']});">Delete<!--<i class="icon-trash"></i>--></a>
                </td>
                
            </tr>
        {/foreach}
    </tbody>
</table>
