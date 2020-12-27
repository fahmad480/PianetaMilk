<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Carousel extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'image_url'       => [
				'type'           => 'TEXT',
				'null'           => TRUE,
			],
			'title' => [
				'type'           => 'TEXT',
				'null'           => TRUE,
			],
			'description' => [
				'type'           => 'TEXT',
				'null'           => TRUE,
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('carousel');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
