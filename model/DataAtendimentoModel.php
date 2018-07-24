<?php


include_once 'dao/ConnectionFactory/ConnectionFactory.php';

class DataAtendimentoModel extends ConnectionFactory{


     private    $da_id,
                $da_adm_ref,
                $da_paci_ref,
                $da_date,
                $da_hour,
                $da_obs,
                $da_envio_mutuo,
                $data_reg;

    /**
     * @return mixed
     */
    public function getDataReg()
    {
        return $this->data_reg;
    }

    /**
     * @param mixed $data_reg
     */
    public function setDataReg($data_reg)
    {
        $this->data_reg = $data_reg;
    }

    /**
     * @return mixed
     */
    public function getDaEnvioMutuo()
    {
        return $this->da_envio_mutuo;
    }

    /**
     * @param mixed $da_envio_mutuo
     */
    public function setDaEnvioMutuo($da_envio_mutuo)
    {
        $this->da_envio_mutuo = $da_envio_mutuo;
    }

    /**
     * @return mixed
     */
    public function getDaObs()
    {
        return $this->da_obs;
    }

    /**
     * @param mixed $da_obs
     */
    public function setDaObs($da_obs)
    {
        $this->da_obs = $da_obs;
    }

    /**
     * @return mixed
     */
    public function getDaHour()
    {
        return $this->da_hour;
    }

    /**
     * @param mixed $da_hour
     */
    public function setDaHour($da_hour)
    {
        $this->da_hour = $da_hour;
    }

    /**
     * @return mixed
     */
    public function getDaDate()
    {
        return $this->da_date;
    }

    /**
     * @param mixed $da_date
     */
    public function setDaDate($da_date)
    {
        $this->da_date = $da_date;
    }

    /**
     * @return mixed
     */
    public function getDaPaciRef()
    {
        return $this->da_paci_ref;
    }

    /**
     * @param mixed $da_paci_ref
     */
    public function setDaPaciRef($da_paci_ref)
    {
        $this->da_paci_ref = $da_paci_ref;
    }

    /**
     * @return mixed
     */
    public function getDaAdmRef()
    {
        return $this->da_adm_ref;
    }

    /**
     * @param mixed $da_adm_ref
     */
    public function setDaAdmRef($da_adm_ref)
    {
        $this->da_adm_ref = $da_adm_ref;
    }

    /**
     * @return mixed
     */
    public function getDaId()
    {
        return $this->da_id;
    }

    /**
     * @param mixed $da_id
     */
    public function setDaId($da_id)
    {
        $this->da_id = $da_id;
    }







}
