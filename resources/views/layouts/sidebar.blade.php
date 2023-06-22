Sidebar start
***********************************-->
<div class="dlabnav" >
    <div class="dlabnav-scroll">	
        <ul class="metismenu" id="menu">
            <hr>
            <span class="nav-text" style="margin-left:40px;color:white"><strong>Basics</strong></span>
           <br>
            <li>
                <a href="javascript:void(0);" >
                    <i class="material-symbols-outlined">home</i>
                    <span class="nav-text active" >Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
                    {{-- <li><a href="index-2.html">Dashboard Dark</a></li> --}}
                
                </ul>

            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false" >
                <i class="material-symbols-outlined">person</i>
                <span class="nav-text" style="margin-right: 1px"> My Account </span>
            </a>
            <ul aria-expanded="false">
                <li><a href="student.html">My Profile</a></li>
                <li><a href="student-detail.html">Security</a></li>
                
            </ul>

            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">apartment</i>
                <span class="nav-text">Manage Company</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{url('/company')}}">Manage Comapany </a></li>
                <li><a href="{{url('/branch')}}">Manage Branch</a></li>
                <li><a href="teacher-detail.html">Payment Account</a></li>
            </ul>

            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">price_change</i>
                <span class="nav-text">Manage Billing</span>
            </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('/invocing')}}">Invoicing</a></li>
                    <li><a href="{{url('/payment_processing ')}}">Payment Processing</a></li>
                </ul>

            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="material-icons">groups</i>	
                <span class="nav-text">Manage HR</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{url('/employee')}}">Employee Details</a></li>
                {{-- <li><a href="user.html">User</a></li>	
                <li><a href="celandar.html">Calendar</a></li>		 --}}
                	
            </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="material-icons">person</i>
                <span class="nav-text">Manage Client</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('/client_details')}}">Client Details</a></li>
                    <li><a href="{{url('/order_history')}}">Order History</a></li>
                   
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> inventory </i>
                    <span class="nav-text">Manage Product</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('/product_details')}}">Product details </a></li>
                    <li><a href="{{url('/product_categories')}}">product categories</a></li>
                   
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    
                    <i class="material-icons"> list_alt </i>
                    <span class="nav-text">Manage Orders</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('/order_history')}}">Order History</a></li>
                    <li><a href="{{url('/order_tracking')}}">Order Tracking</a></li>

                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-icons"> payments</i>
                    <span class="nav-text">Manage Finance</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('/expenses')}}">Expenses</a></li>
                    <li><a href="{{url('/revenue')}}">Revenue </a></li>
                    <li><a href="{{url('/profit')}}">Profit</a></li>
                   
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-icons"> report </i>
                    <span class="nav-text">Manage Reports</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./widget-chart.html">Order history</a></li>
                    <li><a href="./widget-card.html">Sales</a></li>
                    <li><a href="./widget-list.html">Expenses </a></li>
                    <li><a href="./widget-list.html">Revenue </a></li>
                    <li><a href="./widget-list.html">Profit </a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                    <i class="material-icons"> support_agent </i>
                    <span class="nav-text">Support Center</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./form-element.html">Support</a></li>
                  
                    
                </ul>
            </li>
           
        {{-- <div class="copyright">
            <p><strong>Tailor Pro  Dashboard</strong></p>
            <p class="fs-12" style="width: 250px">Made with <span class="heart"></span> by Huud Technology</p>
        </div> --}}
    </div>
</div>
<!--**********************************
    Sidebar end