<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_settings extends CI_Migration {

  public function up()
  {

    /* CREATE DATA */
    $this->_create_settings_table();

    /* ADD DATA */
    $this->db->insert('settings', array('setting_name'=>'mazzops_happening', 'setting_value'=>0));

  }

  public function down()
  {
    $this->dbforge->drop_table('settings');
  }

  function _create_settings_table() {
    $this->dbforge->add_field('id');
    $this->dbforge->add_field(array(
      'setting_name' => array(
        'type'          => 'VARCHAR',
        'constraint'    => 25,
      ),
      'setting_value' => array(
        'type'          => 'TEXT'
      )
    ));
    $this->dbforge->add_field('created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP');
    $this->dbforge->create_table('settings');
  }

}