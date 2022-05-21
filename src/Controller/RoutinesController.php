<?php
declare(strict_types=1);

namespace App\Controller;

class RoutinesController extends AppController
{

    public function index()
    {
        $this->viewBuilder()->setLayout('dashboard');
        $routines = $this->paginate($this->Routines);

        $this->set(compact('routines'));
    }

    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('dashboard');
        $routine = $this->Routines->get($id, [
            'contain' => ['Exercises', 'Users'],
        ]);

        $this->set(compact('routine'));
    }

    public function add()
    {
        $this->viewBuilder()->setLayout('dashboard');
        $routine = $this->Routines->newEmptyEntity();
        if ($this->request->is('post')) {
            $routine = $this->Routines->patchEntity($routine, $this->request->getData());
            if ($this->Routines->save($routine)) {
                $this->Flash->success(__('Rutina creada correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Error al crear la rutina. Por favor, inténtelo más tarde.'));
        }
        $exercises = $this->Routines->Exercises->find('list', [
            'keyField' => 'id',
            'valueField' => 'exercise',
            'limit' => 200
        ])->all();
        $users = $this->Routines->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('routine', 'exercises', 'users'));
    }

    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('dashboard');
        $routine = $this->Routines->get($id, [
            'contain' => ['Exercises', 'Users'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $routine = $this->Routines->patchEntity($routine, $this->request->getData());
            if ($this->Routines->save($routine)) {
                $this->Flash->success(__('Rutina modificada correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Error al modificar la rutina. Por favor, inténtelo más tarde.'));
        }
        $exercises = $this->Routines->Exercises->find('list', [
            'keyField' => 'id',
            'valueField' => 'exercise',
            'limit' => 200
        ])->all();
        $users = $this->Routines->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('routine', 'exercises', 'users'));
    }

    public function delete($id = null)
    {
        $this->viewBuilder()->setLayout('dashboard');
        $this->request->allowMethod(['post', 'delete']);
        $routine = $this->Routines->get($id);
        if ($this->Routines->delete($routine)) {
            $this->Flash->success(__('Rutina eliminada correctamente.'));
        } else {
            $this->Flash->error(__('Error al eliminar la rutina. Por favor, inténtelo más tarde.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
