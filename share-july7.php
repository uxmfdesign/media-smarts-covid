<?php

$params = array();

if(count($_GET) > 0) {
    $params = $_GET;
} else {
    $params = $_POST;
}
// defaults


if ($params['image'] == "") $params['image'] = "covid-Check-First.png";
else $image = htmlentities($params['image'], ENT_QUOTES, 'UTF-8');

list($width, $height) = getimagesize("img/".$params['image']);




?>
<!doctype html>
<html lang="en">
<head>
       
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <title>Social shares</title>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <style>
	  
	  story-img img, images-img img, shareable-img img{
		    -webkit-filter: shadow(5px 5px 5px 5px #222 );
  filter: shadow(5px 5px 5px 5px #222);
	  }

         .clear {
         content: "";
         display: table;
         clear: both;
         }
		 button {
    	 border-radius: 10px;
		 height:40px;
		 background-color:#00BDF2;
		 border:none;
		 color:white;
		 margin-top: 10px;
		 }
		 #section-share:after {
    		content: "";
    		display: block;
    		clear: both;
		}
		h2.share {
			font-family:Arial Black,Arial Bold,Gadget,sans-serif;
			color:#426AB3;
			line-height:1em;
			font-size:2rem;
			margin-bottom:1em;
		}
		h4.share {
			font-family:Arial Black,Arial Bold,Gadget,sans-serif;
			color:#000000;
			line-height:1em;
			font-size:2rem;
			margin-bottom:1em;
		}
		.story-img, .images-img, .shareable-img {
			padding:10px;
			width:212px;
			max-width:192px;
			overflow:hidden;
			float:left;
		}
		.story-img, .images-img {
			height:402px;
		}		
		.shareable-img {
			height:252px;		
		}
		img.share {
			cursor: -webkit-grab; cursor: pointer;
			float:left; 
			width:30px; 
			margin-top:10px;
		}
		img.download {
			cursor: -webkit-grab; cursor: pointer;
			float:right; 
			width:30px; 
			margin-top:10px;
		}		
      </style>
      		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="https://mediasmarts.ca/sites/default/themes/mediasmarts/favicon.ico" type="image/vnd.microsoft.icon" />
		<link rel="apple-touch-icon" href="/icon.png">
		<!-- Place favicon.ico in the root directory -->
		<link rel="stylesheet" href="_css/main.css">
		<meta name="theme-color" content="#fafafa">
        
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@MediaSmarts">
        <meta name="twitter:url" content="http://pwwebhost.com/checkthenshare/share.php?image=<?php echo $params['image']; ?>" />
        <meta name="twitter:image" id="twitIMG" content="http://pwwebhost.com/checkthenshare/img/<?php echo $params['image']; ?>">
        <meta name="twitter:description" content="Passing on false content can be like passing on COVID-19 itself. And that can be deadly. Before you share, pause, check the source, and make sure it’s legit. Check First. Share After.</br /></br />  
www.checkthenshare.ca">
              
        <meta property="og:type" content="website"/>
        <meta property="og:site_name" content="Check first. Then Share."/>
        <meta property="og:url" content="http://pwwebhost.com/checkthenshare/share.php?image=<?php echo $params['image']; ?>"/>
        <meta property="og:locale" content="en_CA"/>
        <meta property="og:title" content="Check first. Then Share."/>
        <meta property="og:image" content="http://pwwebhost.com/checkthenshare/img/<?php echo $params['image']; ?>"/>
        <meta property="og:image:width" content="<?php echo $width; ?>"/>
        <meta property="og:image:height" content="<?php echo $height; ?>"/>
        <meta property="og:description" content="Passing on false content can be like passing on COVID-19 itself. And that can be deadly. Before you share, pause, check the source, and make sure it’s legit. Check First. Share After.  </br /></br />
www.checkthenshare.ca"/>


  
     <!--meta name="twitter:caption" content="Check First. Then Share.">
      
      <meta name="twitter:title" content="Check First. Share After.">
      <meta name="twitter:description" content="Passing on false content can be like passing on COVID-19 itself. And that can be deadly. Before you share, pause, check the source, and make sure it’s legit. Check First. Share After.  
www.checkthenshare.ca"-->  
       
   </head>
   <body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0" nonce="wbxoJDGV"></script>

		<!--[if IE]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
		<![endif]-->


<!-- Start page -->
<!-- header -->
<header class="site-header">
			<a href="https://mediasmarts.ca/" title="Share page" class="site-header__logo">
			<img class="site-logo image-style-none" src="https://mediasmarts.ca/sites/default/themes/mediasmarts/logo.png" alt="MediaSmarts">
			</a>
			<ul class="list list--flex list--right list--pad-half site-header__social-list">
				<li>
					<a href="https://mediasmarts.ca/rss.xml" class="remove-background">
					<img alt="rss.png" src="https://mediasmarts.ca/sites/mediasmarts_D7/files/images/icons/48/rss.png" style="height:30px; width:30px">
					</a>
				</li>
				<li>
					<a href="https://www.facebook.com/MediaSmarts" class="remove-background" target="_blank">
					<img alt="facebook.png" src="https://mediasmarts.ca/sites/mediasmarts_D7/files/images/icons/48/facebook.png" style="height:30px; width:30px"></a>
				</li>
				<li>
					<a href="https://twitter.com/MediaSmarts" class="remove-background" target="_blank">
					<img alt="twitter.png" src="https://mediasmarts.ca/sites/mediasmarts_D7/files/images/icons/48/twitter.png" style="height:30px; width:30px">
					</a>
				</li>
				<li>
					<a href="https://www.youtube.com/user/MediaAwareness" class="remove-background" target="_blank">
					<img alt="YouTube" src="https://mediasmarts.ca/sites/mediasmarts/files/icons/48/youtube.png" style="height:30px; width:30px">
					</a>
				</li>
				<li>
					<a href="https://www.instagram.com/mediasmarts.ca/" class="remove-background" target="_blank">
					<img alt="Instagram" src="https://mediasmarts.ca/sites/mediasmarts/files/icons/48/instagram.png" style="height:30px; width:30px">
					</a>
				</li>
				<li class="lang-link">
					<a href="propos.html" title="Propos" class="link">
					<span lang="fr">Français</span>
					</a>
				</li>
			</ul>
</header>
<!-- /header -->
		<div id="main">
			<!-- about -->
			<div id="section-share" style="padding: 0 33px;"
>
				<div style="text-align:center; align-content:center; width:100%" class="clear">
                <img class="responsive-image" src="img/banner-share.svg" style="width:100%;">
				<img class="responsive-image" src="img/covid-banner-eng.png" style="width:100%;">					
			</div>
			<div class="body" style="width:75%; margin-left:auto; margin-right:auto;">
				<div style="text-align:center; align-content:center;  content:''; display: table; clear: both;">
				<h2 class="share">&nbsp;</h2>
				<h2 class="share">Share this content with the people you care about. Help yourself to these shareable images and videos and help us spread the word.</h2>
</div>
				<div style="text-align:left; align-content:left;  content:''; display: table; clear: both;">
				<h4 class="h4"><img alt="" src="img/covid-insta-logo.png" style="float:left; vertical-align:middle; width:67px"> <span style="display:inline-block; line-height:50px;">Stories</span></h4>
				</div>
				<p></p>
                
            
                
                <div class="story-img" style="text-align:center; align-content:center;  content:''; display: table; clear: both;">
                    <img alt="" src="img/covid-Check-First-th.png" style="height:341px; width:192px">
                    
                    <a data-toggle="modal" data-target="#shareModal" data-whatever="http://www.pwwebhost.com/checkthenshare/img/covid-Check-First.png" target="popup">
                        <img src="http://www.pwwebhost.com/checkthenshare/img/share.svg" class="share" alt="Share" title="Share"></a>
                    <a href="img/covid-Check-First.png" download>
                        <img src="http://www.pwwebhost.com/checkthenshare/img/download.svg" class="download" alt="Download" title="Download"></a>
                </div>
                
                
                <div class="story-img">
                    <img alt="" src="img/covid-Sharing-Legit-th.png" style="border-style:solid; border-width:1px; height:341px; width:192px; float:left;">
                    <a data-toggle="modal" data-target="#shareModal" data-whatever="http://www.pwwebhost.com/checkthenshare/img/covid-Sharing-Legit.png" target="popup">
                        <img src="http://www.pwwebhost.com/checkthenshare/img/share.svg" class="share" alt="Share" title="Share"></a>
                    <a href="img/covid-Sharing-Legit.png" download>
                        <img src="http://www.pwwebhost.com/checkthenshare/img/download.svg" class="download" alt="Download" title="Download"></a>
				</div>
                
				<p style="text-align:left; align-content:left;  content:''; display: table; clear: both;">
                
				<strong> 
                
           <h2 class="share">Want to save it and share <br />on your own? Help share <br /> the message, here's a<br /> good way to start.</h2>     
                
                <img alt="&quot;" src="img/covid-quote-left.png" style="height:43px; width:50px; vertical-align:super"> Before I shared this, I checked the source. You should, too 
				because sharing bad information about COVID-19 can be like
				sharing the virus itself. And that can be deadly. Help stop the
				spread of misinformation. Check first. Share after. See how
				you can help at <a href="https://checkthenshare.ca">checkthenshare.ca</a> <img alt="&quot;" src="img/covid-quote-right.png" style="height:43px; width:50px; vertical-align:sub;"></strong>
		    </p>
				<p style="text-align:center; align-content:center;  content:''; display: table; clear: both;">
				<h4 class="h4"><img alt="Dot Graphic" src="img/covid-sharable-videos.png" style="float:left; vertical-align:middle; width:34px"> <span style="display:inline-block; line-height:34px; padding-left:8px;"> Shareable Videos</span></h4>
				</p>
				<p style="text-align:center; align-content:center;  content:''; display: table; clear: both;">
                
				<a href="https://youtu.be/H4inIGNEYZw" onClick="window.open(this.href, '', 'resizable=no,status=no,location=no,toolbar=no,menubar=no,fullscreen=no,scrollbars=no,dependent=no,width=350px,height=350px'); return false;" target="_blank"><img alt="Check First. Share After." src="img/covid-Check-First-video-th.png" style="border-style:solid; border-width:1px; height:192px; width:192px"></a> 
                
                
                
                
                
				</p>
				<p style="text-align:center; align-content:center;  content:''; display: table; clear: both;">
				<h4 class="h4"><img alt="" src="img/covid-sharable-images.png" style="height:34px; width:34px">
					<span style="display:inline-block; line-height:34px; padding-left:4px;">Shareable Images</span>
				</h4>
				</p>
				<div style="text-align:center; align-content:center;  content:''; display: table; clear: both;">	
                
                
                <div class="shareable-img" style="text-align:center; align-content:center;  content:''; display: table; clear: both;">
                	<img src="img/covid-check-first-img-th.png" alt="" style="border-style:solid; border-width:1px; height:192px; width:192px">
                		<a data-toggle="modal" data-target="#shareModal" data-whatever="http://www.pwwebhost.com/checkthenshare/img/covid-check-first-img.png">
                			<img src="http://www.pwwebhost.com/checkthenshare/img/share.svg" class="share" alt="Share" title="Share"></a>
                		<a href="img/covid-check-first-img.png" download>
                        	<img src="http://www.pwwebhost.com/checkthenshare/img/download.svg" class="download" alt="Download" title="Download"></a>
				</div>
                
                
                
                                
                    
                <!--a data-toggle="modal" data-target="#shareModal" data-whatever="checkthenshare/covid-Check-First.png"><img alt="" src="https://mediasmarts.ca/sites/default/files/campaign-images/covid/covid-Check-First-th.png" style="border-style:solid; border-width:1px; height:341px; width:192px"></a-->
                    
                 <div class="shareable-img">
                 	<img alt="" src="img/covid-thumbs-up-img-th.png" style="border-style:solid; border-width:1px; height:192px; width:192px">
                    	<a data-toggle="modal" data-target="#shareModal" data-whatever="http://www.pwwebhost.com/checkthenshare/img/covid-thumbs-up-img.png">
                        	<img src="http://www.pwwebhost.com/checkthenshare/img/share.svg" class="share" alt="Share" title="Share"></a>
                		<a href="img/covid-thumbs-up-img.png" download>
                        	<img src="http://www.pwwebhost.com/checkthenshare/img/download.svg" class="download" alt="Download" title="Download"></a>                               
				</div>
                
                <div class="shareable-img">
                	<img alt="" src="img/covid-woman-img-th.png" style="border-style:solid; border-width:1px; height:192px; width:192px">
                    	<a data-toggle="modal" data-target="#shareModal" data-whatever="https://checkthenshare.ca/img/covid-woman-img.png">
                        	<img src="http://www.pwwebhost.com/checkthenshare/img/share.svg" class="share" alt="Share" title="Share"></a>
                		<a href="img/covid-woman-img.png" download>
                        	<img src="http://www.pwwebhost.com/checkthenshare/img/download.svg" class="download" alt="Download" title="Download"></a>                            
                  </div>
                    
			  <div class="shareable-img">
					<img alt="" src="img/covid-cell-phone-img-th.png" style="border-style:solid; border-width:1px; height:192px; width:192px">
						<a data-toggle="modal" data-target="#shareModal" data-whatever="https://checkthenshare.ca/img/covid-cell-phone-img.png">
                  			<img src="http://www.pwwebhost.com/checkthenshare/img/share.svg" class="share" alt="Share" title="Share"></a>
                		<a href="img/covid-cell-phone-img.png" download>
                        	<img src="http://www.pwwebhost.com/checkthenshare/img/download.svg" class="download" alt="Download" title="Download"></a>                    
              </div>
              
              <div class="shareable-img">
              		<img alt="" src="img/covid-Check-First-img2-th.png" style="border-style:solid; border-width:1px; height:192px; width:192px">
              			<a data-toggle="modal" data-target="#shareModal" data-whatever="https://checkthenshare.ca/img/covid-Check-First-img2.png">
              				<img src="http://www.pwwebhost.com/checkthenshare/img/share.svg" class="share" alt="Share" title="Share"></a>
                		<a href="img/covid-Check-First-img2.png" download>
                        	<img src="http://www.pwwebhost.com/checkthenshare/img/download.svg" class="download" alt="Download" title="Download"></a>                
              </div>
              
              
              
              
       </div>       
              
              
			  <p style="text-align:center; margin-top:20px;">
              <a class="backlink" href="index.html" alt="back to campaign">
              <span class="backlink-icon"></span> Back to the Campaign.
            </a>
              </p>


			</div>
			<!-- /about -->
		</div>
		</div>
<footer class="footer">
			<div class="component">
				<h2 class="h4 text-align-center">
					This campaign wouldn’t be possible without the generosity of our sponsors:
				</h2>
				<ul class="list list--flex list--center">
					<li>
						<a target="_blank" href="https://www.aptn.ca/">
						<img src="assets/exports/aptn.png" alt="APTN" />
						</a>
					</li>
					<li>
						<a target="_blank" href="https://www.bellmedia.ca/">
						<img src="assets/exports/bellmedia.png" alt="Bell Media" />
						</a>
					</li>
					<li>
						<a target="_blank" href="https://www.corusent.com/">
						<img src="assets/exports/corus.png" alt="corus" />
						</a>
					</li>
					<li>
						<a target="_blank" href="http://www.twitter.com/">
						<img src="assets/exports/twitter.png" alt="twitter" />
						</a>
					</li>
					<li>
						<a target="_blank" href="http://www.facebook.com/">
						<img src="assets/exports/facebook.png" alt="Facebook" />
						</a>
					</li>
					<li>
						<a target="_blank" href="https://www.canada.ca/en.html">
						<img src="assets/exports/canada-logo.png" alt="Funded by the Government of Canada" />
						</a>
					</li>
				</ul>
			</div>
  <small>
			© MediaSmarts. All Rights Reserved.
  </small>
</footer>

  




<!-- end page -->











<!-- start modal -->    
      
      
      <div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="shareModalLabel">Share</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="icon-container1 d-flex">
                  <div class="smd">
                          

                     <a href="" id="twitShare" onClick="window.open(this.href, '', 'resizable=no,status=no,location=no,toolbar=no,menubar=no,fullscreen=no,scrollbars=no,dependent=no,width=350px,height=350px'); return false;"><br />
<img src="https://mediasmarts.ca/sites/mediasmarts_D7/files/images/icons/48/twitter.png" alt="Share on Twitter" /></a>
                     
                     
                    <a href="" id="fbShare" onClick="window.open(this.href, '', 'resizable=no,status=no,location=no,toolbar=no,menubar=no,fullscreen=no,scrollbars=no,dependent=no,width=350px,height=350px'); return false;"><img src="https://mediasmarts.ca/sites/mediasmarts_D7/files/images/icons/48/facebook.png" alt="Share on Facebook" /></a>
                    
                    
                    <a href="" id="instaShare" onClick="window.open('https://www.instagram.com/p/CAiXPVOlGB5/?utm_source=ig_web_copy_link', 'resizable=no,status=no,location=no,toolbar=no,menubar=no,fullscreen=no,scrollbars=no,dependent=no,width=350px,height=350px'); return false;" target="_blank">
                    <img src="https://mediasmarts.ca/sites/mediasmarts/files/icons/48/instagram.png" alt="Share on Instagram" /></a>
                    
                    
                   <br>    
                     
                     <form>
                        <input type="text" id="showImageURL" style="margin:10px 10px 10px 0;"><button onClick="copyURL()" style="width:100px;">Copy&nbsp;URL</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </div>
    

    
<!-- end modal -->

    
      <!--script type="application/javascript">
         function copyURL() {
		   var copyText = "http://pwwebhost.com/checkthenshare/img/"+document.getElementById("showImageURL");
           copyText.select();
           copyText.setSelectionRange(0, 99999);
           document.execCommand("copy");
           alert("Copied URL: " + copyText.value);
         }
      </script-->
      
<script type="application/javascript">
         function copyURL() {
           var copyText = "";
		   var copyText = document.getElementById("showImageURL");
           copyText.select();
           copyText.setSelectionRange(0, 99999);
           document.execCommand("copy");
           alert("Copied URL: " + copyText.value);
         }
      </script>
      
            
      
   <script type="application/javascript">
	  function showURL() {
		//  document.getElementById("twitIMG").setAttribute("content", "")
		  document.getElementById('title').href = imgURL;
	  }
         $('#shareModal').on('show.bs.modal', function (event) {
           var button = $(event.relatedTarget) 
           imageURL = button.data('whatever') 
	//	   document.getElementById("twitIMG").setAttribute("content", imageURL)
           var modal = $(this)
           modal.find('.modal-body input').val(imageURL);
		   var shareLink = imageURL.replace('http://www.pwwebhost.com/checkthenshare/img/', ''); 
		   document.getElementById("fbShare").href = "https://www.facebook.com/sharer/sharer.php?u=http://pwwebhost.com/checkthenshare/share.php?image="+shareLink+"&amp;src=sdkpreparse";
		   document.getElementById("twitShare").href = "http://www.twitter.com/intent/tweet?url=http://pwwebhost.com/checkthenshare/share.php?image="+shareLink;
           document.getElementById("instaShare").href = "https://www.instagram.com/p/CAiXPVOlGB5/?utm_source=ig_web_copy_link";
         })
      </script>
   </body>
</html>