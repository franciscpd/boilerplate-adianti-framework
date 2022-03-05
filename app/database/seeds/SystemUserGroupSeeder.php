<?php


use Phinx\Seed\AbstractSeed;

class SystemUserGroupSeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            ['system_user_id' => 1, 'system_group_id' => 1],
            ['system_user_id' => 2, 'system_group_id' => 2],
            ['system_user_id' => 1, 'system_group_id' => 2]
        ];
          
        $this->insert('system_user_group', $data);
    }
}
