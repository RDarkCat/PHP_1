<?php

const host = 'localhost';
const username = 'catalog';
const password = 'catalog';
const database = 'catalog';
const port = 8889;

$handle = mysqli_connect(
    host,
    username,
    password,
    database,
    port);
