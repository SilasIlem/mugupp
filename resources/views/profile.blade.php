<!DOCTYPE html>
<html>
	<head>
		<title>{{ Auth::user()->name }}</title>
		<link rel="stylesheet" href="{{ asset('css/DocReset.css') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap-icons/bootstrap-icons.css')}}">
		<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
	</head>
	<body>
		<div id = "return-btns">
			<button><i onclick = "window.history.back();" class = "bi bi-arrow-left-circle"></i></button>
			<a href="{{ route('dashboard') }}"><button>Dashboard</button></a>
		</div>
		<div id = "container">
			<div id="prof-top">
	
				<img src="{{ asset('storage/prof-pics/' . Auth::user()->user_pic) }}" alt="">
				<div>
					<h1>{{ Auth::user()->name }}</h1>
					<small>{{ Auth::user()->email }}</small>
				</div>

				<div id = "prof-stats">
					<div>
						<p>{{ sizeof(Auth::user()->contacts) }}</p>
						<p>Contacts</p>
					</div>
					
					<div>
						<p>{{ sizeof(Auth::user()->followers) }}</p>
						<p>Followers</p>
					</div>
					
					<div>
						<p>{{ sizeof(Auth::user()->following) }}</p>
						<p>Following</p>
					</div>

				</div>

				<a href = "{{ route('settings') }}"><button>Edit Profile</button></a>

			</div>

			<div id="prof-content">
				<div class="content-row" style = "--first : 65%">
					<div id="about" style = "--h2-color : var(--color-dark-purple);">
						<h2>My Bio-Data:</h2>

						<div>
							<h5>First Name: </h5>
							<p>{{ Auth::user()->profile->firstname }}</p>	
						</div>
				
						<div>
							<h5>Middle Name:</h5>
							<p>{{ Auth::user()->profile->midname }}</p>
						</div>

						<div>
							<h5>Last Name:</h5>
							<p>{{ Auth::user()->profile->lastname }}</p>
						</div>

						<div>
							<h5>Nationality</h5>
							<p>{{ Auth::user()->profile->country->nationality->nationality }}</p>
						</div>

						<div>
							<h5>My intro:</h5>
							<p>{{ Auth::user()->bio }}</p>
						</div>
						
						<div>
							<h5>Gender:</h5>
							<p>{{ Auth::user()->profile->gender }}</p>
						</div>
						
						<div>
							<h5>Home Address:</h5>
							<p>{{ Auth::user()->profile->home_address }}</p>
						</div>

						<div>
							<h5>Date of Birth</h5>
							<p>{{ Auth::user()->profile->birthday }}-{{Auth::user()->profile->birthmonth}}-{{Auth::user()->profile->birthyear}}</p>
						</div>
						
						<div>
							<h5>My Bio:</h5>
							<p>{{ Auth::user()->bio }}</p>
						</div>
					</div>

					<div id = "residence" style = "--h2-color : var(--color-gray);">
						<h2>Residence</h2>

						<div>
							<h5>Country of Residence:</h5>
							<p>{{ Auth::user()->profile->res_country }}</p>
						</div>

						<div>
							<h5>State of Residence:</h5>
							<p>{{ Auth::user()->profile->res_state}}</p>
						</div>

						<div>
							<h5>City of Residence:</h5>
							<p>{{ Auth::user()->profile->res_city }}</p>
						</div>

						<h2>Origin</h2>
						
						<div>
							<h5>Country of Origin:</h5>
							<p>{{ Auth::user()->profile->org_country }}</p>
						</div>

						<div>
							<h5>State of Origin:</h5>
							<p>{{ Auth::user()->profile->org_state }}</p>
						</div>

						<div>
							<h5>LGA/City of Origin:</h5>
							<p>{{ Auth::user()->profile->org_lga }}</p>
						</div>

					</div>
				</div>
				<div class="content-row" style = "--first : 48%;">
					<div id="application_info" style = "--h2-color : var(--color-gray);">
						<h2>Application Information:</h2>

						<div>
							<h5>Application Id:</h5>
							<p>{{ Auth::user()->profile->app_id }}</p>
						</div>

						<div>
							<h5>Application Type:</h5>
							<p>{{ Auth::user()->profile->app_type }}</p>
						</div>

						@if(Auth::user()->profile->app_type == "tutor")
						<div>
							<h5>Application Status:</h5>
							<p>{{ Auth::user()->profile->app_status }}</p>
						</div>
						@endif
					</div>

					<div id="favorites" style = "--h2-color : rgb(248, 248, 131);">
						<h2>Favorites:</h2>
						<div>
							<h5>Favorite Books:</h5>
							<ul>
								<li>Days of our lives</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="content-row"></div>
				<div class="content-row"></div>
			</div>
		</div>
	</body>
</html>