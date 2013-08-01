<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of websites
 *
 * @author ic
 */
class Websites extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('website_model', '', TRUE);
//        $this->load->model('category_model', '', TRUE);
        $this->load->helper('inflector');
        $this->load->library('session');

//        $categories = $this->category_model->get_all_data();
//
//        $this->template_engine->assign('categories', $categories->result_array());
        $this->template_engine->assign('title', get_class($this) . ' - ' . $this->config->item('site_name'));
    }

    public function index() {

        $this->load->library('table');
        $this->load->helper('date');

        $query = $this->website_model->get_all_data('websites.id, websites.name, websites.district, websites.description, websites.logo, websites.url, websites.date_registered, websites.status, users.username AS uploaded_by');

        foreach ($query->result_array() as $value) {
            if ((strtotime($value['date_registered']) + 31536000) <= now()) {
                $this->website_model->deactivate($value['id']);
            }
        }

        $this->template_engine->assign('brgys', $query->result_array());
        $this->template_engine->assign('content', 'back_websites.tpl');
    }

    private function _rename_brgy_dir($old_dir, $new_dir) {
        return rename($old_dir . '/', $new_dir . '/');
    }

    private function _extract_rename_zip($zipfile, $name) {
        //opening the uploaded zip
        $zip = zip_open($zipfile);

        $valid = true;

        $first_resource = zip_read($zip);

        $folder = rtrim(zip_entry_name($first_resource), "/");

        //check directory inside zip if has space in it
        if (preg_match("/\s/", $folder)) {
            $this->_upload_error("The top level folder inside the zip contains spaces. Rename the folder inside and continue uploading.");
            return;
        }

        //check the zip contents if valid
        while ($id = zip_read($zip)) {

            if (!preg_match("/^$folder/", zip_entry_name($id))) {
                zip_close($zip);
                $valid = false;
                break;
            }
        }

        if (!$valid) {
            $this->_upload_error("Invalid zip: Zip file must have only 1 folder (no other folders/files), and the folder must have the webfiles inside it.");
            return;
        }

        //extract the files in zip
        $zip_archive = new ZipArchive();
        $zip_archive->open($zipfile);

        if (!$zip_archive->extractTo('./')) {
            $zip_archive->close();
            $this->_upload_error("Error in extracting the zip!");
            return;
        }

        //rename directory according to site_name
        if (!$this->_rename_brgy_dir($folder, url_title($name))) {
            $this->_update_error($id, "Error in renaming name!");
            return;
        }

        $zip_archive->close();
    }

    public function upload() {
	
        set_time_limit(0);

        $this->load->library('form_validation');
        $this->load->helper('date');

        $this->form_validation->set_rules('site_name', 'Site Name', 'required|xss_clean|is_unique[websites.name]');
        $this->form_validation->set_rules('description', 'Description', 'required|xss_clean');
        $this->form_validation->set_rules('district', 'District', 'required|xss_clean');
        $this->form_validation->set_rules('database', 'Database', 'required|xss_clean|is_unique[websites.database]');

        //validate forms
        if (!$this->form_validation->run()) {
            $this->_upload_error(validation_errors());
            return;
        }

        //Check database if exists in the server
        $this->load->database();

        $query = $this->db->query("SHOW DATABASES");

        $found = false;

        foreach ($query->result_array() as $value) {
            if ($value['Database'] == $this->input->post('database')) {
                $found = true;
                break;
            }
        }

        if ($found) {
            $this->_upload_error("Database Exists!");
            return;
        }

        //Check the web files if inputed
        if ($_FILES['web_files']['error'] == UPLOAD_ERR_NO_FILE) {
            $this->_upload_error("Web Files are required!");
            return;
        }

        //check the logo if inputed
        if ($_FILES['logo']['error'] == UPLOAD_ERR_NO_FILE) {
            $this->_upload_error("Logo is required!");
            return;
        }

        //check the sql if inputed
        if ($_FILES['sql']['error'] == UPLOAD_ERR_NO_FILE) {
            $this->_upload_error("Sql file is required!");
            return;
        }

        $params['file'] = $_FILES['web_files'];
        $this->load->library('upload_class', $params);

        //upload zip file
        if (!$this->upload_class->uploaded) {
            $this->_upload_error("Error uploading the zip file: " . $this->upload_class->error);
            return;
        }

        $name = $this->input->post('site_name');

        $this->upload_class->file_new_name_body = $name;
        $this->upload_class->file_overwrite = true;
        $this->upload_class->allowed = array('application/zip', 'application/x-zip', 'application/octet-stream');
        $this->upload_class->process('application/tmp/');

        //processing the zip file
        if (!$this->upload_class->processed) {
            $this->_upload_error("Error processing the zip file: " . $this->upload_class->error);
            return;
        }

//        $this->_extract_rename_zip('application/tmp/' . $this->upload_class->file_dst_name_body . '.zip', $name);

        //opening the uploaded zip
        $zip = zip_open('application/tmp/' . $this->upload_class->file_dst_name_body . '.zip');

        $valid = true;

        $first_resource = zip_read($zip);

        $folder = rtrim(zip_entry_name($first_resource), "/");

        //check directory inside zip if has space in it
        if (preg_match("/\s/", $folder)) {
            $this->_upload_error("The top level folder inside the zip contains spaces. Rename the folder inside and continue uploading.");
            return;
        }

        //check the zip contents if valid
        while ($id = zip_read($zip)) {

            if (!preg_match("/^$folder/", zip_entry_name($id))) {
                zip_close($zip);
                $valid = false;
                break;
            }
        }

        if (!$valid) {
            $this->_upload_error("Invalid zip: Zip file must have only 1 folder (no other folders/files), and the folder must have the webfiles inside it.");
            return;
        }

        //extract the files in zip
        $zip_archive = new ZipArchive();
        $zip_archive->open('application/tmp/' . $this->upload_class->file_dst_name_body . '.zip');

        if (!$zip_archive->extractTo('./')) {
            $zip_archive->close();
            $this->_upload_error("Error in extracting the zip!");
            return;
        }

        //rename directory according to site_name
        if (!$this->_rename_brgy_dir($folder, url_title($name))) {
            $this->_update_error($id, "Error in renaming name!");
            return;
        }

        $zip_archive->close();

        //upload logo
        $params_logos['file'] = $_FILES['logo'];
        $this->load->library('upload_class', $params_logos, 'upload_logo');

        if (!$this->upload_logo->uploaded) {
            $this->_upload_error("Error in uploading the logo: " . $this->upload_logo->error);
            return;
        }

        //process logo
        $this->upload_logo->image_resize = true;
        $this->upload_logo->image_x = 200;
        $this->upload_logo->image_y = 200;
        $this->upload_logo->allowed = array('image/png');
        $this->upload_logo->image_convert = 'png';
        $this->upload_logo->process('application/views/logos/');

        if (!$this->upload_logo->processed) {
            $this->_upload_error("Error in processing the logo: " . $this->upload_logo->error);
            return;
        }

        $this->load->dbforge();

        //create database
        if (!$this->dbforge->create_database($this->input->post('database'))) {
            $this->_upload_error("Error in creating database!");
            return;
        }

        //upload sql file
        $params['file'] = $_FILES['sql'];
        $this->load->library('upload_class', $params, 'upload_sql');

        if (!$this->upload_sql->uploaded) {
            $this->_upload_error("Error in uploading the sql file: " . $this->upload_sql->error);
            return;
        }

        //process sql file
        $this->upload_sql->file_overwrite = true;
        $this->upload_sql->file_new_name_body = $name;
		$this->upload_sql->no_script = false;
        $this->upload_sql->allowed = array('application/octet-stream', 'text/plain');
        $this->upload_sql->process('application/tmp/');

        if (!$this->upload_sql->processed) {
            $this->_upload_error("Error in processing the sql file: " . $this->upload_sql->error);
            return;
        }

        //dump sql file
        $server = $this->db->hostname;
        $username = $this->db->username;
        $password = $this->db->password;

        $params['database'] = $this->input->post('database');
        $params['connection'] = @mysql_connect($server, $username, $password);
        $params['file'] = 'application/tmp/' . $this->upload_class->file_dst_name_body . '.sql';

        $this->load->library('sql_importer', $params);

        if (!$this->sql_importer->doImport()) {
            $this->_upload_error("Error in dumping the sql file: ");
            return;
        }

        $data['name'] = $name;
        $data['district'] = $this->input->post('district');
        $data['description'] = $this->input->post('description');
        $data['logo'] = "application/views/logos/" . $this->upload_logo->file_dst_name;
        $data['database'] = $this->input->post('database');
        $data['url'] = url_title($name);
        $data['status'] = 'inactive';
        $data['uploaded_by'] = $this->session->userdata('id');

        $this->website_model->add_website($data);

        redirect("websites/uploaded");
    }

    public function uploaded() {

        $this->load->helper('file');

        delete_files("application/tmp", TRUE);

        $this->template_engine->set_upload_web_alert('Uploaded Successfully!', 'Success');
        $this->index();
    }

    private function _upload_error($msg, $name = '', $database = '') {

        $this->load->helper('file');

        //delete files in tmp folder
        @delete_files("application/tmp", TRUE);

        //delete web files
        if (file_exists($name)) {
            delete_files($name, TRUE, 1);
        }

        $this->load->dbforge();

        //dropping database
        if ($database != '') {
            $this->dbforge->drop_database($database);
        }

        //Repopulate the Form
        //Set alert
        $this->template_engine->set_upload_web_alert($msg, 'Error');

        $this->index();
    }

    public function discover_sites() {

        if ($this->session->userdata('account_type') != "Super Admin") {
            $this->index();
            return;
        }

        $folders = scandir("./");

        foreach ($folders as $key => $folder) {
            if (preg_match("/\s/", $folder) != 0) {
                unset($folders[$key]);
            }
        }

        $protect = array('.', '..', '.htaccess', 'admin', 'application', 'index.php', 'license.txt', 'system');

        $urls = $this->website_model->get_URLs();

        $to_be_added = array_diff($folders, $protect, $urls);

        $this->load->library('table');

        $this->table->set_heading('Website Name', 'URL');

        $this->load->helper('date');

        foreach ($to_be_added as $folder) {
            $new_data['name'] = $folder;
            $new_data['url'] = $folder;
            $new_data['status'] = 'inactive';
            $new_data['uploaded_by'] = $this->session->userdata('id');

            $this->table->add_row($folder, '<a href="' . base_url($folder . '/') . '" target="_blank">' . base_url($folder . '/') . '</a>');

            $this->website_model->add_discovered($new_data);
        }

        $tmpl = array('table_open' => '<table class="table table-bordered table-hover data-table">');

        $this->table->set_template($tmpl);

        if (!empty($to_be_added)) {
            $this->template_engine->set_alert('New websites are added successfully to the database! It is required to edit the website\'s other information or else it will not be published!', 'Info');
        } else {
            $this->template_engine->set_alert('No website has been discovered!', 'Info');
        }

        $this->template_engine->assign('added_websites', $this->table->generate());
        $this->template_engine->assign('content', 'back_discovered_webs.tpl');
    }

    public function delete($id = '') {

        if ($id != '') {
            $this->_delete_website($id);
        }

        if (isset($_GET['selected'])) {

            $selected = rtrim($_GET['selected'], "_");

            $selected_arr = explode("_", $selected);

            foreach ($selected_arr as $id) {
                $this->_delete_website($id);
            }
        }

        redirect('websites/deleted_successfully');
    }

    private function _delete_website($id) {

        $user_id = $this->session->userdata('id');
        $account_type = $this->session->userdata('account_type');

        if ($account_type != "Super Admin") {

            $query = $this->website_model->get_website_by_id_and_owner($id, $user_id);

            if ($query->num_rows() == 0) {

                return;
            }
        }

        $this->load->helper('file');

        $data = $this->website_model->get_data($id);

        //deleting web files
        if (file_exists($data['url'])) {
            delete_files($data['url'], TRUE, 1);
        }

        $this->load->dbforge();

        //dropping database
        if (!empty($data['database'])) {
            $this->dbforge->drop_database($data['database']);
        }

        //delete logo
        $this->_delete_logo($data['logo']);

        //delete values on database
        $this->website_model->delete($id);
    }

    private function _delete_logo($logo_path) {
        if (file_exists($logo_path)) {
            unlink($logo_path);
            return true;
        } else {
            return false;
        }
    }

    public function deleted_successfully() {
        $this->template_engine->set_alert('Deleted successfully!', 'Success');
        $this->index();
    }

    public function activate($id = '') {

        $this->load->library('session');

        if ($this->session->userdata('account_type') != "Super Admin") {
            $this->index();
            return;
        }

        if ($id != '') {
            if (!$this->website_model->activate($id)) {
                redirect('websites/error_activation');
            }
        }

        if (isset($_GET['selected'])) {

            $selected = rtrim($_GET['selected'], "_");

            $selected_arr = explode("_", $selected);

            foreach ($selected_arr as $id) {
                if (!$this->website_model->activate($id)) {
                    redirect('websites/error_activation');
                    exit;
                    break;
                }
            }
        }

        redirect('websites');
    }

    public function deactivate($id = '') {

        $this->load->library('session');

        if ($this->session->userdata('account_type') != "Super Admin") {
            $this->index();
            return;
        }

        if ($id != '') {
            $this->website_model->deactivate($id);
        }

        if ($_GET['selected']) {

            $selected = rtrim($_GET['selected'], "_");

            $selected_arr = explode("_", $selected);

            foreach ($selected_arr as $id) {
                $this->website_model->deactivate($id);
            }
        }

        redirect('websites');
    }

    public function error_activation() {

        $this->load->library('session');

        if ($this->session->userdata('account_type') != "Super Admin") {
            $this->index();
            return;
        }

        $this->template_engine->set_alert("Unable to activate selected entries/entry, edit the website's information first", 'Error');
        $this->index();
    }

    public function edit($id = '') {

        $user_id = $this->session->userdata('id');
        $account_type = $this->session->userdata('account_type');

        if ($account_type != "Super Admin") {

            $query = $this->website_model->get_website_by_id_and_owner($id, $user_id);

            if ($query->num_rows() == 0) {

                $this->index();
                return;
            }
        }

        if ($id != '') {

            $data = $this->website_model->get_data($id);

            $this->template_engine->assign("val_name", $data['name']);
            $this->template_engine->assign("val_desc", $data['description']);
            $this->template_engine->assign("val_dist", $data['district']);
            $this->template_engine->assign("val_database", $data['database']);
//            $this->template_engine->assign("val_category", $data['category']);
            $this->template_engine->assign("id", $id);

            $uri_arr = explode("/", rtrim(uri_string(), "/"));
            $this->template_engine->assign("uri", $uri_arr[1]);
        }

        $this->index();
    }

    public function update($id = '') {

        $user_id = $this->session->userdata('id');
        $account_type = $this->session->userdata('account_type');

        if ($account_type != "Super Admin") {

            $query = $this->website_model->get_website_by_id_and_owner($id, $user_id);

            if ($query->num_rows() == 0) {

                $this->index();
                return;
            }
        }

        if ($id != '') {

            set_time_limit(0);

            $this->load->library('form_validation');

            $data = $this->website_model->get_data($id);

//            if (preg_match("/\s/", $this->input->post('name'))) {
//                $this->_update_error($id, "Error in renaming name!");
//                return;
//            }

            $inputed_name = $this->input->post('name');

            //check if the inputed name is equal to the name in the database
            if ($inputed_name != $data['name']) {
                $this->form_validation->set_rules('name', 'Name', 'required|is_unique[websites.name]|xss_clean');
            }

            //set rules on description and district
            $this->form_validation->set_rules('description', 'Description', 'required|xss_clean');
            $this->form_validation->set_rules('district', 'District', 'required|xss_clean');

//            if($this->session->userdata('account_type') == "Super Admin"){
//                $this->form_validation->set_rules('category', 'Category', 'required|xss_clean');
//            }
            //validate fields
            if (!$this->form_validation->run()) {
                $this->_update_error($id, validation_errors());
                return;
            }

            //no need to rename if the name in the database is equal to the name input
            if ($data['name'] != $inputed_name) {

//                $directory = $this->category_model->get_directory_by_id($data['category']);
                //rename the directory name

                if (!$this->_rename_brgy_dir($data['url'], url_title($inputed_name))) {
                    $this->_update_error($id, "Error in renaming name!");
                    return;
                }

                $new_data['name'] = $inputed_name;
                $new_data['url'] = url_title($inputed_name);

                //rename the logo
//                if (file_exists($data['logo'])) {
//                    if (!rename($data['logo'], "application/views/logos/" . $inputed_name . ".jpg")) {
//                        $this->_update_error($id, "Error in renaming logo!", $data);
//                        return;
//                    }
//                }
            }

            //check if logo is inputed
            if ($_FILES['logo']['error'] != UPLOAD_ERR_NO_FILE) {

                $params_logos['file'] = $_FILES['logo'];
                $this->load->library('upload_class', $params_logos, 'upload_logo');

                //upload logo
                if (!$this->upload_logo->uploaded) {
                    $this->_update_error($id, "Cant upload the logo ", $data);
                    return;
                }

                $this->upload_logo->image_resize = true;
                $this->upload_logo->image_x = 200;
                $this->upload_logo->image_y = 200;
                $this->upload_logo->allowed = array('image/png');
                $this->upload_logo->image_convert = 'png';
                $this->upload_logo->process('application/views/logos/');

                //process logo
                if (!$this->upload_logo->processed) {
                    $this->_update_error($id, "Cant process the logo ", $data);
                    return;
                }

                $this->_delete_logo($data['logo']);

                $new_data['logo'] = 'application/views/logos/' . $this->upload_logo->file_dst_name;
            } else {
                if (empty($data['logo'])) {
                    $this->_update_error($id, "Logo is required!", $data);
                    return;
                }
            }

            $new_data['district'] = $this->input->post('district');
            $new_data['description'] = $this->input->post('description');

            //update fields
            $this->website_model->update_website($id, $new_data);

            //redirect
            redirect('websites/updated/' . $id);
        }

        $this->index();
    }

    public function updated($id = '') {
        if ($id != '') {
            $this->template_engine->set_edit_web_alert("An entry has been updated successfully!", "Success");
            $this->edit($id);
        } else {
            $this->index();
        }
    }

    private function _update_error($id, $msg, $data = '') {

        $inputed_name = $this->input->post('name');

        if ($data != '' && $data['name'] != $inputed_name) {

            //rename the directory name
            rename($data['name'], $inputed_name);

            //rename the logo
//            if (file_exists($data['logo'])) {
//                rename("application/views/logos/" . $inputed_name . ".jpg", $data['logo']);
//            }
        }

        $this->template_engine->set_edit_web_alert($msg, "Error");
        $this->edit($id);
    }

    public function _output() {

        if ($this->session->userdata('username') == '') {
            redirect('/administrator');
            exit;
        } else {

            $middle_initial = substr($this->session->userdata('middlename'), 0, 1) . '.';

            $this->template_engine->assign('username', $this->session->userdata('username'));
            $this->template_engine->assign('email', $this->session->userdata('email'));
            $this->template_engine->assign('firstname', $this->session->userdata('firstname'));
            $this->template_engine->assign('middlename', $this->session->userdata('middlename'));
            $this->template_engine->assign('middle_initial', $middle_initial);
            $this->template_engine->assign('lastname', $this->session->userdata('lastname'));
            $this->template_engine->assign('account_type', $this->session->userdata('account_type'));

            $this->template_engine->assign('footer', 'footer.tpl');
            $this->template_engine->assign('active_menu_item', 'Websites');

            $this->template_engine->display('back.tpl');
        }
    }

}

?>
