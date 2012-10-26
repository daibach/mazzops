<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function index() {
    $data['mazzops'] = $this->settings_model->is_mazzops_happening();
    $this->load->view('admin/switch',$data);
  }

  public function toggle($state) {
    if($state == 'off') {
      $this->settings_model->update_setting('mazzops_happening',0);
      redirect(site_url('admin'));
    } elseif($state == 'on') {
      $this->settings_model->update_setting('mazzops_happening',1);
      redirect(site_url('admin'));
    } else {
      show_404(current_url());
    }

  }
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */