<html lang="en" class="no-js">
<!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="google-site-verification" content="jklJf8ZN3LIWA8evY5oIe3D4UdToyWc0TXtwuUBFTXg" />
             
  <title>infolink  |  IT Solution</title>
 <!--  <meta name="description" content="infolink"> -->
 <meta name="description" content="{{ Seo::get('description') }}" />
  <meta name="author" content="Aung Thein Naing">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    @include('laravel-seo::meta-facebook')
   <!--  @include('laravel-seo::meta-twitter') -->
 
  <base href="http://infolink.rocks/sitemap">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104638260-1', 'auto');
  ga('send', 'pageview');

</script>

  <link rel="stylesheet" href="<?php echo url(); ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo url(); ?>/css/animate.css">
  <link rel="stylesheet" href="<?php echo url(); ?>/css/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo url(); ?>/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?php echo url(); ?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo url(); ?>/css/icon-font.css">
  <link rel="stylesheet" href="<?php echo url(); ?>/css/anchro.css">

      <link rel="stylesheet" href="<?php echo url(); ?>/css/beautyf.css">
 

  <link rel="stylesheet" href="<?php echo url(); ?>/rs-plugin/css/settings.css">


  <link href="<?php echo url(); ?>/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">

 
 <!-- beautiful font -->
  <link rel="stylesheet" type="text/css" href="<?php echo url(); ?>/css/logotype.css">

  <!--  notification message -->
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo url(); ?>/css/notify-metro.css">
  <script src="<?php echo url(); ?>/js/notify.js"></script>
  <script src="<?php echo url(); ?>/js/notify-metro.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <link rel="icon" href="<?php echo url(); ?>/images/mylogo.png" type="image/png" sizes="16x16">

  <!--  notification message -->
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


   <script type="text/javascript">
  function replyon(fid){
   
                    var elem = document.getElementById(fid);
                    elem.style.display = 'block';
                    
             
          }
  </script>
    <script type="text/javascript">
  function addbook(bprice, vnum, inum, id){

     var getUrl = window.location;
    var baseUrl = getUrl .protocol + "//" + getUrl.host + "/";


              $.ajax({
                type:'POST',
                url: baseUrl + 'makeorder',
                data: {
                  "_token": "{{ csrf_token() }}",
                  "id": id
                },
                datatype: "json",
                success:function(data){

                    if(data.msg == "success")
                    {
                     var e1 = document.getElementById('totalbox').innerHTML;
                   
                    if (e1 == "")e1 = 0;
                    document.getElementById('totalbox').innerHTML = parseInt(e1) + bprice;
                    document.getElementById('bookinfo').innerHTML  =  document.getElementById('bookinfo').innerHTML + '<br>' + 'vol' + vnum + ':' + inum + '  =   ' + bprice + 'ks';
                     // document.getElementById('bookids').innerHTML = document.getElementById('bookids').innerHTML + id + ";";
                    }
                    else
                    {
                        var elem = document.getElementById('nlabel');
                        var elem1 = document.getElementById('btnlogin');
                        elem.style.display = 'block';
                            elem1.style.display = 'block';
                    
                    }
                }
              });
   
                   
                    
             
          }


 
         
  </script>

