<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSystemUserProgramTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('system_user_program');
        $table->addColumn('system_user_id', 'integer')
            ->addColumn('system_program_id', 'integer')
            ->addForeignKey('system_user_id', 'system_user', ['id'])
            ->addForeignKey('system_program_id', 'system_program', ['id'])
            ->create();
    }
    
    public function down()
    {
        $this->table('system_user_program')
            ->drop()
            ->save();
    }
}
