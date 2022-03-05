<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSystemDocumentUserTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('system_document_user');
        $table->addColumn('document_id', 'integer')
            ->addColumn('system_user_id', 'integer')
            ->addForeignKey('document_id', 'system_document', ['id'])
            ->addForeignKey('system_user_id', 'system_user', ['id'])
            ->create();
    }
    
    public function down()
    {
        $this->table('system_document_user')
            ->drop()
            ->save();
    }
}
