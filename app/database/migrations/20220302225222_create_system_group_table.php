<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSystemGroupTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('system_group');
        $table->addColumn('name', 'string', ['limit' => 100])
            ->create();
    }
    
    public function down()
    {
        $this->table('system_group')
            ->drop()
            ->save();
    }
}
