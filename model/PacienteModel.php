<?php


include_once 'dao/ConnectionFactory/ConnectionFactory.php';

class PacienteModel extends ConnectionFactory{

    private $paciente_id,
        $paciente_nome,
        $paciente_idade,
        $paciente_tel,
        $paciente_email,
        $paciente_sexo,
        $paciente_pg_status,
        $paciente_data_insert,
        $paciente_data_nasc,
        $paciente_escolaridade,
        $paciente_estado_civil,
        $paciente_profi,
        $paciente_naturalidade,
        $paciente_endereco,
        $paciente_bairro,
        $paciente_cidade,
        $paciente_estado,
        $paciente_pais,
        $paciente_rg,
        $paciente_cpf,
        $paciente_cida,
        $paciente_ddd,
        $paciente_obs,
        $paciente_status;

    /**
     * @return mixed
     */
    public function getPacienteStatus()
    {
        return $this->paciente_status;
    }

    /**
     * @param mixed $paciente_status
     */
    public function setPacienteStatus($paciente_status)
    {
        $this->paciente_status = $paciente_status;
    }

    /**
     * @return mixed
     */
    public function getPacienteObs()
    {
        return $this->paciente_obs;
    }

    /**
     * @param mixed $paciente_obs
     */
    public function setPacienteObs($paciente_obs)
    {
        $this->paciente_obs = $paciente_obs;
    }

    /**
     * @return mixed
     */
    public function getPacienteCidade()
    {
        return $this->paciente_cidade;
    }

    /**
     * @param mixed $paciente_cidade
     */
    public function setPacienteCidade($paciente_cidade)
    {
        $this->paciente_cidade = $paciente_cidade;
    }

    /**
     * @return mixed
     */
    public function getPacienteDdd()
    {
        return $this->paciente_ddd;
    }

    /**
     * @param mixed $paciente_ddd
     */
    public function setPacienteDdd($paciente_ddd)
    {
        $this->paciente_ddd = $paciente_ddd;
    }

    /**
     * @return mixed
     */
    public function getPacienteDataNasc()
    {
        return $this->paciente_data_nasc;
    }

    /**
     * @param mixed $paciente_data_nasc
     */
    public function setPacienteDataNasc($paciente_data_nasc)
    {
        $this->paciente_data_nasc = $paciente_data_nasc;
    }

    /**
     * @return mixed
     */
    public function getPacienteEscolaridade()
    {
        return $this->paciente_escolaridade;
    }

    /**
     * @param mixed $paciente_escolaridade
     */
    public function setPacienteEscolaridade($paciente_escolaridade)
    {
        $this->paciente_escolaridade = $paciente_escolaridade;
    }

    /**
     * @return mixed
     */
    public function getPacienteEstadoCivil()
    {
        return $this->paciente_estado_civil;
    }

    /**
     * @param mixed $paciente_estado_civil
     */
    public function setPacienteEstadoCivil($paciente_estado_civil)
    {
        $this->paciente_estado_civil = $paciente_estado_civil;
    }

    /**
     * @return mixed
     */
    public function getPacienteProfi()
    {
        return $this->paciente_profi;
    }

    /**
     * @param mixed $paciente_profi
     */
    public function setPacienteProfi($paciente_profi)
    {
        $this->paciente_profi = $paciente_profi;
    }

    /**
     * @return mixed
     */
    public function getPacienteNaturalidade()
    {
        return $this->paciente_naturalidade;
    }

    /**
     * @param mixed $paciente_naturalidade
     */
    public function setPacienteNaturalidade($paciente_naturalidade)
    {
        $this->paciente_naturalidade = $paciente_naturalidade;
    }

    /**
     * @return mixed
     */
    public function getPacienteEndereco()
    {
        return $this->paciente_endereco;
    }

    /**
     * @param mixed $paciente_endereco
     */
    public function setPacienteEndereco($paciente_endereco)
    {
        $this->paciente_endereco = $paciente_endereco;
    }

    /**
     * @return mixed
     */
    public function getPacienteBairro()
    {
        return $this->paciente_bairro;
    }

