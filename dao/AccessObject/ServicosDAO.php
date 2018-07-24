<?php

include_once "model/servicosModel.php";

class servicosDAO extends servicosModel{

    private $insert = "INSERT INTO servicos (servico_nome,servico_preco,servico_list1,servico_list2,servico_list3,servico_list4) VALUES ('%s','%s','%s','%s','%s','%s');",
            $select = "SELECT * FROM servicos",
            $update = "UPDATE servicos SET servico_nome = '%s', servico_preco = '%s', servico_list1 = '%s', servico_list2 = '%s', servico_list3 = '%s', servico_list4 = '%s' WHERE servico_id = '%s'",
            $delete = "DELETE FROM servicos WHERE servico_id = %s;";


    public function insertService($nome,$preco,$list1,$list2,$list3,$list4)
    {
        $this->setServicoNome($nome);
        $this->setServicoPreco($preco);
        $this->setServicoList1($list1);
        $this->setServicoList2($list2);
        $this->setServicoList3($list3);
        $this->setServicoList4($list4);

        $this->insert = sprintf
        (
            $this->insert,  
            $this->getServicoNome(),
            str_replace(',','.',$this->getServicoPreco()),
            $this->getServicoList1(),
            $this->getServicoList2(),
            $this->getServicoList3(),
            $this->getServicoList4()
        );

        if($this->runQuery($this->insert))
        {
        } else 
        {
            echo "Não foi possível persistir serviço, tente mais tarde.";
        }
    }

    #seleciona os dados do serviço pelo id
    public function returnSerId($ref)
    {
        $sql = "SELECT * FROM servicos WHERE servico_id = '%s'";
        $this->setServicoId($ref);
        
        $sql = sprintf
        (
            $sql,$this->getServicoId()
        );

        if($row = $this->runSelect($sql))
        {
            return $row;
        } else 
        {
            echo "Não foi possível retornar os dados de serviço";
        }
    }

