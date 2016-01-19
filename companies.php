<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<meta name="description" content="CE Smart Career งาน Job Fair และสัมนาด้าน Computer และ IT ครั้งยิ่งใหญ่"/>
		<meta name="keywords" content="ce, it, job fair, career, smart career, ce smart career, งาน it, job"/>
		<meta property="og:title" content="CE Smart Career, KMITL">
		<meta property="og:type" content="website" />
		<meta property="og:image" content="http://cesmartcamp/career/2015/img/prop/ss.jpg"/>
		<meta property="og:url" content="http://cesmartcamp/`"/>
		<meta property="og:site_name" content="CE Smart Career, KMITL"/>
		<meta property="og:description" content="CE Smart Career งาน Job Fair และสัมนาด้าน Computer และ IT ครั้งยิ่งใหญ่"/>
    <title>Companies : CE Smart Career 2015</title>
    <!-- Bootstrap -->
    <link rel="shortcut icon" href="./2015/img/prop/favicon.gif">
    <link href="./2015/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="./2015/css/styles.css"/>
    <link rel="stylesheet" href="./2015/css/queries.css"/>
		<link rel="stylesheet" href="./2015/css/owl.carousel.css"/>
    <link rel="stylesheet" href="./2015/css/owl.theme.css"/>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Sintony:400,700" rel="stylesheet" type="text/css"/>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
     a:btn{color:#fff;}
		 .box .thumbnail:hover{background-color:#63c6ae;}
		 #backToTop {bottom:5px;right:20px;z-index:11;position:fixed;}
			#backToTop span {width: 50px;height: 50px;display: block;background: #63c6ae url(./2015/img/prop/up-arrow.png) no-repeat center center;cursor: pointer;
			-webkit-border-radius: 15px;
			-moz-border-radius: 15px;
			border-radius: 15px;
			-webkit-transition: 1s;
			-moz-transition: 1s;
			transition: 1s;
		}
    </style>
  </head>
  <body>
    <header class="clearfix">
      <div class="logo col-md-3 col-xs-10">
        <h2 class="logo-text">CE Smart Career</h2>
      </div>
      <nav class="clearfix">
        <ul class="clearfix">
          <li><a href="index.php">หน้าหลัก</a></li>
          <li><a href="companies.php" class="active">บริษัทที่เข้าร่วมงาน</a></li>
          <!--<li><a href="schedule.php">กำหนดการ</a></li>-->
					<li><a href="map.php">การเดินทาง</a></li>
          <li><a href="aboutus.php" class="last">เกี่ยวกับเรา</a></li>
        </ul>
      </nav>
    <div class="pullcontainer">
      <a href="#" id="pull"><i class="fa fa-bars fa-2x"></i></a>
    </div>
    </header>
		<div class="text-inter" style="padding-bottom:2%;">
			<div class="container">
				<div id="logoContainer" class="col-md-offset-0 col-md-12 col-sm-offset-0 col-md-12">
				</div>
			</div>	
		</div>
		<div class="container"	>
			<div class="arrow"></div>		
		</div>
		<div id="companiesInfo">
			<?php
				error_reporting(E_ERROR);
				$companies = json_decode (file_get_contents("./2016/lists.json"), false);
				$companies = $companies->{"companyList"};
				for($i=0; $i<sizeof($companies); $i++) {
						$companyName = $companies[$i];
						$companyPath = './2016/'. $companyName;
						$companyLogoURL = '"'.$companyPath.'/logo_full.jpg"';
						$companyDescription = file_get_contents($companyPath.'/description.html');
						$companyDescription =  $companyDescription==""?"<p><br/>ยังไม่มีข้อมูล</p>":$companyDescription;
						$companyFileURL = $companyPath.'/'.$companyName.'.rar';
						
						echo '<div class="container" style="margin-top:1%;">'.
										'<div class="row">'.
										'<div class="col-md-3 col-md-offset-0 col-xs-6 col-xs-offset-3">'.
										'<a name = "'.$companyName.'"></a><div class="thumbnail"><img src="'. $companyPath. '/logo_full.jpg" align="middle"/></div></div>'.
										'<div class="col-md-9 col-xs-12">'.
										'<div class="description row" style="margin-top:-4%;">'.
										$companyDescription;
						echo file_exists($companyFileURL)?'<div class="pull-right" style="margin-top:40px;"><a href="'.$companyFileURL.'" /><div class="btn btn-primary">ดาวน์โหลด<br/>รายละเอียดเพิ่มเติม</div></a></div>':'';
						echo '</div></div></div><hr/></div>';
				}
			?>
		</div>
		<p id="backToTop"><span></span></p>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h2>KMITL<br/>Computer Engineering<br/>CE Smart Career 2015</h2>
					</div>
					<div class="col-md-offset-5 col-md-3">
						<h3>Creator: Waitwing & Chanon</h3>
						<h3>Inspired from: Infusion (Wordpress)</h3>
						<hr style="border-top: 1px solid #454e51;"/>
						<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FCESmartCareer+&amp;width=250&amp;height=80&amp;colorscheme=dark&amp;show_faces=false&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=211798985656755" scrolling="no" frameborder="0" style="border:none; width:250px; height:80px;" allowTransparency="true"></iframe>
					</div>
				</div>
			</div>
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="./2015/js/scripts.js"></script> 
		<script src="./2015/js/bootstrap.min.js"></script>
		<script src="./2015/js/isotope.pkgd.min.js"></script> 
		<script src="./2015/js/imagesloaded.pkgd.min.js"></script>
		<script>
			$.getJSON("./2016/lists.json").done(function(companyList){
				var companyList = companyList["companyList"];
				var columnWidth = $("#logoContainer").width()/18;
				if(columnWidth<20) { collumnWidth = $("#logoContainer").width()};
				var $container = $("#logoContainer").isotope({
					 itemSelector: '.box',
					 masonry: {
						columnWidth: columnWidth
					}
				});
				for(var i=0;i<companyList.length;i++){
					var companyName = companyList[i];
					var html = '<div class="box" style="float:left;visibility:hidden;"><a href="#' + companyName + '"><div class="thumbnail">';
					if(companyName==="ITInnovation")
						html += '<img width="' + columnWidth*3 + '" src="./2015/companies/'+ companyName + '/logo_small.gif" alt="' + companyName + '" /></div></a></div>';
					else
						html += '<img width="' + columnWidth*1.5 + '" src="./2015/companies/'+ companyName + '/logo_small.gif" alt="' + companyName + '" /></div></a></div>';
					var item =  $(html);
					$container.append(item).isotope('appended', item);
				}
				$container.imagesLoaded( function(){
					$container.isotope();
					$('.box').each(function(){this.style.visibility="visible"});
				});
			});
		</script>
		<script>
			var whereYouWantYourButtonToAppear = 200;
			$(window).scroll(function(){
					
					var position = $(window).scrollTop();
					
					if(position > whereYouWantYourButtonToAppear)
					{
							$('#backToTop').fadeIn();
					}
					else
					{
							$('#backToTop').fadeOut();
					}
			});

			$('#backToTop').on('click', function(){
					$(window).scrollTop(0);
					$(this).fadeOut();
			});
		</script>
  </body>
</html>