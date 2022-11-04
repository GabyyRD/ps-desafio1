<header id="site-header">
	<div id="header-container">
	  <div id="header-logo">
		<img src="{{asset('site/img/bella-papelaria-logo.png')}}" alt='Bella Papelaria' onclick="openPage('bellapapelaria')"> 
	  </div>
	  <div id="header-links">
		<input type="checkbox" id="check">
		<label for="check" class="checkbottom">
		  <i class="fas fa-bars"></i>
		</label>
		<ul id="nav-list">
		  <li><a class="nav-option" href="{{route('siteindex')}}">HOME</a></li>
		  <li><a class="nav-option" href="{{route('sobre')}}">SOBRE</a></li>
		  <li><a class="nav-option" href="{{route('dashboard')}}" class="">ADMIM</a></li>
		  <li>
			<div id="header-darkmode">
				<input type="checkbox" id="dark-mode-toggle" onchange="darkMode(event)">
				<label for="dark-mode-toggle" class="label-darkmode">
				  <span id="light-symbol" class="material-symbols-outlined">light_mode</span>
				  <span id="dark-symbol" class="material-symbols-outlined" style="display: none;">dark_mode</span>
				</label>
			  </div>
		  </li>
		</ul>
	  </div>
	</div>
</header>


  