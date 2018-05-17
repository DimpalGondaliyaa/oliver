<?php
/** set your paypal credential **/

$config['client_id'] = 'AWr-FcYaaFgZfKWYUFDZZV97_Qm80_oj4oMU1QyBLjcQlOuZi1pJt5VIGRAsJAw-Pkf9BL9JucDr_Nt8';
$config['secret'] = 'EHphXt2Jj-Y58bBhYEZkp8-L0s2Soi4RUIEeu6H1eG1CDT2nkxlgL7DrfsM5VhiYGXNOn9Dc74ROM7XD';

/**
 * SDK configuration
 */
/**
 * Available option 'sandbox' or 'live'
 */
$config['settings'] = array(

    'mode' => 'sandbox',
    /**
     * Specify the max request time in seconds
     */
    'http.ConnectionTimeOut' => 1000,
    /**
     * Whether want to log to a file
     */
    'log.LogEnabled' => true,
    /**
     * Specify the file that want to write on
     */
    'log.FileName' => 'application/logs/paypal.log',
    /**
     * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
     *
     * Logging is most verbose in the 'FINE' level and decreases as you
     * proceed towards ERROR
     */
    'log.LogLevel' => 'FINE'
);