<?php
    class StatsController extends AppController{
    
        var $uses = array('Client','Commande');
        
        public function index(){
            $ca = $this->Client->find('all',array('fields'=>array('sum(Client.ca) as caSum')));
            $countCli = $this->Client->find('all',array('fields'=>array('count(*) as countCli')));
            $clients = $this->Client->find('first',array('fields'=>array('sum(Client.fidele) as clientfidel')));
            $cmdCount = $this->Commande->find('first',array('fields'=>array('count(*) as countcmd')));
            $cmdRealise = $this->Commande->find('first',array('fields'=>array('sum(Commande.realise) as realise')));
            $ca = $ca[0][0]['caSum'].'DHs';
            $countCmd = $cmdCount[0]['countcmd'];
            $cmdRealise = $cmdRealise[0]['realise'];
            $cmdNonRealise = $countCmd - $cmdRealise;
            $countCli = $countCli[0][0]['countCli'];
            $clientFidele = $clients[0]['clientfidel'];
            $clientNonFidele = $countCli - $clientFidele;
            $this->set('ca',$ca);
            $this->set('countCli',$countCli);
            $this->set('clientFidele',$clientFidele);
            $this->set('clientNonFidele',$clientNonFidele);
            $this->set('countCmd',$countCmd);
            $this->set('cmdRealise',$cmdRealise);
            $this->set('cmdNonRealise',$cmdNonRealise);
        }
    
    }
?>