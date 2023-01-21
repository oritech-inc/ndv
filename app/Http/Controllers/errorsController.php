<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class errorsController extends Controller
{
    public function index()
    {
        $err_obj = [
            'code' =>'404',
            'name' =>'Page Not Found',
            'text' =>'Page Not Found',
        ];
        return view('error')->with($err_obj);
    }

    function getErrors(){
        return array(
            [   
                'code'      =>'404',
                'status'    =>'Not Found',
                'text'      =>'This site cannot be reached',
                'message'   =>'The file or page that the browser is requesting was not found by the server',
            ],
            [   
                'code'      =>'410',
                'status'    =>'Gone',
                'text'      =>'This page has expired',
                'message'   =>'The page is no longer available from the server and no forwarding address has been set up',
            ],
            [   
                'code'      =>'500',
                'status'    =>'Internal Server Error',
                'text'      =>'This page is not working',
                'message'   =>'Server is currently unable to handle the request, the page is missing or not found',
            ],
            [   
                'code'      =>'503',
                'status'    =>'Gone',
                'text'      =>'This page is not working',
                'message'   =>'The page is no longer available from the server and no forwarding address has been set up',
            ]
        );
    }
}
