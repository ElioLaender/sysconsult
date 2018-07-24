<?php


include_once 'dao/ConnectionFactory/ConnectionFactory.php';

class AdminModel extends ConnectionFactory {

    private $Admin_id,
            $Admin_nome,
            $Admin_senha,
            $Admin_email,
            $admin_sobrenome,
            $admin_tel,
            $admin_data_nasc,
            $admin_sexo,
            $admin_estato_civil,
            $admin_complemento,
            $admin_bairro,
            $admin_cidade,
            $admin_estado,
            $admin_pais,
            $admin_endereco,
            $admin_ft_profile;

    /**
     * @return mixed
     */
    public function getAdminEndereco()
    {
        return $this->admin_endereco;
    }

    /**
     * @param mixed $admin_endereco
     */
    public function setAdminEndereco($admin_endereco)
    {
        $this->admin_endereco = $admin_endereco;
    }

    /**
     * @return mixed
     */
    public function getAdminSobrenome()
    {
        return $this->admin_sobrenome;
    }

    /**
     * @param mixed $admin_sobrenome
     */
    public function setAdminSobrenome($admin_sobrenome)
    {
        $this->admin_sobrenome = $admin_sobrenome;
    }

    /**
     * @return mixed
     */
    public function getAdminTel()
    {
        return $this->admin_tel;
    }

    /**
     * @param mixed $admin_tel
     */
    public function setAdminTel($admin_tel)
    {
        $this->admin_tel = $admin_tel;
    }

    /**
     * @return mixed
     */
    public function getAdminDataNasc()
    {
        return $this->admin_data_nasc;
    }

    /**
     * @param mixed $admin_data_nasc
     */
    public function setAdminDataNasc($admin_data_nasc)
    {
        $this->admin_data_nasc = $admin_data_nasc;
    }

    /**
     * @return mixed
     */
    public function getAdminSexo()
    {
        return $this->admin_sexo;
    }

    /**
     * @param mixed $admin_sexo
     */
    public function setAdminSexo($admin_sexo)
    {
        $this->admin_sexo = $admin_sexo;
    }

    /**
     * @return mixed
     */
    public function getAdminEstatoCivil()
    {
        return $this->admin_estato_civil;
    }

    /**
     * @param mixed $admin_estato_civil
     */
    public function setAdminEstatoCivil($admin_estato_civil)
    {
        $this->admin_estato_civil = $admin_estato_civil;
    }

    /**
     * @return mixed
     */
    public function getAdminComplemento()
    {
        return $this->admin_complemento;
    }

    /**
     * @param mixed $admin_complemento
     */
    public function setAdminComplemento($admin_complemento)
    {
        $this->admin_complemento = $admin_complemento;
    }

    /**
     * @return mixed
     */
    public function getAdminCidade()
    {
        return $this->admin_cidade;
    }

    /**
     * @param mixed $admin_cidade
     */
    public function setAdminCidade($admin_cidade)
    {
        $this->admin_cidade = $admin_cidade;
    }

    /**
     * @return mixed
     */
    public function getAdminBairro()
    {
        return $this->admin_bairro;
    }

    /**
     * @param mixed $admin_bairro
     */
    public function setAdminBairro($admin_bairro)
    {
        $this->admin_bairro = $admin_bairro;
    }

    /**
     * @return mixed
     */
    public function getAdminEstado()
    {
        return $this->admin_estado;
    }

    /**
     * @param mixed $admin_estado
     */
    public function setAdminEstado($admin_estado)
    {
        $this->admin_estado = $admin_estado;
    }

    /**
     * @return mixed
     */
    public function getAdminPais()
    {
        return $this->admin_pais;
    }

    /**
     * @param mixed $admin_pais
     */
    public function setAdminPais($admin_pais)
    {
        $this->admin_pais = $admin_pais;
    }

    /**
     * @return mixed
     */
    public function getAdminFtProfile()
    {
        return $this->admin_ft_profile;
    }

    /**
     * @param mixed $admin_ft_profile
     */
    public function setAdminFtProfile($admin_ft_profile)
    {
        $this->admin_ft_profile = $admin_ft_profile;
    }


    /**
     * @return mixed
     */
    public function getAdminId()
    {
        return $this->Admin_id;
    }

    /**
     * @param mixed $Admin_id
     */
    public function setAdminId($Admin_id)
    {
        $this->Admin_id = $Admin_id;
    }

    /**
     * @return mixed
     */
    public function getAdminNome()
    {
        return $this->Admin_nome;
    }

    /**
     * @param mixed $Admin_nome
     */
    public function setAdminNome($Admin_nome)
    {
        $this->Admin_nome = $Admin_nome;
    }

    /**
     * @return mixed
     */
    public function getAdminSenha()
    {
        return $this->Admin_senha;
    }

    /**
     * @param mixed $Admin_senha
     */
    public function setAdminSenha($Admin_senha)
    {
        $this->Admin_senha = $Admin_senha;
    }

    /**
     * @return mixed
     */
    public function getAdminEmail()
    {
        return $this->Admin_email;
    }

    /**
     * @param mixed $Admin_email
     */
    public function setAdminEmail($Admin_email)
    {
        $this->Admin_email = $Admin_email;
    }




}
