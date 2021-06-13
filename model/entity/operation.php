<?php 

class Operation {
    protected int $id;
    protected string $last_operation_type;
    protected string $last_operation_name;
    protected int $last_operation_amount;
    protected string $last_operation_date;
    protected int $account_id;

    public function setId(int $id) {
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }


    public function setLast_Operation_type(string $last_Operation_type) {
        $this->last_Operation_type = $last_Operation_type;
    }

    public function getLast_Operation_type(){
        return $this->operation_type;
    }


    public function setLast_operation_name(int $last_operation_name) {
        $this->last_operation_name = $last_operation_name;
    }

    public function getLast_operation_name(){
        return $this->last_operation_name;
    }

    public function setLast_operation_date(string $last_operation_date) {
        $this->last_operation_date = $last_operation_date;
    }

    public function getLast_operation_date(){
        return $this->last_operation_date;
    }

    public function setAccount_id(int $account_id) {
        $this->account_id = $account_id;
    }

    public function getAccount_id(){
        return $this->account_id;
    }

    public function __construct(?array $data=null) {
        if($data) {
            foreach($data as $key => $value) {
                $method = "set" . ucfirst($key);
                if(method_exists($this, $method)) {
                    $this->$method($value);
                }
            }
        }
    }
}