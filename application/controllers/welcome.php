<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

  public function index()
  {
    $data['mazzops'] = $this->settings_model->is_mazzops_happening();
    $this->load->view('main',$data);
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */