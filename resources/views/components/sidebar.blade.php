
<nav class="sidebar">
  
  <div id="link-box" class="d-flex flex-column">
    <ul>
      <li class="">
        <a class="{{ Request::is('admin') ? 'active':'' }}" href="{{ route('admin-landing') }}">
          <span class="icon">
            <i class="fa-sharp fa-solid fa-shop"></i>
          </span>
          <span class="title">Dashboard</span>
        </a>
      </li>
      <li class="">
        <a class="{{ Request::is('admin/users') ? 'active':'' }}" href="{{ route('site-users') }}">
          <span class="icon">
            <i class="fa-solid fa-users"></i>
          </span>
          <span class="title">Users</span>
        </a>
      </li>
      <li class="">
        <a class="{{ Request::is('admin/all-posts') ? 'active':'' }}" href="{{ route('site-posts') }}">
          <span class="icon">
            <i class="fa-solid fa-file"></i>
          </span>
          <span class="title">Posts</span>
        </a>
      </li>
      <li class="">
        <a class="{{ Request::is('') ? 'active':'' }}" href="{{ route('logout') }}">
          <span class="icon">
            <i class="fa-solid fa-right-to-bracket"></i>
          </span>
          <span class="title">Logout</span>
        </a>
      </li>
    </ul>

    <style>
        
      .sidebar{
        position: fixed;
        left: 0;
        width: 15vw;
        /* background-color: #22333b; */
        background-color: black;
        height: 100%;
        color: #FFC100;
        /* box-shadow: 8px 0 0 #1A4D2E; */
        overflow-x: hidden;
        scrollbar-width: none;

      }
   
      .sidebar::-webkit-scrollbar{
        display: none;
      }

      .sidetitles{
        margin-left: 10px;
        color: #ff9505;
        font-size: 15px;
      }

      #link-box{
        border-left: 5px solid black;
        margin-top: 40px;
      }
      #link-box ul{
        top: 0;
        left: 0;
        width: 100%;
        padding-left: 3px;
      }
      #link-box ul li{
        position: relative;
        list-style: none;
        width: 100%;
        margin-bottom: 10px;
        /* padding-left: 5px; */
      }
      #link-box ul li a{
        position: relative;
        display: block;
        width: 100%;
        display: flex;
        text-decoration: none;
        color: white;
      }
      #link-box ul li a .icon{
        position: relative;
        display: block;
        min-width: 50px;
        height: 40px;
        text-align: center;
        line-height: 40px;
      }
      #link-box ul li a .icon i{
        position: relative;
        font-size: 1.5sem;
        z-index: 1;
      }
      #link-box ul li a .title{
        position: relative;
        display: block;
        padding-left: 10px;
        height: 40px;
        line-height: 40px;
        white-space: nowrap;
        font-size: 1em;
        z-index: 1;
      }
      #link-box ul li .active{
        /* border-right: #d31717 5px solid; */
        background-color: #ff9505;
        width: 100%;
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
        color: black;
      
      }
      #link-box ul li a.active::before {
        content: '';
        position: absolute;
        top: -30px;
        right: 0;
        height: 30px;
        width: 30px;
        background: rgba(255, 255, 255, 0);
        border-radius: 50%;
        box-shadow: 15px 15px 0 #ff9505;
      }
      #link-box ul li a.active::after {
        content: '';
        position: absolute;
        bottom: -30px;
        right: 0;
        height: 30px;
        width: 30px;
        background: rgba(255, 255, 255, 0);
        border-radius: 50%;
        box-shadow: 15px -15px 0 #ff9505;
      }

      #link-box ul li a:hover {
        color: black;
      }
      #link-box ul li a.active:hover {
        background: #ff9505;
        color: white;
        width: 100%;
        /* margin-left: 00px; */
      }
      #link-box ul li:hover {
        background: white;
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
        /* margin-left: 10px; */
      }

      .sidebar header .image-text{
        display: flex;
        align-items: center;
      }

      header .image-text .header-text{
        display: flex;
        flex-direction: column;
      }

      /* ====== Reusable CSS ======== */

      .sidebar .text {
        font-size: 16px;
        font-weight: 600;
      }

      .sidebar .image{
        min-width: 60px;
        display: flex;
        align-items: center;
      }

      .active ::before{
        
      
      }


      .sidebar #sidebar-header img{
        height: 25vh;
        width: 100%;
        object-fit: cover;
        
      }

      @media (max-width: 720px){
        .sidebar{
          position: fixed;
          /* top: 60px; */
          left: 0;
          width: 15vw;
          /* background-color: #22333b; */
          /* background-color: green; */
          height: 100%;
          box-shadow: 8px 0 0 #ff9505;
          overflow-x: hidden;

        }
        .sidebar::-webkit-scrollbar{
          display: none;
        }

        .sidebar:hover{
          width: 45vw;
          transition: width 0.5s;
        }
        #link-box{
          border-left: 5px solid black;
          margin-top: 40px;
        }
      }
    </style>
    
   
  
   
  </div>
  
</nav>