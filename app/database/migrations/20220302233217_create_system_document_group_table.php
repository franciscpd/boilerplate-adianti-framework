<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSystemDocumentGroupTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('system_document_group');
        $table->addColumn('document_id', 'integer')
            ->addColumn('system_group_id', 'integer')
            ->addForeignKey('document_id', 'system_document', ['id'])
            ->addForeignKey('system_group_id', 'system_group', ['id'])
            ->create();
    }
    
    public function down()
    {
        $this->table('system_document_group')
            ->drop()
            ->save();
    }
}
