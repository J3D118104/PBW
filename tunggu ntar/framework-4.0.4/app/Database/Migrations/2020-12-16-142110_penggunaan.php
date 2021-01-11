<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penggunaan extends Migration
{
	private $table = 'penggunaan';
	public function up()
	{
		$this->forge->addField([
			'id_penggunaan'          => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'		 => TRUE,
				'auto_increment' => TRUE,
			],
		'nama_rumus'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
		],
		'nama_bangun_datar'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
		],
	]);
	$this->forge->addKey('id_penggunaan', true);

	$this->forge->createTable($this->table);	//
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);//
	}
}
