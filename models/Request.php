<?php

class Request
{
    public $id;
    public $user_id;
    public $photoRequest;
    public $photoActionTaken;
    public $date_request;
    public $longitude;
    public $latitude;
    public $description;
    public $status;
    public $actionTaken;
    public $actionTakenDate;
    public $requestType;

    public static function query($where, $params)
    {
        $database = new Database(config('database'));

        return $database->query(
            query: "SELECT *
                        FROM requests
                    WHERE status IN ('Pendente', 'Em andamento', 'Concluída')
                    AND $where
                    ORDER BY 
                        CASE requestType 
                            WHEN 'denuncia' THEN 1 
                            WHEN 'coleta' THEN 2 
                        END,
                        CASE status
                            WHEN 'Pendente' THEN 1
                            WHEN 'Em andamento' THEN 2
                            WHEN 'Concluída' THEN 3
                        END,
                        date_request ASC;",
            class: self::class,
            params: $params
        );
    }

    public static function get($id)
    {
        return (new self)->query('id = :id',  ['id' => $id])->fetch();
    }

    public static function all($where, $params)
    {
        return (new self)->query($where, $params)->fetchAll();
    }
}
