<?php
            
    function TambahData($request)
    {
    // check($request);
        
        $foto = files('foto');

        // check($foto);
        move('foto' , uploads('FotoUsers/'.$foto));

        $pass = password_hash($request->password, PASSWORD_DEFAULT);
        // check($request);
        query()->insert('users',[

            $request->username,
            $request->email,
            $pass,
            $request->level,
            $request->NISN,
            $request->alamat,
            $request->no_hp,
            $request->jenis_kelamin,
            $foto,
            $request->kelas
           
        ])->view('backend/users/data','Berhasil Ditambahkan!');

    }

    function EditData($request)
    {

        $users = query()->table('users')->where('id',$request->id)->single();

        view('backend/users/form-edit', compact('users'));

    }

    function UpdateData($request)
    {

        
        // check($request);
        if (empty(files('foto_update'))) {
            $foto_lama =query()->table('users')->where('id',$request->id)->single();
            $foto=$foto_lama->foto;
        }else{

            $foto = files('foto_update');
            $tmp  = tmp('foto');
            // check($foto);
            move(tmp('foto_update') , uploads('FotoUsers/'.$foto));

        }
        if (empty($request->password)) {
            // check($request);
            query()->update('users',[
                'username' => $request->username,
                'email' => $request->email,
                'level' => $request->level,
                'NISN' => $request->NISN,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'jenis_kelamin' => $request->jenis_kelamin,
                'foto' => $foto,
                'kelas' => $request->kelas
            ], $request->id)->view('backend/users/data',' data berhasil di ubah');
    
        }else{
            query()->update('users',[
                'username' => $request->username,
                'email' => $request->email,
                'password' => password_hash($request->password,PASSWORD_DEFAULT),
                'level' => $request->level,
                'NISN' => $request->NISN,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'jenis_kelamin' => $request->jenis_kelamin,
                'foto' => $foto,
                'kelas' => $request->kelas
            ], $request->id)->view('backend/users/data',' data berhasil di ubah');
        }

       
    }

    function HapusData($request)
    {

        query()->table('users')->where('id', $request->id)->delete()->view('backend/users/data','pesan berhasil di Hapus');

    }

    function profil($request){
        
        $profil = query()->table('users')->where('id',$request->id)->single();

        view('backend/users/profil', compact('profil'));
    }

    // users forntend
    function profil_users($request){
        
      
        $profil_users = query()->table('users')->where('id',auth()->id())->single();

     
        view('profil', compact('profil_users'));
    }


    // usersforntend
    function UpdateData_users($request)
    {

        
        // check($request);
        if (empty(files('foto_update'))) {
            $foto_lama =query()->table('users')->where('id',$request->id)->single();
            $foto=$foto_lama->foto;
        }else{

            $foto = files('foto_update');
            $tmp  = tmp('foto');
            // check($foto);
            move(tmp('foto_update') , uploads('FotoUsers/'.$foto));

        }
        if (empty($request->password)) {
            // check($request);
            query()->update('users',[
                'username' => $request->username,
                'email' => $request->email,
                'level' => $request->level,
                'NISN' => $request->NISN,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'jenis_kelamin' => $request->jenis_kelamin,
                'foto' => $foto,
                'kelas' => $request->kelas
            ], $request->id);
                // check($request);
                $profil_users = query()->table('users')->where('id',auth()->id())->single();

                // check($profil_users);
                view('profil', compact('profil_users'));    
        }else{
            query()->update('users',[
                'username' => $request->username,
                'email' => $request->email,
                'password' => password_hash($request->password,PASSWORD_DEFAULT),
                'level' => $request->level,
                'NISN' => $request->NISN,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'jenis_kelamin' => $request->jenis_kelamin,
                'foto' => $foto,
                'kelas' => $request->kelas
            ], $request->id);
             // check($request);
            $profil_users = query()->table('users')->where('id',auth()->id())->single();

            // check($profil_users);
            view('profil', compact('profil_users'));
        }

       
    }
