<?php
//КОММАНДА ДЛЯ СОЗДАНИЯ СТРУКТУРЫ БД  или  экспорт через phpMyAdmin
//mysqldump --no-data -uroot -proot testbase>dumpstruct.sql
$link = mysqli_connect("localhost", "root", "root","testbase");
mysqli_set_charset($link, 'utf8');

// ТРАНЗАКЦИЯ МЕЖДУ ЖИТЕЛЯМИ ОДНОГО ГОРОДА (Г)
//$sql = "SELECT * FROM transactions WHERE
//        (SELECT persons.city_id FROM persons WHERE persons.id = transactions.from_person_id) =
//        (SELECT persons.city_id FROM persons WHERE persons.id = transactions.to_person_id)";

