<?php

require_once 'config/AutoLoadConfig.php';

class ContatoDAO extends ContatoModel
{

    private $insert = "INSERT INTO contato (contato_nome,contato_email,contato_assunto,contato_mensagem,contato_status) VALUES ('%s','%s','%s','%s','%s')",
            $select = "SELECT * FROM contato",
            $delete = "DELETE FROM contato WHERE contato_id = '%s'";
            
    #persiste dados do contato
    public function contatoPersist($nome, $email, $assunto, $mensagem)
    {
        $this->setContatoNome($nome);
        $this->setContatoEmail($email);
        $this->setContatoAssunto($assunto);
        $this->setContatoMensagem($mensagem);

        $this->insert = sprintf
        (
            $this->insert,
            $this->getContatoNome(), 
            $this->getContatoEmail(), 
            $this->getContatoAssunto(), 
            $this->getContatoMensagem(),"Nova"
        );

        if ($this->runQuery($this->insert)) 
        {
            return true;
        } else 
        {
            echo "Não foi possível enviar mensagem, tente mais tarde.";
        }
    }

    #deleta mensagem
    public function contactDelete($id)
    {
        #fazer verificação, se o registro a ser exclído não tiver sido visualizado, decrementa o notification. Ps: Utilizar mesma lógina no delete do Alert. 
        $this->delete = sprintf($this->delete, $id);

        if($this->runQuery($this->delete))
        {
        } else 
        {
            echo "Não foi possível exclui mensagem no momento.";
        }

    }

    #retorna as mensagens do campo de contato do site.
    public function returnContact()
    {

        $html = "";
        $this->select .= " ORDER BY contato_id DESC limit 5";
        $row = $this->runSelect($this->select);

        if (count($row) > 0) 
        {
            for ($i = 0; $i < count($row); $i++) 
            {
                $html .= '

                            <a class="lv-item" href="?controller=Dashboard&action=viewRespMessage&ref='.$row[$i]['contato_id'].'">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="view/assets/img-dash/homemessager.png" alt="">
                                        </div>
                                        <div class="media-body">

                                            <div class="lv-title">' . $row[$i]['contato_nome'] . ' (' . $row[$i]['contato_status'] . ')</div>
                                            <small class="lv-small">' . $row[$i]['contato_assunto'] . '</small>

                                        </div>
                                    </div>
                                </a>

                ';
            }
            return $html;
        } else 
        {
            echo "Erro ao retornar mensagens";
        }
    }

    public function returnContactId($id)
    {

        $sql = "SELECT * FROM contato WHERE contato_id = '%s';";
        $this->setContatoId($id);
        $sql = sprintf($sql, $this->getContatoId());

        if ($row = $this->runSelect($sql)) 
        {
            if($row[0]['contato_status'] == "Nova")
            {
                $objNotfy = new NotificationsDAO();
                #realiza o decrement
                $objNotfy->decrementMessager();
                #seta status para lida
                $sqlUp = "UPDATE contato SET contato_status = 'Lida' WHERE contato_id = {$id};";
                if($this->runQuery($sqlUp))
                {

                } else 
                {
                    echo "Não foi possível atualizar status.";
                }

                $row = $this->runSelect($sql);

            } else 
            {
            }
            return $row;
        } else 
        {
            echo "Não foi possível retornar dados";
        }
    }

   #seta como respondido o status da mensagem
   public function alterStatusResp($id)
   {
		$sqlUp = "UPDATE contato SET contato_status = 'Respondida' WHERE contato_id = {$id};";
         if($this->runQuery($sqlUp))
         {
         } else 
         {
            echo "Não foi possível atualizar status.";
         }
	}

  #retorna o numero total de registros na tabela. 
  public function qtdMessager()
  {
        $sql = "SELECT COUNT(Contato_id) FROM contato;";
        
        if($row = $this->runSelect($sql))
        {
			return $row[0]['COUNT(Contato_id)'];		
        } else 
        {
		   return 0;
		}
	}

    public function returnTableContact()
    {
        $sql = "SELECT * FROM contato  ORDER BY contato_id DESC;";

        if($row = $this->runSelect($sql))
        {

            $ObjTex = new TxtFunctions();
            $objTime = new DateTimeFunctions();

            $html = ' <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Assunto</th>
                        <th>Mensagem</th>
                        <th>Recebimento</th>
                        <th>Status</th>
                        <th>Responder</th>
                        <th>Excluir</th>
                    </tr>
                    </thead>
                    <tbody>';
                        for($i = 0; $i < count($row); $i++) {


                            $html .= '
                        <tr>
                        <td>'.($i+1).'</td>
                        <td>'.$row[$i]['contato_nome'].'</td>
                        <td>'.$row[$i]['contato_email'].'</td>
                        <td>'.$ObjTex->limitarTexto($row[$i]['contato_assunto'],30).'</td>
                        <td>'.$ObjTex->limitarTexto($row[$i]['contato_mensagem'],25).'</td>
                        <td>'.$objTime->dateTimeBr($row[$i]['contato_data_recebimento']).'</td>
                        <td>'.$row[$i]['contato_status'].'</td>
                        <td> <a href="?controller=Dashboard&action=viewRespMessage&ref='.$row[$i]['contato_id'].'"> Responder <i class="zmdi zmdi-email"></i> </a></td>
                        <td> <a href="?controller=Home&action=deleteContact&ref='.$row[$i]['contato_id'].'"> Excluir <i class="zmdi zmdi-delete"></i> </a></td>
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
}

