<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Novutec\WhoisParser\Parser;

class Domain extends Controller
{

    public function store()
    {
        return view('domain');
    }

    public function check_domain(Request $req)
    {

        $domains = explode(',', $req->domains);

        $domain_check = [];

        $parser = new Parser();

        $parser->setDateFormat('%d.%m.%Y');

        foreach ($domains as $key) {

            $result = $parser->lookup($key);

            array_push($domain_check, [
                'name' => $result->{'name'},
                'registered' => $result->{'registered'},
                'expires' => $result->{'expires'},

            ]);

        }

        return $domain_check;
    }
}
