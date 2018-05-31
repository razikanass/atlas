<?php
	class ProduitsController extends AppController{
        
//        public $scaffold;

        public function beforeFilter(){
            parent::beforeFilter();
        }

		public function index(){
			$categories = $this->Produit->Categorie->find('all');
            debug($categories);
		}
        
        public function view($id){
            if(!empty($id)){
                $produits = $this->Produit->Categorie->find('first',array(
                    'conditions'=>array('Categorie.id'=>$id),
                    'recursive'=>1
                ));
                $categorie = $produits['Categorie']['nom'];
                $this->set('produits',$produits['Produit']);
                $this->set('categorie',$categorie);
                $this->set('id',$produits['Categorie']['id']);
            }
            else{
                echo 'no param !';
                return;
            }
        }

        public function viewProduit($id){
            if(!empty($id)){
                $produit = $this->Produit->findById($id);
                $this->set('produit',$produit);
            }
        }

        public function add($id){
            if(!empty($id)){
                $categorie = $this->Produit->Categorie->find('first',array(
                    'conditions'=>array('Categorie.id'=>$id)
                ));
                $this->set('nom',$categorie['Categorie']['nom']);
                if(!empty($this->request->data)){
                    $this->Produit->create($this->request->data,true);
                    $this->Produit->save(null,array('nom','codecategorie'=>$id,'photo','description','prix'));
                }
            }
        }

        public function addElementbase($id){
            if(!empty($id)){
                $this->set('idproduit',$id);
            }
            if(!empty($this->request->data)){
                $this->Produit->Elementbase->create($this->request->data,true);
                $var = $this->Produit->Elementbase->save(null,array('nomelem'))['Elementbase'];
                $this->Produit->Ligneelementbase->save(array(
                    'id'=>null,
                    'codeelementbase'=>$var['id'],
                    'codeproduit'=>$var['codeproduit']
                ));
            }
        }

        public function deleteElementbase(){
            if(!empty($this->request->named)){
                $params = $this->request->named;
                $this->Produit->Ligneelementbase->deleteAll(array(
                    'Ligneelementbase.codeelementbase'=>$params['codebase'],
                    'Ligneelementbase.codeproduit'=>$params['codeprod']
                ));
            }
        }

        public function delete($id){
            if(!empty($id)){
                $res = $this->Produit->findById($id);
                $this->Produit->delete($id);
                $this->redirect('/produits/view/'.$res['Categorie']['id']);
            }
        }

        public function edit($id){
            if(!empty($id)){
                $produit = $this->Produit->find('first',array(
                    'conditions'=>array('Produit.id'=>$id)
                ));
                $this->set('produit',$produit['Produit']);
                $this->set('categorie',$produit['Categorie']['nom']);
                if(!empty($this->request->data)){
                    $this->Produit->save(
                        array(
                            'id'=>$id,
                            'nom'=>$this->request->data['Produit']['nom'],
                            'photo'=>$this->request->data['Produit']['photo'],
                            'description'=>$this->request->data['Produit']['description'],
                            'prix'=>$this->request->data['Produit']['prix']
                        )
                    );
                }
            }
        }

	}
?>