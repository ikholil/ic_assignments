<?php
$income = [];
$expense = [];
$total = 0;
$income_category = ["Salary", "Business", "Rent"];
$expense_category = ["Family", "Personal", "Gift", "Recreation", "Sadaqah"];

// File to store data
$dataFile = 'data.json';

// Load data from the file if it exists
if (file_exists($dataFile)) {
    $data = json_decode(file_get_contents($dataFile), true);
    if ($data !== null) {
        $income = $data['income'] ?? [];
        $expense = $data['expense'] ?? [];
        $total = $data['total'] ?? 0;
    }
} else {
    // Create the data file if it doesn't exist
    file_put_contents($dataFile, json_encode(['income' => [], 'expense' => [], 'total' => 0]));
}

while (true) {
    echo "\n ----------------------- \n\n What do you want to do? 
        1. Add Income 
        2. Add Expense 
        3. View Income 
        4. View Expense 
        5. View total 
        6. View Categories\n";

    $input = readline(prompt: " \n\n");

    switch ($input) {
        case "1":
            $newIncome = readline(prompt: "Enter Income: ");
            $new_income_category = readline(prompt: "Enter Category: ");
            $total += $newIncome;
            $income[$new_income_category] = $newIncome;
            updateDataFile($income, $expense, $total);
            break;

        case "2":
            $newexpense = readline(prompt: "Enter Expense: ");
            $new_expense_category = readline(prompt: "Enter Category: ");
            $total -= $newexpense;
            $expense[$new_expense_category] = $newexpense;
            updateDataFile($income, $expense, $total);
            break;

        case "3":
            foreach ($income as $key => $value) {
                echo "$key :" . " $value \n";
            }
            break;

        case "4":
            foreach ($expense as $key => $value) {
                echo "$key :" . " $value \n";
            }
            break;

        case "5":
            echo " $total ";
            break;

        case "6":
            echo "Income Category: \n";
            foreach ($income_category as $index => $value) {
                echo ($index + 1) . ". " . $value . " \n";
            }
            echo "\n";
            echo "Expense Category: \n";
            foreach ($expense_category as $index => $value) {
                echo ($index + 1) . ". " . $value . " \n";
            }
            break;
        default:
            echo "Enter Correct Number : ";
            break;
    }
}

function updateDataFile($income, $expense, $total)
{
    global $dataFile;
    $data = [
        'income' => $income,
        'expense' => $expense,
        'total' => $total,
    ];

    file_put_contents($dataFile, json_encode($data));
}
