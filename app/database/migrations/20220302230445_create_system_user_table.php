<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSystemUserTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('system_user');
        $table->addColumn('name', 'string', ['limit' => 100])
            ->addColumn('login', 'string', ['limit' => 100])
            ->addColumn('password', 'string', ['limit' => 100])
            ->addColumn('email', 'string', ['limit' => 100])
            ->addColumn('frontpage_id', 'integer')
            ->addColumn('system_unit_id', 'integer', ['null' => true])
            ->addColumn('active', 'string', ['limit' => 1])
            ->addForeignKey('system_unit_id', 'system_unit', ['id'])
            ->addForeignKey('frontpage_id', 'system_program', ['id'])
            ->create();
    }
    
    public function down()
    {
        $this->table('system_user')
            ->drop()
            ->save();
    }
}
