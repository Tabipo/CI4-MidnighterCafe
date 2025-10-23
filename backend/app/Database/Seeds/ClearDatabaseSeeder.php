<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ClearDatabaseSeeder extends Seeder
{
    public function run()
    {
        $db      = \Config\Database::connect();
        $tablesInOrder = ['Users'];

        // Use disableForeignKeyChecks if supported by the DB to avoid FK issues
        $db->disableForeignKeyChecks();
        foreach ($tablesInOrder as $table)
            $db->$table($table)->truncate();
        $db->enableForeignKeyChecks();
    }
}
