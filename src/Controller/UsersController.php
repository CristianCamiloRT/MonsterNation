<?php
declare(strict_types=1);

namespace App\Controller;

class UsersController extends AppController
{
    public function index()
    {
        $this->viewBuilder()->setLayout('dashboard');
        $this->paginate = [
            'contain' => ['Roles'],
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('dashboard');
        $user = $this->Users->get($id, [
            'contain' => ['Roles', 'Routines'],
        ]);

        $this->set(compact('user'));
    }

    public function add()
    {
        $this->viewBuilder()->setLayout('dashboard');
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usurio creado correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Error al crear usuario. Por favor, inténtelo más tarde.'));
        }
        $roles = $this->Users->Roles->find('list', 
            [
                'keyField' => 'id',
                'valueField' => 'role',
                'limit' => 200
            ]
        )->all();
        $routines = $this->Users->Routines->find('list', 
            [
                'keyField' => 'id',
                'valueField' => 'routine',
                'limit' => 200
            ]
        )->all();
        $this->set(compact('user', 'roles', 'routines'));
    }

    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('dashboard');
        $user = $this->Users->get($id, [
            'contain' => ['Routines'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuario editado correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Error al editar usuario. Por favor, inténtelo más tarde.'));
        }
        $roles = $this->Users->Roles->find('list', 
            [
                'keyField' => 'id',
                'valueField' => 'role',
                'limit' => 200
            ]
        )->all();
        $routines = $this->Users->Routines->find('list', 
        [
            'keyField' => 'id',
            'valueField' => 'routine',
            'limit' => 200
        ]
    )->all();
        $this->set(compact('user', 'roles', 'routines'));
    }

    public function delete($id = null)
    {
        $this->viewBuilder()->setLayout('dashboard');
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('Usuario eliminado correctamente.'));
        } else {
            $this->Flash->error(__('Error al eliminar usuario. Por favor, inténtelo más tarde.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
