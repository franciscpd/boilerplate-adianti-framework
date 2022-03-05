<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSystemMessageTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('system_message');
        $table->addColumn('system_user_id', 'integer')
            ->addColumn('system_user_to_id', 'integer')
            ->addColumn('subject', 'text')
            ->addColumn('message', 'text')
            ->addColumn('dt_message', 'text')
            ->addColumn('checked', 'string', ['limit' => 1])
            ->addForeignKey('system_user_id', 'system_user', ['id'])
            ->addForeignKey('system_user_to_id', 'system_user', ['id'])
            ->create();
    }
    
    public function down()
    {
        $this->table('system_message')
            ->drop()
            ->save();
    }
}
