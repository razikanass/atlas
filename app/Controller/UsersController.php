<?php
	class UsersController extends AppController{

		public function login(){
			if(!empty($this->request->data)){
				$user = $this->User->findByUsername($this->request->data['User']['username']);
				if(!empty($user['User']['id']))
					$this->User->id = $user['User']['id'];
				date_default_timezone_set('Africa/Casablanca');
				$this->User->saveField('last_access',date("Y-m-d H:i:s"));
				if($this->Auth->login()){
					return $this->redirect('/');
				}
				else{
					$this->set('error','données incorrectes !');
				}
			}
		}

		public function logout(){
			$this->Auth->logout();

			return $this->redirect('/');
		}

	}
?>