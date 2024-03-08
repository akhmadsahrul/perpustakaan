<?php

    function TambahData($request)
    {

        query()->insert('nama_table',[

            $request->name_inputan1,
            $request->name_inputan2

        ])->view('backend/folder/file','pesan jika berhasil');

    }

    function EditData($request)
    {

        $data = query()->table('nama_table')->where('id',$request->id)->single();

        view('backend/folder/file', compact('data'));

    }

    function UpdateData($request)
    {

        query()->update('nama_table',[

            'column' => $request->name_input,
            'column2' => $request->name_input2

        ], $request->id)->view('backend/folder/file','pesan jika berhasil');

    }

    function HapusData($request)
    {

        $id = $request->id_delete;

        for ($i=0; $i < count($request->id_delete) ; $i++) { 
            
            query()->table('nama_table')->where('id', $id[$i])->delete();
            
        }

        alert('Berhasil !','Data berhasil dihapus');
        view('backend/folder/data');

    }


    function laporan ($request){


        $buku_laporan = query()->table('peminjaman')
                                ->select('peminjaman.*,buku.*,users.*,peminjaman_detail.*')
                                ->join('peminjaman_detail','peminjaman.id = peminjaman_detail.peminjaman_id')
                                ->join('users','peminjaman.NISN = users.NISN',)
                                ->leftjoin('buku','peminjaman_detail.buku_id = buku.id')
                                ->where('tanggal_pinjam','>=',$request->tanggal_awal)
                                ->andWhere('tanggal_kembali','<=',$request->tanggal_akhir)
                                ->andWhere('status','pinjam')
                                ->get();

        view('backend/laporan_pinjam/data', compact('buku_laporan'));
    }
    function laporan_pengembalian($request){

        $buku_laporan = query()->table('peminjaman')
                                ->select('peminjaman.*,buku.*,users.*,peminjaman_detail.*')
                                ->join('peminjaman_detail','peminjaman.id = peminjaman_detail.peminjaman_id')
                                ->join('users','peminjaman.NISN = users.NISN',)
                                ->leftjoin('buku','peminjaman_detail.buku_id = buku.id')
                                ->where('tanggal_pinjam','>=',$request->tanggal_awal)
                                ->andWhere('tanggal_kembali','<=',$request->tanggal_akhir)
                                ->andWhere('status','dikembalikan')
                                ->get();

        view('backend/laporan_kembali/data', compact('buku_laporan'));
    }
    /*[PandoraCode - Phoenix - Controller]*/
    