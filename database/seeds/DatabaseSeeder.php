<?php

use App\Models\Admin;
use App\Models\Prodi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin;
        $admin->nama = 'Super Admin';
        $admin->username = 'admin';
        $admin->email = 'admin@admin.com';
        $admin->password = Hash::make('admin123');
        $admin->save();

        $prodi = new Prodi;
        $prodi->nama = "S1 Teknik Informatika";
        $prodi->description = "Program Studi S1 Teknik Informatika";
        $prodi->kode = "S1_TI_231";
        $prodi->save();

        // factory(App\Models\Dosen::class, 10)->create();
    }
}
