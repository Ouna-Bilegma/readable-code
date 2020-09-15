<?php

// customer = for who
function orderPizza($pizzaType, $customer)
{
    $type = $pizzaType;
    echo 'Creating new order... <br>';
    $toPrint = 'A ';
    $toPrint .= $pizzaType;
    $p = calculateCost($pizzaType);


    function getAddress($customer)
    {
        switch ($customer) {
            case 'koen';
                $address = "a yacht in Antwerp";
                break;
            case "manuele";
                return "somewhere in Belgium";
            case "students";
                return "becode office";
            default:
                return 'no address found';
        }
    }


   function getPrice($pizzaType)
{
    switch ($pizzaType) {
        case 'marguerita':
            return '5';
        case 'golden':
            return '100';
        case 'calzone':
            return '10';
        case 'hawaii':
            throw new Exception('No way!!');
        default:
            return 'Comming Soon!!';
    }
}

function main() {
    getPizza('calzone', 'koen');
    getPizza('marguerita', 'manuele');
    getPizza('golden', 'students');
};

main();