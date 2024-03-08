<?php

    function TambahData($request)
    {
        if($request->status == "aktif"){
            $data=query()->table('denda')->where('status','aktif')->single();
    
            query()->update('denda',[
                'status'=>'tidak aktif'
            ],$data->id);
        }

        query()->table('denda');

        query()->insert('denda',[

            $request->harga,
            $request->status,
            $request->tanggal_tetap,

        ])->view('backend/denda/data','Berhasil!');

    }

    function EditData($request)
    {

        $data = query()->table('denda')->where('id',$request->id)->single();

        view('backend/denda/form-edit', compact('data'));

    }

    function UpdateData($request)
    {
        $data=query()->table('denda')->where('status','aktif')->single();
    
        query()->update('denda',[
            'status'=>'tidak aktif'
        ],$data->id);

        query()->update('denda',[

            'harga' => $request->harga,
            'status' => $request->status,
            'tanggal_tetap'=>$request->tanggal_tetap

        ], $request->id)->view('backend/denda/data','Berhasil di Ubah!');

    }

    function HapusData($request)
    {

        query()->table('denda')->where('id', $request->id)->delete()->view('backend/denda/data','pesan  berhasil di Hapus');;

       
    }

   /*
    |--------------------------------------------------------------------------
    | PandoraCode Phoenix
    |--------------------------------------------------------------------------
    |
    | Nama File   : DendaController
    | Dibuat pada : 13 Feb 2022 13:58
    | 
    */