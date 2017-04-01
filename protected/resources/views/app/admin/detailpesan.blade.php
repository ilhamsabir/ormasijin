@extends('app.layout')
@section('content')

<div class="container container-app">
  <div class="row">
    <div class="col-md-12 card-table">
      <div class="ibox chat-view">
            <div class="ibox-content">
                <div class="row">
                  <div class="col-md-12 ">
                    <div class="chat-discussion">
                    @foreach ($data as $key)
                      @if (($key->toidpesan) === (Auth::user()->id) )
                        <div class="chat-message left">
            							<img class="message-avatar" src="../../public/img/cs1.png" alt="">
            							<div class="message">
            									<a class="message-author" href="#"> {{ $key->name }}</a>
            									<span class="message-date"> {{ $key->pesancreated_at }}</span>
            									<span class="message-content">{{ $key->isipesan }} </span>
            							</div>
            						</div>
                      @else
                      <div class="chat-message right">
            							<img class="message-avatar" id="pesan-user-admin-detail" data-id="{{ $key->fromidpesan }}" src="../../public/img/user.png" alt="">
                          <div class="message">
                              <a class="message-author" href="#"> {{ $key->name }}</a>
                              <span class="message-date"> {{ $key->pesancreated_at }}</span>
                              <span class="message-content">{{ $key->isipesan }} </span>
                          </div>
            					</div>
                      @endif
                    @endforeach
                    </div>
                    <div class="chat-form">
                      <form class="" action="{{ url('admin/adminsendpesan') }}" method="post">
                          {{ csrf_field() }}
                        <div class="col-lg-10">
                            <div class="form-group">
                                <input type="hidden" name="toid" value="" id="toid-from-admin">
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
