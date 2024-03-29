<?php

    namespace App\Filters;

    use CodeIgniter\HTTP\RequestInterface;
    use CodeIgniter\HTTP\ResponseInterface;
    use CodeIgniter\Filters\FilterInterface;

    class ReCaptcha implements FilterInterface
    {
        public function before(RequestInterface $request, $arguments = null)
        {
            if ($request->getMethod() == 'post')
            {
                if ($request->getPost('g-recaptcha-response'))
                {
                    $client = \Config\Services::curlrequest();

                    $response = $client->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
                        'form_params' => [
                            'secret' => '6LfpwpMaAAAAAIMoFL4reKlhC9iGUdoE6wYT7pL4',
                            'response' => $request->getPost('g-recaptcha-response'),
                            'remoteip' => $request->getIPAddress()
                        ]
                    ]);

                    $jsonResponse = json_decode($response->getBody());

                    if (!isset($jsonResponse->success) || !$jsonResponse->success)
                    {
                        return redirect()->back()->with('error', lang('Errors.text.recaptcha'));
                    }
                }
                else
                {
                    return redirect()->back()->with('error', lang('Errors.text.recaptcha'));
                }
            }
        }

        public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
        {

        }
    }
