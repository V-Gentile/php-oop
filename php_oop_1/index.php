<?php

class Company {
    public $name;
    public $location;
    public $tot_employees;
    
    public static $totalAbsoluteExpense = 0;

    public function __construct($name, $location, $tot_employees = 0) {
        $this->name = $name;
        $this->location = $location;
        $this->tot_employees = $tot_employees;
    }

    public function printInfo() {
        if ($this->tot_employees > 0) {
            echo "L'ufficio $this->name con sede in $this->location ha ben $this->tot_employees dipendenti.\n";
        } else {
            echo "L'ufficio $this->name con sede in $this->location non ha dipendenti.\n";
        }
    }

    public function calculateAnnualExpense($averageSalary = 30000) {
        $annualExpense = $this->tot_employees * $averageSalary;
        echo "La spesa annuale per l'azienda $this->name è di $annualExpense euro.\n";
        
        self::addExpenseToTotal($annualExpense);
    }

    public static function addExpenseToTotal($expense) {
        self::$totalAbsoluteExpense += $expense;
    }

    public static function printTotalAbsoluteExpense() {
        echo "\nIl totale assoluto delle spese di tutte le aziende è di: " . self::$totalAbsoluteExpense . " euro.\n";
    }
}

$company1 = new Company("Aulab", "Italia", 50);
$company2 = new Company("Semsung", "Corea", 200);
$company3 = new Company("Apple", "USA", 0);
$company4 = new Company("Nokia", "Finlandia", 15);
$company5 = new Company("Baguette", "Francia", 30);

$companies = [$company1, $company2, $company3, $company4, $company5];

foreach ($companies as $company) {
    $company->printInfo();
    $company->calculateAnnualExpense(30000);
    echo "--------------------------\n";
}

Company::printTotalAbsoluteExpense();
