<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Create_Receipt_Note extends CI_Migration
{
    public function up()
    {
        if (!$this->db->table_exists('receipt_note')) {
            $this->dbforge->add_key('id', true);
            $this->dbforge->add_key('receipt_id');
			$this->dbforge->add_key('created_by');

            $this->dbforge->add_field([
                'id' => [
                    'type'           => 'MEDIUMINT',
                    'constraint'     => 15,
                    'null'           => false,
                    'unsigned'       => true,
                    'auto_increment' => true,
                ],
                'receipt_id' => [
                    'type'           => 'INT',
                    'constraint'     => 10,
                    'null'           => true,
                    'unsigned'       => true,
                ],
                'note' => [
                    'type'           => 'TEXT',
                    'null'           => false,
                ],
				'created_on' => [
                    'type'           => 'INT',
                    'constraint'     => 15,
                    'null'           => false,
                    'unsigned'       => true,
                ],
				'created_by' => [
                    'type'           => 'INT',
                    'constraint'     => 15,
                    'null'           => false,
                    'unsigned'       => true,
                ],
            ]);

            $this->dbforge->create_table('receipt_note', true);
        }
    }

    public function down()
    {
        $this->dbforge->drop_table('receipt_note', true);
    }
}
