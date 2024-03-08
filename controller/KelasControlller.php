<?php

    function TambahData($request)
    {

        query()->insert('kelas',[

            $request->jurusan


        ])->view('backend/kelas/data','Berhasil!');

    }

    function EditData($request)
    {

        $data = query()->table('kelas')->where('id',$request->id)->single();

        view('backend/kelas/form-edit', compact('data'));

    }

    function UpdateData($request)
    {

        query()->update('kelas',[

            'jurusan' => $request->jurusan
            

        ], $request->id)->view('backend/kelas/data','Berhasil!');

    }

    function HapusData($request)
    {

        $id = $request->id_delete;

        for ($i=0; $i < count($request->id_delete) ; $i++) { 
            
            query()->table('kelas')->where('id', $id[$i])->delete();
            
        }

        alert('Berhasil !','Data berhasil dihapus');
        view('backend/kelas/data');

    }

   /*
    |--------------------------------------------------------------------------
    | PandoraCode Phoenix
    |--------------------------------------------------------------------------
    |
    | Nama File   : KelasControlller
    | Dibuat pada : 20 Mar 2022 13:49
    | 
    */