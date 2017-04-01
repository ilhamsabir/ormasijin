@extends('app.layout')

@section('content')
<div class="container container-app">
  <div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Pesan</a></li>
        <li class="active">Data</li>
      </ol>
      <div class="ibox chat-view">
            <div class="ibox-content">
                <div class="row">
                  <div class="col-md-12 ">
                    <div class="chat-discussion" id="chat-user">

                    </div>
                    <div class="chat-form">
                      <form class="" action="{{ url('app/usersend') }}" method="post">
                          {{ csrf_field() }}
                        <div class="col-lg-10">
                            <div class="form-group">
                                <textarea class="form-control " name="isi" placeholder="Enter message text"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg message-input" name="button"><i class="fa fa-paper-plane-o"></i> Send</button>
                            </div>
                        </div>
                      </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
</div>
</div>
@endsection
