<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

    public function migrate()
	{
		$this->load->library('migration');

		if (!$this->migration->current()) {
			show_error($this->migration->error_string());
			return;
		}

        $res = $this->db->select('version')->from('migrations')->get()->row();
		$msg ='MIGRATE NUMBER ' . $res->version . ' SUCCESS';

		if (!is_cli()) {
			echo $msg;
			return;
		}

        print("\033[92m" . $msg . "\033[0m \n");
		return;
	}
}

/* End of file App.php */
