<?php
declare(strict_types=1);

namespace App\Controller;

class ExercisesController extends AppController
{
    public function index()
    {
        $this->viewBuilder()->setLayout('dashboard');
        $exercises = $this->paginate($this->Exercises);

        $this->set(compact('exercises'));
    }

    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('dashboard');
        $exercise = $this->Exercises->get($id, [
            'contain' => ['Routines'],
        ]);

        $this->set(compact('exercise'));
    }

    public function add()
    {
        $this->viewBuilder()->setLayout('dashboard');
        $exercise = $this->Exercises->newEmptyEntity();
        if ($this->request->is('post')) {

            $data = $this->request->getData();
            $productImage = $this->request->getData("image");

            $hasFileError = $productImage->getError();

            if ($hasFileError > 0) {
                // no file uploaded
                $data["image"] = "";
            } else {
                // file uploaded
                $fileName = $productImage->getClientFilename();
                $fileType = $productImage->getClientMediaType();

                if ($fileType == "image/png" || $fileType == "image/jpeg" || $fileType == "image/jpg") {
                    $fileName = md5(uniqid(date('d/m/Yh:i:sA'), true)) . $fileName;
                    $imagePath = WWW_ROOT . "img-exercises/" . $fileName;
                    $productImage->moveTo($imagePath);
                    $data["image"] = "img-exercises/" . $fileName;
                }
            }

            $exercise = $this->Exercises->patchEntity($exercise, $data);
            if ($this->Exercises->save($exercise)) {
                $this->Flash->success(__('Ejercicio creado correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Error al crear el ejercicio. Por favor, inténtelo más tarde.'));
        }
        $routines = $this->Exercises->Routines->find('list', ['limit' => 200])->all();
        $this->set(compact('exercise', 'routines'));
    }

    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('dashboard');
        $exercise = $this->Exercises->get($id, [
            'contain' => ['Routines'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            
            $data = $this->request->getData();
            $productImage = $this->request->getData("image");

            $hasFileError = $productImage->getError();

            if ($hasFileError > 0) {
                // no file uploaded
                $data["image"] = "";
            } else {
                // file uploaded
                $fileName = $productImage->getClientFilename();
                $fileType = $productImage->getClientMediaType();

                if ($fileType == "image/png" || $fileType == "image/jpeg" || $fileType == "image/jpg") {
                    $fileName = md5(uniqid(date('d/m/Yh:i:sA'), true)) . $fileName;
                    $imagePath = WWW_ROOT . "img-exercises/" . $fileName;
                    $productImage->moveTo($imagePath);
                    $data["image"] = "img-exercises/" . $fileName;
                }
            }

            $exercise = $this->Exercises->patchEntity($exercise, $data);
            if ($this->Exercises->save($exercise)) {
                $this->Flash->success(__('Ejercicio modificado correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Error al modificar el ejercicio. Por favor, inténtelo más tarde.'));
        }
        $routines = $this->Exercises->Routines->find('list', ['limit' => 200])->all();
        $this->set(compact('exercise', 'routines'));
    }

    public function delete($id = null)
    {
        $this->viewBuilder()->setLayout('dashboard');
        $this->request->allowMethod(['post', 'delete']);
        $exercise = $this->Exercises->get($id);
        if ($this->Exercises->delete($exercise)) {
            $this->Flash->success(__('Ejercicio eliminado correctamente.'));
        } else {
            $this->Flash->error(__('Error al eliminar el ejercicio. Por favor, inténtelo más tarde.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
