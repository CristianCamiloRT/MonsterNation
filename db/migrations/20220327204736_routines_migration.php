<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class RoutinesMigration extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('routines');
        $table->addColumn('routine', 'string', ['limit' => 250])
              ->addColumn('description', 'text')
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime', ['null' => true])
              ->create();
    }
}
