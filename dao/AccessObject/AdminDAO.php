<?php

require_once 'config/AutoLoadConfig.php';

class AdminDAO extends AdminModel
{

    private $update = "UPDATE admin SET
                        admin_nome = '%s',
                        admin_ft_profile = '%s',
                        admin_sobrenome = '%s',
                        admin_tel = '%s',
                        admin_sexo = '%s',
                        admin_estato_civil = '%s',
                        admin_endereco = '%s',
                        admin_complemento = '%s',
                        admin_bairro = '%s',
                        admin_cidade = '%s',
                        admin_estado = '%s',
                        admin_pais = '%s' 
                        WHERE admin_email = '%s';";

    public function returnInfUser($email)
    {
        $this->setAdminEmail($email);
        $sql = "SELECT * FROM admin WHERE admin_email = '{$this->getAdminEmail()}'";

        if($row = $this->runSelect($sql))
        {
            #verifica também se o usuário possui foto cadastrada, caso não possuir será adicionado uma foto default.
            if($row[0]['admin_ft_profile'] == "")
            {
                $row[0]['admin_ft_profile'] = "flor.png";
            }

            #verifica se o cliente possui nome cadastrado, se não possuir será utilizado o email fornecido como nome.(caso não estiver vazio não faz nada)
            if($row[0]['admin_nome'] == "")
            {
                $row[0]['admin_nome'] = $row[0]['admin_email'];
            }

            return $row;

        } else
        {
            return 0;
        }

    }

    public function adminUpdate($AdmRef,$nome,$sobrenome,$tel,$sexo,$estadoCivil,$endereco,$complemento,$bairro,$cidade,$estado,$pais,$foto){

            $this->setAdminNome($nome);
            $this->setAdminSobrenome($sobrenome);
            $this->setAdminTel($tel);
            $this->setAdminSexo($sexo);
            $this->setAdminEstatoCivil($estadoCivil);
            $this->setAdminEndereco($endereco);
            $this->setAdminComplemento($complemento);
            $this->setAdminBairro($bairro);
            $this->setAdminCidade($cidade);
            $this->setAdminEstado($estado);
            $this->setAdminPais($pais);
            $this->setAdminFtProfile($foto);

            $this->update = sprintf
            (
                $this->update,$this->getAdminNome(),
                $this->getAdminFtProfile(),
                $this->getAdminSobrenome(),
                $this->getAdminTel(),
                $this->getAdminSexo(),
                $this->getAdminEstatoCivil(),
                $this->getAdminEndereco(),
                $this->getAdminComplemento(),
                $this->getAdminBairro(),
                $this->getAdminCidade(),
                $this->getAdminEstado(),
                $this->getAdminPais(),
                $AdmRef[0]['admin_email']
            );

        if($this->runQuery($this->update))
        {
            @header("location: ?controller=Admin&action=viewAdminPage");
        } else
        {
           // echo "Não".$this->update;
        }
    }

    public function loginUpdate($newPass,$user)
    {
            $sql = "UPDATE admin SET admin_senha =  '".md5($newPass)."' WHERE admin_email = '".$user."'";

            if($this->runQuery($sql))
            {
                echo "Sua senha foi alterada com sucesso! =)";
            } else 
            {   
		        echo "Não foi possível realizar alteração da sua senha, tente mais tarde.";
            }
    }

	#update de recuperação (gambiarra de duplicar o código para não utilizar o echo, refatorar essa parte)
       public function loginUpdateRec($newPass,$user)
       {
            $sql = "UPDATE admin SET admin_senha =  '".md5($newPass)."' WHERE admin_email = '".$user."'";

            if($this->runQuery($sql))
            {
                return true;
            } else 
            {      
		        return false;
            }
    }

    #retorna dados pessois que devem ser exibidos nas páginas do sistema
    public function returnPersonInfo()
    {
        $sql = "SELECT admin_nome,admin_ft_profile,admin_crp FROM admin";

        if($row = $this->runSelect($sql))
        {
            return $row;
        } else 
        {
            echo "Não foi possível retornar dados".$sql;
        }
    }
}// Encerra classe 
