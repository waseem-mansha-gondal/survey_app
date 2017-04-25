    <?php 
$name = "data[UserFilledSurvey][".$params['id']."][option_selected_id]";
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
    $options = [];
    $limit = 1;
    foreach ($params['QuestionOption'] as $key => $value) {
        if($limit>2){
            break;
        }
        $options[$value['id']] = $value['value'];
        $limit++;
    }

$attributes = array('div' => 'input','legend'=>'', 'type' => 'radio', 'options' => $options,'name'=>$name,'lable'=>false);
echo $this->Form->input('UserFilledSurvey.'.$params['id'].'.option_selected_id',$attributes);

    
   

