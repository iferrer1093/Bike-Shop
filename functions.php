<?php
function buildSqlList(): string
{
    return "SELECT bike_id, model FROM bikes ORDER BY model";
}

// function buildSqlMain(int $bike_id): string
// {
//     if ($bike_id > 0) {
//         return "SELECT * FROM 'bikes' JOIN customers ON customers.bike_id = bikes.bike_id WHERE bike_id = $bike_id";
//     }
//     return "SELECT * FROM 'bikes' ";
// }

function sqlAllCustomers(): string
{
    return "SELECT * FROM `customers` ORDER BY last_name, first_name";
}

function sqlAvailableBikes(): string
{
    return "SELECT * FROM 'bikes' WHERE "
}



?>