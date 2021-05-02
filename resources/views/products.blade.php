@extends('layout')

@section('title', 'Products')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="movie/style.css">
     <!--Fonts-->    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
    <!--Swiper-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Online cinema</title>
</head>
<header>
<div class="nav-menu">
            <ul class="ul-menu">
                <li class="li-menu"><a href="#" class="link-home"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="li-menu"><a href="#" class="menu-link link-1">Фильмы</a></li>
                <li class="li-menu"><a href="#" class="menu-link link-2">Сериалы</a></li>
                <li class="li-menu"><a href="#" class="menu-link link-3">Аниме</a></li>
                <li class="li-menu"><a href="#" class="menu-link link-4">Новинки</a></li>
                <li class="li-menu"><a href="#" class="menu-link link-5">Скоро</a></li>
               
            </ul>
            <div class="search-block">
                <input type="search" name="search" placeholder="Search..." id="">
            </div>
           
        </div>
    </header>
<body>
<div class="container">
   <div class="wrapper">
     
       <div class="image-slider swiper-container">
           <div class="image-slider_wrapper swiper-wrapper">

               <div class="image-slider_slide swiper-slide">
                   <div class="image-slider_image">
                   <a href="#">
                       <img src="images/movies/john.jpeg" alt="Джон">
                       </a>
                   </div>
               </div>

               <div class="image-slider_slide swiper-slide">
                   <div class="image-slider_image"> 
                   <a href="#">
                       <img src="images/movies/fast.jpeg" alt="Форсаж">
                       </a>
                   </div>
               </div>

               <div class="image-slider_slide swiper-slide">
                   <div class="image-slider_image">
                   <a href="#">
                       <img src="images/movies/bambl.jpeg" alt="Бамбл Би">
                       </a>
                   </div>
               </div>

               <div class="image-slider_slide swiper-slide">
                   <div class="image-slider_image">
                   <a href="#">
                       <img src="images/movies/avengers.jpeg" alt="Бамбл Би">
                       </a>
                   </div>
               </div>
           </div>
                        <!--Стрелки-->
                <div class="swiper-button-prev1"></div>
                <div class="swiper-button-next1"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-scrollbar"></div>
       </div>
       <div class="small">
           <div class="many-films">

                <div class="single-film">
               
                    <div id="al-c">
                        <div class="container">
                            <ul class="effects">
                                 <li>
                                
                                    <img src="images/movies/avengers.jpeg" alt="">
                                
                                    <div>   <div id="al-c">
                                    <div class="container"> 
                                        <h2>AVENGERS</h2>
                                             <p>Fantasy</p><br>
                                                <a href="#">Learn more</a>
                                                    </div></div></div></li></ul></div></div>
                    <div id="al-c">
                        <div class="container">
                            <ul class="effects">
                                 <li>
                                    <img src="images/movies/alita.jpeg" alt="">
                                    <div>   <div id="al-c">
                                    <div class="container"> 
                                        <h2>ALITA</h2>
                                             <p>Fantasy</p>
                                                <a href="#">Learn more</a>
                                                    </div></div></div></li></ul></div></div>
                </div>

                <div class="single-film">
                    <div id="al-c">
                        <div class="container">
                            <ul class="effects">
                                 <li>
                                    <img src="images/movies/avatar.jpeg" alt="">
                                    <div>   <div id="al-c">
                                    <div class="container"> 
                                        <h2>X-MANS</h2><br>
                                             <p>FANTASY</p><br>
                                                <a href="#">Learn more</a>
                                                    </div></div></div></li></ul></div></div>
                                                    
                  


                </div>

           </div>
       </div>
       </div>
       <hr style="background-color:#aaa">
    

    <div class="container-fluid products">

        <div class="row">

            @foreach($products as $product)
                <div class="col-xs-12 col-md-6">
                    <div class="thumbnail">
                        <img src="{{ $product->photo }}" width="400px" height="300px">
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p>{{ str_limit(strtolower($product->description), 50) }}</p>
                            <p><strong>Price: </strong> {{ $product->price }}$</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!-- End row -->

    </div>
    <h2 class="horror-slider">Ужасы</h2>
            <div class="image-slider-horror swiper-container">
           <div class="image-slider_wrapper-horror swiper-wrapper">


           <div class="movie-card">
		<div class="movie-header we">
			<div class="header-icon-container">
				<a href="#">
					<i class="material-icons header-icon"></i>
				</a>
			</div>
		</div><!--movie-header-->
		<div class="movie-content">
			<div class="movie-content-header">
				<a href="#">
					<h3 class="movie-title">МЫ</h3>
				</a>
				<div class="imax-logo"></div>
			</div>
			<div class="movie-info">
				<div class="info-section">
					<label>Дата</label>
					<span>8 Сент - 17:00</span>
				</div><!--date,time-->
				
			</div>
		</div><!--movie-content-->
	</div><!--movie-card-->
	
	<div class="movie-card">
		<div class="movie-header zaklatye">
			<div class="header-icon-container">
				<a href="#">
					<i class="material-icons header-icon"></i>
				</a>
			</div>
		</div><!--movie-header-->
		<div class="movie-content">
			<div class="movie-content-header">
				<a href="#">
					<h3 class="movie-title">ЗАКЛЯТИЕ</h3>
				</a>
				<div class="imax-logo"></div>
			</div>
			<div class="movie-info">
				<div class="info-section">
					<label>Дата</label>
					<span>4 Июль - 17:00</span>
				</div><!--date,time-->
				
			</div>
		</div><!--movie-content-->
	</div><!--movie-card-->
	
	<div class="movie-card">
		<div class="movie-header ono">
			<div class="header-icon-container">
				<a href="#">
					<i class="material-icons header-icon"></i>
				</a>
			</div>
		</div><!--movie-header-->
		<div class="movie-content">
			<div class="movie-content-header">
				<a href="#">
					<h3 class="movie-title">ОНО</h3>
				</a>
				<div class="imax-logo"></div>
			</div>
			<div class="movie-info">
				<div class="info-section">
					<label>Дата</label>
					<span>16 Авг - 17:00</span>
				</div><!--date,time-->
				
			</div>
		</div><!--movie-content-->
	</div><!--movie-card-->
	
	<div class="movie-card">
		<div class="movie-header astral">
			<div class="header-icon-container">
				<a href="#">
					<i class="material-icons header-icon"></i>
				</a>
			</div>
		</div><!--movie-header-->
		<div class="movie-content">
			<div class="movie-content-header">
				<a href="#">
					<h3 class="movie-title">АСТРАЛ 4</h3>
				</a>
				<div class="imax-logo"></div>
			</div>
			<div class="movie-info">
				<div class="info-section">
					<label>Дата</label>
					<span>16 Окт - 17:00</span>
				</div><!--date,time-->
				
			</div>
		</div><!--movie-content-->
	</div><!--movie-card-->
               
    <div class="movie-card">
		<div class="movie-header nevesta">
			<div class="header-icon-container">
				<a href="#">
					<i class="material-icons header-icon"></i>
				</a>
			</div>
		</div><!--movie-header-->
		<div class="movie-content">
			<div class="movie-content-header">
				<a href="#">
					<h3 class="movie-title">НЕВЕСТА</h3>
				</a>
				<div class="imax-logo"></div>
			</div>
			<div class="movie-info">
				<div class="info-section">
					<label>Дата</label>
					<span>8 Сент - 17:00</span>
				</div><!--date,time-->
				
			</div>
		</div><!--movie-content-->
	</div><!--movie-card-->
	
	<div class="movie-card">
		<div class="movie-header proch">
			<div class="header-icon-container">
				<a href="#">
					<i class="material-icons header-icon"></i>
				</a>
			</div>
		</div><!--movie-header-->
		<div class="movie-content">
			<div class="movie-content-header">
				<a href="#">
					<h3 class="movie-title">ПРОЧЬ</h3>
				</a>
				<div class="imax-logo"></div>
			</div>
			<div class="movie-info">
				<div class="info-section">
					<label>Дата</label>
					<span>4 Июль - 17:00</span>
				</div><!--date,time-->
				
			</div>
		</div><!--movie-content-->
	</div><!--movie-card-->
	
	<div class="movie-card">
		<div class="movie-header megaladon">
			<div class="header-icon-container">
				<a href="#">
					<i class="material-icons header-icon"></i>
				</a>
			</div>
		</div><!--movie-header-->
		<div class="movie-content">
			<div class="movie-content-header">
				<a href="#">
					<h3 class="movie-title">МЕГАЛАДОН</h3>
				</a>
				<div class="imax-logo"></div>
			</div>
			<div class="movie-info">
				<div class="info-section">
					<label>Дата</label>
					<span>16 Авг - 17:00</span>
				</div><!--date,time-->
				
			</div>
		</div><!--movie-content-->
	</div><!--movie-card-->
	
           </div>
                        <!--Стрелки-->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-scrollbar"></div>
                <hr>
       </div>
            <h2 class="h2-marvel">MARVEL</h2>
       <div class="marvel">
           
           <div class="first-marvel">
               <div class="marvel-photo">
                    <a href="#">
                        <img src="https://cinemania.alex-bashy.com/wp-content/uploads/2020/01/Thor-2-The-Dark-World-2013-Wide-Wallpaper-1440x900-1-700x441.jpg" alt="">
                    </a>
               </div>
               <div class="marvel-title">
                   <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere deserunt dolorem dolores pariatur temporibus doloremque eaque sed ipsa animi molestias accusamus eum, perspiciatis deleniti, vel labore fugiat voluptates, excepturi recusandae.</p>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quae aliquid culpa sed voluptatem expedita, in dicta fugit qui ratione, distinctio et maiores! Sit officiis blanditiis rem at ut saepe!</p>
                   <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur ratione iste laborum, minima quaerat iure neque autem obcaecati deserunt laudantium, voluptas corrupti totam reiciendis facilis praesentium. Itaque optio quidem quo.</p>
               </div>

           </div>

           <div class="second-marvel">
               <div class="small-marvel">

                   <div class="captain-america">
                       <div class="captain-america-photo">
                           <a href="#">
                               <img src="https://cinemania.alex-bashy.com/wp-content/uploads/2020/01/715250b1084a52d56a46e985dd5d90a8-272x204.jpg" alt="">
                           </a>
                       </div>
                       <div class="captain-america-title">
                           <p>Капитан Америка</p>
                           <hr>
                       </div>
                   </div>
                    
                   <div class="black">
                       <div class="black-photo">
                           <a href="#">
                               <img src="https://cinemania.alex-bashy.com/wp-content/uploads/2020/01/kinopoisk.ru-Black-Panther-3022345-o--768x577.jpg" alt="">
                           </a>
                       </div>
                       <div class="black-title">
                           <p>Черная Пантера</p>
                           <hr>
                       </div>
                   </div>

                   <div class="thor">
                       <div class="thor-photo">
                           <a href="#">
                               <img src="https://cinemania.alex-bashy.com/wp-content/uploads/2020/01/thor-ragnarok-1080p-free-desktop-wallpapers-272x204.jpg" alt="">
                           </a>
                       </div>
                       <div class="thor-title">
                           <p>ТОР: Рагнарек</p>
                           <hr>
                       </div>
                   </div>
               </div>
           </div>
       </div><!--marvel end-->
       <div class="footer-part">
                    <div class="datas">
                        <h2 class="feedback-text">
                            По всем вопросам:
                        </h2>
                        
                        <p class="icon"><i class="fa fa-envelope"></i>qwerty@gmail.com</p>
                        
                    </div>
                </div>
   </div>   <!--wrapper end-->
</div>
@endsection

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="movie/script.js"></script>
</body>
</html>