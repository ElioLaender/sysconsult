<?php

require_once 'config/AutoLoadConfig.php';

class DataAtendimentoDAO extends DataAtendimentoModel{

    private $insert = "INSERT INTO data_atendimento (da_adm_ref,da_paci_ref,da_date,da_hour,da_obs,da_envio_mutuo) VALUES ('%s','%s','%s','%s','%s','%s');",
            $select = "SELECT * FROM data_atendimento
                       INNER JOIN admin ON sata_atendimento.da_adm_ref = admin.admin_id
                       INNER JOIN paciente ON paciente.paciente_id = data_atendimento.da_paci_ref
                       WHERE data_atendimento.da_date = '%s' AND data_atendimento.da_enviado = 0;",
            $update = "UPDATE data_atendimento SET da_enviado = '1' WHERE da_id = '%s';",
            $delete;


    public function insertDataAtend($admRef,$paciRef,$data,$hora,$mensagem,$mutuo)
    {
        $this->setDaAdmRef($admRef);
        $this->setDaPaciRef($paciRef);
        $this->setDaDate($data);
        $this->setDaHour($hora);
        $this->setDaObs($mensagem);
        $this->setDaEnvioMutuo($mutuo);

        $this->insert = sprintf
        (
            $this->insert,
            $this->getDaAdmRef(),
            $this->getDaPaciRef(),
            $this->getDaDate(),
            $this->getDaHour(),
            $this->getDaObs(),
            $this->getDaEnvioMutuo()
        );

        if($this->runQuery($this->insert))
        {
        } else 
        {
            echo "Não foi possível persistir data.";
        }
    }

    #retorna os dados de pacientes que devem receber email lembrando da consulta.
    public function dadosNotification()
    {
        $this->select = sprintf($this->select,date("Y/m/d"));

        if($row = $this->runSelect($this->select))
        {
            return $row;
        } else 
        {
        }
    }

    #realiza update modificando o status para enviado
    public function updateAlertNotification($daId)
    {   
	    $sql = "UPDATE data_atendimento SET da_enviado = '1' WHERE da_id = '{$daId}';";
        
        if ($this->runQuery($sql)) 
        {
        } else 
        {
            echo "Deu ruim";
        }
    }
}
