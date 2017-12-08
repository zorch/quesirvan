<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

use Illuminate\Foundation\Bus\DispatchesJobs;

use League\Fractal\Manager;


class ApiController extends BaseController {

  use DispatchesJobs;
    /**
     * @var int
     */
    protected $statusCode = 200;

    public function __construct()
    {
        $this->fractal   = new Manager();
    }

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }


    /**
     * @param mixed $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }


    /**
     * @param string $message
     * @return mixed
     */
    public function respondNoResults($message = 'No results found')
    {
        return $this->setStatusCode(204)->respondWithError($message);
    }


    /**
     * @param string $message
     * @return mixed
     */
    public function respondUnauthorized($message = 'Unauthorized')
    {
        return $this->setStatusCode(401)->respondWithError($message);
    }

     /**
     * @param string $message
     * @return mixed
     */
    public function respondBadRequest($message = 'Bad Request')
    {
        return $this->setStatusCode(400)->respondWithError($message);
    }


    /**
     * @param string $message
     * @return mixed
     */
    public function respondDuplicateEntry($message = 'Duplicate Entry')
    {
        return $this->setStatusCode(409)->respondWithError($message);
    }


    /**
     * @param string $message
     * @return mixed
     */
    public function respondResourceGone($message = 'That resource no longer exists')
    {
        return $this->setStatusCode(410)->respondWithError($message);
    }


    /**
     * @param string $message
     * @return mixed
     */
    public function respondNotFound($message = 'Not Found')
    {
        return $this->setStatusCode(404)->respondWithError($message);
    }


    /**
     * @param string $message
     * @return mixed
     */
    public function respondInternalError($message = 'Internal Error')
    {
        return $this->setStatusCode(500)->respondWithError($message);
    }


    /**
     * @param string $message
     * @return mixed
     */
    public function respondValidationFailed($message = 'Validation Failed')
    {
        return $this->setStatusCode(422)->respondWithError($message);
    }


    /**
     * @param $data
     * @param array $headers
     * @return mixed
     */
    public function respond($data, $headers = [])
    {
        return response()->json($data, $this->getStatusCode(), $headers);
    }


    /**
     * @param $message
     * @return mixed
     */
    public function respondWithSuccessMessage($message)
    {
        return $this->respond([
            'message' => $message
        ]);
    }

    /**
     * @param $array
     * @return mixed
     */
    public function respondWithSuccessCustom($array)
    {
        return $this->respond($array);
    }

    /**
     * @param $message
     * @return mixed
     */
    public function respondWithSuccess($message)
    {
        return $this->respond([
            'data' => $message
        ]);
    }


    /**
     * @param $message
     * @return mixed
     */
    public function respondWithError($message)
    {
        return $this->respond([
            'error' => [
                'message' => $message,
                'status_code' => $this->getStatusCode()
            ]
        ]);
    }

    /**
     * @param $message
     * @return mixed
     */
    public function respondWithErrorMeta($message, $date)
    {
        return $this->respond([
            'error' => [
                'message' => $message,
                'status_code' => $this->getStatusCode()
            ],
            'meta' => ['date'=>$date]
        ]);
    }


    /**
     * @param $message
     * @return mixed
     */
    public function respondCreated($message)
    {
        return $this->setStatusCode(201)->respond([
            'data' => $message
        ]);
    }

}
