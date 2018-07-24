<?php

require_once 'config/AutoLoadConfig.php';

class ArtigoDAO extends ArtigoModel
{



    private $insert = "INSERT INTO artigo (artigo_titulo,artigo_texto,artigo_ft_capa) VALUES ('%s','%s','%s');",
            $select = "SELECT * FROM artigo",
            $update = "UPDATE artigo set artigo_titulo = '%s', artigo_texto = '%s', artigo_ft_capa = '%s' WHERE artigo_id = '%s'",
            $delete = "DELETE FROM artigo WHERE artigo_id = '%s'";


    public function newArticle($titulo,$texto,$foto)
    {
        $this->setArtigoTitulo($titulo);
        $this->setArtigoTexto($texto);
        $this->setArtigoFtCapa($foto);

        $this->insert = sprintf
        (
            $this->insert,
            $this->getArtigoTitulo(),
            $this->getArtigoTexto(),
            $this->getArtigoFtCapa()
        );

        if($this->runQuery($this->insert))
        {
        } else 
        {
            echo "Não foi possível persistir dados";
        }
    }

    public function updateArticle($titulo,$texto,$foto,$ref)
    {
        $this->setArtigoTitulo($titulo);
        $this->setArtigoTexto($texto);
        $this->setArtigoFtCapa($foto);
        $this->setArtigoId($ref);

        if(isset($foto) && !empty($foto))
        {
            $this->update = sprintf
            (
                $this->update,
                $this->getArtigoTitulo(),
                $this->getArtigoTexto(),
                $this->getArtigoFtCapa(),
                $this->getArtigoId()
            );

        } else 
        {
            $this->update = "UPDATE artigo set artigo_titulo = '%s', artigo_texto = '%s' WHERE artigo_id = '%s'";
            $this->update = sprintf($this->update,$this->getArtigoTitulo(),$this->getArtigoTexto(),$this->getArtigoId());
        }

        if($this->runQuery($this->update))
        {
        } else 
        {
            echo "Não foi possível realizar atualização, tente mais tarde.";
        }
    }

    #retorna o código referente as prévias dos artigos.
    public function selectArticleAll($for)
    {
        $objTxt = new TxtFunctions();
        $objTime = new DateTimeFunctions();

        if($row = $this->runSelect($this->select))
        {
            $html = "";

            if($for == "viewUser")
            {
                for($i = 0; $i < count($row); $i++)
                {

                    $html .= '<article>
                        <h3 class="sumir">'.$row[$i]['artigo_titulo'].'</h3>
                        <img src="'.$row[$i]['artigo_ft_capa'].'">
                        <div>
                            <p>'.$row[$i]['artigo_titulo'].'</p>
                            <p>
                                '.$objTxt->limitarTexto($row[$i]['artigo_texto'],100).'
                            </p>
                            <a href="?controller=Blog&action=showPostId&ref='.$row[$i]['artigo_id'].'"><button type="button">Ler mais</button></a>
                        </div>
                    </article>';
                }

            } else if($for == "viewDash")
            {
                $html ='  <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Título</th>
                            <th>Texto</th>
                            <th>Data da postagem</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>';

                for($i = 0; $i < count($row); $i++)
                {
                    $html .= '      <td>'.($i+1).'</td>
                            <td>'.$row[$i]['artigo_titulo'].'</td>
                            <td>'.$objTxt->limitarTexto($row[$i]['artigo_texto'],50).'</td>
                            <td>'.$objTime->dateTimeBr($row[$i]['artigo_data_insert']).'</td>
                            <td> <a href="?controller=Blog&action=viewEditArtigo&ref='.$row[$i]["artigo_id"].'"> <button class="btn btn-info" id="sa-warning">Editar <i class="zmdi zmdi-edit"></i></button> </a></td>
                              <td>
                                    <a href="?controller=Blog&action=deleteArtigo&ref='.$row[$i]["artigo_id"].'"><button class="btn btn-info" id="sa-warning">Excluir <i class="zmdi zmdi-delete"></i></button></a>
                            </td>
                        </tr>';
                }

                $html .=  '</tbody>
                    </table>';
            }

            return $html;

        } else 
        {
                echo "Não foi possível retornar os dados.";
        }
    }

    public function selectArticleId($id)
    {
        $sql = "SELECT * FROM artigo WHERE artigo_id = {$id}";

        if($row = $this->runSelect($sql))
        {
            return $row;
        } else
        {
            echo "Não foi possível retornar informações";
        }
    }

    public function articleDelet($ref)
    {
        $this->setArtigoId($ref);
        $this->delete = sprintf($this->delete,$this->getArtigoId());

        if($this->runQuery($this->delete))
        {
        } else 
        {
            echo "Não foi possível deletar, tente mais tarde";
        }
    }
}



