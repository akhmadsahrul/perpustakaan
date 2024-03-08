<?php
            
    function TambahData($request)
    {
    
        /*
        *[PandoraCode]
        *di function ini anda bisa memberikan kode
        *untuk tambah data, berikut contoh kode insert :
        */

        $foto = files('foto');

        // check($foto);
        move('foto' , asset('uploads/FotoAnggota/'.$foto));

        query()->insert('anggota',[

            $request->nama, /*isikan sebagai name inputan*/
            $request->alamat, /*isikan sebagai name inputan*/
            $request->email, /*isikan sebagai name inputan*/
            $request->no_hp, /*isikan sebagai name inputan*/
            $request->NISN, /*isikan sebagai name inputan*/
            $foto, /*isikan sebagai name inputan*/
            $request->jenis_kelamin, /*isikan sebagai name inputan*/
            $request->status /*isikan sebagai name inputan*/

        ])->view('backend/anggota/data','Berhasil Ditambahkan!');

    }

    function EditData($request)
    {

        /*
        *[PandoraCode]
        *di function ini anda bisa memberikan kode
        *untuk persiapan edit data
        */

        $anggota = query()->table('anggota')->where('id',$request->id)->single();

        view('backend/anggota/edit', compact('anggota'));

    }

    function UpdateData($request)
    {

        if (empty(files('foto_update'))) {
            $foto_lama =query()->table('anggota')->where('id',$request->id)->single();
            $foto=$foto_lama->foto;
        }else{
            $foto = files('foto_update');
            move('foto' , asset('uploads/FotoAnggota/'.$foto));

        }

        query()->update('anggota',[

            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'NISN' => $request->NISN,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'foto' => $foto,
            'status' =>$request->status

        ], $request->id)->view('backend/anggota/data',' data berhasil di ubah');

    }

    function HapusData($request)
    {

        /*
        *[PandoraCode]
        *di function ini anda bisa membrikan kode
        *untuk delete data
        */

        query()->table('anggota')->where('id', $request->id)->delete()->view('backend/anggota/data','pesan berhasil di Hapus');

    }