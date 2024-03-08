<?php

    function TambahData($request)
    {

        query()->insert('penerbit',[

            $request->penerbit
            

        ])->view('backend/penerbit/data','Berhasil!');

    }

    function EditData($request)
    {

        $data = query()->table('penerbit')->where('id',$request->id)->single();

        view('backend/penerbit/form-edit', compact('data'));

    }

    function UpdateData($request)
    {

        query()->update('penerbit',[

            'penerbit' => $request->penerbit
            

        ], $request->id)->view('backend/penerbit/data','Berhasil!');

    }

    function HapusData($request)
    {

        $id = $request->id_delete;

        for ($i=0; $i < count($request->id_delete) ; $i++) { 
            
            query()->table('penerbit')->where('id', $id[$i])->delete();
            
        }

        alert('Berhasil !','Data berhasil dihapus');
        view('backend/penerbit/data');

    }

   /*
    |--------------------------------------------------------------------------
    | PandoraCode Phoenix
    |--------------------------------------------------------------------------
    |
    | Nama File   : PenerbitController
    | Dibuat pada : 23 Mar 2022 23:33
    | 
    */