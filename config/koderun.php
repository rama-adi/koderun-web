<?php

return [
    // Treatment = 1 (piston), 2 (print to iframe)
  "languages" => [
      1 => [
          "name" => "html",
          "monaco" => "html",
          "display" => "HTML 5 (Output Mode)",
          "icon" => "devicon-html5-plain",
          "treatment" => \App\Enums\ScratchTreatment::OUTPUT,
      ],

      2 => [
          "name" => "php",
          "monaco" => "php",
          "display" => "PHP",
          "icon" => "devicon-php-plain",
          "treatment" => \App\Enums\ScratchTreatment::REPL,
      ],

      3 => [
          "name" => "cpp",
          "monaco" => "cpp",
          "display" => "C++",
          "icon" => "devicon-cplusplus-plain",
          "treatment" => \App\Enums\ScratchTreatment::REPL,
      ],

      4 => [
          "name" => "c",
          "monaco" => "c",
          "display" => "C",
          "icon" => "devicon-c-plain",
          "treatment" => \App\Enums\ScratchTreatment::REPL,
      ],

      5 => [
          "name" => "node",
          "monaco" => "javascript",
          "display" => "NodeJS (Tanpa NPM)",
          "icon" => "devicon-nodejs-plain",
          "treatment" => \App\Enums\ScratchTreatment::REPL,
      ],

      6 => [
          "name" => "java",
          "monaco" => "java",
          "display" => "Java",
          "icon" => "devicon-java-plain",
          "treatment" => \App\Enums\ScratchTreatment::REPL,
      ],

      7 => [
          "name" => "kotlin",
          "monaco" => "kotlin",
          "display" => "Kotlin",
          "icon" => "devicon-kotlin-plain",
          "treatment" => \App\Enums\ScratchTreatment::REPL,
      ],
  ]
];
