<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
        "http://192.168.1.5/VN-GYM/public/checklogin",
        "http://192.168.1.5/VN-GYM/public/searchproduct",
        "http://192.168.1.5/VN-GYM/public/cartproduct",
        "http://192.168.1.5/VN-GYM/public/addcartproduct",
        "http://192.168.1.5/VN-GYM/public/getsameproduct",
        "http://192.168.1.5/VN-GYM/public/addorder",
        "http://192.168.1.5/VN-GYM/public/getorder",
        "http://192.168.1.5/VN-GYM/public/ratingdetailproduct",
        "http://192.168.1.5/VN-GYM/public/commentproduct",
        "http://192.168.1.5/VN-GYM/public/updateprofile",
    ];
}
