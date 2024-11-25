<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('res_categories')->insert([
            [
                'id' => 1,
                'status_id' => 1, 
                'image' => 'https://www.mrdiy.com/id/public/files/4d0297e48c605258e07ed38c43d273fd0477551c64ee17e9c6859e101486e699.png',
                'name' => 'Alat Rumah tangga',
                'workspace_id' => 1, // Example workspace_id
                'desc' => json_encode(['id]' => 'Peralatan Kebersihan,
Gantungan & Keranjang Pakaian,
Peralatan Rumah Tangga,
Aksesori Rumah Tangga,
Peralatan Dapur,
Peralatan Makan,']),
                'created_by' => 'admin',
                'parent_id' => null,
                'updated_by' => 'admin',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => null,
                'status_id' => 1, 
                'image' => '',
                'name' => 'Air Cooling',
                'workspace_id' => 1, // Example workspace_id
                'desc' => json_encode(['id]' => '']),
                'created_by' => 'admin',
                'parent_id' => 1,
                'updated_by' => 'admin',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => null,
                'status_id' => 1, 
                'image' => '',
                'name' => 'Vacuum and Floor care',
                'workspace_id' => 1, 
                'desc' => json_encode(['id]' => '']),
                'created_by' => 'admin',
                'parent_id' => 1,
                'updated_by' => 'admin',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => null,
                'status_id' => 1, 
                'image' => '',
                'name' => 'Water Dispenser',
                'workspace_id' => 1, 
                'desc' => json_encode(['id]' => '']),
                'created_by' => 'admin',
                'parent_id' => 1,
                'updated_by' => 'admin',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            [
                'id' => null,
                'status_id' => 1, 
                'image' => '',
                'name' => 'Portable Dispenser',
                'workspace_id' => 1, 
                'desc' => json_encode(['id]' => '']),
                'created_by' => 'admin',
                'parent_id' => 1,
                'updated_by' => 'admin',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
                        
            [
                'id' => null,
                'status_id' => 1, 
                'image' => '',
                'name' => 'MIYAKO DISPENSER AIR PORTABLE DISPENSER WD190PH',
                'workspace_id' => 1, 
                'desc' => json_encode(['id]' => '']),
                'created_by' => 'admin',
                'parent_id' => 1,
                'updated_by' => 'admin',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'status_id' => 2, 
                'image' => 'https://www.mrdiy.com/id/public/files/e686c30ebc22c7dfdc5e9c0a88d8ec956bfbb496a67a348fb892caef1e9ed3b6.png',
                'name' => 'Perkakas',
                'workspace_id' => 2, // Example workspace_id
                'desc' => json_encode(['id' => 'PIPA,
CAT,
PEREKAT,
ALAT BERKEBUN,
MESIN LISTRIK,
KUNCI & KEAMANAN,
PALU,
KOTAK PERALATAN,', 'es' => 'Descripción para Categoría 2']),
                'created_by' => 'admin',
                'parent_id' => 1, // Example parent_id
                'updated_by' => 'admin',
                'deleted_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more categories as needed
        ]);
    }
}
