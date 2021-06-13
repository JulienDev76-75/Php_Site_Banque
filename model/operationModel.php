<?php  

    // function getSingleOperation(PDO $db, int $account_id) {
    //     $query = $db->prepare("SELECT * FROM operation WHERE operation.account_id =:account_id");
    //     $query->execute([
    //         "account_id" => $account_id
    //     ]);
    //     $result = $query->fetchAll(PDO::FETCH_ASSOC);
    //     return $result;
    // }

    // function addDepot(PDO $db) {
    //     $query = $db->prepare("INSERT INTO operation(operation_type, amount, registered, label, account_id) VALUES('dépot', :amount, NOW(), :label, :account_id)");
    //     $result = $query->execute([
    //     "amount" => $_POST["amount"],
    //     "label" => $_POST["label"],
    //     "account_id" => $_GET["index"]
    //     ]);
    //     return $result;
    // } 
    
    // function addRetrait(PDO $db) {
    //     $query = $db->prepare("INSERT INTO operation(operation_type, amount, registered, label, account_id) VALUES('retrait', :amount, NOW(), :label, :account_id)");
    //     $result = $query->execute([
    //     "amount" => $_POST["amount"],
    //     "label" => $_POST["label"],
    //     "account_id" => $_GET["index"]
    //     ]);
    //     return $result;  
    // }
    
?>


<!-- class OperationManager {

    private PDO $db;

    public function getOperationAccount(int $account_id) {
        $query = $this->db->prepare("SELECT * FROM operation WHERE operation.account_id =:accountId  ");
        $query->execute([
            "account_id" => $account_id
        ]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $key => $value){
        $result[$key] = new Operation($value);
        } 
        return $result;
        }
        public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=banque_sql;charset=utf8', 'root', '');
    } 

 -->
