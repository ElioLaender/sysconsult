<?php

require_once 'config/AutoLoadConfig.php';

class notificationsDAO extends NotificationModel{

    private $insert = "INSERT INTO notifications (notifications_messager,notifications_alerts) VALUES (0,0)",
            $select = "SELECT * FROM notifications;",
            $updateMen = "UPDATE notifications SET notifications_messager = notifications_messager+1",
            $updateAlert = "UPDATE notifications SET notifications_alerts = notifications_alerts+1",
            $updateMenDec = "UPDATE notifications SET notifications_messager = notifications_messager-1",
            $updateAlertDec = "UPDATE notifications SET notifications_alerts = notifications_alerts-1",
            $delete;

    public function incrementMessager()
    {
        #se não tiver registro insere.
        if($row = $this->runSelect($this->select))
        {
        } else 
        {
            $this->runQuery($this->insert);
        }

        if($this->runQuery($this->updateMen))
        {
        } else 
        {
            echo "Erro ao realizar update da mensagem";
        }
    }

    public function incrementAlert()
    {
        $row = $this->runSelect($this->select);

        #se não tiver registro insere.
        if(count($row) <= 0)
        {
            $this->runQuery($this->insert);
        }

        if($this->runQuery($this->updateAlert))
        {
        } else 
        {
            echo "Erro ao realizar update da alert";
        }
    }

    public function decrementMessager()
    {
        if($this->runQuery($this->updateMenDec))
        {
        } else 
        {
            echo "Erro ao realizar decrement messagert";
        }
    }

    public function decrementAlert()
    {
        if($this->runQuery($this->updateAlertDec))
        {
        } else 
        {
            echo "Erro ao realizar decrement  da alert";
        }
    }

    public function returnNotific()
    {
        if($row = $this->runSelect($this->select))
        {
           return $row;
        } else
        {
            echo "Não foi possível retornar as notificações";
        }
    }
}
