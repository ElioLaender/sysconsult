<?php


include_once 'dao/ConnectionFactory/ConnectionFactory.php';

class AlertasModel extends ConnectionFactory {

    private $alertas_id,
            $alertas_titulo,
            $alertas_descricao,
            $alertas_status,
            $alertas_data_reg,
            $alertas_ref,
            $alertas_url_destino;

    /**
     * @return mixed
     */
    public function getAlertasUrlDestino()
    {
        return $this->alertas_url_destino;
    }

    /**
     * @param mixed $alertas_url_destino
     */
    public function setAlertasUrlDestino($alertas_url_destino)
    {
        $this->alertas_url_destino = $alertas_url_destino;
    }

    /**
     * @return mixed
     */
    public function getAlertasRef()
    {
        return $this->alertas_ref;
    }

    /**
     * @param mixed $alertas_ref
     */
    public function setAlertasRef($alertas_ref)
    {
        $this->alertas_ref = $alertas_ref;
    }

    /**
     * @return mixed
     */
    public function getAlertasId()
    {
        return $this->alertas_id;
    }

    /**
     * @param mixed $alertas_id
     */
    public function setAlertasId($alertas_id)
    {
        $this->alertas_id = $alertas_id;
    }

    /**
     * @return mixed
     */
    public function getAlertasTitulo()
    {
        return $this->alertas_titulo;
    }

    /**
     * @param mixed $alertas_titulo
     */
    public function setAlertasTitulo($alertas_titulo)
    {
        $this->alertas_titulo = $alertas_titulo;
    }

    /**
     * @return mixed
     */
    public function getAlertasDescricao()
    {
        return $this->alertas_descricao;
    }

    /**
     * @param mixed $alertas_descricao
     */
    public function setAlertasDescricao($alertas_descricao)
    {
        $this->alertas_descricao = $alertas_descricao;
    }

    /**
     * @return mixed
     */
    public function getAlertasStatus()
    {
        return $this->alertas_status;
    }

    /**
     * @param mixed $alertas_status
     */
    public function setAlertasStatus($alertas_status)
    {
        $this->alertas_status = $alertas_status;
    }

    /**
     * @return mixed
     */
    public function getAlertasDataReg()
    {
        return $this->alertas_data_reg;
    }

    /**
     * @param mixed $alertas_data_reg
     */
    public function setAlertasDataReg($alertas_data_reg)
    {
        $this->alertas_data_reg = $alertas_data_reg;
    }




}
