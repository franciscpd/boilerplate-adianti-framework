<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSystemProgramTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('system_program');
        $table->addColumn('name', 'string', ['limit' => 100])
            ->addColumn('controller', 'string', ['limit' => 100])
            ->create();
    }
    
    public function down()
    {
        $this->table('system_program')
            ->drop()
            ->save();
    }
}
