<?php

$contacts = [];

function addContact(array $contacts, string $name, string $email, string $phone): void
{
    $contacts[] = ['name' => $name, 'email' => $email, 'phone' => $phone];
}


//display function
function displayFunction(array $contacts): void
{
    if (empty($contacts)) {
        echo "No contact available. \n";
    } else {
        foreach ($contacts as $contact) {
            echo "Name: {$contact['name']}, Email: {$contact['email']}, Phone: {$contact['phone']}, \n";
        }
    }
}

while (true) {
    echo "\n Contact Management Menu \n";
    echo "1. Add Contact\n2. View Contact\n3. Exit\n";

    $choice = (int)readline("Choose an option: ");


    if ($choice === 1) {
        $name = readline("Enter name: ");
        $email = readline("Enter email: ");
        $phone = readline("Enter phone: ");
        addContact($contacts, $name, $email, $phone);
    } elseif ($choice === 2) {
        displayFunction($contacts);
    } elseif ($choice == 3) {
        echo "Exiting...\n";
    } else {
        echo "Invalid choice. Please try again.\n";
    }
}