    /**
     * @param mixed $paciente_bairro
     */
    public function setPacienteBairro($paciente_bairro)
    {
        $this->paciente_bairro = $paciente_bairro;
    }

    /**
     * @return mixed
     */
    public function getPacienteEstado()
    {
        return $this->paciente_estado;
    }

    /**
     * @param mixed $paciente_estado
     */
    public function setPacienteEstado($paciente_estado)
    {
        $this->paciente_estado = $paciente_estado;
    }

    /**
     * @return mixed
     */
    public function getPacientePais()
    {
        return $this->paciente_pais;
    }

    /**
     * @param mixed $paciente_pais
     */
    public function setPacientePais($paciente_pais)
    {
        $this->paciente_pais = $paciente_pais;
    }

    /**
     * @return mixed
     */
    public function getPacienteRg()
    {
        return $this->paciente_rg;
    }

    /**
     * @param mixed $paciente_rg
     */
    public function setPacienteRg($paciente_rg)
    {
        $this->paciente_rg = $paciente_rg;
    }

    /**
     * @return mixed
     */
    public function getPacienteCpf()
    {
        return $this->paciente_cpf;
    }

    /**
     * @param mixed $paciente_cpf
     */
    public function setPacienteCpf($paciente_cpf)
    {
        $this->paciente_cpf = $paciente_cpf;
    }

    /**
     * @return mixed
     */
    public function getPacienteCida()
    {
        return $this->paciente_cida;
    }

    /**
     * @param mixed $paciente_cida
     */
    public function setPacienteCida($paciente_cida)
    {
        $this->paciente_cida = $paciente_cida;
    }



    /**
     * @return mixed
     */
    public function getPacienteId()
    {
        return $this->paciente_id;
    }

    /**
     * @param mixed $paciente_id
     */
    public function setPacienteId($paciente_id)
    {
        $this->paciente_id = $paciente_id;
    }

    /**
     * @return mixed
     */
    public function getPacienteNome()
    {
        return $this->paciente_nome;
    }

    /**
     * @param mixed $paciente_nome
     */
    public function setPacienteNome($paciente_nome)
    {
        $this->paciente_nome = $paciente_nome;
    }

    /**
     * @return mixed
     */
    public function getPacienteIdade()
    {
        return $this->paciente_idade;
    }

    /**
     * @param mixed $paciente_idade
     */
    public function setPacienteIdade($paciente_idade)
    {
        $this->paciente_idade = $paciente_idade;
    }

    /**
     * @return mixed
     */
    public function getPacienteTel()
    {
        return $this->paciente_tel;
    }

    /**
     * @param mixed $paciente_tel
     */
    public function setPacienteTel($paciente_tel)
    {
        $this->paciente_tel = $paciente_tel;
    }

    /**
     * @return mixed
     */
    public function getPacienteEmail()
    {
        return $this->paciente_email;
    }

    /**
     * @param mixed $paciente_email
     */
    public function setPacienteEmail($paciente_email)
    {
        $this->paciente_email = $paciente_email;
    }

    /**
     * @return mixed
     */
    public function getPacienteSexo()
    {
        return $this->paciente_sexo;
    }

    /**
     * @param mixed $paciente_sexo
     */
    public function setPacienteSexo($paciente_sexo)
    {
        $this->paciente_sexo = $paciente_sexo;
    }

    /**
     * @return mixed
     */
    public function getPacientePgStatus()
    {
        return $this->paciente_pg_status;
    }

    /**
     * @param mixed $paciente_pg_status
     */
    public function setPacientePgStatus($paciente_pg_status)
    {
        $this->paciente_pg_status = $paciente_pg_status;
    }

    /**
     * @return mixed
     */
    public function getPacienteDataInsert()
    {
        return $this->paciente_data_insert;
    }

    /**
     * @param mixed $paciente_data_insert
     */
    public function setPacienteDataInsert($paciente_data_insert)
    {
        $this->paciente_data_insert = $paciente_data_insert;
    }




}
