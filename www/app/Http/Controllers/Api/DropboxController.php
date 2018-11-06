<?php

namespace App\Http\Controllers\Api;

use Dropbox\AppInfo;
use Dropbox\WebAuthNoRedirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DropboxController extends Controller
{
    public function webhook(Request $request) {


    }

    public function getFiles(Request $request) {
        $folder = 'dropbox-gallery';



        $appInfo = AppInfo::loadFromJsonFile("INSERT_PATH_TO_JSON_CONFIG_PATH");
        $webAuth = new WebAuthNoRedirect($appInfo, "PHP-Example/1.0");
    }

}
