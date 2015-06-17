<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Migrate
 */
class Migrate extends CI_Controller
{

    /**
     * The Contructor!
     */
    public function __construct()
    {
        parent::__construct();

        $this->input->is_cli_request() or exit("Execute via command line: php index.php migrate");

        $this->load->library('migration');
    }

    public function index()
    {
        if(!$this->migration->current())
        {
            if ($this->input->is_cli_request())
            {
                fwrite(STDOUT, $this->migration->error_string());
            }
            else
            {
                show_error($this->migration->error_string());
            }
        }
        else
        {
            if (!defined('MIGRATION_ROLLBACK'))
            {
                if ($this->input->is_cli_request())
                {
                    fwrite(STDOUT, 'Database migrated!' . PHP_EOL);
                }
                else
                {
                    echo '<p>Database migrated!</p>';
                }
            }
        }
    }

} // End of the Migrate

/* End of file my_migration_controller.php */
/* Location application/controllers/my_migration_controller.php */
