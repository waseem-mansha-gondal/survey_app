<?php 

$name = "data[UserFilledSurvey][".$params['id']."][option_text]";
$name_q = "data[UserFilledSurvey][".$params['id']."][survey_question_id]";
$name_s = "data[UserFilledSurvey][".$params['id']."][survey_id]";
$name_id = "data[UserFilledSurvey][".$params['id']."][user_id]";
echo $this->Form->input(
    'UserFilledSurvey'.$params['id'].'user_id',
    array('type' => 'hidden', 'escape' => false,'name'=>$name_id,'label'=>false,'value'=>AuthComponent::user('id'))
);
echo $this->Form->input(
    'UserFilledSurvey'.$params['id'].'survey_id',
    array('type' => 'hidden', 'escape' => false,'name'=>$name_s,'label'=>false,'value'=>$params['Survey']['id'])
);
echo $this->Form->input(
    'UserFilledSurvey'.$params['id'].'survey_question_id',
    array('type' => 'hidden', 'escape' => false,'name'=>$name_q,'label'=>false,'value'=>$params['id'])
);
echo $this->Form->input('UserFilledSurvey'.$params['id'].'option_text', 
    array('label'=>false,'type'=>'text','class' => 'form-control','name'=>$name)
    );