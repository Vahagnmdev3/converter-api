<?php


namespace App\Http\Controllers\Api;


use App\Converters\ConverterContract;
use App\Http\Controllers\Controller;

class HelpController extends Controller
{
    /**
     * @var ConverterContract
     */
    private $converter;

    /**
     * HelpController constructor.
     *
     * @param ConverterContract $converter
     */
    public function __construct(ConverterContract $converter)
    {
        $this->converter = $converter;
    }

    /**
     * Return help message json
     *
     * @return array
     */
    public function index()
    {
        return $this->converter->help();
    }
}
