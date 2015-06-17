<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Migration_Add_dashboard_models
 */
class Migration_Add_dashboard_models extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ),


            'created_at' => array(
                'type' => 'DATETIME',
                'null' => FALSE,
            ),

            'updated_at' => array(
                'type' => 'DATETIME',
                'null' => FALSE,
            )
        ));

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('dashboard_models');
    }

    public function down()
    {
        $this->dbforge->drop_table('dashboard_models');
    }
}

/* End of file add_dashboard_models.php */
/* Location application/controllers/add_dashboard_models.php */
