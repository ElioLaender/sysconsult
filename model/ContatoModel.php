<?php


include_once 'dao/ConnectionFactory/ConnectionFactory.php';

class ContatoModel extends ConnectionFactory{

    private $contato_id,
            $contato_nome,
            $contato_email,
            $contato_assunto,
            $contato_mensagem;

    /**
     * @return mixed
     */
    public function getContatoId()
    {
        return $this->contato_id;
    }

    /**
     * @param mixed $contato_id
     */
    public function setContatoId($contato_id)
    {
        $this->contato_id = $contato_id;
    }

    /**
     * @return mixed
     */
    public function getContatoNome()
    {
        return $this->contato_nome;
    }

    /**
     * @param mixed $contato_nome
     */
    public function setContatoNome($contato_nome)
    {
        $this->contato_nome = $contato_nome;
    }

    /**
     * @return mixed
     */
    public function getContatoEmail()
    {
        return $this->contato_email;
    }

    /**
     * @param mixed $contato_email
     */
    public function setContatoEmail($contato_email)
    {
        $this->contato_email = $contato_email;
    }

    /**
     * @return mixed
     */
    public function getContatoAssunto()
    {
        return $this->contato_assunto;
    }

    /**
     * @param mixed $contato_assunto
     */
    public function setContatoAssunto($contato_assunto)
    {
        $this->contato_assunto = $contato_assunto;
    }

    /**
     * @return mixed
     */
    public function getContatoMensagem()
    {
        return $this->contato_mensagem;
    }

    /**
     * @param mixed $contato_mensagem
     */
    public function setContatoMensagem($contato_mensagem)
    {
        $this->contato_mensagem = $contato_mensagem;
    }




}
