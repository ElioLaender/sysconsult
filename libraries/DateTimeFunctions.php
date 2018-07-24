<?php


# Classe que possui métodos para tratar data e hora de todo sistema.

class DateTimeFunctions {

    #método responsável por converter dateTime no formato brasileiro e com leitura mais confortável.
    public function dateTimeBr($dateTimeVal){

        $timestamp = strtotime($dateTimeVal); // Gera o timestamp de $data_mysql
        return date('d/m/Y - H:i', $timestamp); // Resultado: 09/02 ~ 20:03

    }

    public function dateTimeUsa($dateTimeVal){

        $timestamp = strtotime($dateTimeVal);

        return date('Y/m/d', $timestamp);

    }

}