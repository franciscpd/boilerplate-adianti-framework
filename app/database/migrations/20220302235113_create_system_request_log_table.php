<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSystemRequestLogTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('system_request_log');
        $table->addColumn('endpoint', 'text')
            ->addColumn('logdate', 'text')
            ->addColumn('log_year', 'string', ['limit' => 4])
            ->addColumn('log_month', 'string', ['limit' => 2])
            ->addColumn('log_day', 'string', ['limit' => 2])
            ->addColumn('session_id', 'text')
            ->addColumn('login', 'string', ['null' => true])
            ->addColumn('access_ip', 'string', ['limit' => 45])                                               
            ->addColumn('class_name', 'text')            
            ->addColumn('http_host', 'text')
            ->addColumn('server_port', 'text')
            ->addColumn('request_uri', 'text')
            ->addColumn('request_method', 'text')
            ->addColumn('query_string', 'text')
            ->addColumn('request_headers', 'text')
            ->addColumn('request_body', 'text')                                    
            ->addColumn('request_duration', 'integer', ['null' => true])                                                
            ->create();
    }
    
    public function down()
    {
        $this->table('system_request_log')
            ->drop()
            ->save();
    }
}