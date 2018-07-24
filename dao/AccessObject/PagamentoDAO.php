<?php

include_once 'model/PagamentoModel.php';

class PagamentoDAO extends PagamentoModel {


    private $insert = "INSERT INTO pagamentos ( pag_date,
                                                pag_code_transation,
                                                pag_reference,
                                                pag_transaction_type,
                                                pag_status,
                                                pag_cancelation_source,
                                                pag_ultimo_evento,
                                                pag_tipo_pagamento,
                                                pag_meio_cod,
                                                pag_valor_bruto,
                                                pag_valor_desconto,
                                                pag_valor_taxas,
                                                pag_data_credito,
                                                pag_valor_extra,
                                                pag_parcelas_cartao,
                                                pag_qtd_itens,
                                                pag_item_identificacao,
                                                pag_item_descricao,
                                                pag_valor_unitario,
                                                pag_qtd_item_unitario,
                                                pag_email_comprador,
                                                pag_nome_comprador,
                                                pag_ddd_tel,
                                                pag_tel_comprador,
                                                pag_tipo_frete,
                                                pag_custo_frete,
                                                pag_pais_frete,
                                                pag_estado_frete,
                                                pag_cidade_frete,
                                                pag_cep_frete,
                                                pag_bairro_frete,
                                                pag_rua_frete,
                                                pag_numero_frete,
                                                pag_complemento_frete)
                                                VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",
            $select,
            $update = "UPDATE pagamentos SET    pag_date = '%s',
						                        pag_code_transation = '%s',
                                                pag_reference = '%s',
                                                pag_transaction_type = '%s',
                                                pag_status = '%s',
                                                pag_cancelation_source = '%s',
                                                pag_ultimo_evento = '%s',
                                                pag_tipo_pagamento = '%s',
                                                pag_meio_cod = '%s',
                                                pag_valor_bruto = '%s',
                                                pag_valor_desconto = '%s',
                                                pag_valor_taxas = '%s',
                                                pag_data_credito = '%s',
                                                pag_valor_extra = '%s',
                                                pag_parcelas_cartao = '%s',
                                                pag_qtd_itens = '%s',
                                                pag_item_identificacao = '%s',
                                                pag_item_descricao = '%s',
                                                pag_valor_unitario = '%s',
                                                pag_qtd_item_unitario = '%s',
                                                pag_email_comprador = '%s',
                                                pag_nome_comprador = '%s',
                                                pag_ddd_tel = '%s',
                                                pag_tel_comprador = '%s',
                                                pag_tipo_frete = '%s',
                                                pag_custo_frete = '%s',
                                                pag_pais_frete = '%s',
                                                pag_estado_frete = '%s',
                                                pag_cidade_frete = '%s',
                                                pag_cep_frete = '%s',
                                                pag_bairro_frete = '%s',
                                                pag_rua_frete = '%s',
                                                pag_numero_frete = '%s',
                                                pag_complemento_frete = '%s' 
                                                WHERE pag_code_transation = '%s'",
            $delete;

    #persiste o pagamento na base de dados
    public function pagPersist
    (
        $pag_date,
        $pag_code_transation,
        $pag_reference,
        $pag_transaction_type,
        $pag_status,
        $pag_cancelation_source,
        $pag_ultimo_evento,
        $pag_tipo_pagamento,
        $pag_meio_cod,
        $pag_valor_bruto,
        $pag_valor_desconto,
        $pag_valor_taxas,
        $pag_data_credito,
        $pag_valor_extra,
        $pag_parcelas_cartao,
        $pag_qtd_itens,
        $pag_item_identificacao,
        $pag_item_descricao,
        $pag_valor_unitario,
        $pag_qtd_item_unitario,
        $pag_email_comprador,
        $pag_nome_comprador,
        $pag_ddd_tel,
        $pag_tel_comprador,
        $pag_tipo_frete,
        $pag_custo_frete,
        $pag_pais_frete,
        $pag_estado_frete,
        $pag_cidade_frete,
        $pag_cep_frete,
        $pag_bairro_frete,
        $pag_rua_frete,
        $pag_numero_frete,
        $pag_complemento_frete)
        {
        $this->setPagDate($pag_date);
        $this->setPagCodeTransation($pag_code_transation);
        $this->setPagReference($pag_reference);
        $this->setPagTransactionType($pag_transaction_type);
        $this->setPagStatus($pag_status);
        $this->setPagCancelationSource($pag_cancelation_source);
        $this->setPagUltimoEvento($pag_ultimo_evento);
        $this->setPagTipoPagamento($pag_tipo_pagamento);
        $this->setPagMeioCod($pag_meio_cod);
        $this->setPagValorBruto($pag_valor_bruto);
        $this->setPagValorDesconto($pag_valor_desconto);
        $this->setPagValorTaxas($pag_valor_taxas);
        $this->setPagDataCredito($pag_data_credito);
        $this->setPagValorExtra($pag_valor_extra);
        $this->setPagParcelasCartao($pag_parcelas_cartao);
        $this->setPagQtdItens($pag_qtd_itens);
        $this->setPagItemIdentificacao($pag_item_identificacao);
        $this->setPagItemDescricao($pag_item_descricao);
        $this->setPagValorUnitario($pag_valor_unitario);
        $this->setPagQtdItemUnitario($pag_qtd_item_unitario);
        $this->setPagEmailComprador($pag_email_comprador);
        $this->setPagNomeComprador($pag_nome_comprador);
        $this->setPagDddTel($pag_ddd_tel);
        $this->setPagTelComprador($pag_tel_comprador);
        $this->setPagTipoFrete($pag_tipo_frete);
        $this->setPagCustoFrete($pag_custo_frete);
        $this->setPagPaisFrete($pag_pais_frete);
        $this->setPagEstadoFrete($pag_estado_frete);
        $this->setPagCidadeFrete($pag_cidade_frete);
        $this->setPagCepFrete($pag_cep_frete);
        $this->setPagBairroFrete($pag_bairro_frete);
        $this->setPagRuaFrete($pag_rua_frete);
        $this->setPagComplementoFrete($pag_complemento_frete);
        $this->setPagNumeroFrete($pag_numero_frete);

        $sql = sprintf
        (
            $this->insert,$this->getPagDate(),
            $this->getPagCodeTransation(),
            $this->getPagReference(),
            $this->getPagTransactionType(),
            $this->getPagStatus(),
            $this->getPagCancelationSource(),
            $this->getPagUltimoEvento(),
            $this->getPagTipoPagamento(),
            $this->getPagMeioCod(),
            $this->getPagValorBruto(),
            $this->getPagValorDesconto(),
            $this->getPagValorTaxas(),
            $this->getPagDataCredito(),
            $this->getPagValorExtra(),
            $this->getPagParcelasCartao(),
            $this->getPagQtdItens(),
            $this->getPagItemIdentificacao(),
            $this->getPagItemDescricao(),
            $this->getPagValorUnitario(),
            $this->getPagQtdItemUnitario(),
            $this->getPagEmailComprador(),
            $this->getPagNomeComprador(),
            $this->getPagDddTel(),
            $this->getPagTelComprador(),
            $this->getPagTipoFrete(),
            $this->getPagCustoFrete(),
            $this->getPagPaisFrete(),
            $this->getPagEstadoFrete(),
            $this->getPagCidadeFrete(),
            $this->getPagCepFrete(),
            $this->getPagBairroFrete(),
            $this->getPagRuaFrete(),
            $this->getPagNumeroFrete(),
            $this->getPagComplementoFrete()
        );
        try 
        {
            $this->runQuery($sql);
        } catch (Exception $e) 
        {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }
    }#encerra pagamentoPersist

    #verifica se o registro da compra já existe na base de dados. Retorna true caso positivo e false caso negativo.
    public function registerVerify($codeTransation)
    {
        $sql = "SELECT COUNT(pag_code_transation) FROM pagamentos WHERE pag_code_transation = '%s'";
        $sql = sprintf($sql, $codeTransation);
        try 
        {
            $row = $this->runSelect($sql);

            if($row[0]['COUNT(pag_code_transation)'] == 1)
            {
                return true;
            } else 
            {
                return false;
            }
        } catch (Exception $e) 
        {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }
    }

    #verificar se realmente existe a necessidade de realizar updae em todos os atributos do registro.
    public function pagUpdate
    (
        $pag_date,
        $pag_code_transation,
        $pag_reference,
        $pag_transaction_type,
        $pag_status,
        $pag_cancelation_source,
        $pag_ultimo_evento,
        $pag_tipo_pagamento,
        $pag_meio_cod,
        $pag_valor_bruto,
        $pag_valor_desconto,
        $pag_valor_taxas,
        $pag_data_credito,
        $pag_valor_extra,
        $pag_parcelas_cartao,
        $pag_qtd_itens,
        $pag_item_identificacao,
        $pag_item_descricao,
        $pag_valor_unitario,
        $pag_qtd_item_unitario,
        $pag_email_comprador,
        $pag_nome_comprador,
        $pag_ddd_tel,
        $pag_tel_comprador,
        $pag_tipo_frete,
        $pag_custo_frete,
        $pag_pais_frete,
        $pag_estado_frete,
        $pag_cidade_frete,
        $pag_cep_frete,
        $pag_bairro_frete,
        $pag_rua_frete,
        $pag_numero_frete,
        $pag_complemento_frete)
        {
        $this->setPagDate($pag_date);
        $this->setPagCodeTransation($pag_code_transation);
        $this->setPagReference($pag_reference);
        $this->setPagTransactionType($pag_transaction_type);
        $this->setPagStatus($pag_status);
        $this->setPagCancelationSource($pag_cancelation_source);
        $this->setPagUltimoEvento($pag_ultimo_evento);
        $this->setPagTipoPagamento($pag_tipo_pagamento);
        $this->setPagMeioCod($pag_meio_cod);
        $this->setPagValorBruto($pag_valor_bruto);
        $this->setPagValorDesconto($pag_valor_desconto);
        $this->setPagValorTaxas($pag_valor_taxas);
        $this->setPagDataCredito($pag_data_credito);
        $this->setPagValorExtra($pag_valor_extra);
        $this->setPagParcelasCartao($pag_parcelas_cartao);
        $this->setPagQtdItens($pag_qtd_itens);
        $this->setPagItemIdentificacao($pag_item_identificacao);
        $this->setPagItemDescricao($pag_item_descricao);
        $this->setPagValorUnitario($pag_valor_unitario);
        $this->setPagQtdItemUnitario($pag_qtd_item_unitario);
        $this->setPagEmailComprador($pag_email_comprador);
        $this->setPagNomeComprador($pag_nome_comprador);
        $this->setPagDddTel($pag_ddd_tel);
        $this->setPagTelComprador($pag_tel_comprador);
        $this->setPagTipoFrete($pag_tipo_frete);
        $this->setPagCustoFrete($pag_custo_frete);
        $this->setPagPaisFrete($pag_pais_frete);
        $this->setPagEstadoFrete($pag_estado_frete);
        $this->setPagCidadeFrete($pag_cidade_frete);
        $this->setPagCepFrete($pag_cep_frete);
        $this->setPagBairroFrete($pag_bairro_frete);
        $this->setPagRuaFrete($pag_rua_frete);
        $this->setPagNumeroFrete($pag_numero_frete);
        $this->setPagComplementoFrete($pag_complemento_frete);

        $sql = sprintf
        (
            $this->update,$this->getPagDate(),
	        $this->getPagCodeTransation(),
            $this->getPagReference(),
            $this->getPagTransactionType(),
            $this->getPagStatus(),
            $this->getPagCancelationSource(),
            $this->getPagUltimoEvento(),
            $this->getPagTipoPagamento(),
            $this->getPagMeioCod(),
            $this->getPagValorBruto(),
            $this->getPagValorDesconto(),
            $this->getPagValorTaxas(),
            $this->getPagDataCredito(),
            $this->getPagValorExtra(),
            $this->getPagParcelasCartao(),
            $this->getPagQtdItens(),
            $this->getPagItemIdentificacao(),
            $this->getPagItemDescricao(),
            $this->getPagValorUnitario(),
            $this->getPagQtdItemUnitario(),
            $this->getPagEmailComprador(),
            $this->getPagNomeComprador(),
            $this->getPagDddTel(),
            $this->getPagTelComprador(),
            $this->getPagTipoFrete(),
            $this->getPagCustoFrete(),
            $this->getPagPaisFrete(),
            $this->getPagEstadoFrete(),
            $this->getPagCidadeFrete(),
            $this->getPagCepFrete(),
            $this->getPagBairroFrete(),
            $this->getPagRuaFrete(),
            $this->getPagNumeroFrete(),
            $this->getPagComplementoFrete(),
            $this->getPagCodeTransation()
    );

        // Abre ou cria o arquivo bloco1.txt
        // "a" representa que o arquivo é aberto para ser escrito
        $fp = fopen("logs/testeStatus.txt", "a");
        // Escreve "exemplo de escrita" no bloco1.txt
        $escreve = fwrite($fp, "Teste".$sql);
        // Fecha o arquivo
        fclose($fp);

        try 
        {
            $this->runQuery($sql);
        } catch (Exception $e) 
        {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }

    }#encerra update


    public function statusConvert($cod)
    {
        switch($cod)
        {
            case 1: $cod = "Aguardando pagamento";break;
            case 2: $cod = "Em análise";break;
            case 3: $cod = "Paga";break;
            case 4: $cod = "Disponível";break;
            case 5: $cod = "Em disputa";break;
            case 6: $cod = "Devolvida";break;
            case 7: $cod = "Cancelada";break;
            case 8: $cod = "Debitado";break;
            case 9: $cod = "Retenção temporária";break;
            default: $cod = "Outros";
        }
        return $cod;
    }
}


















































