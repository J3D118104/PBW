<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Materi extends Migration
{
	private $table = 'materi';
	public function up()
	{
		$this->forge->addField([
			'id_materi'          => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'		 => TRUE,
				'auto_increment' => TRUE,
			],
		'nama_bangun_datar'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
		],
		'penjelasan'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '1000',
		],
	]);
	$this->forge->addKey('id_materi', true);
	$this->forge->createTable($this->table);	//
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable($this->table);//
	}
}