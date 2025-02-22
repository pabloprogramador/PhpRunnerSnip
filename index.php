<?php

function BeforeAdd($values, $message, $inline, $pageObject)
{
    
$data = array();
$data = $values;
unset($data["ID"]);
unset($data["id_class"]);
unset($data["id_user"]);

$data["company_id"] = Security::currentUserData()["company_id"];

DB::Insert("class", $data);
$values["id_class"] = DB::LastId();

$values = array_diff_assoc($values, $data);

unset($values["total"]);

return true;

}