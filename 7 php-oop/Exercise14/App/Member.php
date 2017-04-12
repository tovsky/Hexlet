<?php

namespace App;

require_once 'User.php';

class Member extends User
{
    public static $tableName = 'custom_table_for_members';
}
