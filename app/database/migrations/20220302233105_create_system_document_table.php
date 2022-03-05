<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSystemDocumentTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('system_document');
        $table->addColumn('system_user_id', 'integer')
            ->addColumn('title', 'string', ['null' => false])
            ->addColumn('description', 'text', ['null' => false])
            ->addColumn('category_id', 'integer')
            ->addColumn('submission_date', 'date')
            ->addColumn('archive_date', 'date')
            ->addColumn('filename', 'text')
            ->addForeignKey('system_user_id', 'system_user', ['id'])
            ->addForeignKey('category_id', 'system_document_category', ['id'])
            ->create();
    }
    
    public function down()
    {
        $this->table('system_document')
            ->drop()
            ->save();
    }
}
