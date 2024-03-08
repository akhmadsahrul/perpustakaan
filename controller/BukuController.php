<?php

    function TambahData($request)
    {
        $foto = files('foto');
        $tmp  = tmp('foto');
         move($tmp , '../../resource/assets/uploads/'.$foto);


        $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        // Output: 54esmdr0qf
        $kode_buku=substr(str_shuffle($permitted_chars), 0, 5);

        // check($request);

        query()->insert('buku',[


            $request->kategori_id, /*isikan sebagai isi atribut name elemen input/select dll...*/
            $request->judul, /*isikan sebagai isi atribut name elemen input/select dll...*/
            $request->penerbit, /*isikan sebagai isi atribut name elemen input/select dll...*/
            $request->tahun_terbit, /*isikan sebagai isi atribut name elemen input/select dll...*/
            $request->pengarang, /*isikan sebagai isi atribut name elemen input/select dll...*/
            $foto, /*isikan sebagai isi atribut name elemen input/select dll...*/
            $request->stok, /*isikan sebagai isi atribut name elemen input/select dll...*/
            $kode_buku /*isikan sebagai isi atribut name elemen input/select dll...*/

        ])->view('backend/buku/data','pesan jika berhasil di tambahkan');

    }

    function EditData($request)
    {
        
        $buku = query()->table('buku')->where('id',$request->id)->single();

        view('backend/buku/edit-buku', compact('buku'));

    }

    function UpdateData($request)
    {
        $foto = files('foto');
        $tmp  = tmp('foto');
        move($tmp , '../../resource/assets/uploads/'.$foto);
        
        $dataLama = query()->table('buku')->where('id', $request->id)->single();

        if (empty($foto)) {

            $foto = $dataLama->foto;

        }else{

            move('foto' , asset('uploads/'.$foto));

        }

        

        query()->update('buku',[

            'kategori_id' => $request->kategori_id,
            'judul' => $request->judul,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'pengarang' => $request->pengarang,
            'foto' => $foto,
            'stok' => $request->stok,
            'kode_buku' => $request->kode_buku

        ], $request->id)->view('backend/buku/data',' berhasil diubah');

    }

    function HapusData($request)
    {

        query()->table('buku')->where('id', $request->id)->delete()->view('backend/buku/data','pesan jika berhasil');

    }

    function detailbuku($request)
    {
        
        $detailbuku = query()
                    ->table('buku' )
                    ->join('categories','buku.kategori_id = categories.id')
                    ->where('buku.id',$request->id)
                    ->single();

        

        view('backend/buku/detail-buku', compact('detailbuku'));

    }
   
    function bukudetail($request)
    {
        
        $bukudetail = query()
        ->table('buku')
        ->join('categories','buku.kategori_id = categories.id')
        ->where('buku.id',$request->id)
        ->single();
        
        
        // check($bukudetail);
        
        view('buku-detail', compact('bukudetail'));

    }
   
    /*[PandoraCode - Phoenix - Controller]*/
    