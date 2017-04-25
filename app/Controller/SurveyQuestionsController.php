<?php
App::uses('AppController', 'Controller');
/**
 * SurveyQuestions Controller
 *
 * @property SurveyQuestion $SurveyQuestion
 * @property PaginatorComponent $Paginator
 */
class SurveyQuestionsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
        
        public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow(array('view'));
    }


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->SurveyQuestion->recursive = 0;
		$this->set('surveyQuestions', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->SurveyQuestion->exists($id)) {
			throw new NotFoundException(__('Invalid survey question'));
		}
		$options = array('conditions' => array('SurveyQuestion.' . $this->SurveyQuestion->primaryKey => $id));
		$this->set('surveyQuestion', $this->SurveyQuestion->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add($id) {
		if ($this->request->is('post')) {
//                    debug($this->request->data);die;
			$this->SurveyQuestion->create();
			if ($this->SurveyQuestion->saveAssociated($this->request->data)) {
				$this->Flash->success(__('The survey question has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The survey question could not be saved. Please, try again.'));
			}
		}
                 if (!$this->SurveyQuestion->Survey->exists($id)) {
			throw new NotFoundException(__('Invalid survey ID'));
		}
		$questionTypes = $this->SurveyQuestion->QuestionType->find('list');
               
		$survey = $this->SurveyQuestion->Survey->findById($id,array('id'));
		$this->set(compact('questionTypes', 'survey'));
		
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->SurveyQuestion->exists($id)) {
			throw new NotFoundException(__('Invalid survey question'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SurveyQuestion->save($this->request->data)) {
				$this->Flash->success(__('The survey question has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The survey question could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SurveyQuestion.' . $this->SurveyQuestion->primaryKey => $id));
			$this->request->data = $this->SurveyQuestion->find('first', $options);
		}
		$questionTypes = $this->SurveyQuestion->QuestionType->find('list');
		$surveys = $this->SurveyQuestion->Survey->find('list');
		$this->set(compact('questionTypes', 'surveys'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->SurveyQuestion->id = $id;
		if (!$this->SurveyQuestion->exists()) {
			throw new NotFoundException(__('Invalid survey question'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SurveyQuestion->delete()) {
			$this->Flash->success(__('The survey question has been deleted.'));
		} else {
			$this->Flash->error(__('The survey question could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
