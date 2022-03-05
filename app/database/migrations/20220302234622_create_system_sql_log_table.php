<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSystemSqlLogTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('system_sql_log');
        $table->addColumn('logdate', 'timestamp')
            ->addColumn('login', 'string')
            ->addColumn('database_name', 'string')
            ->addColumn('sql_command', 'text')
            ->addColumn('statement_type', 'string')
            ->addColumn('access_ip', 'string', ['limit' => 45])
            ->addColumn('transaction_id', 'string')
            ->addColumn('log_trace', 'text')
            ->addColumn('session_id', 'string')
            ->addColumn('class_name', 'string')
            ->addColumn('php_sapi', 'string')
            ->addColumn('request_id', 'string')
            ->addColumn('log_year', 'string', ['limit' => 4])
            ->addColumn('log_month', 'string', ['limit' => 2])
            ->addColumn('log_day', 'string', ['limit' => 2])                                    
            ->create();
    }
    
    public function down()
    {
        $this->table('system_sql_log')
            ->drop()
            ->save();
    }
}