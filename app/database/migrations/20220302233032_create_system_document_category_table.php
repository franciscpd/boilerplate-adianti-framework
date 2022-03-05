<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSystemDocumentCategoryTable extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('system_document_category');
        $table->addColumn('name', 'string', ['null' => false])
            ->create();
    }
    
    public function down()
    {
        $this->table('system_document_category')
            ->drop()
            ->save();
    }
}
