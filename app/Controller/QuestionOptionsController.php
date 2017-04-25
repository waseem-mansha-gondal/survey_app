<?php
App::uses('AppController', 'Controller');
/**
 * QuestionOptions Controller
 *
 * @property QuestionOption $QuestionOption
 * @property PaginatorComponent $Paginator
 */
class QuestionOptionsController extends AppController {

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
		$this->QuestionOption->recursive = 0;
		$this->set('questionOptions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->QuestionOption->exists($id)) {
			throw new NotFoundException(__('Invalid question option'));
		}
		$options = array('conditions' => array('QuestionOption.' . $this->QuestionOption->primaryKey => $id));
		$this->set('questionOption', $this->QuestionOption->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->QuestionOption->create();
			if ($this->QuestionOption->save($this->request->data)) {
				$this->Flash->success(__('The question option has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The question option could not be saved. Please, try again.'));
			}
		}
		$surveyQuestions = $this->QuestionOption->SurveyQuestion->find('list');
		$this->set(compact('surveyQuestions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->QuestionOption->exists($id)) {
			throw new NotFoundException(__('Invalid question option'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->QuestionOption->save($this->request->data)) {
				$this->Flash->success(__('The question option has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The question option could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('QuestionOption.' . $this->QuestionOption->primaryKey => $id));
			$this->request->data = $this->QuestionOption->find('first', $options);
		}
		$surveyQuestions = $this->QuestionOption->SurveyQuestion->find('list');
		$this->set(compact('surveyQuestions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->QuestionOption->id = $id;
		if (!$this->QuestionOption->exists()) {
			throw new NotFoundException(__('Invalid question option'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->QuestionOption->delete()) {
			$this->Flash->success(__('The question option has been deleted.'));
		} else {
			$this->Flash->error(__('The question option could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->QuestionOption->recursive = 0;
		$this->set('questionOptions', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->QuestionOption->exists($id)) {
			throw new NotFoundException(__('Invalid question option'));
		}
		$options = array('conditions' => array('QuestionOption.' . $this->QuestionOption->primaryKey => $id));
		$this->set('questionOption', $this->QuestionOption->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->QuestionOption->create();
			if ($this->QuestionOption->save($this->request->data)) {
				$this->Flash->success(__('The question option has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The question option could not be saved. Please, try again.'));
			}
		}
		$surveyQuestions = $this->QuestionOption->SurveyQuestion->find('list');
		$this->set(compact('surveyQuestions'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->QuestionOption->exists($id)) {
			throw new NotFoundException(__('Invalid question option'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->QuestionOption->save($this->request->data)) {
				$this->Flash->success(__('The question option has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The question option could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('QuestionOption.' . $this->QuestionOption->primaryKey => $id));
			$this->request->data = $this->QuestionOption->find('first', $options);
		}
		$surveyQuestions = $this->QuestionOption->SurveyQuestion->find('list');
		$this->set(compact('surveyQuestions'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->QuestionOption->id = $id;
		if (!$this->QuestionOption->exists()) {
			throw new NotFoundException(__('Invalid question option'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->QuestionOption->delete()) {
			$this->Flash->success(__('The question option has been deleted.'));
		} else {
			$this->Flash->error(__('The question option could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
