<?php

App::uses('AppController', 'Controller');

/**
 * Surveys Controller
 *
 * @property Survey $Survey
 * @property PaginatorComponent $Paginator
 */
class SurveysController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Survey->recursive = 0;
        $this->set('surveys', $this->Paginator->paginate(array(
              'Survey.status' => array('Survey.status' => 'Complete'))));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Survey->exists($id)) {
            throw new NotFoundException(__('Invalid survey'));
        }
        $this->Survey->recursive = 2;
        $options = array('conditions' => array('Survey.' . $this->Survey->primaryKey => $id));
//        debug($this->Survey->find('first', $options));die;
        $this->set('survey', $this->Survey->find('first', $options));
    }


    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->Survey->recursive = 0;
        $this->set('surveys', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        if (!$this->Survey->exists($id)) {
            throw new NotFoundException(__('Invalid survey'));
        }
        $options = array('conditions' => array('Survey.' . $this->Survey->primaryKey => $id));
        $this->set('survey', $this->Survey->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Survey->create();
            if ($this->Survey->save($this->request->data)) {
                $this->Flash->success(__('The survey has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            else {
                $this->Flash->error(__('The survey could not be saved. Please, try again.'));
            }
        }
        $users = $this->Survey->User->find('list');
        $this->set(compact('users'));
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        if (!$this->Survey->exists($id)) {
            throw new NotFoundException(__('Invalid survey'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Survey->save($this->request->data)) {
                $this->Flash->success(__('The survey has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            else {
                $this->Flash->error(__('The survey could not be saved. Please, try again.'));
            }
        }
        else {
            $options = array('conditions' => array('Survey.' . $this->Survey->primaryKey => $id));
            $this->request->data = $this->Survey->find('first', $options);
        }
        $users = $this->Survey->User->find('list');
        $this->set(compact('users'));
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        $this->Survey->id = $id;
        if (!$this->Survey->exists()) {
            throw new NotFoundException(__('Invalid survey'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Survey->delete()) {
            $this->Flash->success(__('The survey has been deleted.'));
        }
        else {
            $this->Flash->error(__('The survey could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