    public function selectServices($for)
    {
        if($row = $this->runSelect($this->select))
        {
            $html = "";
            if($for == "viewUser")
            {
                for($i = 0; $i < count($row); $i++)
                {
                    $html .= '

                        <div class="col-md-4 col-sm-6" style="margin-top: 15px;">
                                <form action="?controller=Pay&action=check01" method="post">
                                    <div class="plan">
                                        <h1>'.$row[$i]["servico_nome"].'</h1>
                                        <h2>R$'.$row[$i]["servico_preco"].'</h2>';
                                        if(!empty($row[$i]["servico_list1"])){ $html .= '<p>- '.$row[$i]["servico_list1"].'</p>';}
                                        if(!empty($row[$i]["servico_list2"])){ $html .= '<p>- '.$row[$i]["servico_list2"].'</p>';}
                                        if(!empty($row[$i]["servico_list3"])){ $html .= '<p>- '.$row[$i]["servico_list3"].'</p>';}
                                        if(!empty($row[$i]["servico_list4"])){ $html .= '<p>- '.$row[$i]["servico_list4"].'</p>';}
                            $html .= '  <input type="hidden" name="nomePla" value="'.$row[$i]["servico_nome"].'">
                                        <input type="hidden" name="precoPla" value="'.$row[$i]["servico_preco"].'">
                                        <input type="hidden" name="list1" value="'.$row[$i]["servico_list1"].'">
                                        <input type="hidden" name="list2" value="'.$row[$i]["servico_list2"].'">
                                        <input type="hidden" name="list3" value="'.$row[$i]["servico_list3"].'">
                                        <input type="hidden" name="list4" value="'.$row[$i]["servico_list4"].'">
                                        <button type="submit" class="btn btn-primary">Consultar</button>
                                    </div>
                                </form>
                            </div>


                    ';

                }
            } else if($for == "listTable")
            {
                    $html = '
                         <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Serviço</th>
                            <th>Preço</th>
                            <th>Descrição</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                        </thead>
                        <tbody>';
                for($i = 0; $i < count($row); $i++) 
                {
                    $html .= '
                        <tr>
                            <td>'.($i+1).'</td>
                            <td>'.$row[$i]["servico_nome"].'</td>
                            <td>R$'.$row[$i]["servico_preco"].'</td>
                            <td>'.$row[$i]["servico_descricao"].'</td>
                            <td><a href="?controller=Admin&action=viewEditService&ref='.$row[$i]["servico_id"].'"><button class="btn btn-info" id="sa-warning">Editar <i class="zmdi zmdi-edit"></i></button></a></td>
                             <td><a href="?controller=Admin&action=deletePla&ref='.$row[$i]["servico_id"].'"><button class="btn btn-info" id="sa-warning">Excluir <i class="zmdi zmdi-delete"></i></button></a></td>
                        </tr>';
                    }
                     $html .= '</tbody>
                               </table>';

            } else if($for == "viewUserCheck")
            {
                for($i = 0; $i < count($row); $i++) 
                {
                    $html .= '<div class="col-md-4 col-sm-6" style="margin-top: 15px;">
                                    <form action="?controller=Pay&action=check02" method="post">
                                        <div class="plan">
                                            <h1>' . $row[$i]["servico_nome"] . '</h1>
                                            <h2>R$' . $row[$i]["servico_preco"] . '</h2>';
                                            if(!empty($row[$i]["servico_list1"])){ $html .= '<p>- '.$row[$i]["servico_list1"].'</p>';}
                                            if(!empty($row[$i]["servico_list2"])){ $html .= '<p>- '.$row[$i]["servico_list2"].'</p>';}
                                            if(!empty($row[$i]["servico_list3"])){ $html .= '<p>- '.$row[$i]["servico_list3"].'</p>';}
                                            if(!empty($row[$i]["servico_list4"])){ $html .= '<p>- '.$row[$i]["servico_list4"].'</p>';}

                    $html .= '<input type="hidden" name="nomePla" value="' . $row[$i]["servico_nome"] . '">
                                <input type="hidden" name="precoPla" value="' . $row[$i]["servico_preco"] . '">
                                  <input type="hidden" name="list1" value="'.$row[$i]["servico_list1"].'">
                                    <input type="hidden" name="list2" value="'.$row[$i]["servico_list2"].'">
                                    <input type="hidden" name="list3" value="'.$row[$i]["servico_list3"].'">
                                    <input type="hidden" name="list4" value="'.$row[$i]["servico_list4"].'">
                                <button type="submit" class="btn btn-primary">Confirmar Consulta</button>
                            </div>
                        </form>
                    </div>';
                }
            } else 
            {
                echo "Argumento  não corresponde a nenhuma opção";
            }
            return $html;
        } else 
        {
          //  echo "Não foi possível retornar dados";
        }
    }

    #atualiza serviço na base de dados
    public function updateServices($ref,$nome,$preco,$list1,$list2,$list3,$list4)
    {
        $this->setServicoId($ref);
        $this->setServicoNome($nome);
        $this->setServicoPreco($preco);
        $this->setServicoList1($list1);
        $this->setServicoList2($list2);
        $this->setServicoList3($list3);
        $this->setServicoList4($list4);

        $this->update = sprintf
        (
            $this->update, 
            $this->getServicoNome(),
            $this->getServicoPreco(),
            $this->getServicoList1(),
            $this->getServicoList2(),
            $this->getServicoList3(),
            $this->getServicoList4(),
            $this->getServicoId());

        if($this->runQuery($this->update))
        {
        } else 
        {
          echo "Não foi possível persistir serviço, tente mais tarde.";
        }
    }

    #deleta um serviço cadastrado
    public function deleteService($ref)
    {
        $this->setServicoId($ref);
        $this->delete = sprintf($this->delete,$this->getServicoId());

        if($this->runQuery($this->delete))
        {
            //echo $this->delete;
        } else 
        {
            echo "Não foi possível deletar registro";
        }
    }
}
