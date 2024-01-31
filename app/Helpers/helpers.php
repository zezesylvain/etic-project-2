<?php

use Illuminate\Support\Str;
function addSuffixe(string $image, $suffixe = 'small'): string
{
    $extension = pathinfo($image)["extension"];
    $fin = "-$suffixe.$extension";
    if (!Str::of($image)->endsWith($fin)) :
        return Str::replace(".$extension", "-$suffixe.$extension", $image);
    else :
        return $image;
    endif;
}
