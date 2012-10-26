<?php

/**
 * Settings Model
 *
 * @package MazzOps
 * @subpackage Models
 * @category Settings
 * @author Dafydd Vaughan (@dafyddbach)
 * @link http://www.dafyddvaughan.co.uk
 */
class Settings_model extends CI_Model {

  /**
   * Constructor
   *
   * @access public
   */
  function __construct()
  {
      parent::__construct();
  }

  /**
   * Gets the value of a setting from the database
   *
   * @access public
   * @param string $setting_name the name of the setting to get
   * @return string $setting_value the value of the setting
   */
  function get_setting($setting_name) {

    $this->db->where('setting_name',$setting_name);
    $query = $this->db->get('settings');

    //if there are results
    if ($query->num_rows() > 0) {
      $result = $query->row();
      return $result->setting_value;
    } else {
      return FALSE;
    }

  }

  /**
   * Gets the value of the mazzops_happening setting
   *
   * @access public
   * @return boolean whether mazzops is happening or not
   */
  function is_mazzops_happening() {

    return $this->get_setting('mazzops_happening');

  }

  /**
   * Edits a setting in the database
   *
   * @access public
   * @param string $setting_name the name of the setting to update
   * @param string $setting_value the value of the setting
   * @return boolean successful or not
   */
  function update_setting($setting_name,$setting_value) {

    //create data array & add to database
    $data = array(
      'setting_value' => $setting_value
    );
    $this->db->where('setting_name',$setting_name);
    $this->db->update('settings',$data);
    return TRUE;

  }

}
/* End of file settings_model.php */
/* Location: ./application/models/settings_model.php */