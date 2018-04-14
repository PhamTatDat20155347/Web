            @if(Auth::user())
            <div class="col-md-3 " style="">
                <ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu1 active" style="background-color: #0B5C46;">
                    	Menu
                    </li>
                    <li  class="list-group-item menu1">
                      <a href="nhatuyendung/danhsach" >Danh sách</a>
                  </li>

                  <li class="list-group-item">
                    <a href="nhatuyendung/them">Thêm bài</a>
                </li>

            </ul>
        </div>
        @else
        <div class="col-md-3 " style="height: 100px;">
            <ul class="list-group" id="menu">
                <li  class="list-group-item menu1 active" style="background-color: #0B5C46; height: 100px;">
                  <h2 align="center">Bách Khoa</h2>
                </li>
                <li  class="list-group-item menu1">
                    <a ></a>
              </li>

              <li class="list-group-item">
                <a href="nhatuyendung/them"></a>
            </li>

        </ul>
    </div>
    @endif