<?php

class MySessionLib implements SessionHandlerInterface
{

    private static $_link = null;

    public function open($save_path, $name)
    {
        if(is_null(self::$_link)) {

            self::$_link = mysqli_connect("127.0.0.1", 'root', 'fengsonglin', 'php4');
        }
        if(!self::$_link) {
            return false;
        }
        return true;
    }

    public function read($session_id)
    {
        $sql = "SELECT * FROM sess WHERE sess_id = '{$session_id}'";
        $result = mysqli_query(self::$_link, $sql);

        if($row = mysqli_fetch_assoc($result)) {

            return $row['sess_value'];
        }
        return '';

    }

    public function write($session_id, $session_data)
    {

        echo $session_id;
        echo $session_data;
        $time = time();
        $sql = "REPLACE INTO sess (sess_id, sess_value, sess_expires) VALUES ('{$session_id}', '{$session_data}', $time)";
        return mysqli_query(self::$_link, $sql);
    }

    public function destroy($session_id)
    {
        $sql = "DELETE FROM sess WHERE sess_id='{$session_id}'";
        return mysqli_query(self::$_link, $sql);
    }

    public function gc($maxlifetime)
    {
        $time = time() - ini_get('session.gc_maxlifetime');
        $sql = "DELETE FROM sess WHERE sess_expires < {$time}";
        return mysqli_query(self::$_link, $sql);
    }

    public function close()
    {
        mysqli_close(self::$_link);
        return true;
    }
}
