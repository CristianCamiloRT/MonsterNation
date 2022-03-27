<?php


use Phinx\Seed\AbstractSeed;

class RoleSeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            [
                'role'    => 'Super Administrador',
                'created' => date('Y-m-d H:i:s'),
                'modified' => null,
            ],[
                'role'    => 'Administrador Gimnasio',
                'created' => date('Y-m-d H:i:s'),
                'modified' => null,
            ],[
                'role'    => 'Entrenador',
                'created' => date('Y-m-d H:i:s'),
                'modified' => null,
            ],[
                'role'    => 'Usuario',
                'created' => date('Y-m-d H:i:s'),
                'modified' => null,
            ]
        ];

        $posts = $this->table('roles');
        $posts->insert($data)
              ->saveData();
    }
}
