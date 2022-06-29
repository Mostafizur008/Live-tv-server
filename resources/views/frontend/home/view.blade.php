<!DOCTYPE html>

         <html class=no-js lang=zxx>
			
         <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
			   
         @php
         $setting = DB::table('settings')->first();  
         @endphp

      <head>
         @include('frontend.code-section.js.head.live1')
      </head>
			
			
			
    <body class="bg-img body-bg">
               
            <div class=preloader-wrap>
            <div class=preloader><span></span> <span></span> <span></span> <span></span></div>
            </div>
            <div class="line-effect line-bg-1"></div>
            <div class="line-effect line-bg-2"></div>
            <div class="line-effect line-bg-3"></div>
            <div class="bg-img color-blue main-container">

			   
    <header class="main-header" style="margin-bottom: 15px;">
        <div class=container>
                <div class="clearfix row">
                    <div class="pull-right clearfix col-xs-4 exs-full-width">
                     <!-- <a class="pull-right" href="Mrs Technology.apk" style="padding-right: 14px;" download><img src="img/appdownload.svg" style="height:30px; width:auto;"></a>-->
                   <div class="pull-right header-right" style="padding-right: 10px;">
                                 
                      <ul class="list-inline social-icons">
								 
								 <li><a href="/" target=_blank><i class="icofont icofont-home"></i></a>
                                    <li><a href="mailto:sm.soahg033@gmail.com"><i class="icofont icofont-email"></i></a>
				              	<li><a href="https://www.facebook.com/zero.technology007" target=_blank><i class="icofont icofont-social-facebook"></i></a>
                              <li><a  href="{{route('info.view')}}"><i class="icofont icofont-info"></i></a>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-xs-3 exs-full-width">
                              <div class="logo" align="center"><a href="/"><img alt=Logo src={{ (!empty($setting->image)) ? url('backend/all-images/web/logo/'.$setting->image): url('backend/all-images/web/default/logo.png') }} height="42"></a></div>
                        </div>
					<div class="col-xs-5 exs-full-width">
                </div>
            </div>
    </header>


    <div class="main-body">
         <div class=container>
                <div class=col-md-12>
                    <div class="col-md-3 hidden-xs noleftpadding">
               <div class="panel panel-default" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
                <div class="panel-heading c-list">
					<span class="title" >Channel List</span><input type="text" class="search-hover pull-right" name="" placeholder="search..."></div>
				      <ul class="list-group" id="contact-list" style="overflow-y: scroll;">
                        @foreach ($allData as $channel)
                        @if($channel->status == '1')
				      	  <li class="list-group-item">
					        <a class="playignitor vertical-align" herf="#" onclick="tv.location.href='{{$channel->link}}'">
						      <div class="col-xs-12 col-sm-6">
                              <img src="{{ (!empty($channel->image))? url('backend/all-images/web/channel/'.$channel->image):url('upload/no_image.jpg') }}" alt="{{$channel->title}}" class="img-responsive" />
                             </div>
						    <div class="col-xs-12 col-sm-6">
                            <span class="name">{{$channel->title}}</span><img class="playicon" src="img/play.gif">                      
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                @endif
                @endforeach 		 
			</ul>
        </div>
    </div>
                            
    <div id="playerholder" class="col-md-9 embed-responsive embed-responsive-16by9" style="background: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);padding: 0;"> 
      <iframe class="ifream" name="tv" src="http://stream.amrbd.com/player/gazitv.php" width="100%" height="100%" frameborder="0" scrolling="no" allowfullscreen>Browser not supported! Please check from different browser or change device. Thanks</iframe>	
</div>
</div>

<div class='col-md-12'>
    <div class="owl-carousel" style="box-shadow: 0 -6px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
        @foreach ($allData as $channel)
        @if($channel->status == '1')
          <div class="item">
               <a herf="#" onclick="tv.location.href='{{$channel->link}}'">
			   <img alt="" src="{{ (!empty($channel->image))? url('backend/all-images/web/channel/'.$channel->image):url('upload/no_image.jpg') }}" alt="{{$channel->title}}"></a>
		 </div> 
       @endif
        @endforeach     
    </div>
    <a id="prev" href="javascript:void(0)" class="left carousel-control customPrevBtn">‹</a>
        <a id="next" href="javascript:void(0)" class="right carousel-control customNextBtn">›</a>
  </div>
</div>
</div>

<footer class="main-footer">
        <div class=container>
            <div class=row>
                 <div class=col-md-5>
                    <div class="footer-content">
                        <div class="footer-left">
                             Copyright &copy; {{$setting->title}} | All Rights Reserved.
                         </div>
                     </div>
                </div>
			<div class=col-md-4>
        <div class="footer-content">
     <div class="footer-middle">
                                 </div>
                              </div>
                           </div>
                           <div class=col-md-3>
                              <div class="footer-content pull-right">
                                 <div class="footer-right">
                                    <ul class="list-inline footer-menu">
                                       <li><a href="#" data-toggle="modal" data-target="#helpme">Help</a>
                                       <!--<li><a href="#" data-toggle="modal" data-target="#notice">Notice</a>-->
                                       <li><a href="#" data-toggle="modal" data-target="#contactus">Contact</a>
                                       <li><a href="#" data-toggle="modal" data-target="#faq">FAQ</a>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </footer>
               </div>

               @include ('frontend.code-section.modal.live1.help')
               @include ('frontend.code-section.modal.live1.contact')
               @include ('frontend.code-section.modal.live1.faq')
               @include('frontend.code-section.js.main.live1')

               <script type="text/javascript">var _Hasync= _Hasync|| [];
                  _Hasync.push(['Histats.start', '1,4318587,4,3,170,30,00011001']);
                  _Hasync.push(['Histats.fasi', '1']);
                  _Hasync.push(['Histats.track_hits', '']);
                  (function() {
                  var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
                  hs.src = ('//s10.histats.com/js15_as.js');
                  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
                  })();</script>


 
