<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class UsersRoutinesMigration extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('users_routines');
        $table->addColumn('user_id', 'integer', [
                'signed' => 'disable'
              ])
              ->addForeignKey('user_id', 'users', 'id', [
                'delete' => 'NO_ACTION',
                'update' =>'NO_ACTION'
              ])
              ->addColumn('routine_id', 'integer', [
                'signed' => 'disable'
              ])
              ->addForeignKey('routine_id', 'routines', 'id', [
                'delete' => 'NO_ACTION',
                'update' =>'NO_ACTION'
              ])
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime', ['null' => true])
              ->create();
    }
}
