<?php

const host = 'localhost';
const username = 'gallery';
const password = 'gallery';
const database = 'gallery';
const port = 8889;

$handle = mysqli_connect(
    host,
    username,
    password,
    database,
    port);
