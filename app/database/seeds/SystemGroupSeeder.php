<?php


use Phinx\Seed\AbstractSeed;

class SystemGroupSeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Administrador'],
            ['id' => 2, 'name' => 'Usuário'],
        ];
    
        $this->insert('system_group', $data);
    }
}
