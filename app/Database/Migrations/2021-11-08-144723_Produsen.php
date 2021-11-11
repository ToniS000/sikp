<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produsen extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_produsen'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jml_penghasil_kom'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'pembinaan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'kelembagaan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'kesejahteraan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_tanam'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'id_ternak'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'id_ikan'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'created_at'       => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            'updated_at'       => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_produsen', true);
        $this->forge->addForeignKey('id_tanam', 'prod_tanam', 'id_tanam');
        $this->forge->addForeignKey('id_ternak', 'prod_ternak', 'id_ternak');
        $this->forge->addForeignKey('id_ikan', 'prod_ikan', 'id_ikan');
        $this->forge->createTable('produsen');
    }

    public function down()
    {
        $this->forge->dropForeignKey('produsen', 'produsen_id_tanam_foreign');
        $this->forge->dropForeignKey('produsen', 'produsen_id_ternak_foreign');
        $this->forge->dropForeignKey('produsen', 'produsen_id_ikan_foreign');
        $this->forge->dropTable('produsen');
    }
}