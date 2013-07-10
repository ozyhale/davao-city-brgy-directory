/*
 * =============================================================================
 * Websites controller scripts
 * ============================================================================= 
 */

$('#load').on('submit', function() {
    $('#upload_website').modal('hide');
    $('#loading').modal('show');
});

$('#select_all').on('click', function() {
    $('.entry').prop('checked', true);
});

$('#select_none').on('click', function() {
    $('.entry').prop('checked', false);
});

$('#delete_selected').on('click', function() {

    if ($('.entry:checked').length > 0) {

        bootbox.confirm("Deleting multiple entries. Are you sure?", function(result) {
            if (result === true) {

                var valueDeleted = "";

                $('.entry:checked').each(function() {
                    valueDeleted += $(this).val() + "_";
                });

                $('#loading').modal('show');

                window.location.href = site_url + "websites/delete/?selected=" + valueDeleted;
            }
        });
    }
});

$('#activate_selected').on('click', function() {

    if ($('.entry:checked').length > 0) {

        bootbox.confirm("Activating multiple entries. Are you sure?", function(result) {
            if (result === true) {

                var valueActivate = "";

                $('.entry:checked').each(function() {
                    valueActivate += $(this).val() + "_";
                });

                window.location.href = site_url + "websites/activate/?selected=" + valueActivate;
            }
        });
    }
});

$('#deactivate_selected').on('click', function() {

    if ($('.entry:checked').length > 0) {

        bootbox.confirm("Deactivating multiple entries. Are you sure?", function(result) {
            if (result === true) {

                var valueDeactivate = "";

                $('.entry:checked').each(function() {
                    valueDeactivate += $(this).val() + "_";
                });

                window.location.href = site_url + "websites/deactivate/?selected=" + valueDeactivate;
            }
        });
    }
});

function deleteWebsite(id) {
    bootbox.confirm("Are you sure you want to delete this entry? ", function(result) {

        if (result === true) {
            $('#loading').modal('show');
            window.location.href = site_url + 'websites/delete/' + id;
        }

    });
}

/*
 * =============================================================================
 * Users controller scripts
 * ============================================================================= 
 */

$('#delete_selected_users').on('click', function() {

    if ($('.entry:checked').length > 0) {

        bootbox.confirm("Deleting multiple entries. Are you sure?", function(result) {
            if (result === true) {

                var valueDeleted = "";

                $('.entry:checked').each(function() {
                    valueDeleted += $(this).val() + "_";
                });

                window.location.href = site_url + "users/delete/?selected=" + valueDeleted;
            }
        });
    }
});

function deleteUser(id) {
    bootbox.confirm("Are you sure you want to delete this entry? ", function(result) {

        if (result === true) {
            window.location.href = site_url + 'users/delete/' + id;
        }

    });
}

/*
 * =============================================================================
 * Categories controller scripts
 * ============================================================================= 
 */

$('#delete_selected_categories').on('click', function() {

    if ($('.entry:checked').length > 0) {

        bootbox.confirm("Deleting multiple entries. Are you sure?", function(result) {
            if (result === true) {

                var valueDeleted = "";

                $('.entry:checked').each(function() {
                    valueDeleted += $(this).val() + "_";
                });

                window.location.href = site_url + "categories/delete/?selected=" + valueDeleted;
            }
        });
    }
});

function deleteCategory(id) {
    bootbox.confirm("Are you sure you want to delete this entry? ", function(result) {

        if (result === true) {
            window.location.href = site_url + 'categories/delete/' + id;
        }

    });
}