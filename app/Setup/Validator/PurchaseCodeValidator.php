<?php


namespace App\Setup\Validator;


use App\Setup\Helper\RequestSender;
use App\Setup\Helper\UrlHelper;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;

class PurchaseCodeValidator
{
    use UrlHelper;

    protected $request;

    public function __construct(RequestSender $request)
    {
        $this->request = $request;
    }

    public function validate($code = null)
    {
		//nulled
		return (object)['status' => true, 'message' => 'Valid code!', 'data' => 'Verified', 'code' => 'liccode'];
        try {
            return $this->request->get(
                $this->url($code)
            );
        }catch (ClientException $exception) {
            return false;
        }
    }

}
