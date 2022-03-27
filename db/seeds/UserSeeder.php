<?php


use Phinx\Seed\AbstractSeed;
use \Cake\Auth\DefaultPasswordHasher;

class UserSeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            [
                'identification'    => '1000000',
                'name'    => 'Super',
                'last_name'    => 'Admin',
                'email'    => 'admin@admin.com',
                'password'    => (new DefaultPasswordHasher)->hash('Superadmin'),
                'active'    => 1,
                'role_id'    => 1,
                'created' => date('Y-m-d H:i:s'),
                'modified' => null
            ]
        ];

        $posts = $this->table('users');
        $posts->insert($data)
              ->saveData();
    }
}
