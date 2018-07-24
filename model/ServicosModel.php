<?php


include_once 'dao/ConnectionFactory/ConnectionFactory.php';

class ServicosModel extends ConnectionFactory {

    private $servico_id,
            $servico_nome,
            $servico_preco,
            $servico_list1,
            $servico_list2,
            $servico_list3,
            $servico_list4;
    /**
     * @return mixed
     */
    public function getServicoId()
    {
        return $this->servico_id;
    }

    /**
     * @param mixed $servico_id
     */
    public function setServicoId($servico_id)
    {
        $this->servico_id = $servico_id;
    }

    /**
     * @return mixed
     */
    public function getServicoNome()
    {
        return $this->servico_nome;
    }

    /**
     * @param mixed $servico_nome
     */
    public function setServicoNome($servico_nome)
    {
        $this->servico_nome = $servico_nome;
    }

    /**
     * @return mixed
     */
    public function getServicoPreco()
    {
        return $this->servico_preco;
    }

    /**
     * @param mixed $servico_preco
     */
    public function setServicoPreco($servico_preco)
    {
        $this->servico_preco = $servico_preco;
    }

    /**
     * @return mixed
     */
    public function getServicoList1()
    {
        return $this->servico_list1;
    }

    /**
     * @param mixed $servico_list1
     */
    public function setServicoList1($servico_list1)
    {
        $this->servico_list1 = $servico_list1;
    }

    /**
     * @return mixed
     */
    public function getServicoList2()
    {
        return $this->servico_list2;
    }

    /**
     * @param mixed $servico_list2
     */
    public function setServicoList2($servico_list2)
    {
        $this->servico_list2 = $servico_list2;
    }

    /**
     * @return mixed
     */
    public function getServicoList3()
    {
        return $this->servico_list3;
    }

    /**
     * @param mixed $servico_list3
     */
    public function setServicoList3($servico_list3)
    {
        $this->servico_list3 = $servico_list3;
    }

    /**
     * @return mixed
     */
    public function getServicoList4()
    {
        return $this->servico_list4;
    }

    /**
     * @param mixed $servico_list4
     */
    public function setServicoList4($servico_list4)
    {
        $this->servico_list4 = $servico_list4;
    }




}
