<?php

enum UserType
{
    const ADMIN = 'admin';
    const CUSTOMER = 'customer';
    const GUEST = 'guest';
}

echo UserType::ADMIN;