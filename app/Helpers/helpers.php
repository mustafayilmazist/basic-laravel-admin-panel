<?php

function test(){
    pr("test");
}

function textTrToEng(string $text)
{
    $tr = ["Ç", "Ş", "Ğ", "Ü", "İ", "Ö", "ç", "ş", "ğ", "ü", "ı", "ö"];
    $ing = ["C", "S", "G", "U", "I", "O", "c", "s", "g", "u", "i", "o"];
    $text = strtolower(str_replace($tr, $ing, $text));
    return $text;
}

/**
 * @param $permissions
 * @return bool
 */
function checkUserRole($permissions)
{
    /**
     * kullanıcının rolü route üzerinde izin verilen roller arasında varmı?
     */
    $user_role = auth()->user()->roles->pluck('name')[0];
    /*dd($user_role);*/
    foreach ($permissions as $key => $value) {
        if ($value == $user_role) {
            return true;
        }
    }
    return false;
}

/* print_r fonksiyonunu pre etiketi içine yaz */
function pr($p = [])
{
    echo "<pre>";
    print_r($p);
    echo "</pre>";
}
