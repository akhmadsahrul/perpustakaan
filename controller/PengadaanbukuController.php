<?php

    function TambahData($request)
    {
        $tanggal = $request->tanggal;
        $tanggal = explode('-',$tanggal);
        $tanggal = $tanggal[2]."-".$tanggal[1]."-".$tanggal[0];

        $id_buku=$request->judul;
        $data = query()->table('buku')->where('id',$id_buku)->single();
        var_dump($data->stok);
        $jumlah=$data->stok+$request->jumlah;
        
        query()->update('buku',[

            'stok' => $jumlah
            
        ], $id_buku);
        
        query()->insert('pengadaanbuku',[

            $tanggal,
            $request->judul,
            $request->jumlah,
            $request->keterangan,

        ])->view('backend/pengadaanbuku/data','berhasil Di Tambahkan');

    }

    function EditData($request)
    {

        $data = query()->table('pengadaanbuku')->where('id',$request->id)->single();
        view('backend/pengadaanbuku/form-edit', compact('data'));

    }

    function UpdateData($request)
    {

        $id_buku=$request->judul;
        $data = query()->table('buku')->where('id',$id_buku)->single();
        // var_dump($data->stok);
        $jumlah=$data->stok+$request->jumlah;
        
        query()->update('buku',[

            'stok' => $jumlah
            
        ], $id_buku);

        query()->update('pengadaanbuku',[

            'tanggal' => $request->tanggal,
            'judul' => $request->judul,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,

        ], $request->id)->view('backend/pengadaanbuku/data','pesan berhasil di update');

    }

    function HapusData($request)
    {

        $id = $request->id_delete;

        for ($i=0; $i < count($request->id_delete) ; $i++) { 
            
            $data = query()->table("pengadaanbuku")
            ->select('*,pengadaanbuku.id AS pengadaanbuku_id,buku.id AS buku_id')
            ->join('buku', 'pengadaanbuku.judul = buku.id')
            ->where('pengadaanbuku.id',$id[$i])->single();
            $stok_buku = $data->stok;
            $jumlah = $data->jumlah;
            $kurang = $stok_buku-$jumlah;
            query()->update('buku',[

                'stok' => $kurang
                
            ], $data->buku_id);
            query()->table('pengadaanbuku')->where('id', $id[$i])->delete();
            
        }

        alert('Berhasil !','Data berhasil dihapus');
        view('backend/pengadaanbuku/data');

    }

    /*[PandoraCode - Phoenix - Controller]*/
    