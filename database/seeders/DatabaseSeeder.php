<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Clinic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $clinic = Clinic::firstOrCreate(
            ['slug' => 'matriz-odonto'],
            ['name' => 'Matriz Odonto']
        );

        User::firstOrCreate(
            ['email' => 'dev@admin.com'], // Mude para o seu e-mail de preferência
            [
                'name' => 'Developer',
                'password' => Hash::make('M4rc0nd35'), // A senha será 'M4rc0nd35'
                'clinic_id' => $clinic->id,
            ]
        );

        $this->command->info('Clínica e Usuário Admin criados com sucesso!');
    }
}
