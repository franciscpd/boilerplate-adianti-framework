<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSystemAccessLogTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('system_access_log');
        $table->addColumn('sessionid', 'string')
            ->addColumn('login', 'string')
            ->addColumn('login_time', 'timestamp')
            ->addColumn('login_year', 'string', ['limit' => 4])
            ->addColumn('login_month', 'string', ['limit' => 2])
            ->addColumn('login_day', 'string', ['limit' => 2])                                    
            ->addColumn('logout_time', 'timestamp', ['null' => true])
            ->addColumn('impersonated', 'string', ['limit' => 1])
            ->addColumn('access_ip', 'string', ['limit' => 45])
            ->create();
    }
    
    public function down()
    {
        $this->table('system_access_log')
            ->drop()
            ->save();
    }
}
