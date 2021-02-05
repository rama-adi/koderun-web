<?php

return [
    // Treatment = 1 (piston), 2 (print to iframe)
  "languages" => [
      1 => [
          "name" => "php",
          "display" => "PHP (8)",
          "icon" => "devicon-php-plain",
          "treatment" => \App\Enums\ScratchTreatment::REPL,
      ],
      2 => [
          "name" => "cpp",
          "display" => "C++",
          "icon" => "devicon-cplusplus-plain",
          "treatment" => \App\Enums\ScratchTreatment::REPL,
      ],
      3 => [
          "name" => "html",
          "display" => "HTML 5 (Output Mode)",
          "icon" => "devicon-html5-plain",
          "treatment" => \App\Enums\ScratchTreatment::OUTPUT,
      ]
  ]
];
