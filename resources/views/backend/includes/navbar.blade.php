<style>
    .logo {
        font-size: 17px !important;
        margin-left: -20px;
    }
        .header{
height: 66px;
        }
    
</style>
<div class="header">
			<div class="header-left">
				<a href="{{url('/admin/dashboard')}}" class="logo">
					<img class="mt-3" src="{{asset('backend/assets/img/logo.png')}}" width="100" height="70" alt=""> <span class=" logo
                    mt-3">SM-Refrigeration</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars mt-3"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars mt-3"></i></a>
            <ul class="nav user-menu float-right">
                
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="fa fa-comment-o"></i> <span class="badge badge-pill bg-danger float-right">8</span></a>
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="{{asset('backend/assets/img/logo.png')}}" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
						<span>Admin</span>
                    </a>
					<div class="dropdown-menu">
						 <a class="dropdown-item" href="{{url('/admin/profile')}}">My Profile</a>
                <a class="dropdown-item" href="{{url('/admin/logout')}}">Logout</a>
					</div>
                </li>
            </ul>
        </div>