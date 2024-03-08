<?php

    function TambahData($data)
    {

        // check($data);

        $buku = query()->table('buku')->where('id',$data->id)->single();

        $users = query()->table('users')->where('id',auth()->id())->single(); 

        // check($users);
        $nisn = $users->NISN;
        $anggota = $users->username;
        $kode_buku = $users->kode_buku;
        $judulbuku = $users->judul_buku;
        $tanggal_pinjam = date('Y-m-d');
        $tanggal_kembali = $data->tanggal_kembali[0];
        $status = "Pinjam";
        

        query()->insert('peminjaman',[
            $users->NISN,
            $anggota,
            $kode_buku,
            $judulbuku,
            $status,
            $tanggal_pinjam,
            $tanggal_kembali,
            'null'
            
        ]);

        $peminjaman_id = getId();

        for ($i=0; $i < count($data->buku_id) ; $i++) { 

            $buku = query()->table('buku')->where('id', $data->buku_id[$i])->single();

            query()->update('buku',[

                'stok' => $buku->stok - $data->qty[$i]
              
    
             
    
            ], $data->buku_id[$i]);
            
            query()->insert('peminjaman_detail',[
                $data->buku_id[$i],
                $data->qty[$i],
                $peminjaman_id 
            ]);

            // echo $data->buku_id[$i];

        }

        if ($data->frontend) {
            view('peminjaman');
        }else{
            view('backend/peminjaman/data',compact('variable'));

        }


    }

    function EditData($request)
    {

        $variable = query()->table('peminjaman')->where('id',$request->id)->single();

        view('backend/peminjaman/file', compact('variable'));

    }

    function UpdateData($request)
    {

        query()->update('nama_table',[

            'column' => $request->name_input,
            'column2' => $request->name_input2,

         

        ], $request->id)->view('backend/folder/file','pesan jika berhasil');

    }

    function HapusData($request)
    {

        query()->table('peminjaman')->where('id', $request->id)->delete()->view('backend/peminjaman/data','pesan  berhasil di Hapus');;
        // query()->delete('peminjaman', $request->id)->view('backend/peminjaman/data','pesan jika berhasil');

    }
    function HapusDataKembali($request)
    {

        query()->table('peminjaman')->where('id', $request->id)->delete()->view('backend/pengembalian/data','pesan  berhasil di Hapus');;
        // query()->delete('peminjaman', $request->id)->view('backend/peminjaman/data','pesan jika berhasil');

    }


    function detailpeminjaman($request){

        $detail = query()->table('peminjaman')
                         ->select('peminjaman.*,buku.*,users.*,peminjaman_detail.*')
                         ->join('peminjaman_detail','peminjaman.id = peminjaman_detail.peminjaman_id')
                         ->join('users','peminjaman.NISN = users.NISN',)
                         ->leftjoin('buku','peminjaman_detail.buku_id = buku.id')
                         ->where('peminjaman.id', $request->id)
                         ->single();

        $data_buku = query()->table('peminjaman_detail')
                            ->join('buku','buku.id = peminjaman_detail.buku_id')
                            ->where('peminjaman_detail.peminjaman_id', $detail->peminjaman_id)
                            ->get();                                    
        // check($request);
        view('backend/peminjaman/detail-peminjaman',compact('detail','data_buku'));
    }

    function pengembalian($request){

        query()->update('peminjaman',[

            'status' => 'dikembalikan',
            'tanggal_balik' =>date('Y-m-d')

        ], $request->id)->view('backend/pengembalian/data','berhasil di kembalikan');

    }
    
    function detail_pengembalian($request){

        $detail = query()->table('peminjaman')
        ->select('peminjaman.*,buku.*,users.*,peminjaman_detail.*')
        ->join('peminjaman_detail','peminjaman.id = peminjaman_detail.peminjaman_id')
        ->join('users','peminjaman.NISN = users.NISN',)
        ->leftjoin('buku','peminjaman_detail.buku_id = buku.id')
        ->where('peminjaman.id', $request->id)
        ->single();

        $data_buku = query()->table('peminjaman_detail')
                ->join('buku','buku.id = peminjaman_detail.buku_id')
                ->where('peminjaman_detail.peminjaman_id', $detail->peminjaman_id)
                ->get();

        $denda = query()->table('denda')
                        ->select('denda.*')
                        ->where('status','aktif')
                        ->single();

        view('backend/pengembalian/detail-pengembalian',compact('detail','data_buku', 'denda'));
    }

    // untuk users
    function detailpeminjaman_user($request){

        $detail = query()->table('peminjaman')
                         ->select('peminjaman.*,buku.*,users.*,peminjaman_detail.*')
                         ->join('peminjaman_detail','peminjaman.id = peminjaman_detail.peminjaman_id')
                         ->join('users','peminjaman.NISN = users.NISN',)
                         ->leftjoin('buku','peminjaman_detail.buku_id = buku.id')
                         ->where('peminjaman.id', $request->id)
                         ->single();

       $data_buku = query()->table('peminjaman_detail')
                         ->join('buku','buku.id = peminjaman_detail.buku_id')
                         ->where('peminjaman_detail.peminjaman_id', $detail->peminjaman_id)
                         ->get();                                    
                         
                        
        view('detail-peminjaman',compact('detail','data_buku'));
    }

    function detailpengembalian_user($request){

        $detail = query()->table('peminjaman')
        ->select('peminjaman.*,buku.*,users.*,peminjaman_detail.*')
        ->join('peminjaman_detail','peminjaman.id = peminjaman_detail.peminjaman_id')
        ->join('users','peminjaman.NISN = users.NISN',)
        ->leftjoin('buku','peminjaman_detail.buku_id = buku.id')
        ->where('peminjaman.id', $request->id)
        ->single();

        $data_buku = query()->table('peminjaman_detail')
                ->join('buku','buku.id = peminjaman_detail.buku_id')
                ->where('peminjaman_detail.peminjaman_id', $detail->peminjaman_id)
                ->get();

        $denda = query()->table('denda')
                        ->select('denda.*')
                        ->where('status','aktif')
                        ->single();

        view('detail-pengembalian',compact('detail','data_buku', 'denda'));
    }

    /*[PandoraCode - Phoenix - Controller]*/
    