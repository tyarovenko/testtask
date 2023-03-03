<?php

class users
{
    public $users = [
        ['id' => 1, 'name' => 'test', 'email' => 'test@hotsale.ua'],
        ['id' => 2, 'name' => 'name', 'email' => 'name@hotsale.ua'],
        ['id' => 3, 'name' => 'testname', 'email' => 'testname@hotsale.ua']
        ];

    public $log = '../log.txt';

    public function __construct() 
    {
    }

    public function get_users()
    {
        return $this->users;
    }

    public function validate_user_data($request)
    {
        if (isset($request['password']) && isset($request['passwordconf']) && 
            $request['password'] != $request['passwordconf'])
        {
            return false;
        }

        if (isset($request['email']) && (strpos($request['email'], '@') === false))
        {
            return false;
        }

        if (isset($request['email']) && !in_array($request['email'], array_column($this->users, 'email')))
        {
            return false;
        }

        return true;
    }

    public function logResult($request, $result)
    {
        $log = implode(';', $request) . ' auth: ' . $result . PHP_EOL;

        $logfile = file_get_contents($this->log);

        if (!file_put_contents($this->log, $logfile . $log))
        {
            return false;
        }

        return true;
    }
}