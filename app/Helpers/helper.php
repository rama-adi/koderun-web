<?php

function generate_slug(string $title){
    $trimslug = Str::of(Str::slug(Str::limit($title, 10, '')));

    return $trimslug . '-' . Str::of(Str::random(5))->lower();
}

function scratch_lang(int $id) : array
{
    $languages = config('koderun.languages');
    return $languages[$id];
}

function scratch_lang_exist(int $id){
    return key_exists($id, config('koderun.languages'));
}
