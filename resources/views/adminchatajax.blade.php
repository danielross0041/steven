<h4 class="card-title">Chats</h4>
<div class="chat-box scrollable" style="height: 475px">
                    <!--chat Row -->
                    <ul class="chat-list">
                      <!--chat Row -->
                    @foreach($messages as $message)
                      <!--chat Row -->
                      @if($message->from!=Auth()->user()->id)
                      <li class="chat-item">
                        <div class="chat-img">
                          <img src="{{asset('storage/'.$user->image}}" alt="user" />
                        </div>
                        <div class="chat-content">
                          <h6 class="font-medium">{{$user->name}}</h6>
                          <div class="box bg-light-info">
                          {{$message->message}}
                          </div>
                        </div>
                        <div class="chat-time">{{date_format($message->created_at,'H:i:s')}}</div>
                      </li>
                      @else
                      <!--chat Row -->
                      <li class="odd chat-item">
                        <div class="chat-content">
                          <div class="box bg-light-inverse">
                            {{$message->message}}
                          </div>
                          <br />
                        </div>
                      </li>
                      @endif
                      <!--chat Row -->
                     @endforeach
                      <!--chat Row -->
                     
                      <!--chat Row -->
                    </ul>
                  </div>
                </div>
                <div class="card-body border-top">
                  <div class="row">
                    <div class="col-11">
                      <div class="input-field mt-0 mb-0">
                        <textarea
                          id="textarea1"
                          placeholder="Type and enter"
                          class="form-control border-0"
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-1">
                      <a
                        id="chat-submit" class="btn-circle btn-lg btn-cyan float-end text-white"
                        href="javascript:sendMessage({{$user->id}});"
                        ><i class="mdi mdi-send fs-3"></i
                      ></a>
                    </div>
                  </div>
                </div>