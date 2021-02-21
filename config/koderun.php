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

        8 => [
            "name" => "elixir",
            "monaco" => "elixir",
            "display" => "Kotlin",
            "icon" => "devicon-atom-original",
            "treatment" => \App\Enums\ScratchTreatment::REPL,
        ],

        8 => [
            "name" => "csharp",
            "monaco" => "c#",
            "display" => "C#",
            "icon" => "devicon-csharp-plain",
            "treatment" => \App\Enums\ScratchTreatment::REPL,
        ],

        9 => [
            "name" => "deno",
            "monaco" => "typescript",
            "display" => "Deno",
            "icon" => "devicon-typescript-plain",
            "treatment" => \App\Enums\ScratchTreatment::REPL,
        ],

        10 => [
            "name" => "go",
            "monaco" => "go",
            "display" => "Golang",
            "icon" => "devicon-go-plain",
            "treatment" => \App\Enums\ScratchTreatment::REPL,
        ],

        11 => [
            "name" => "haskell",
            "monaco" => "haskell",
            "display" => "Haskell",
            "icon" => "devicon-haskell-plain",
            "treatment" => \App\Enums\ScratchTreatment::REPL,
        ],

        12 => [
            "name" => "lua",
            "monaco" => "lua",
            "display" => "Kotlin",
            "icon" => "devicon-atom-original",
            "treatment" => \App\Enums\ScratchTreatment::REPL,
        ],

        13 => [
            "name" => "perl",
            "monaco" => "perl",
            "display" => "Perl",
            "icon" => "devicon-atom-original",
            "treatment" => \App\Enums\ScratchTreatment::REPL,
        ],

        14 => [
            "name" => "python2",
            "monaco" => "python",
            "display" => "Python (2)",
            "icon" => "devicon-python-plain",
            "treatment" => \App\Enums\ScratchTreatment::REPL,
        ],

        15 => [
            "name" => "python3",
            "monaco" => "python",
            "display" => "Python (3)",
            "icon" => "devicon-python-plain",
            "treatment" => \App\Enums\ScratchTreatment::REPL,
        ],

        16 => [
            "name" => "ruby",
            "monaco" => "ruby",
            "display" => "Ruby",
            "icon" => "devicon-ruby-plain",
            "treatment" => \App\Enums\ScratchTreatment::REPL,
        ],

        17 => [
            "name" => "rust",
            "monaco" => "rust",
            "display" => "Rust",
            "icon" => "devicon-rust-plain",
            "treatment" => \App\Enums\ScratchTreatment::REPL,
        ],

        17 => [
            "name" => "scala",
            "monaco" => "scala",
            "display" => "Scala",
            "icon" => "devicon-scala-plain",
            "treatment" => \App\Enums\ScratchTreatment::REPL,
        ],

        17 => [
            "name" => "swift",
            "monaco" => "swift",
            "display" => "Swift",
            "icon" => "devicon-swift-plain",
            "treatment" => \App\Enums\ScratchTreatment::REPL,
        ],

    ]
];
