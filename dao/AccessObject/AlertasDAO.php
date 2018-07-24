<?php

require_once 'config/AutoLoadConfig.php';

class AlertasDAO extends AlertasModel{

    private $insert = "INSERT INTO alertas (alertas_titulo,alertas_descricao,alertas_ref,alertas_status,alertas_url_destino) VALUES ('%s','%s','%s','%s','%s');",
            $select = "SELECT * FROM alertas ORDER BY alertas_id DESC",
            $update = "UPDATE alertas SET alertas_status = 'Visualizado' WHERE alertas_id = '%s';",
            $delete = "DELETE FROM alertas WHERE alertas_id = '%s'";

    public function insertAlert($alertas_titulo,$alertas_descricao,$ref,$destino)
    {
        $this->setAlertasTitulo($alertas_titulo);
        $this->setAlertasDescricao($alertas_descricao);
        $this->setAlertasRef($ref);
        $this->setAlertasUrlDestino($destino);

        $this->insert = sprintf
        (
            $this->insert,
            $this->getAlertasTitulo(),
            $this->getAlertasDescricao(),
            $this->getAlertasRef(),
            "Nova",
            $this->getAlertasUrlDestino()
        );

        if($this->runQuery($this->insert))
        {

        } else 
        {
            echo "Não foi possível realizar update";
        }
    }

    public function alertGeneretor()
    {
        //$this->select .= " ORDER BY contato_id DESC limit 5";
        if($row = $this->runSelect($this->select))
        {
            $html = "";

            for($i = 0; $i < count($row); $i++)
            {

                $html .= ' <a class="lv-item" href="'.$row[$i]['alertas_url_destino'].'&aler='.$row[$i]['alertas_id'].'">
                                         <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="view/assets/img-dash/alerts.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">'.$row[$i]['alertas_titulo'].'('.$row[$i]['alertas_status'].')</div>
                                            <small class="lv-small">'.$row[$i]['alertas_descricao'].'</small>
                                        </div>
                                    </div>
                                </a>';
            }

            return $html;

        } else 
        {
            echo "Não foi possível retornar as notificações";
        }
    }

    #seta status para visualizada e realiza decrement
    public function updateStatusAlert($ref)
    {
        #seleciona os alerts
        $sql = "SELECT * FROM alertas WHERE alertas_id = '{$ref}';";
        $row = $this->runSelect($sql);

        if($row[0]['alertas_status'] == "Nova")
        {
            $this->update = sprintf($this->update, $ref);

            if($this->runQuery($this->update))
            {
                #realizar o decrement aqui.
                $objDecrement = new NotificationsDAO();
                $objDecrement->decrementAlert();
            } else 
            {
                echo "Não foi possível atualizar status de alerta";
            }

        } else 
        {

        }
    }

    public function deleteAlert($id)
    {
        $this->delete = sprintf($this->delete, $id);
            
            if($this->runQuery($this->delete))
            {
            } else 
            {
                echo "Não foi possível deletar aquivo.";
            }
	}

    public function returnTableAlert()
    {
        $sql = "SELECT * FROM alertas
	            INNER JOIN paciente ON alertas.alertas_ref = paciente.paciente_id 
		        ORDER BY paciente_id DESC;";

        if($row = $this->runSelect($sql))
        {
            $ObjTex = new TxtFunctions();
            $objTime = new DateTimeFunctions();
            $objPagDAO = new PagamentoDAO();
            
            $html = ' <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Paciente</th>
                        <th>Telefone</th>
                        <th>Status Notificação</th>
                        <th>Data Alteração</th>
                        <th>Prontuário</th>
                        <th>Excluir</th>
                    </tr>
                    </thead>
                    <tbody>';
                        for($i = 0; $i < count($row); $i++) {


                            $html .= '
                        <tr>
                        <td>'.($i+1).'</td>
                        <td>'.$row[$i]['alertas_titulo'].'</td>
                        <td>'.$row[$i]['alertas_descricao'].'</td>
                        <td>'.$row[$i]['paciente_nome'].'</td>
                        <td>('.$row[$i]['paciente_ddd'].') '.$row[$i]['paciente_tel'].'</td>
                        <td>'.$row[$i]['alertas_status'].'</td>
                        <td>'.$objTime->dateTimeBr($row[$i]['alertas_data_reg']).'</td>
                        <td><a href="?controller=Paciente&action=viewProntuario&ref='.$row[$i]['paciente_id'].'&aler='.$row[$i]['alertas_id'].'"><button class="btn btn-info" id="sa-warning"> Visualizar <i class="zmdi zmdi-assignment-o"></i></button></a></td>
                        <td> <a href="?controller=Admin&action=alertDel&ref='.$row[$i]['alertas_id'].'"><button class="btn btn-info" id="sa-warning"> Excluir <i class="zmdi zmdi-delete"></i></button></a></td>
                    </tr>';


                        }
            $html .= '</tbody>
                        </table>';
        return $html;
        } else 
        {
            echo "Contato erro";
        }
    }
	#retorna contagem 
    public function qtdNotifi()
    {
	   $sql = "SELECT COUNT(alertas_id) FROM alertas;";
       
       if($row = $this->runSelect($sql))
       {
		return $row = $row[0]['COUNT(alertas_id)'];
       } else 
       {
		return 0;
	   }		
	}
}
