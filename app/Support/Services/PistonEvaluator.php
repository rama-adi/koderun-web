<?php


namespace App\Support\Services;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use mysql_xdevapi\Exception;

class PistonEvaluator
{
    protected string $code;
    protected int $languageId;
    protected string $languageName;

    public function __construct(int $languageId, string $code)
    {
        $this->languageId = $languageId;
        $this->languageName = scratch_lang($languageId)['name'];
        $this->code = $code;

    }

    public function executeCode()
    {
        $response = Http::asJson()->post(env('PISTON_ENDPOINT'), [
            "language" => $this->languageName,
            "source" => $this->code
        ])->json();

        try{
            return $this->printResult(
                $this->languageId,
                $response['version'],
                $response['output'],
                $response['stdout'],
                $response['stderr'],
            );
        }catch (\Exception $e){
            return "Compiler menemukan error: {$response['message']}";
        }

    }

    public function printResult
    (
        string $language,
        string $version,
        string $output,
        string $stdout,
        string $stderr
    )
    {
        return view('standalone.code-output', [
            'language' => $language,
            'version' => $version,
            'output' => $output,
            'stdout' => $stdout,
            'stderr' => $stderr,
        ])->render();
    }
}
