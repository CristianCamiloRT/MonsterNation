<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class ExercisesMigration extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('exercises');
        $table->addColumn('exercise', 'string', ['limit' => 200])
              ->addColumn('description', 'text')
              ->addColumn('image', 'text')
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime', ['null' => true])
              ->create();
    }
}
