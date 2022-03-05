<?php
/**
 * SystemAccessLogService
 *
 * @version    1.0
 * @package    service
 * @subpackage log
 * @author     Pablo Dall'Oglio
 * @copyright  Copyright (c) 2006 Adianti Solutions Ltd. (http://www.adianti.com.br)
 * @license    http://www.adianti.com.br/framework-license
 */
class SystemAccessLogService
{
    /**
     * Register login
     */
    public static function registerLogin( $impersonated = false )
    {
        $cur_conn = serialize(TTransaction::getDatabaseInfo());
        $new_conn = serialize(TConnection::getDatabaseInfo('database'));
        
        $open_transaction = ($cur_conn !== $new_conn);
        
        if ($open_transaction)
        {
            TTransaction::open('database');
        }
        
        $object = new SystemAccessLog;
        $object->login = TSession::getValue('login');
        $object->sessionid = session_id();
        $object->login_time = date("Y-m-d H:i:s");
        $object->login_year = date("Y");
        $object->login_month = date("m");
        $object->login_day = date("d");
        $object->impersonated = ($impersonated ? 'Y' : 'N');
        $object->access_ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;
        $object->store();
        
        if ($open_transaction)
        {
            TTransaction::close();
        }
    }
    
    /**
     * Register logout
     */
    public static function registerLogout()
    {
        $cur_conn = serialize(TTransaction::getDatabaseInfo());
        $new_conn = serialize(TConnection::getDatabaseInfo('database'));
        
        $open_transaction = ($cur_conn !== $new_conn);
        
        if ($open_transaction)
        {
            TTransaction::open('database');
        }
        
        // get logs by session id
        $logs = SystemAccessLog::where('sessionid', '=', session_id())->load();
        if (count($logs)>0)
        {
            $log = $logs[0];
            if ($log instanceof SystemAccessLog);
            {
                $log->logout_time = date("Y-m-d H:i:s");
            }
            $log->store();
        }
        
        if ($open_transaction)
        {
            TTransaction::close();
        }
    }
    
    /**
     *
     */
    public static function getStatsByDay()
    {
        TTransaction::open('database');
        // get logs by session id
        $logs = SystemAccessLog::where('login_time', '>=', date('Y-m-01'))->where('login_time', '<=', date('Y-m-t'))->load();
        $accesses = array();
        
        if (count($logs)>0)
        {
            $accesses = array();
            foreach ($logs as $log)
            {
                $day = substr($log->login_time,8,2);
                if (isset($accesses[$day]))
                {
                    $accesses[$day] ++;
                }
                else
                {
                    $accesses[$day] = 1;
                }
            }
        }
        
        TTransaction::close();
        return $accesses;
    }
}
