@extends('layout/main_layout_v2')

@section('content')     
    
<div class="row" style="margin-top:10%;">
    <div class="container">
        <!--Login-->
        <form method="POST" action="check-login.php">
            <div class="col s12 m12 l6 offset-l3 card-panel z-depth white">
                <div class="card-title center">
                    <h4>Masuk</h4>
                </div>

                <!--input text nama pengguna-->
                <div class="col s12 m12 l12 input-field e-input-field">
                    <input type="text" name="username" id="icon_prefix" class="validate">
                    <label for="icon_prefix">Nama Pengguna</label>
                </div>

                <!--input text password-->
                <div class="col s12 m12 l12 input-field e-input-field">
                    <input type="password" name="password" id="icon_prefix" class="validate">
                    <label for="icon_prefix">Kata Sandi</label>
                </div>

                <!--Button-->
                <div class="row">
                    <div class="col s12 m12 l12 center">
                        <input name="login" type="submit" value="Masuk" class="modal-action modal-close waves-effect waves-light btn red darken-2">
                    </div>
                  </div>

            </div>
        </form>
    </div>		
</div>

@endsection