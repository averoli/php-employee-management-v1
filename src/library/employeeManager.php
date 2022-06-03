<?php

/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */

function getAllData()
{
    $employees = file_get_contents("../../resources/employees.json");
    return $employees;
}




function addEmployee(array $newEmployee)
{
    // TODO implement it
    $file = "../../resources/employees.json";
    $employees = file_get_contents($file);
    $forAddEmployee = json_decode($employees);
    array_push($forAddEmployee, $newEmployee);
    $newJSON = json_encode($forAddEmployee);
    file_put_contents($file, $newJSON);
    $employees = file_get_contents($file);
    return $employees;
}


function deleteEmployee(string $id)
{
    // TODO implement it
}


function updateEmployee(array $updateEmployee)
{
    // TODO implement it
}


function getEmployee(string $id)
{
    // TODO implement it
}


function removeAvatar($id)
{
    // TODO implement it
}


function getQueryStringParameters(): array
{
    // TODO implement it
}

function getNextIdentifier(array $employeesCollection): int
{
    // TODO implement it
}
