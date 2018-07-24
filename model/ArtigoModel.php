<?php


include_once 'dao/ConnectionFactory/ConnectionFactory.php';

class ArtigoModel extends ConnectionFactory {

    private $artigo_id,
            $artigo_titulo,
            $artigo_texto,
            $artigo_data_insert,
            $artigo_ft_capa;

    /**
     * @return mixed
     */
    public function getArtigoFtCapa()
    {
        return $this->artigo_ft_capa;
    }

    /**
     * @param mixed $artigo_ft_capa
     */
    public function setArtigoFtCapa($artigo_ft_capa)
    {
        $this->artigo_ft_capa = $artigo_ft_capa;
    }

    /**
     * @return mixed
     */
    public function getArtigoId()
    {
        return $this->artigo_id;
    }

    /**
     * @param mixed $artigo_id
     */
    public function setArtigoId($artigo_id)
    {
        $this->artigo_id = $artigo_id;
    }

    /**
     * @return mixed
     */
    public function getArtigoTitulo()
    {
        return $this->artigo_titulo;
    }

    /**
     * @param mixed $artigo_titulo
     */
    public function setArtigoTitulo($artigo_titulo)
    {
        $this->artigo_titulo = $artigo_titulo;
    }

    /**
     * @return mixed
     */
    public function getArtigoTexto()
    {
        return $this->artigo_texto;
    }

    /**
     * @param mixed $artigo_texto
     */
    public function setArtigoTexto($artigo_texto)
    {
        $this->artigo_texto = $artigo_texto;
    }

    /**
     * @return mixed
     */
    public function getArtigoDataInsert()
    {
        return $this->artigo_data_insert;
    }

    /**
     * @param mixed $artigo_data_insert
     */
    public function setArtigoDataInsert($artigo_data_insert)
    {
        $this->artigo_data_insert = $artigo_data_insert;
    }





}
