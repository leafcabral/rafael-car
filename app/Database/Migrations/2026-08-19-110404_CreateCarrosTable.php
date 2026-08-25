<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCarrosTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
			'marca' => ['type' => 'VARCHAR', 'constraint' => '100'],
			'modelo' => ['type' => 'VARCHAR', 'constraint' => '100'],
			'motor' => ['type' => 'VARCHAR', 'constraint' => '25'],
			'ano' => ['type' => 'INT', 'constraint' => 4],
			'valor' => ['type' => 'DECIMAL', 'constraint' => '8,2'],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('carros');
	}

	public function down()
	{
		//
	}
}
