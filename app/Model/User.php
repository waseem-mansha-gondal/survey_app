<?php

App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

/**
 * User Model
 *
 * @property UserRole $UserRole
 * @property UserFilledSurvey $UserFilledSurvey
 */
class User extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'name';


    // The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
      'UserRole' => array(
        'className' => 'UserRole',
        'foreignKey' => 'user_role_id',
        'conditions' => '',
        'fields' => '',
        'order' => ''
      )
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
      'UserFilledSurvey' => array(
        'className' => 'UserFilledSurvey',
        'foreignKey' => 'user_id',
        'dependent' => false,
        'conditions' => '',
        'fields' => '',
        'order' => '',
        'limit' => '',
        'offset' => '',
        'exclusive' => '',
        'finderQuery' => '',
        'counterQuery' => ''
      ),
      'Survey' => array(
        'className' => 'Survey',
        'foreignKey' => 'creater_id',
        'dependent' => false,
        'conditions' => '',
        'fields' => '',
        'order' => '',
        'limit' => '',
        'offset' => '',
        'exclusive' => '',
        'finderQuery' => '',
        'counterQuery' => ''
      )
    );
    var $validate = array(
      'email' => array(
        'email' => array(
          'rule' => 'email',
          'message' => 'Please make sure your email is entered correctly.'
        ),
        'unique' => array(
          'rule' => 'isUnique',
          'message' => 'An account with that email already exists.'
        ),
        'required' => array(
          'rule' => 'notBlank',
          'message' => 'Please Enter your email.'
        )
      ),
      'password' => array(
        'min' => array(
          'rule' => array('minLength', 6),
          'message' => 'Usernames must be at least 6 characters.'
        ),
        'required' => array(
          'rule' => 'notBlank',
          'message' => 'Please enter a password.'
        ),
      ),
      'password_confirm' => array(
        'required' => 'notEmpty',
        'password_confirm'=>array(
                'rule'=>array('validatePasswdConfirm'),
                'message'=>'Password Confirmation must match Password',                         
            )
      ),
      'name' => array(
        'required' => array(
          'rule' => 'notBlank',
          'message' => 'Please enter your first name.'
        ),
        'max' => array(
          'rule' => array('maxLength', 30),
          'message' => 'First name must be fewer than 30 characters'
        )
      )
    );

    function validatePasswdConfirm($data) {        
        
        if ($this->data['User']['password'] !== $this->data['User']['password_confirm']) {
            return false;
        }
        return true;
    }

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new SimplePasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        return true;
    }

}
