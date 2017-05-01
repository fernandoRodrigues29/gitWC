<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class spiderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function get_string_between($string, $start, $end){
        $string = ' ' . $string;
          $ini = strpos($string, $start);
           if ($ini == 0) return '';
                $ini += strlen($start);
                    $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }

    public function index()
    {
        $html = file_get_contents("http://www.portal.scf.sebrae.com.br/licitante/frmPesquisarAvancadoLicitacao.aspx");
        $hrefs = array();

        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($html);
        libxml_use_internal_errors(false);
        $tags = $dom->getElementsByTagName('a');
            $row = array();
            foreach ($tags as $tag) {
              $verifyTag =  $tag->getAttribute("class");
              if($verifyTag == "unidade"){
                $fullstring = $tag->nodeValue;
                    $nameVanilla = $this->get_string_between($fullstring, 'Sebrae/', 'Objeto');
                        $uf   = substr($nameVanilla,0, 3);
                        $name   = substr($nameVanilla, 3);

                        //$event['name'] = get_string_between($fullstring, 'Sebrae/', 'Objeto');
                        $event['name'] = $name;
                        $event['uf'] = $uf;

                    //$event['name'] = $this->get_string_between($fullstring, 'Sebrae/', 'Objeto');
                    $event['objective'] = $this->get_string_between($fullstring, 'Objeto:', 'Data de Abertura');
                    $event['starting_date'] = $this->get_string_between($fullstring, 'Data de Abertura : ', 'Situação');
                    $row[] = $event;
              }
           }
          //print
           //echo var_dump($row);
           return view('spiderHome')->with("poorFlyes", $row);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
