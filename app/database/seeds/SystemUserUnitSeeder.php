<?php


use Phinx\Seed\AbstractSeed;

class SystemUserUnitSeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            ['system_user_id' => 1, 'system_unit_id' => 1],
            ['system_user_id' => 2, 'system_unit_id' => 1],
        ];
          
        $this->insert('system_user_unit', $data);
    }
}
