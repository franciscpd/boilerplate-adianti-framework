<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSystemChangeLogTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('system_change_log');
        $table->addColumn('logdate', 'timestamp')
            ->addColumn('login', 'string')
            ->addColumn('tablename', 'string')
            ->addColumn('primarykey', 'string')
            ->addColumn('pkvalue', 'string')
            ->addColumn('operation', 'string')
            ->addColumn('columnname', 'string')
            ->addColumn('oldvalue', 'string', ['null' => true])
            ->addColumn('newvalue', 'string')
            ->addColumn('access_ip', 'string', ['limit' => 45])
            ->addColumn('transaction_id', 'string')
            ->addColumn('log_trace', 'text')
            ->addColumn('session_id', 'string')
            ->addColumn('class_name', 'string')
            ->addColumn('php_sapi', 'string')
            ->addColumn('log_year', 'string', ['limit' => 4])
            ->addColumn('log_month', 'string', ['limit' => 2])
            ->addColumn('log_day', 'string', ['limit' => 2])                                    
            ->create();
    }
    
    public function down()
    {
        $this->table('system_change_log')
            ->drop()
            ->save();
    }
}
