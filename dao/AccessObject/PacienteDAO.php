<?php

require_once 'config/AutoLoadConfig.php';

class pacienteDAO extends pacienteModel
{
    private $insert = "INSERT INTO paciente (paciente_nome,paciente_tel,paciente_email,paciente_cidade,paciente_estado,paciente_cpf,paciente_ddd,paciente_status) VALUES ('%s','%s','%s','%s','%s','%s','%s','%s');",
            $select = "SELECT * FROM paciente
                       INNER JOIN pagamentos ON paciente.paciente_id = pagamentos.pag_reference
                       WHERE paciente_id = '%s';",
            $selectAll = "SELECT * FROM paciente
                          INNER JOIN pagamentos ON paciente.paciente_id = pagamentos.pag_reference;",
            $update = "UPDATE paciente SET  
                        paciente_nome = '%s',
                        paciente_idade = '%s',
                        paciente_tel = '%s',
                        paciente_email = '%s',
                        paciente_sexo  = '%s',
                        paciente_data_nasc = '%s',
                        paciente_escolaridade = '%s',
                        paciente_estado_civil = '%s',
                        paciente_profi = '%s',
                        paciente_naturalidade = '%s',
                        paciente_endereco = '%s',
                        paciente_bairro = '%s',
                        paciente_cidade = '%s',
                        paciente_estado = '%s',
                        paciente_pais = '%s',
                        paciente_rg = '%s',
                        paciente_cpf = '%s',
                        paciente_ddd = '%s' 
                        WHERE paciente_id = '%s'",

            $updateObs = "UPDATE paciente SET paciente_obs = '%s' WHERE paciente_id = '%s';";

    #persiste novo paciente na base de doados (Primeiro cadastra cliente depois vincula ele a um pagamento)
    public function newpaciente($nome,$telefone,$email,$cidade,$uf,$cpf,$ddd)
    {
        $this->setpacienteNome($nome);
        $this->setpacienteTel($telefone);
        $this->setpacienteEmail($email);
        $this->setpacienteCida($cidade);
        $this->setpacienteEstado($uf);
        $this->setpacienteCpf($cpf);
        $this->setpacienteDdd($ddd);

        $this->insert = sprintf
        (
            $this->insert,  $this->getpacienteNome(),
            $this->getpacienteTel(),
            $this->getpacienteEmail(),
            $this->getpacienteCida(),
            $this->getpacienteEstado(),
            $this->getpacienteCpf(),
            $this->getpacienteDdd(),"Novo"
        );

        if($this->cpfVerify($this->getpacienteCpf()))
        {
            //return $this->getpacienteCpf();//tem q retornar o id
            return $this->pacientId($this->getpacienteCpf());
        } else 
        {
            if($this->runQuery($this->insert))
            {
                return $this->pacientId($this->getpacienteCpf());
            } else 
            {
                echo "Não foi possível persistir usuário na base de dados.";
            }
        }
    }

    public function cpfVerify($cpf)
    {
        $sql = "SELECT count(paciente_id) FROM paciente WHERE paciente_cpf = '%s'";
        $sql = sprintf($sql, $cpf);
        $row = $this->runSelect($sql);

        if( $row[0]['count(paciente_id)'] != 0)
        {
            return true;
        } else 
        {
            return false;
        }
    }

    public function pacientId($cpf)
    {
        $sql ="SELECT * FROM paciente WHERE paciente_cpf = '{$cpf}'";
        $row = $this->runSelect($sql);
        return $row[0]['paciente_id'];
    }

    #atualiza texto sobre o paciente
    public function updateObs($text,$ref)
    {
        $this->setpacienteObs($text);
        $this->setpacienteId($ref);
        $this->updateObs = sprintf
        (
            $this->updateObs,
            $this->getpacienteObs(),
            $this->getpacienteId()
        );

        if($this->runQuery($this->updateObs))
        {
        } else 
        {
            echo "Não foi possível atualizar as demais informações, tente mais tarde.";
        }
    }

    public function updatepaciente
    (
        $id,
        $nome,
        $idade,
        $tel,
        $email,
        $sexo,
        $nasc,
        $escolaridade,
        $estadoCivil,
        $profi,
        $naturalidade,
        $endereco,
        $bairro,
        $cidade,
        $estado,
        $pais,
        $rg,
        $cpf,
        $ddd)
        {
        $this->setpacienteId($id);
        $this->setpacienteNome($nome);
        $this->setpacienteIdade($idade);
        $this->setpacienteTel($tel);
        $this->setpacienteEmail($email);
        $this->setpacienteSexo($sexo);
        $this->setpacienteDataNasc($nasc);
        $this->setpacienteEscolaridade($escolaridade);
        $this->setpacienteEstadoCivil($estadoCivil);
        $this->setpacienteProfi($profi);
        $this->setpacienteNaturalidade($naturalidade);
        $this->setpacienteEndereco($endereco);
        $this->setpacienteBairro($bairro);
        $this->setpacienteCida($cidade);
        $this->setpacienteEstado($estado);
        $this->setpacientePais($pais);
        $this->setpacienteRg($rg);
        $this->setpacienteCpf($cpf);
        $this->setpacienteDdd($ddd);

        $this->update = sprintf
        (
            $this->update, 
            $this->getpacienteNome(),
            $this->getpacienteIdade(),
            $this->getpacienteTel(),
            $this->getpacienteEmail(),
            $this->getpacienteSexo(),
            $this->getpacienteDataNasc(),
            $this->getpacienteEscolaridade(),
            $this->getpacienteEstadoCivil(),
            $this->getpacienteProfi(),
            $this->getpacienteNaturalidade(),
            $this->getpacienteEndereco(),
            $this->getpacienteBairro(),
            $this->getpacienteCida(),
            $this->getpacienteEstado(),
            $this->getpacientePais(),
            $this->getpacienteRg(),
            $this->getpacienteCpf(),
            $this->getpacienteDdd(),
            $this->getpacienteId()
        );

        if($this->runQuery($this->update))
        {
        } else 
        {
            echo "Update realizado com sucesso!";
        }

    }

