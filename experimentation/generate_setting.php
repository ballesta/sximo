    $t['table_db'   ] => $table_name
    $t['primary_key'] => $table_primary_key_name
    $t['sql_select' ] => "SELECT $table_name.* FROM $table_name " 
    $t['sql_where'  ] => "WHERE $table_name.$table_primary_key_name IS NOT NULL "
    $t['sql_group'  ] => ""