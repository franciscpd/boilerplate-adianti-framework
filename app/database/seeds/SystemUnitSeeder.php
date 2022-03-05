<?php


use Phinx\Seed\AbstractSeed;

class SystemUnitSeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Matriz'],
        ];
    
        $this->insert('system_unit', $data);
    }
}