    public function pacienteData($id,$ref)
    {
        $this->setpacienteId($id);
        $this->select = sprintf
        (
            $this->select, 
            $this->getpacienteId()
        );

        if($row = $this->runSelect($this->select))
        {
            $objAler = new AlertasDAO();
            $objAler->updateStatusAlert($ref);
            return $row;
        } else 
        {
            echo "Não foi possivel buscar informações, tente mais tarde.";
        }
    }

    public function controleAtend($id)
    {
        $objText = new TxtFunctions();
        $objTime = new DateTimeFunctions();
        $objPay = new PagamentoDAO();
        // $sql = "SELECT * FROM paciente WHERE paciente_id = '{$id}';";
	
        $this->select = sprintf
        (
            $this->select,
            $id
        );

        $row = $this->runSelect($this->select);

        $html =  '<table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Data da Solicitação</th>
                        <th>Tipo de tendimento</th>
                        <th>Valor</th>
                        <th>Status Pag.</th>
                        <th>Ultima Atualização</th>

                    </tr>
                    </thead>
                    <tbody>';

        for($i = 0; $i < count($row); $i++)
        {
            $html .= '<tr>
                        <td>'.($i+1).'</td>
                        <td>'.$objTime->dateTimeBr($row[$i]['paciente_data_insert']).'</td>
                        <td>'.$objText->limitarTexto($row[$i]['Pag_item_descricao'], 30).'</td>
                        <td>'.$row[$i]['Pag_valor_unitario'].'</td>
                        <td>'.$objPay->statusConvert($row[$i]['Pag_status']).'</td>
                        <td>'.$row[$i]['Pag_ultimo_evento'].'</td>
                    </tr>';
        }

        $html .= '   </tbody>
                </table>';

        return $html;
    }

    public function updateStatus($statusPag, $anunId)
    {
    }

    public function returnPacients($for)
    {
        if($row = $this->runSelect($this->selectAll))
        {
            $objTime = new DateTimeFunctions();
            $objPay = new PagamentoDAO();
            $objText = new TxtFunctions();

            if($for == "Exclusiva")
            {
                $html ='  <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Email</th>
                            <th>Cidade</th>
                            <th>Atendimento</th>
                            <th>Status Pag.</th>
                            <th>Data Reg.</th>
                            <th>Prontuário</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>';

                for($i = 0; $i < count($row); $i++)
                {
                    $html .= '      <td>'.($i+1).'</td>
                            <td>'.$row[$i]['paciente_nome'].'</td>
                            <td>'.$row[$i]['paciente_tel'].'</td>
                            <td>'.$row[$i]['paciente_email'].'</td>
                            <td>'.$row[$i]['paciente_cidade'].'</td>
                            <td>'.$objText->limitarTexto($row[$i]['Pag_item_descricao'], 30).'</td>
                            <td>'.$objPay->statusConvert($row[$i]['Pag_status']).'</td>
                            <td>'.$objTime->dateTimeBr($row[$i]['paciente_data_insert']).'</td>
                            <td><a href="?controller=paciente&action=viewProntuario&ref='.$row[$i]['paciente_id'].'"><button class="btn btn-info" id="sa-warning"> Visualizar <i class="zmdi zmdi-assignment-o"></i></button></a></td>

                        </tr>';
                }

                $html .=  '</tbody>
                    </table>';

            } else if ($for == "dash")
            {
                $html = '<table class="table table-inner table-vmiddle">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Atendimento</th>
                                    <th>Status Pag</th>
                                    <th style="width: 60px">Preço</th>
                                    <th style="width: 60px">Prontuário</th>
                                </tr>
                                </thead>
                                <tbody>';
                for($i = 0; $i < count($row); $i++) 
                {
                    $html .= ' <tr>
                                    <td class="f-500 c-cyan">'.($i+1).'</td>
                                    <td>'.$row[$i]['paciente_nome'].'</td>
                                    <td class="f-500 c-cyan">'.$objText->limitarTexto($row[$i]['Pag_item_descricao'], 30).'</td>
                                    <td>'.$objPay->statusConvert($row[$i]['Pag_status']).'</td>
                                    <td class="f-500 c-cyan">'.$row[$i]['Pag_valor_unitario'].'</td>
                                    <td> <a href="?controller=paciente&action=viewProntuario&ref=' . $row[$i]['paciente_id'] . '"> Visualizar <i class="zmdi zmdi-assignment-o"></i> </a></td>
                                </tr>';

                }
                $html .='      </tbody>
                            </table>';

            }

            return $html;

        } else 
        {
            echo "Não foi possível retornar os dados";
        }
    }
}
