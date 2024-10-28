<?php

function dbQuery($sql, $params = []): false|PDOStatement
{
    $pdo = dbConnect();
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);

    return $stmt;
}

function dbFetch($sql, $params = [], $fetchMode = PDO::FETCH_ASSOC)
{
    $stmt = dbQuery($sql, $params);

    return $stmt->fetch($fetchMode);
}

function dbFetchAll($sql, $params = [], $fetchMode = PDO::FETCH_ASSOC): false|array
{
    $stmt = dbQuery($sql, $params);

    return $stmt->fetchAll($fetchMode);
}

function dbInsert($sql, $params): false|string
{
    dbQuery($sql, $params);

    return dbConnect()->lastInsertId();
}

function dbUpdate($sql, $params): int
{
    return dbQuery($sql, $params)->rowCount();
}

function dbDelete($sql, $params): int
{
    return dbQuery($sql, $params)->rowCount();
}
