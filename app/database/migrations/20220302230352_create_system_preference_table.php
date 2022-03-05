<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSystemPreferenceTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('system_preference', ['id' => false, 'primary_key' => 'id']);
        $table->addColumn('id', 'string', ['null' => false])
            ->addColumn('value', 'string', ['null' => false])
            ->create();
    }
    
    public function down()
    {
        $this->table('system_preference')
            ->drop()
            ->save();
    }
}
