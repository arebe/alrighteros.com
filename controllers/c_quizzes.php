<?php

class quizzes_controller extends base_controller{
  public function __construct(){
	parent::__construct();
  }

  public function view($error = NULL){

	# Setup view
        $this->template->content = View::instance('v_quizzes_view');
        $this->template->title   = "Quizzes";
		$this->template->content->error = $error;

    # Render template
        echo $this->template;

  }

} # eoc
