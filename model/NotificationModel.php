<?php


include_once 'dao/ConnectionFactory/ConnectionFactory.php';

class NotificationModel extends ConnectionFactory{

    private $notifications_id,
            $notifications_messager,
            $notifications_alerts;

    /**
     * @return mixed
     */
    public function getNotificationsId()
    {
        return $this->notifications_id;
    }

    /**
     * @param mixed $notifications_id
     */
    public function setNotificationsId($notifications_id)
    {
        $this->notifications_id = $notifications_id;
    }

    /**
     * @return mixed
     */
    public function getNotificationsMessager()
    {
        return $this->notifications_messager;
    }

    /**
     * @param mixed $notifications_messager
     */
    public function setNotificationsMessager($notifications_messager)
    {
        $this->notifications_messager = $notifications_messager;
    }

    /**
     * @return mixed
     */
    public function getNotificationsAlerts()
    {
        return $this->notifications_alerts;
    }

    /**
     * @param mixed $notifications_alerts
     */
    public function setNotificationsAlerts($notifications_alerts)
    {
        $this->notifications_alerts = $notifications_alerts;
    }



}
