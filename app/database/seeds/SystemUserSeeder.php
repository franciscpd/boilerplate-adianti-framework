<?php


use Phinx\Seed\AbstractSeed;

class SystemUserSeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Administrador', 'login' => 'admin', 'password' => password_hash('admin', PASSWORD_BCRYPT), 'email' => 'admin@admin.net', 'frontpage_id' => 10, 'active' => 'Y'],
            ['id' => 2, 'name' => 'User', 'login' => 'user', 'password' => password_hash('user', PASSWORD_BCRYPT), 'email' => 'user@user.net', 'frontpage_id' => 7, 'active' => 'Y']
        ];
        
        $this->insert('system_user', $data);
    }
}
