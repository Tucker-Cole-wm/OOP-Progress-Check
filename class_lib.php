<?php
class name {
  var $customer;

  protected $SSN;
  protected $creditCardInfo;

  public function __construct($customerInfo){
    $this->customer = $customerInfo;
  }

  private function getCreditCardInfo(){
    function set_Customer($billingInfo){
      $this->customer = $billingInfo;
    }


  }
  function get_customer(){
    return $this->customer;
  }
}

class employee extends name {
  public function __construct($employee_name){
    $this->set_name($employee_name);
  }
}
?>
