<?php

class ResultController extends AppController
{

	
	public function admin_index()
	{
		$this->loadModel('Candidats.CandidateResult');
		$this->layout = 'admin';
		$this->CandidateResult->find('all');
	}
}