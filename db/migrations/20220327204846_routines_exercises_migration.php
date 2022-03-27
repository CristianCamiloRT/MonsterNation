<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class RoutinesExercisesMigration extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('routines_exercises');
        $table->addColumn('routine_id', 'integer', [
                'signed' => 'disable'
              ])
              ->addForeignKey('routine_id', 'routines', 'id', [
                'delete' => 'NO_ACTION',
                'update' =>'NO_ACTION'
              ])
              ->addColumn('exercise_id', 'integer', [
                'signed' => 'disable'
              ])
              ->addForeignKey('exercise_id', 'exercises', 'id', [
                'delete' => 'NO_ACTION',
                'update' =>'NO_ACTION'
              ])
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime', ['null' => true])
              ->create();
    }
}
