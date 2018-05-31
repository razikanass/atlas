<?php
    class ClientsController extends AppController{
        
        // public $scaffold;
        
	    public function index(){
	    	$clients = $this->Client->find('all',
	    								   array('fields'=>array('Client.id','Client.nom','Client.prenom',
	    								   						 'Client.adresse','Client.email','Client.username',
	    								   						 'Client.ca','Client.photo','Client.tel')));
	    	$this->set('clients',$clients);
	    }
	       
	    public function delete($id){
	    	if(!empty($id)){
	    		$this->Client->delete($id);
	    	}
	    }

	    public function view($id){
	    	if(!empty($id)){
	    		$client = $this->Client->findById($id,
	    										  array('Client.id','Client.nom','Client.prenom',
	    								   				'Client.adresse','Client.email','Client.username',
	    								   				'Client.ca','Client.photo','Client.tel'));
	    		$this->set('client',$client);
	    	}
	    }
        
    }
?>