<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSystemUserGroupTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('system_user_group');
        $table->addColumn('system_user_id', 'integer')
            ->addColumn('system_group_id', 'integer')
            ->addForeignKey('system_user_id', 'system_user', ['id'])
            ->addForeignKey('system_group_id', 'system_group', ['id'])
            ->create();
    }
    
    public function down()
    {
        $this->table('system_user_group')
            ->drop()
            ->save();
    }
}
