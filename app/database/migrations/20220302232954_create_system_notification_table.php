<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSystemNotificationTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('system_notification');
        $table->addColumn('system_user_id', 'integer')
            ->addColumn('system_user_to_id', 'integer')
            ->addColumn('subject', 'text', ['null' => false])
            ->addColumn('message', 'text', ['null' => false])
            ->addColumn('dt_message', 'text')
            ->addColumn('action_url', 'text')
            ->addColumn('action_label', 'text')
            ->addColumn('icon', 'text')
            ->addColumn('checked', 'string', ['limit' => 1])
            ->addForeignKey('system_user_id', 'system_user', ['id'])
            ->addForeignKey('system_user_to_id', 'system_user', ['id'])
            ->create();
    }
    
    public function down()
    {
        $this->table('system_notification')
            ->drop()
            ->save();
    }
}
