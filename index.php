<?php

require __DIR__ . '/db.php';
require __DIR__ . '/functions.php';

$pdo = db();

// Load dropdown options
$sqlList = buildSqlList();
$stmtList = $pdo->query($sqlList);
// Load Main Table

$selectedID = isset($_GET['bike_id']) ? $_GET ['bike_id'] : 0;
// Pretty simple fix up here by making sure that select statement is correct
$sqlMain = buildSqlMain($selectedID);
echo "<pre>$sqlMain</pre>";
$stmnMain = $pdo->query($sqlMain);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Games (Procedural, GET)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.5;
            color: #1f2937;
            max-width: 920px;
            margin: 24px auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #e2e8f0;
            padding: 8px;
        }

        thead tr {
            background: #f1f5f9;
        }

        form {
            margin: 12px 0;
        }
    </style>
</head>