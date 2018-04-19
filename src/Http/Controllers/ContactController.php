<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/19 0019
 * Time: 上午 11:22
 */
namespace Jai\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class ContactController extends Controller
{
    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        dd(Config::get("contact.message"));
        return view('contact::contact');
    }
}