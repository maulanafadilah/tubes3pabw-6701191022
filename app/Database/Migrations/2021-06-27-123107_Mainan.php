<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mainan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_mainan'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_mainan'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'merk_mainan'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'kategori_mainan'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'deskripsi_mainan' => [
				'type' => 'TEXT',
				'null' => true,
			],
			'harga' => [
				'type' => 'BIGINT',
				'constraint'     => 11,
			],
			'stok' => [
				'type' => 'INT',
				'constraint'     => 11,
			],
			'foto' => [
				'type' => 'VARCHAR',
				'constraint'     => '100',
				'null' => true
			],
		]);
		$this->forge->addKey('id_mainan', true);
		$this->forge->createTable('mainan');
	}

	public function down()
	{
		$this->forge->dropTable('mainan');
	}
}
