<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bangun_datar extends Migration
{
	private $table = 'bangun_datar';
	public function up()
	{
		$this->forge->addField([
			'id_bangun'          => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'		 => TRUE,
				'auto_increment' => TRUE,
			],
		'nama_bangun_datar'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
		],
	]);
	$this->forge->addKey('id_bangun', true);
	$this->forge->createTable($this->table);	//
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);//
	}
}