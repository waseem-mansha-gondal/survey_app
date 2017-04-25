<?php

App::uses('AppController', 'Controller');

/**
 * UserFilledSurveys Controller
 *
 * @property UserFilledSurvey $UserFilledSurvey
 * @property PaginatorComponent $Paginator
 */
class UserFilledSurveysController extends AppController {

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
        $this->UserFilledSurvey->recursive = 4;
        $user =   $this->Auth->user();   
         $id =$user['id'];
        $this->set('userFilledSurveys', $this->Paginator->paginate(array('UserFilledSurvey.user_id' => $id)));
        
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->UserFilledSurvey->exists($id)) {
            throw new NotFoundException(__('Invalid user filled survey'));
        }
        $options = array('conditions' => array('UserFilledSurvey.' . $this->UserFilledSurvey->primaryKey => $id));
        $this->set('userFilledSurvey', $this->UserFilledSurvey->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {

        if ($this->request->is('post')) {

            if ($this->UserFilledSurvey->saveMany($this->request->data['UserFilledSurvey'])) {
                return $this->flash(__('The user filled survey has been saved.'), array('action' => 'index'));
            }
        }
        $users = $this->UserFilledSurvey->User->find('list');
        $surveys = $this->UserFilledSurvey->Survey->find('list');
        $surveyQuestions = $this->UserFilledSurvey->SurveyQuestion->find('list');
        $questionOptions = $this->UserFilledSurvey->QuestionOption->find('list');
        $this->set(compact('users', 'surveys', 'surveyQuestions', 'questionOptions'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->UserFilledSurvey->exists($id)) {
            throw new NotFoundException(__('Invalid user filled survey'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->UserFilledSurvey->save($this->request->data)) {
                return $this->flash(__('The user filled survey has been saved.'), array('action' => 'index'));
            }
        }
        else {
            $options = array('conditions' => array('UserFilledSurvey.' . $this->UserFilledSurvey->primaryKey => $id));
            $this->request->data = $this->UserFilledSurvey->find('first', $options);
        }
        $users = $this->UserFilledSurvey->User->find('list');
        $surveys = $this->UserFilledSurvey->Survey->find('list');
        $surveyQuestions = $this->UserFilledSurvey->SurveyQuestion->find('list');
        $questionOptions = $this->UserFilledSurvey->QuestionOption->find('list');
        $this->set(compact('users', 'surveys', 'surveyQuestions', 'questionOptions'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->UserFilledSurvey->id = $id;
        if (!$this->UserFilledSurvey->exists()) {
            throw new NotFoundException(__('Invalid user filled survey'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->UserFilledSurvey->delete()) {
            return $this->flash(__('The user filled survey has been deleted.'), array('action' => 'index'));
        }
        else {
            return $this->flash(__('The user filled survey could not be deleted. Please, try again.'), array('action' => 'index'));
        }
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->UserFilledSurvey->recursive = 0;
        $this->set('userFilledSurveys', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        if (!$this->UserFilledSurvey->exists($id)) {
            throw new NotFoundException(__('Invalid user filled survey'));
        }
        $options = array('conditions' => array('UserFilledSurvey.' . $this->UserFilledSurvey->primaryKey => $id));
        $this->set('userFilledSurvey', $this->UserFilledSurvey->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->UserFilledSurvey->create();
            if ($this->UserFilledSurvey->save($this->request->data)) {
                return $this->flash(__('The user filled survey has been saved.'), array('action' => 'index'));
            }
        }
        $users = $this->UserFilledSurvey->User->find('list');
        $surveys = $this->UserFilledSurvey->Survey->find('list');
        $surveyQuestions = $this->UserFilledSurvey->SurveyQuestion->find('list');
        $questionOptions = $this->UserFilledSurvey->QuestionOption->find('list');
        $this->set(compact('users', 'surveys', 'surveyQuestions', 'questionOptions'));
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        if (!$this->UserFilledSurvey->exists($id)) {
            throw new NotFoundException(__('Invalid user filled survey'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->UserFilledSurvey->save($this->request->data)) {
                return $this->flash(__('The user filled survey has been saved.'), array('action' => 'index'));
            }
        }
        else {
            $options = array('conditions' => array('UserFilledSurvey.' . $this->UserFilledSurvey->primaryKey => $id));
            $this->request->data = $this->UserFilledSurvey->find('first', $options);
        }
        $users = $this->UserFilledSurvey->User->find('list');
        $surveys = $this->UserFilledSurvey->Survey->find('list');
        $surveyQuestions = $this->UserFilledSurvey->SurveyQuestion->find('list');
        $questionOptions = $this->UserFilledSurvey->QuestionOption->find('list');
        $this->set(compact('users', 'surveys', 'surveyQuestions', 'questionOptions'));
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        $this->UserFilledSurvey->id = $id;
        if (!$this->UserFilledSurvey->exists()) {
            throw new NotFoundException(__('Invalid user filled survey'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->UserFilledSurvey->delete()) {
            return $this->flash(__('The user filled survey has been deleted.'), array('action' => 'index'));
        }
        else {
            return $this->flash(__('The user filled survey could not be deleted. Please, try again.'), array('action' => 'index'));
        }
    }

}
