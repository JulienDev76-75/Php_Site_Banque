<?php 

class Account {
    private int $id;
    private string $account_name;
    private string $account_number;
    private int $amount_account;
    private string $creation_date;
    private int $customer_id;


    public function setId(int $id) {
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setAccount_type(string $account_name) {
        $this->account_name = $account_name;
    }

    public function getAccount_type(){
        return $this->account_name;
    }

    public function setAccount_number(string $account_number) {
        $this->account_number = $account_number;
    }

    public function getAccount_number(){
        return $this->account_number;
    }

    public function setAmount_Account(int $amount_account) {
        $this->amount_account = $amount_account;
    }

    public function getAmount_Account(){
        return $this->amount_account;
    }

    public function setCreation_date(string $creation_date) {
        $this->creation_date = $creation_date;
    }

    public function getCreation_date(){
        return $this->creation_date;
    }

    public function setCustomer_id(int $customer_id) {
        $this->customer_id = $customer_id;
    }

    public function getCustomer_id(){
        return $this->customer_id;
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