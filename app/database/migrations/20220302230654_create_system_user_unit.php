<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSystemUserUnit extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('system_user_unit');
        $table->addColumn('system_user_id', 'integer', ['null' => true])
            ->addColumn('system_unit_id', 'integer', ['null' => true])
            ->addForeignKey('system_user_id', 'system_user', ['id'])
            ->addForeignKey('system_unit_id', 'system_unit', ['id'])
            ->create();
    }
    
    public function down()
    {
        $this->table('system_user_unit')
            ->drop()
            ->save();
    }
}
