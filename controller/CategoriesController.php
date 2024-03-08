<?php
            
    function TambahData($request)
    {

        /*
        *[PandoraCode]
        *di function ini anda bisa memberikan kode
        *untuk tambah data, berikut contoh kode insert :
        */
        query()->insert('categories',[

            $request->nama,
            $request->keterangan

        ])->view('backend/categories/data','Berhasil Ditambahkan!');

    }

    function EditData($request)
    {

        /*
        *[PandoraCode]
        *di function ini anda bisa memberikan kode
        *untuk persiapan edit data
        */

        $categories = query()->table('categories')->where('id',$request->id)->single();

        view('backend/categories/edit', compact('categories'));

    }

    function UpdateData($request)
    {

        /*
        *[PandoraCode]
        *di function ini anda bisa memberikan kode
        *untuk update data
        */

        query()->update('categories',[

            'nama' => $request->nama,
            'keterangan' => $request->keterangan

        ], $request->id)->view('backend/categories/data','pesan  berhasil di edit');

    }

    function HapusData($request)
    {

        /*
        *[PandoraCode]
        *di function ini anda bisa memberikan kode
        *untuk delete data
        */

        query()->table('categories')->where('id', $request->id)->delete()->view('backend/categories/data','pesan  berhasil di Hapus');;

    }