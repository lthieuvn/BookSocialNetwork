<!DOCTYPE html>
<html>
<head>
	<title>home - user</title>
    <link rel="stylesheet" media="screen" href="https://s.gr-assets.com/assets/gr/application-2a8fdf619e08c24d5212446dd0848b94.css" />
    <!-- <link rel="stylesheet" href="{{ URL::asset('frontend/css/home_user.css')}}" /> -->
	<script src="https://s.gr-assets.com/assets/react_client_side/sprockets_dependencies-30f123719317f85caddeb01ca7b5493c.js"></script>
	<script src="https://s.gr-assets.com/assets/react_client_side/external_dependencies-48241921bf.js"></script>
	<script src="https://s.gr-assets.com/assets/react_client_side/home-41a67ed5b8.js"></script>
	<script src="https://use.fontawesome.com/079150a0fc.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	
	
	<style>
.dropbtn {
	/*background-color: yellow;*/
    color: white;
    font-size: 18px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #382110;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #ffffff;
    min-width: 125px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd}

.show {display:block;}
</style>

	<script src="https://s.gr-assets.com/assets/webfontloader-f2373eb97b67c818c1db5c9392e387af.js"></script>
</head>
<body style="background: #f9f7f4">
	<div class="siteHeader__topLine gr-box gr-box--withShadow">
		<div class="siteHeader__contents">
			<div class="siteHeader__topLevelItem siteHeader__topLevelItem--searchIcon">
				<button class="siteHeader__searchIcon gr-iconButton" aria-label="Toggle search" type="button""></button>
			</div>
			<a href="/" class="siteHeader__logo" aria-label="Goodreads Home" title="Goodreads Home"></a>
			<nav class="siteHeader__primaryNavInline">
				<ul role="menu" class="siteHeader__menuList">
					<li class="siteHeader__topLevelItem siteHeader__topLevelItem--home">
						<a href="{{ route('user')}}" class="siteHeader__topLevelLink">Home</a></li>
					<li class="siteHeader__topLevelItem">
						<a href="/review/list/78270916" class="siteHeader__topLevelLink">My Books</a></li>
				</ul>
			</nav>
			<div accept-charset="UTF-8" class="searchBox searchBox--navbar">
				<form autocomplete="off" action="/search" class="searchBox__form" role="search" aria-label="Search for books to add to your shelves">
				    <input class="searchBox__input searchBox__input--navbar" autocomplete="off" name="q" type="text" placeholder="Search books" aria-label="Search books" aria-controls="searchResults"/>
				    <button type="submit" class="searchBox__icon--magnifyingGlass gr-iconButton searchBox__icon searchBox__icon--navbar" aria-label="Search"></button>
				</form>
			</div>
			<nav class="siteHeader__primaryNavInline">
				<ul role="menu" class="siteHeader__menuList">
					<li class="siteHeader__topLevelItem siteHeader__topLevelItem--home">
						<!-- <a href="/" class="siteHeader__topLevelLink">Home</a></li> -->
						<marquee  class="siteHeader__topLevelLink" >Welcome - Hi! {{ Auth::user()->name }}</marquee>
					
				</ul>
			</nav>
			<div class="siteHeader__personal">
				<ul class="personalNav">
	    			<li class="personalNav__listItem">
	      			<!-- <div> -->
        				<div class="dropdown dropdown--notifications">
					        <a class="dropdown__trigger dropdown__trigger--notifications dropdown__trigger--personalNav" href="/notifications" role="button" aria-haspopup="true" aria-expanded="false" title="Notifications">
					            <span class="headerPersonalNav__icon
					                       headerPersonalNav__icon--notifications" aria-label="Notifications">
					            </span>
					        </a>
		                <div class="dropdown__menu dropdown__menu--notifications gr-box gr-box--withShadowLarge" role="menu"">
	                       	<div class="dropdown__container gr-notifications gr-notifications--sparse">
	                        <div class="spinnerContainer">
	                        	<div class="spinner">
	                        		<div class="spinner__mask">
                        				<div class="spinner__maskedCircle">
                        				
                        			</div>
                        		</div>
                        	</div>
                        	<div class="spinnerFallbackText">Loading…</div>
                        </div>
                    <!-- </div> -->
                    <li class="personalNav__listItem">
                    	<a href="/message/inbox" title="Messages" class="headerPersonalNav">
                    		<span class="headerPersonalNav__icon headerPersonalNav__icon--inbox" aria-label="Inbox">
                    		</span>
                    	</a>
                    </li>
                    <li class="personalNav__listItem">
                    	<a href="/friend" title="Friends" class="headerPersonalNav">
                    		<span class="headerPersonalNav__icon headerPersonalNav__icon--friendRequests" aria-label="Friend Requests"></span>
                   		</a>
                    </li>
                    <li class="personalNav__listItem">

                    	<div class="dropdown dropdown--profileMenu">
                    		<button onclick="myFunction()" class="dropbtn">
                    			<span class="headerPersonalNav__icon" data-reactid=".2fvgd7ogb28.1.0.5.0.4.0.0.0"><img class="circularIcon circularIcon--border" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/users/1519716830i/78270916._UY60_CR8,0,60,60_.jpg" alt="Tom"></span>
                    		</button>
							  <div id="myDropdown" class="dropdown-content">
							  	<span class="siteHeader__subNavLink gr-h3 gr-h3--noMargin" style="padding-top: 10px">{{ Auth::user()->name }}</span>
							    <a href="#about">Profile</a>
							    <a href="#about">My Book</a>
							    <a href="#contact">Friend</a>
							    <a href="{{ route('logout') }}"
			                      onclick="event.preventDefault();
			                               document.getElementById('logout-form').submit();">
			                      {{ __('Sign out') }}
			                  </a>

			                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			                      {{ csrf_field() }}
			                  </form>

							  </div>
                    	</div>
                    	<script>
							/* When the user clicks on the button, 
							toggle between hiding and showing the dropdown content */
							function myFunction() {
							    document.getElementById("myDropdown").classList.toggle("show");
							}

							// Close the dropdown if the user clicks outside of it
							window.onclick = function(event) {
							  if (!event.target.matches('.dropbtn')) {

							    var dropdowns = document.getElementsByClassName("dropdown-content");
							    var i;
							    for (i = 0; i < dropdowns.length; i++) {
							      var openDropdown = dropdowns[i];
							      if (openDropdown.classList.contains('show')) {
							        openDropdown.classList.remove('show');
							      }
							    }
							  }
							}
							</script>
                    </li>
                </div>
            </div>           
        </div>
	</div>
	<main>
		<div class='homeSecondaryColumn'>
			<section class='gr-homePageRailContainer u-paddingBottomMedium'>
				<section class="currentlyReadingShelf">
					<h3 class="gr-h3 gr-h3--noTopMargin">Currently Reading</h3>
						<!-- bo vong lap o day ne -->
						<div class="gr-mediaBox gr-book--medium gr-book">
							<a href="/book/show/34273236-little-fires-everywhere">
								<img alt="Little Fires Everywhere" class="gr-mediaBox__media gr-book__image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1490351351i/34273236._SY180_.jpg" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.0.0"/>
							</a>
							<div class="gr-mediaBox__desc gr-mediaBox__desc--clearfixOverflow" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1">
								<div class="gr-book__title" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.1"><a href="/book/show/34273236-little-fires-everywhere" class="gr-book__titleLink gr-hyperlink gr-hyperlink--naked" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.1.0">Little Fires Everywhere</a>
								</div>
								<div class="gr-book__author" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.2">
									<span data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.2.0">by </span>
									<a href="https://www.goodreads.com/author/show/164692.Celeste_Ng" class="gr-book__authorLink gr-hyperlink gr-hyperlink--naked" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.2.1">Celeste Ng</a>
								</div>
								<div class="gr-book__additionalContent" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.3">
									<div aria-live="polite" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.3.1">
										<button class="gr-buttonAsLink u-marginTopTiny" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.3.1.0">Update Progress</button>
									</div>
								</div>
							</div>
						</div>
						<!-- kết thúc ở đây nè -->
						<div class="gr-mediaBox gr-book--medium gr-book">
							<a href="/book/show/34273236-little-fires-everywhere">
								<img alt="Little Fires Everywhere" class="gr-mediaBox__media gr-book__image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1490351351i/34273236._SY180_.jpg" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.0.0"/>
							</a>
							<div class="gr-mediaBox__desc gr-mediaBox__desc--clearfixOverflow" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1">
								<div class="gr-book__title" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.1"><a href="/book/show/34273236-little-fires-everywhere" class="gr-book__titleLink gr-hyperlink gr-hyperlink--naked" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.1.0">Rosario+Vampire, Vol. 1 (Rosario+Vampire, #1)</a>
								</div>
								<div class="gr-book__author" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.2">
									<span data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.2.0">by </span>
									<a href="https://www.goodreads.com/author/show/164692.Celeste_Ng" class="gr-book__authorLink gr-hyperlink gr-hyperlink--naked" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.2.1">Celeste Ng</a>
								</div>
								<div class="gr-book__additionalContent" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.3">
									<div aria-live="polite" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.3.1">
										<button class="gr-buttonAsLink u-marginTopTiny" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.3.1.0">Update Progress</button>
									</div>
								</div>
							</div>
						</div>
				</section>
				<footer data-reactid=".1yh1fdqpgxs.1">
					<div class="u-marginTopXSmall" data-reactid=".1yh1fdqpgxs.1.0">
						
					</div>
					<span data-reactid=".1yh1fdqpgxs.1.1">
						<span data-reactid=".1yh1fdqpgxs.1.1.$0">
							<a href="/review/list/78270916-tom?shelf=currently-reading" data-reactid=".1yh1fdqpgxs.1.1.$0.0">View all books</a>
						</span>
						<span data-reactid=".1yh1fdqpgxs.1.1.$1">
							<span data-reactid=".1yh1fdqpgxs.1.1.$1.0"> · </span>
						</span>
						<span data-reactid=".1yh1fdqpgxs.1.1.$2">
							<input class="gr-buttonAsLink currentlyReadingShelf__addBook" value="Add a book" type="button" autocomplete="off" data-reactid=".1yh1fdqpgxs.1.1.$2.0"/>
						</span>
						<span data-reactid=".1yh1fdqpgxs.1.1.$3">
							<span data-reactid=".1yh1fdqpgxs.1.1.$3.0"> · </span>
						</span>
					</span>
				</footer>
			</section>
			<section class='gr-homePageRailContainer u-paddingBottomMedium showForLargeWidth'>
            <h3 class="gr-h3 gr-h3--noTopMargin">Want to Read</h3>
				<div class="shelfDisplay" data-reactid=".3p3gp8bitc" data-react-checksum="1359373285">
					<a class="shelfDisplay__bookCoverLink" href="/book/show/28504537-a-field-guide-to-lies" data-reactid=".3p3gp8bitc.0:$28504537">
						<img alt="A Field Guide to Lies: Critical Thinking in the Information Age" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1458497081i/28504537._UX96_CR0,25,96,96_.jpg" class="gr-bookCover gr-bookCover--thumbnailSmall" data-reactid=".3p3gp8bitc.0:$28504537.0"/>
					</a>
					<a class="shelfDisplay__bookCoverLink" href="/book/show/10361330-html-and-css" data-reactid=".3p3gp8bitc.0:$10361330">
						<img alt="HTML and CSS: Design and Build Websites" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1348805097i/10361330._UX96_CR0,12,96,96_.jpg" class="gr-bookCover gr-bookCover--thumbnailSmall" data-reactid=".3p3gp8bitc.0:$10361330.0"/></a>
						<div class="u-marginTopXSmall" data-reactid=".3p3gp8bitc.1">
							<a href="https://www.goodreads.com/review/list?shelf=to-read" aria-label="View your to-read shelf" data-reactid=".3p3gp8bitc.1.0">View all books</a>
						</div>
				</div>
			</section>
			<section class="showForLargeWidth">
            <h3 class="gr-h3 gr-h3--noTopMargin">BOOKSHELVES</h3>
				<div class="userShelvesBookCounts">
					<div class="userShelvesBookCounts__counts" data-reactid=".1oycz45z9j4.0">
					<a class="u-displayBlock" href="/user_shelves/255139600" aria-label="Read shelf. 1 books." data-reactid=".1oycz45z9j4.0.$read">1</a>
					<a class="u-displayBlock" href="/user_shelves/255139599" aria-label="Currently Reading shelf. 3 books." data-reactid=".1oycz45z9j4.0.$currently-reading">3</a>
					<a class="u-displayBlock" href="/user_shelves/255139598" aria-label="Want to Read shelf. 2 books." data-reactid=".1oycz45z9j4.0.$to-read">2</a>
				</div>
				<div data-reactid=".1oycz45z9j4.1"><a class="userShelvesBookCounts__nameLink" href="/user_shelves/255139600" aria-label="Read shelf. 1 books." data-reactid=".1oycz45z9j4.1.$read">Read</a>
					<a class="userShelvesBookCounts__nameLink" href="/user_shelves/255139599" aria-label="Currently Reading shelf. 3 books." data-reactid=".1oycz45z9j4.1.$currently-reading">Currently Reading</a>
					<a class="userShelvesBookCounts__nameLink" href="/user_shelves/255139598" aria-label="Want to Read shelf. 2 books." data-reactid=".1oycz45z9j4.1.$to-read">Want to Read</a>
				</div>
				</div>
			</section>
		</div>
		<div class='homePrimaryColumn'>
			<div class="gr-newsfeedItem gr-mediaBox">
				<div class="gr-newsfeedItem__headerIcon gr-mediaBox__media gr-mediaBox__media--marginSmall">
					<a href="/user/show/78309217-hung">
						<img class="circularIcon circularIcon--medium circularIcon--border" src="https://s.gr-assets.com/assets/nophoto/user/u_60x60-267f0ca0ea48fd3acfd44b95afa64f01.png" alt="Hung">
					</a>
				</div>
				<div class="gr-mediaBox__desc gr-newsfeedItem__body">
					<div class="gr-newsfeedItem__header gr-newsfeedItem__header--timestamp">
						<a class="gr-hyperlink gr-hyperlink--bold gr-user__profileLink u-marginRightTiny" href="/user/show/78309217-hung" data-tracking-dfp="true" data-tracking-pmet="{&quot;click_type&quot;:&quot;social&quot;}">Hung</a>
						<span class="gr-newsfeedItem__headerText">reviewed</span>
						<a class="gr-hyperlink gr-hyperlink--bold" href="/book/show/2184798.Blood_River">Blood River: A Journey to Africa's Broken Heart</a>
					</div>
					<small class="gr-newsfeedItem__headerTimestamp">
						<a href="https://www.goodreads.com/review/show/2310079643" class="gr-hyperlink gr-hyperlink--naked" aria-label="Permanent link to Hung’s review of Blood River: A Journey to Africa's Broken Heart">
							<time datetime="2018-02-26T23:15:33.000-08:00" aria-label="19 days ago">3w</time></a>
					</small>
					<div class="gr-newsfeedItem__socialBookUpdateDetails">
					<div class="gr-newsfeedItem__readCountText">Read 3 times</div>
					<div class="gr-metaText u-marginBottomXSmall">
						<span class="u-marginRightTiny">
							<span>Rating </span>
							<div class="communityRating u-inlineBlock" aria-label="Rated 3.00 of 5">
								<span>
									<div class="communityRating__starsWrapper communityRating__starsWrapper--medium">
										<div class="communityRating__stars communityRating__stars--medium" style="width:60%;" aria-label="Rated 3.00 of 5">
										</div>
									</div>
								</span>
							</div>
						</span>
					</div>
					<a href="https://www.goodreads.com/review/show/2310079643" class="gr-hyperlink">
						<span>Read </span>
						<span>Hung</span>
						<span>’s review</span>
					</a>
					<div class="gr-metaText">
						<span">Read in Feb 2018</span>
					</div>
					<div class="gr-newsfeedItem__reviewText">
						<div class="expandableHtml">
							<span>hi</span>
						</div>
					</div>
					<div class="gr-mediaBox gr-book--large gr-book gr-book--border">
						<a href="/book/show/2184798.Blood_River">
							<img alt="Blood River: A Journey to Africa's Broken Heart" class="gr-mediaBox__media gr-book__image gr-book__image--large" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1320455903i/2184798._SX120_.jpg" data-tracking-dfp="true" data-tracking-pmet="{&quot;click_type&quot;:&quot;book_image&quot;}">
						</a>
						<div class="gr-mediaBox__desc">
							<div class="gr-book__title">
								<a href="/book/show/2184798.Blood_River" class="gr-book__titleLink gr-book__titleLink--large gr-hyperlink gr-hyperlink--naked" data-tracking-dfp="true" data-tracking-pmet="{&quot;click_type&quot;:&quot;book_title&quot;}">Blood River: A Journey to Africa's Broken Heart</a>
							</div>
							<div class="gr-book__author gr-book__author--large">
								<span>by </span>
								<a href="https://www.goodreads.com/author/show/534082.Tim_Butcher" class="gr-book__authorLink gr-hyperlink gr-hyperlink--naked" data-tracking-dfp="true">Tim Butcher</a>
							</div>
							<div class="gr-book__additionalContent">
								<div data-tracking-dfp="true" data-tracking-pmet="{&quot;click_type&quot;:&quot;wtr_button&quot;}">
								<div class='wtrButtonContainer'>
							    	<div class="form-group" style="width: 160px;">
							    		<select class="form-control" id="sel1"  style="background: #409D69">
									        <option>Want to read</option>
									        <option>Currently Reading</option>
									        <option>Read</option>
									    </select>
							    	</div>
								</div>
									<div class="userRating">
										<small class="userRating__label">Rate it:</small>
										<div class="userRating__starsWrapper" tabindex="0" role="group">
											<button class="userRating__star" title="Rate 1 star" data-tracking-dfp="true" data-tracking-pmet="{&quot;click_type&quot;:&quot;rating&quot;}">
											</button>
											<button class="userRating__star" title="Rate 2 stars" data-tracking-dfp="true" data-tracking-pmet="{&quot;click_type&quot;:&quot;rating&quot;}"></button>
											<button class="userRating__star" title="Rate 3 stars" data-tracking-dfp="true" data-tracking-pmet="{&quot;click_type&quot;:&quot;rating&quot;}"></button>
											<button class="userRating__star" title="Rate 4 stars" data-tracking-dfp="true" data-tracking-pmet="{&quot;click_type&quot;:&quot;rating&quot;}"></button>
											<button class="userRating__star" title="Rate 5 stars" data-tracking-dfp="true" data-tracking-pmet="{&quot;click_type&quot;:&quot;rating&quot;}"></button>
										</div>
									</div>
									<div class="u-marginTopXSmall gr-book__description">
										<span>A compulsively readable account of a journey to the Congo — a country virtually inaccessible to the outside world — vividly told by a daring and adventurous journalist.Ever s…</span>
										<a class="u-marginLeftTiny fullContentLink" href="https://www.goodreads.com/book/show/2184798.Blood_River" data-tracking-dfp="true" data-tracking-pmet="{&quot;click_type&quot;:&quot;body_click&quot;}">Continue reading</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
				
				
				<div class="gr-newsfeedItem__footer">
					<div class="gr-newsfeedItem__footerActions">
						<button aria-label="Unlike Hung’s review of Blood River: A Journey to Africa's Broken Heart" class="gr-buttonAsLink">Unlike</button>
						<span> · </span>
						<button class="gr-buttonAsLink">Comment</button>
					</div>
					<div class="likeInformation u-defaultType">
						<span class="likeInformation__name">You</span>
						<span > and </span>
						<a href="/user/show/5527956" class="gr-hyperlink gr-hyperlink--bold likeInformation__name">Tim Butcher</a>
						<span> liked this</span>
					</div>
					<noscript></noscript>
					<div class="gr-commentForm gr-mediaBox">
						<div class="gr-mediaBox__media u-noLineHeight">
							<a href="/user/show/78270916-tom">
								<img class="circularIcon circularIcon--border" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/users/1519716830i/78270916._UY60_CR8,0,60,60_.jpg" alt="Tom">
							</a>
						</div>
							<form class="gr-mediaBox__desc" method="post" action="/comment"><input type="hidden" name="id" value="2310079643">
								<input type="hidden" name="type" value="Review">
								<textarea class="gr-textarea gr-commentForm__textarea" name="comment[body_usertext]" rows="1" placeholder="Write a comment…" aria-label="Write a comment…">
								</textarea>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="homeTertiaryColumn">
			<div class="rightContainer">
			        <div id="listsTeaserBox" class="featureTeaserBox">
			          <h2 class="gr-h3">List books by category</h2>
						<div class="listTeaser">
							<div class="listTitle" style="padding: 5px 0px 10px">
						    <a href="/list/show/11.Best_Crime_Mystery_Books">Best Crime &amp; Mystery Books</a>
						  </div>
						  <div class="listImg">
						      <a href="/book/show/2429135.The_Girl_with_the_Dragon_Tattoo"><img alt="The Girl with the Dragon Tattoo by Stieg Larsson" title="The Girl with the Dragon Tattoo by Stieg Larsson" src="https://images.gr-assets.com/books/1327868566s/2429135.jpg"></a>
						      <a href="/book/show/16299.And_Then_There_Were_None"><img alt="And Then There Were None by Agatha Christie" title="And Then There Were None by Agatha Christie" src="https://images.gr-assets.com/books/1391120695s/16299.jpg"></a>
						      <a href="/book/show/960.Angels_Demons"><img alt="Angels &amp; Demons by Dan Brown" title="Angels &amp; Demons by Dan Brown" src="https://images.gr-assets.com/books/1303390735s/960.jpg"></a>
						      <a href="/book/show/17899948-rebecca"><img alt="Rebecca by Daphne du Maurier" title="Rebecca by Daphne du Maurier" src="https://images.gr-assets.com/books/1386605169s/17899948.jpg"></a>
						  </div>
						  
						</div>
						<div class="listTeaser">
							<div class="listTitle" style="padding: 5px 0px 10px">
						    <a href="/list/show/11.Best_Crime_Mystery_Books">Best Crime &amp; Mystery Books</a>
						  </div>
						  <div class="listImg" style="margin-bottom: 16px">
						      <a href="/book/show/4667024-the-help"><img alt="The Help by Kathryn Stockett" title="The Help by Kathryn Stockett" src="https://images.gr-assets.com/books/1346100365s/4667024.jpg"></a>
						      <a href="/book/show/77203.The_Kite_Runner"><img alt="The Kite Runner by Khaled Hosseini" title="The Kite Runner by Khaled Hosseini" src="https://images.gr-assets.com/books/1484565687s/77203.jpg"></a>
						      <a href="/book/show/43641.Water_for_Elephants"><img alt="Water for Elephants by Sara Gruen" title="Water for Elephants by Sara Gruen" src="https://images.gr-assets.com/books/1494428973s/43641.jpg"></a>
						      <a href="/book/show/19063.The_Book_Thief"><img alt="The Book Thief by Markus Zusak" title="The Book Thief by Markus Zusak" src="https://images.gr-assets.com/books/1390053681s/19063.jpg"></a>
						  </div>
						</div>
			        </div>
			    <section class='gr-homePageRailContainer u-paddingBottomMedium' style="border-top: 1px solid #D8D8D8;padding-top: 16px;">
				<section class="currentlyReadingShelf">
					<h3 class="gr-h3 gr-h3--noTopMargin">New Books</h3>
						<!-- bo vong lap o day ne -->
						<div class="gr-mediaBox gr-book--medium gr-book">
							<a href="/book/show/34273236-little-fires-everywhere">
								<img alt="Little Fires Everywhere" class="gr-mediaBox__media gr-book__image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1490351351i/34273236._SY180_.jpg" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.0.0"/>
							</a>
							<div class="gr-mediaBox__desc gr-mediaBox__desc--clearfixOverflow" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1">
								<div class="gr-book__title" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.1"><a href="/book/show/34273236-little-fires-everywhere" class="gr-book__titleLink gr-hyperlink gr-hyperlink--naked" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.1.0">Little Fires Everywhere</a>
								</div>
								<div class="gr-book__author" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.2">
									<span data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.2.0">by </span>
									<a href="https://www.goodreads.com/author/show/164692.Celeste_Ng" class="gr-book__authorLink gr-hyperlink gr-hyperlink--naked" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.2.1">Celeste Ng</a>
								</div>
							</div>
						</div>
						<!-- kết thúc ở đây nè -->
						<div class="gr-mediaBox gr-book--medium gr-book">
							<a href="/book/show/34273236-little-fires-everywhere">
								<img alt="Little Fires Everywhere" class="gr-mediaBox__media gr-book__image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1490351351i/34273236._SY180_.jpg" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.0.0"/>
							</a>
							<div class="gr-mediaBox__desc gr-mediaBox__desc--clearfixOverflow" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1">
								<div class="gr-book__title" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.1"><a href="/book/show/34273236-little-fires-everywhere" class="gr-book__titleLink gr-hyperlink gr-hyperlink--naked" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.1.0">Rosario+Vampire, Vol. 1 (Rosario+Vampire, #1)</a>
								</div>
								<div class="gr-book__author" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.2">
									<span data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.2.0">by </span>
									<a href="https://www.goodreads.com/author/show/164692.Celeste_Ng" class="gr-book__authorLink gr-hyperlink gr-hyperlink--naked" data-reactid=".1yh1fdqpgxs.0.1.$=1$34273236.1.2.1">Celeste Ng</a>
								</div>
							</div>
						</div>
				</section>
				<footer data-reactid=".1yh1fdqpgxs.1">
					<div class="u-marginTopXSmall" data-reactid=".1yh1fdqpgxs.1.0">
						
					</div>
					<span data-reactid=".1yh1fdqpgxs.1.1">
						<span data-reactid=".1yh1fdqpgxs.1.1.$0">
							<a href="/review/list/78270916-tom?shelf=currently-reading" data-reactid=".1yh1fdqpgxs.1.1.$0.0">View all books</a>
						</span>
					</span>
				</footer>
			</section>
				</div>

		</div>
	</main>
</body>
</html>