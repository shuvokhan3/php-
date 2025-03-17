<?php
//create interface 
//implement interface
//display notification using function that tage object as a agrument
interface Notification{
    public function sendNotification($massage);
}
class EmailNotification implements Notification{
    public function sendNotification($massage){
        return $massage;
    }
    public function getNoticicationSystemName(){
        return "from : Email".PHP_EOL;
    }
}
class smsNotification implements Notification{
    public function sendNotification($massage){
        return $massage;
    }
    public function getNoticicationSystemName(){
        return "from : sms".PHP_EOL;
    }
}
class pushNotification implements Notification{
    public function sendNotification($massage){
        return $massage;
    }
    public function getNoticicationSystemName(){
        return " from : pushNotification".PHP_EOL;
    }
}
//function for display Notification
function Notification($notificationSystemName,$massage){
    echo $notificationSystemName->sendNotification($massage).PHP_EOL;
}
//create object
$gmail = new EmailNotification();
$sms   = new smsNotification();
$push  = new pushNotification();

Notification($gmail , "Every body alart please read your phon sms carefully ");
Notification($sms , " In Bangladesh strome is comming ");
Notification($push , "Go to the safe zone");

