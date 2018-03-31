<!DOCTYPE html>
<html>
<head>
	<title>Book show</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" media="all" href="https://s.gr-assets.com/assets/goodreads-479eda3f659b065fab977d3b90262b48.css" />
	<link rel="stylesheet" media="screen,print" href="https://s.gr-assets.com/assets/review/list-999f3695f560f96c8637b3d3bb2677dc.css" />
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/css/mystyle.css')}}">
  	<link rel="canonical" href="https://www.goodreads.com/review/list/78270916" />
	<script src="https://s.gr-assets.com/assets/react_client_side/sprockets_dependencies-30f123719317f85caddeb01ca7b5493c.js"></script>
	<script src="https://s.gr-assets.com/assets/react_client_side/external_dependencies-48241921bf.js"></script>
	<script src="https://s.gr-assets.com/assets/react_client_side/home-41a67ed5b8.js"></script>
	<script src="https://use.fontawesome.com/079150a0fc.js"></script>

</head>
<body>
	<div class="content">
		<div class="siteHeader__topLine gr-box gr-box--withShadow">
		<div class="siteHeader__contents">
			<div class="siteHeader__topLevelItem siteHeader__topLevelItem--searchIcon">
				<button class="siteHeader__searchIcon gr-iconButton" aria-label="Toggle search" type="button""></button>
			</div>
			<a href="/" class="siteHeader__logo" aria-label="Goodreads Home" title="Goodreads Home"></a>
			<nav class="siteHeader__primaryNavInline">
				<ul role="menu" class="siteHeader__menuList">
					<li class="siteHeader__topLevelItem siteHeader__topLevelItem--home">
						<a href="/" class="siteHeader__topLevelLink">Home</a></li>
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
					    </div>
		                <!-- <div class="dropdown__menu dropdown__menu--notifications gr-box gr-box--withShadowLarge" role="menu"">
	                       	<div class="dropdown__container gr-notifications gr-notifications--sparse">
	                        <div class="spinnerContainer">
	                        	<div class="spinner">
	                        		<div class="spinner__mask">
                        				<div class="spinner__maskedCircle">
                        				
                        			</div>
                        		</div>
                        	</div>
                        	<div class="spinnerFallbackText">Loading…</div>
                        </div> -->
                    <!-- </div> -->
                	</li>
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
                    	<div class="dropdown dropdown--profileMenu" data-reactid=".7ozs989eyo.0.0.4.0.4.0">
                    		<a class="dropdown__trigger dropdown__trigger--profileMenu dropdown__trigger--personalNav" href="/user/show/78270916-tom" role="button" aria-haspopup="true" aria-expanded="false" data-reactid=".7ozs989eyo.0.0.4.0.4.0.0">
                    			<span class="headerPersonalNav__icon" data-reactid=".7ozs989eyo.0.0.4.0.4.0.0.0">
                    				<img class="circularIcon circularIcon--border" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/users/1519716830i/78270916._UY60_CR8,0,60,60_.jpg" alt="Tom" data-reactid=".7ozs989eyo.0.0.4.0.4.0.0.0.1"/>
                    			</span>
                    		</a>
                    		<div class="dropdown__menu dropdown__menu--profileMenu gr-box gr-box--withShadowLarge" role="menu" data-reactid=".7ozs989eyo.0.0.4.0.4.0.1">
                    			<div class="siteHeader__subNav siteHeader__subNav--profile gr-box gr-box--withShadowLarge" data-reactid=".7ozs989eyo.0.0.4.0.4.0.1.0">
                    				<span class="siteHeader__subNavLink gr-h3 gr-h3--noMargin">
                    					<div class="personalNavDrawer__profileAndLinksContainer">
                    					</div>
                    				</span>
                    			</div>
                    		</div>
                    	</div>
                    </li>
                </ul>
            </div>
        </div>
		</div>
		<div class="mainContentContainer">
	    	<div class="mainContent">
	    		<div class="mainContentFloat">
	    			<div class="leftContainer">
		    			<div id="topcol" class="last col stacked">
		    				<div id="imagecol" class="col">
							  	<div class="bookCoverContainer">
								    <div class="bookCoverPrimary">
								          <a rel="nofollow" itemprop="image" href="/book/photo/1137215.Boneshaker">
								          	<img id="coverImage" alt="Boneshaker (The Clockwork Century, #1)" src="https://images.gr-assets.com/books/1433161048l/1137215.jpg" />
								          </a>
								    </div>
							    </div>
							    <div class='wtrButtonContainer'>
							    	<div class="form-group">
							    		<select class="form-control" id="sel1"  style="background: #409D69">
									        <option>Want to read</option>
									        <option>Currently Reading</option>
									        <option>Read</option>
									    </select>
							    	</div>
								</div>
							    
							</div>
							<div id="metacol" class="last col" style="width: 435px;margin-left: 10px">
								<h1 id="bookTitle" class="bookTitle" itemprop="name">
								      Boneshaker
								      	<a class="greyText" href="/series/43930-the-clockwork-century">
								          (The Clockwork Century #1)
										</a>
								</h1>

								<div id="bookAuthors" class="stacked">
								  <span class='by smallText'>by</span>
									<span itemprop='author' itemscope='' itemtype='http://schema.org/Person'>
										<a class="authorName" itemprop="url" href="https://www.goodreads.com/author/show/221253.Cherie_Priest">
											<span itemprop="name">Cherie Priest</span></a>
									</span>

								</div>
								<div id="descriptionContainer">
	  
	      							<div id="description" class="readable stacked" style="right:0;font-size: 16px;">
	        
										<span id="freeTextContainer8227207913880771659">In the early days of the Civil War, rumors of gold in the frozen Klondike brought hordes of newcomers to the Pacific Northwest. Anxious to compete, Russian prospectors commissioned inventor Leviticus Blue to create a great machine that could mine through Alaska’s ice. Thus was Dr. Blue’s Incredible Bone-Shaking Drill Engine born.<br /><br />But on its first test run the Boneshaker wen</span>
	  									<span id="freeText8227207913880771659" style="display:none">In the early days of the Civil War, rumors of gold in the frozen Klondike brought hordes of newcomers to the Pacific Northwest. Anxious to compete, Russian prospectors commissioned inventor Leviticus Blue to create a great machine that could mine through Alaska’s ice. Thus was Dr. Blue’s Incredible Bone-Shaking Drill Engine born.<br /><br />But on its first test run the Boneshaker went terribly awry, destroying several blocks of downtown Seattle and unearthing a subterranean vein of blight gas that turned anyone who breathed it into the living dead.<br /><br />Now it is sixteen years later, and a wall has been built to enclose the devastated and toxic city. Just beyond it lives Blue’s widow, Briar Wilkes. Life is hard with a ruined reputation and a teenaged boy to support, but she and Ezekiel are managing. Until Ezekiel undertakes a secret crusade to rewrite history.<br /><br />His quest will take him under the wall and into a city teeming with ravenous undead, air pirates, criminal overlords, and heavily armed refugees. And only Briar can bring him out alive.</span>
	  									<a data-text-id="8227207913880771659" href="#" onclick="swapContent($(this));; return false;">...more</a>
	      							</div>
								</div>
								<br>
								<div style="font-size: 17px;">
								<span>Rate this book</span>
								<i class="fa fa-star" style="color: yellow"></i>
								<i class="fa fa-star" style="color: yellow"></i>
								<i class="fa fa-star" style="color: yellow"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<a href="/review/edit/1137215" style="margin-left: 70px;">Add a review</a>
								</div>
							</div>
		    			</div>
		    			<br>
		    			<div id='lazy_loadable_view'>
			    			<div class="h2Container gradientHeaderContainer">
			    				<h2 class="brownBackground">Reviews</h2>
			    			</div>
		    				
		    			</div>

		    			<div class="friendReviews elementListBrown">
    						<div class="section firstReview">
								<div id="review_91338657" class="review" itemprop="reviews" itemscope="" itemtype="http://schema.org/Review">
    								<a title="Michael" class="left imgcol" href="/user/show/1036930-michael">
    								<img alt="Michael" src="https://images.gr-assets.com/users/1402947913p2/1036930.jpg"></a>

									  	<div class="left bodycol" style="width: 510px;">
										    <div class="reviewHeader uitext stacked">
										        <a class="reviewDate createdAt right" href="/review/show/91338657?book_show_action=true">Feb 25, 2010</a>

										      <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
										        <a title="Michael" class="user" itemprop="url" name="Michael" href="/user/show/1036930-michael">Michael</a>
										      </span>

										        rated it
										    </div>
	        								<div class="reviewText stacked">
	              								<span id="reviewTextContainer91338657" class="readable" style="font-size: 15px;">
	            
													<span id="freeTextContainer1229566540314906503">``Miss Eliza Bennet, let me persuade you to follow my example, and take a turn about the room. -- I assure you the anti-gravity hoverchannel is very refreshing after sitting so long in one attitude.''<br><br>Eliza was surprised, but agreed to it immediately. She unstrapt herself from her leather seat restraints and stood, careful to maintain her balance as the airship encountered turbulence. When she entered the hoverchannel, she activated the polarity redistribution magnets within her combat suit and b</span>
													  <span id="freeText1229566540314906503" style="display:none">``Miss Eliza Bennet, let me persuade you to follow my example, and take a turn about the room. -- I assure you the anti-gravity hoverchannel is very refreshing after sitting so long in one attitude.''<br><br>Eliza was surprised, but agreed to it immediately. She unstrapt herself from her leather seat restraints and stood, careful to maintain her balance as the airship encountered turbulence. When she entered the hoverchannel, she activated the polarity redistribution magnets within her combat suit and began floating comfortably around the perimeter of the foyer.<br><br>Miss Bingley's attention was quite engaged in watching Mr. Darcy's progress through his book, so much so that at one point she nearly navigated the ship into the side of Pemberley; and she was perpetually making some inquiry.<br><br>At length, finally exhausted by her tenacious attempts to force a conversation regarding his book, Darcy relented. "It's entitled Boneshaker. An American novel."<br><br>"What do you think of it?" Eliza said as she drifted by. <br><br>"A bit nonsensical, really. Steampunk claptrap about the Civil War going on much longer than it actually did, which caused technological advances that didn't really happen until much later. And a zombie-infested city called Seattle. It has been blocked off from the rest of the country, and our heroine must go in to rescue her foolish son." <br><br>Mr. Bingley crossed the room, his steam-powered mechanical legs stomping their way across the carpet to the cabinet where he refilled his glass. "Zombies in America? That does sound quite silly. Everyone knows that zombies are native to Britain. That's how I lost my legs."<br><br>"Please, Bingley, don't tell us that old story again," Mr. Hurst said, adjusting himself on the sofa before falling back asleep.<br><br>Darcy said, "The plot moves along at a good pace, but the characters are a bit uninspired. A teenage boy constantly doing something inadvisable; the protective mother, blasting zombies and trying to save him."<br><br>Eliza smiled. "Darcy, certainly you aren't saying literature is full of strong female characters who run around rescuing male characters."<br><br>"Nor should it be," Mr. Hurst said, drifting slowly in and out of consciousness.<br><br>Ignoring Mr. Hurst's interjection, Darcy said, "I suppose the fairer sex aren't shown in powerful roles that often, even in these books written in the far future about the distant past . . . er, or perhaps about the same time as now . . . When were we written?"<br><br>Miss Bingley inquired, "Are you sure the dinner agreed with you?"<br><br>"I feel fine, thank you," Darcy said. <br><br>"Admit it," Sherlock Holmes said, standing in the doorway, Watson at his side. "You enjoy all the fashionable gimmicks flying left and right, and the pace keeps you entertained. Yet you wonder why nothing surprising was done with any of these elements."<br><br>Darcy moved over as Holmes sat on the sofa beside him, lighting a pipe. "You're right, Holmes. The whole reinvention of the Civil War is fascinating in theory. Then the author does nothing with it. The book has nothing to say. No reflections on the civil war, racism, or politics. Nor does it say anything about the true nature of zombies. In fact, it says little about love, which is the very heart of the story."<br><br>J. K. Rowling, refilling her glass of zinfandel, said, "And it's practically a young adult novel, isn't it? Other than one or two mildly violent zombie moments and one four letter 'S' word, this could be the next film from Pixar. There's not even a gay sorcerer to throw off the prudes." <br><br>Darcy met Eliza's eyes as she orbited the room. "Have you read it as well, Miss Bennett?"<br><br>"Braaaains," Mr. Hurst moaned softly.<br><br>"I found it diverting," Eliza said. "I always read the books nominated for the Nebula awards. But, like you, I found the novel didn't meet my expectations. When you look beyond the stylish trappings, you have a run-of-the-mill adventure story written in a workmanlike fashion. I imagine the query letter was spectacular, though."<br><br>Darcy was on the verge of speaking when Mr. Hurst lunged up from the sofa, saliva splattering from his vicious maw, his eyes sunken in and rolled back into his head. He lurched across the room toward Bingley, whose back was facing him.<br><br>Eliza kicked off of the wall and rolled over to Darcy, pulling his pistol from his belt, and fired several rounds through Mr. Hurst's head. A splatter of blood, brain and skull chips showered down on Harold Bloom.<br><br>"Well," Mr. Harold Bloom said, wiping blood from his face and wiping it on the sofa, "that was entirely unnecessary, but what HASN'T been? The whole book review is sound and fury, signifying nothing. And how many times is this hack going to parody <u>Pride and Prejudice</u>? He seems to think it's much more funny than it is, just as Oscar Wilde thought himself hilarious, when he is in fact highly over-esteemed."<br><br>Holmes puffed his pipe, a gray cloud of smoke rising above him. "I can't believe I didn't notice Mr. Hurst was turning. Usually I'm so attentive to details."<br><br>"Nobody's perfect," Darcy said. "Would you mind putting that pipe out? We are in a zeppelin, you know."<br><br>Holmes sighed and stood up, pulling on his overcoat. "I'm going next door to the Kurt Vonnegut review. Pipe smoking is encouraged over there." <br><br>And as Holmes left the room, suddenly the review stopped.<br></span>
	  												<a data-text-id="1229566540314906503" href="#" onclick="swapContent($(this));; return false;">...more</a>

	          										</span>
	        									</div>
	      									<div class="reviewFooter uitext buttons">
	    										<div class="updateActionLinks">
	      											<span class="likeItContainer">
	      												<a id="like_count_review_91338657" rel="nofollow" href="/rating/voters/91338657?resource_type=Review">
	      													<span class="likesCount">317 likes</span>
	      												</a>&nbsp;·&nbsp;
	      													<span class="loadingLinkSpan"><a>Like</a>
	      													</span>&nbsp;·&nbsp;
	      												      <a id="commentLink_2344330972" href="#" onclick="comment_form_for(&#39;review&#39;, 2344330972, true, &#39;&#39;); return false;">comment</a>


	      											</span>
	   											 </div>
											</div>
											<div class="brown_comment" id="comments_form_review_91338657" style="display: none">
												<textarea class="placeholder_text" onclick="expand_comment_form_for('review', 91338657, true, '')">Write a comment...</textarea>
											</div>

  									</div>
								</div>
							</div>
							<div class="section firstReview">
								<div id="review_91338657" class="review" itemprop="reviews" itemscope="" itemtype="http://schema.org/Review">
    								<a title="Michael" class="left imgcol" href="/user/show/1036930-michael">
    								<img alt="Michael" src="https://images.gr-assets.com/users/1402947913p2/1036930.jpg"></a>

									  	<div class="left bodycol" style="width: 510px;">
										    <div class="reviewHeader uitext stacked">
										        <a class="reviewDate createdAt right" href="/review/show/91338657?book_show_action=true">Feb 25, 2010</a>

										      <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
										        <a title="Michael" class="user" itemprop="url" name="Michael" href="/user/show/1036930-michael">Michael</a>
										      </span>

										        rated it
										    </div>
	        								<div class="reviewText stacked">
	              								<span id="reviewTextContainer91338657" class="readable" style="font-size: 15px;">
	            
													<span id="freeTextContainer1229566540314906503">``Miss Eliza Bennet, attitude.''<br><br>Eliza combat suit and b</span>
													  <span id="freeText1229566540314906503" style="display:none">``Miss Eliza Bennet, let me persuade you to follow my example, and take a turn about the room. -- I assure you the anti-gravity hoverchannel is very refreshing after sitting so long in one attitude.''<br><br>Eliza was surprised, but agreed to it immediately. She unstrapt herself from her leather seat restraints and stood, careful to maintain her balance as the airship encountered turbulence. When she entered the hoverchannel, she activated the polarity redistribution magnets within her combat suit and began floating comfortably around the perimeter of the foyer.<br><br>Miss Bingley's attention was quite engaged in watching Mr. Darcy's progress through his book, so much so that at one point she nearly navigated the ship into the side of Pemberley; and she was perpetually making some inquiry.<br><br>At length, finally exhausted by her tenacious attempts to force a conversation regarding his book, Darcy relented. "It's entitled Boneshaker. An American novel."<br><br>"What do you think of it?" Eliza said as she drifted by. <br><br>"A bit nonsensical, really. Steampunk claptrap about the Civil War going on much longer than it actually did, which caused technological advances that didn't really happen until much later. And a zombie-infested city called Seattle. It has been blocked off from the rest of the country, and our heroine must go in to rescue her foolish son." <br><br>Mr. Bingley crossed the room, his steam-powered mechanical legs stomping their way across the carpet to the cabinet where he refilled his glass. "Zombies in America? That does sound quite silly. Everyone knows that zombies are native to Britain. That's how I lost my legs."<br><br>"Please, Bingley, don't tell us that old story again," Mr. Hurst said, adjusting himself on the sofa before falling back asleep.<br><br>Darcy said, "The plot moves along at a good pace, but the characters are a bit uninspired. A teenage boy constantly doing something inadvisable; the protective mother, blasting zombies and trying to save him."<br><br>Eliza smiled. "Darcy, certainly you aren't saying literature is full of strong female characters who run around rescuing male characters."<br><br>"Nor should it be," Mr. Hurst said, drifting slowly in and out of consciousness.<br><br>Ignoring Mr. Hurst's interjection, Darcy said, "I suppose the fairer sex aren't shown in powerful roles that often, even in these books written in the far future about the distant past . . . er, or perhaps about the same time as now . . . When were we written?"<br><br>Miss Bingley inquired, "Are you sure the dinner agreed with you?"<br><br>"I feel fine, thank you," Darcy said. <br><br>"Admit it," Sherlock Holmes said, standing in the doorway, Watson at his side. "You enjoy all the fashionable gimmicks flying left and right, and the pace keeps you entertained. Yet you wonder why nothing surprising was done with any of these elements."<br><br>Darcy moved over as Holmes sat on the sofa beside him, lighting a pipe. "You're right, Holmes. The whole reinvention of the Civil War is fascinating in theory. Then the author does nothing with it. The book has nothing to say. No reflections on the civil war, racism, or politics. Nor does it say anything about the true nature of zombies. In fact, it says little about love, which is the very heart of the story."<br><br>J. K. Rowling, refilling her glass of zinfandel, said, "And it's practically a young adult novel, isn't it? Other than one or two mildly violent zombie moments and one four letter 'S' word, this could be the next film from Pixar. There's not even a gay sorcerer to throw off the prudes." <br><br>Darcy met Eliza's eyes as she orbited the room. "Have you read it as well, Miss Bennett?"<br><br>"Braaaains," Mr. Hurst moaned softly.<br><br>"I found it diverting," Eliza said. "I always read the books nominated for the Nebula awards. But, like you, I found the novel didn't meet my expectations. When you look beyond the stylish trappings, you have a run-of-the-mill adventure story written in a workmanlike fashion. I imagine the query letter was spectacular, though."<br><br>Darcy was on the verge of speaking when Mr. Hurst lunged up from the sofa, saliva splattering from his vicious maw, his eyes sunken in and rolled back into his head. He lurched across the room toward Bingley, whose back was facing him.<br><br>Eliza kicked off of the wall and rolled over to Darcy, pulling his pistol from his belt, and fired several rounds through Mr. Hurst's head. A splatter of blood, brain and skull chips showered down on Harold Bloom.<br><br>"Well," Mr. Harold Bloom said, wiping blood from his face and wiping it on the sofa, "that was entirely unnecessary, but what HASN'T been? The whole book review is sound and fury, signifying nothing. And how many times is this hack going to parody <u>Pride and Prejudice</u>? He seems to think it's much more funny than it is, just as Oscar Wilde thought himself hilarious, when he is in fact highly over-esteemed."<br><br>Holmes puffed his pipe, a gray cloud of smoke rising above him. "I can't believe I didn't notice Mr. Hurst was turning. Usually I'm so attentive to details."<br><br>"Nobody's perfect," Darcy said. "Would you mind putting that pipe out? We are in a zeppelin, you know."<br><br>Holmes sighed and stood up, pulling on his overcoat. "I'm going next door to the Kurt Vonnegut review. Pipe smoking is encouraged over there." <br><br>And as Holmes left the room, suddenly the review stopped.<br></span>
	  												<a data-text-id="1229566540314906503" href="#" onclick="swapContent($(this));; return false;">...more</a>

	          										</span>
	        									</div>
	      									<div class="reviewFooter uitext buttons">
	    										<div class="updateActionLinks">
	      											<span class="likeItContainer">
	      												<a id="like_count_review_91338657" rel="nofollow" href="/rating/voters/91338657?resource_type=Review">
	      													<span class="likesCount">317 likes</span>
	      												</a>&nbsp;·&nbsp;
	      													<span class="loadingLinkSpan"><a>Like</a>
	      													</span>&nbsp;·&nbsp;
	      												      <a id="commentLink_2344330972" href="#" onclick="comment_form_for(&#39;review&#39;, 2344330972, true, &#39;&#39;); return false;">comment</a>


	      											</span>
	   											 </div>
											</div>
											<div class="brown_comment" id="comments_form_review_91338657" style="display: none">
												<textarea class="placeholder_text" onclick="expand_comment_form_for('review', 91338657, true, '')">Write a comment...</textarea>
											</div>

  									</div>
								</div>
							</div>
						</div>
					</div>
	    			<div class="rightContainer">
	    				<div class=" clearFloats bigBox">
	    					<div class="h2Container gradientHeaderContainer">
	    						<h2 class="brownBackground">
	    							<a href="/author/list/221253.Cherie_Priest">other books in the series</a>
	    						</h2>
	    					</div>
	    					<div class="bigBoxBody">
	    						<div class="bigBoxContent containerWithHeaderContent">
	    							<br>
	    							<!-- vong lap o day ne -->
							        <div class="js-tooltipTrigger tooltipTrigger">
							          <a href="/book/show/7911067-dreadnought">
							          	<img id="more_book_7911067" alt="Dreadnought (The Clockwork Century, #2)" title="Dreadnought (The Clockwork Century, #2)" width="50" src="https://images.gr-assets.com/books/1389139447m/7911067.jpg" />
							          </a>
							        </div>
							        <div class="js-tooltipTrigger tooltipTrigger">
							          <a href="/book/show/7911067-dreadnought">
							          	<img id="more_book_7911067" alt="Dreadnought (The Clockwork Century, #2)" title="Dreadnought (The Clockwork Century, #2)" width="50" src="https://images.gr-assets.com/books/1389139447m/7911067.jpg" />
							          </a>
							        </div>
							        <div class="js-tooltipTrigger tooltipTrigger">
							          <a href="/book/show/7911067-dreadnought">
							          	<img id="more_book_7911067" alt="Dreadnought (The Clockwork Century, #2)" title="Dreadnought (The Clockwork Century, #2)" width="50" src="https://images.gr-assets.com/books/1389139447m/7911067.jpg" />
							          </a>
							        </div>
    							</div>
    						</div>
    					</div>
    					<br>
	    				<div id="aboutAuthor" class=" clearFloats bigBox">
	    					<div class="h2Container gradientHeaderContainer">
	    						<h2 class="brownBackground"><a href="/author/show/221253.Cherie_Priest">About Cherie Priest</a></h2>
	    					</div>
	    					<div class="bigBoxBody">
	    						<div class="bigBoxContent containerWithHeaderContent">
	    							<br>
          							<div class="bookAuthorProfile">
										<div class="bookAuthorProfile__topContainer">
											<div class="bookAuthorProfile__photoContainer">
											<a href="/author/show/221253.Cherie_Priest">
												<div class="bookAuthorProfile__photo" style="background-image: url(https://images.gr-assets.com/authors/1405811775p3/221253.jpg);">
												</div>
											</a>
											</div>
											<div class="bookAuthorProfile__widgetContainer">
												<div class="bookAuthorProfile__name">
												Cherie Priest
												</div>
												<div class="bookAuthorProfile__followerCount">
												3125 followers
												</div>
											</div>
										</div>
										<div class="bookAuthorProfile__about">
											<span id="freeTextContainer17471756927507434106">CHERIE PRIEST is the author of over a dozen novels, including the steampunk pulp adventures The Inexplicables, Ganymede, Dreadnought, Clementine, and Boneshaker. Boneshaker was nominated for both the Hugo Award and the Nebula Award; it was a PNBA Award winner, and winner of the Locus Award for Best Science Fiction Novel. Cherie also wrote Bloodshot and Hellbent from Bantam Spectra; Fathom and the</span>
  											<span id="freeText17471756927507434106" style="display:none">CHERIE PRIEST is the author of over a dozen novels, including the steampunk pulp adventures The Inexplicables, Ganymede, Dreadnought, Clementine, and Boneshaker. Boneshaker was nominated for both the Hugo Award and the Nebula Award; it was a PNBA Award winner, and winner of the Locus Award for Best Science Fiction Novel. Cherie also wrote Bloodshot and Hellbent from Bantam Spectra; Fathom and the Eden Moore series from Tor; and three novellas published by Subterranean Press. In addition to all of the above, her first foray into George R. R. Martin’s superhero universe, Fort Freak (for which she wrote the interstitial mystery), debuted in the summer of 2011. Cherie’s short stories and nonfiction articles have appeared in such fine publications as Weird Tales, Publishers Weekly, and numerous anthologies. She lives in Chattanooga, TN, with her husband, a big shaggy dog, and a fat black cat.</span>
  											<a data-text-id="17471756927507434106" href="#" onclick="swapContent($(this));; return false;">...more</a>

										</div>
									</div>
								</div>
							</div>
						</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	</div>
</body>
</html>