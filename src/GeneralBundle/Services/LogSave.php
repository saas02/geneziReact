<?php

namespace App\GeneralBundle\Services;

class LogSave {

    /**
     * Log File Path
     * @var	string
     */
    private $kernel, $session, $container;

    /**
     * 
     * @param type $kernel
     * @param type $session
     * @param type $container
     */
    public function __construct($kernel, $session, $container) {
        $this->kernel = $kernel;
        $this->session = $session;
        $this->container = $container;
    }

    /**
     *
     * @param $xml xml to save
     * @param $command The name of the services that mpa consumme
     * @param $suffix any suffix you want to put for example RQ or RS. default:DF
     * @param type the file extension foe example xml, txt, etc
     * @param $id unique identfier id for a file (This is usefull when you are trying to group requests and responses)
     */
    function logSave($xml, $command, $suffix = 'DF', $transactionId = null) {
        $Conf = $this->loadConf();        
        //$path = $this->kernel->getRootDir() . '/serviceLogs';
        $ServiceLogsFolder = $Conf->Command->General->LogSource->{$this->kernel->getEnvironment()}->FolderName;
        $path = preg_match('/[a-zA-Z]{1}\:/', $ServiceLogsFolder) ? $ServiceLogsFolder : $this->kernel->getRootDir() . '\\' . $ServiceLogsFolder;        
        $transactionId = null;//$transactionId != null ? $transactionId : (($this->session->has($this->container->getParameter('transaction_id_session_name'))) ? $this->session->get($this->container->getParameter('transaction_id_session_name')) : null) ;

        if (!isset($command) || $command == '')
            $command = 'unknow';
        //File name. Te time() function is excuted to avoid files with the same name
        if(strlen((string) $this->get_client_ip()) > 16){
            $userIp = "IPv6";
        } else {
            $userIp = $this->get_client_ip();
        }
        $file = $path . '/' . $command . '/' . $command . '__' . $transactionId . '__' . microtime() . '__' . $userIp . '__' . $suffix . '.' . 'xml';

        @chmod($path, 0777);
        //Verify if exists a directory with the command name
        if (!file_exists($path . '/' . $command)) {
            //create the directory            
            mkdir($path . '/' . $command, 0777);
            //create the security file
            $secFile = $path . '/' . $command . '/index.html';
            $fh = fopen($secFile, 'w');
            fwrite($fh, '<html><body bgcolor="#FFFFFF"></body></html>');
            fclose($fh);
            //Set permissions
            @chmod($secFile, 0644);
        } else {
            //cange permissions to directory
            @chmod($path . '/' . $command, 0777);
        }

        //create the current time
        $curentDateAndTime = date('Ymd_His', time());
        //Write the xml
        $fvalidation = file_exists($file);
        if ($fvalidation) {
            $file = $path . '/' . $command . '/' . $command . '__' . $transactionId . '__' . microtime() . '__' . $userIp . '__' . $suffix . '.' . 'xml';
            $fh = fopen($file, 'w');
        } else {
            $fh = fopen($file, 'w');
        }
        fwrite($fh, $xml);
        //close the file
        fclose($fh);

        //Set permissions
        @chmod($file, 0644);
        @chmod($path . '/' . $command, 0644);
        @chmod($path, 0644);
        return $file;
    }

    function saveToFile($variable) {

        $path = $this->kernel->getRootDir() . '/serviceLogs';
        $curentDateAndTime = date('Ymd_His', time());

        $file = $path . '/_var_dump/' . $curentDateAndTime . '.txt';
        if(is_file($file)){
            $fh = fopen($file, 'w');
        }else{
            return false;
        }
        fwrite($fh, $variable);
        //close the file
        fclose($fh);

        //Set permissions
        @chmod($file, 0644);
        @chmod($path . '/' . $command, 0644);
        @chmod($path, 0644);
    }

    final private function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    private function loadConf() {        
        $filename = $this->kernel->getProjectDir() . '/public/logs/log_purge.json';        
        if (file_exists($filename)) {
            $confFile = fopen($filename, 'r');
        }
        $confContent = fread($confFile, filesize($filename));
        $conf = json_decode($confContent);
        return $conf;
    }

}
