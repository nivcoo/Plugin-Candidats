<?php

class CandidatsController extends AppController
{
	public function index()
	{
		$this->loadModel('Candidats.CandidateList');
		$this->CandidateList->find('all');
	}
	
	public function admin_index()
	{
		$this->layout = 'admin';
		$this->loadModel('Candidats.CandidateList');
		$search_candidate = $this->CandidateList->find('all');
		$this->set(compact('search_candidate'));
	}
	
	
	public function admin_add()
	{
		if($this->isConnected AND $this->User->isAdmin()){
			$this->layout = 'admin';
			$this->loadModel('Candidats.CandidateList');
			$this->loadModel('Candidats.CandidateResult');

			if($this->request->is('ajax')) {
				$this->response->type('json');
				$this->autoRender = null;
				if (!empty($this->request->data['name']) AND !empty($this->request->data['url']) AND !empty($this->request->data['desc']) AND !empty($this->request->data['rank'])) {
					$this->CandidateList->create();
					$this->CandidateList->set(array(
						'name' => $this->request->data['name'],
						'url' => $this->request->data['url'],
						'description' => $this->request->data['desc'],
						'rank' => $this->request->data['rank']
					));
					$this->CandidateList->save();
					
					$this->CandidateResult->create();
					$this->CandidateResult->set(array(
						'user_id' => "3",
						'candidate_id' => "3",
						'message' => "test"
						
					));
					$this->CandidateResult->save();

					$this->response->body(json_encode(array('statut' => true, 'msg' => $this->Lang->get('GLOBAL__SUCCESS'))));
				} else {
                    $this->response->body(json_encode(array('statut' => false, 'msg' => $this->Lang->get('ERROR__FILL_ALL_FIELDS'))));
                }
			} else {
                $this->response->body(json_encode(array('statut' => false, 'msg' => $this->Lang->get('ERROR__BAD_REQUEST'))));
            }
		} else {
            $this->redirect('/');
        }
	}
	
	public function admin_delete($id)
	{
        if($this->isConnected AND $this->User->isAdmin())
		{
			
			$this->loadModel('Candidats.CandidateList');
			$this->loadModel('Candidats.CandidateResult');
            $this->autoRender = null;
            $this->CandidateList->delete($id);
			$search_candidate_id = $this->CandidateResult->find('all');
			foreach ($search_candidate_id as $v) {
				if ($v["CandidateResult"]["candidate_id"] == $id) {
					$FindId = $v["CandidateResult"]["id"];
					$this->CandidateResult->delete($FindId);
				}
			}
            $this->redirect('/admin/candidats');
			
        } else {
            $this->redirect('/');
        }
    }
}