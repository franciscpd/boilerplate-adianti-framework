<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSystemGroupProgramTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('system_group_program');
        $table->addColumn('system_group_id', 'integer')
            ->addColumn('system_program_id', 'integer')
            ->addForeignKey('system_group_id', 'system_group', ['id'])
            ->addForeignKey('system_program_id', 'system_program', ['id'])
            ->create();
    }
    
    public function down()
    {
        $this->table('system_group_program')
            ->drop()
            ->save();
    }
}
