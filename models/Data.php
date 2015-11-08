<?php
class Data extends ActiveRecord\Model
{
    public static $primary_key='dataid';
    public function before_create()
    {
        $this->data_added=date('Y-m-d H:i:s',  strtotime('now'));
    }
     public function before_update()
    {
        $this->data_modified=date('Y-m-d H:i:s',  strtotime('now'));
    }
}
