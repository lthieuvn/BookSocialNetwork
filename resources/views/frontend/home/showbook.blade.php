<!DOCTYPE html>
<html>
<head>
    <title>Book show</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('frontend/css/mystyle.css')}}">
	<script type="text/javascript" src="{{ asset('js/jquery.min.js')}}"></script>
	<link rel="stylesheet" href="{{ URL::asset('frontend/css/showbook.css')}}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="content">

		@include('frontend.layouts.header')
		
		<div class="mainContentContainer">
	    	<div class="mainContent">
	    		<div class="mainContentFloat">
	    			<div class="leftContainer">
		    			<div id="topcol" class="last col stacked">
		    				<div id="imagecol" class="col">
							  	<div class="bookCoverContainer">
								    <div class="bookCoverPrimary">
								          <a rel="nofollow" itemprop="image" href="../images/books/{{$book->picture}}">
								          	<img id="coverImage" alt="" src="../images/books/{{$book->picture}}" />
								          </a>
								    </div>
							    </div>
							    @if(Auth::check())
							    <div class='wtrButtonContainer'>
							    	@if($bookRole == null) 
							    	<div class="form-group">
							    		<form methord="{{ route('showbook.store', ['id' => $book->id]) }}" class="form">
							    			<select name="status" class="form-control" id="sel1"  style="background: #409D69">
										        <option value="0"> Add to shelves</option>
								    			<option value="1" >Want to read</option>
										        <option value="2"> Currently Reading</option>
										        <option value="3"> Read</option>
									    	</select>
							    		</form>
							    	</div>
							    	
							    	@else 
							    	<div class="form-group">
							    		<form methord="{{ route('showbook.store', ['id' => $book->id]) }}" class="form">
							    			<select name="status" class="form-control" id="sel1"  style="background: #409D69">
								    			<option value="1" @if($bookRole->status == 1) {{"selected"}} @endif>Want to read</option>
										        <option value="2" @if($bookRole->status == 2) {{"selected"}} @endif> Currently Reading</option>
										        <option value="3" @if($bookRole->status == 3) {{"selected"}} @endif> Read</option>
									    	</select>
							    		</form>
							    	</div>
							    	@endif

							    	
								</div>
								@endif	    
							</div>
							<script>
								 $.ajaxSetup({

								        headers: {

								            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
								        }

								    });

									$('select').change(function() {
										var status = $(this).val()
								        var url = $('.form').attr('methord');
										$.ajax({

								           type:'POST',

								           url:url,

								           data: {'status': status},

								           success:function(statusBook){
								           	alert('Add book shelves success !');
								           	}
								        });
								    });
							</script>
							<div id="metacol" class="last col" style="width: 425px;margin-left: 10px">
								<h1 id="bookTitle" class="bookTitle" itemprop="name">
								      {{ $book->title}}
								</h1>
								<div id="bookAuthors" class="stacked">
								  <span class='by smallText'>by</span>
									<span itemprop='author' itemscope='' itemtype='http://schema.org/Person'>
										<a class="authorName" itemprop="url" href="https://www.goodreads.com/author/show/221253.Cherie_Priest">
											<span itemprop="name">{{ $book->name_author}}</span></a>
									</span>

								</div>
								<div id="descriptionContainer">
	  
	      							<div id="description" class="readable stacked" style="right:0;font-size: 16px;">
	        
										<span id="freeTextContainer8227207913880771659">{{ $book->description}}<br /></span>
	  									<span id="more_description" style="display:none">{{ $book->more_description}}</span>
	  									<a id="more">...more</a>
										<a id="less" style="display:none" >(less)</a>
	      							</div>
								</div>
								<script>
									$(document).ready(function(){
										$("#more").click(function(){
											$("#more_description").css("display", "inline");
											$("#more").css("display", "none");
											$("#less").css("display", "inline");
										});
										$("#less").click(function(){
											$("#more_description").css("display", "none");
											$("#more").css("display", "inline");
											$("#less").css("display", "none");
										});
										$("#add_review").click(function(){
											$("#show_form_review").css("display", "inline");
										});
										$("#cancel_review").click(function(){
											$("#show_form_review").css("display", "none");
										});
									});
								</script>
								<br>
								<div style="font-size: 17px;">

									@if(Auth::check())
										
										<a id="add_review">Add a review</a>
										<span style="padding: 0px 10px; margin-left: 70px">{{$countRating}} people</span>
										@if(count($ratingByUser) > 0)
										<form method="POST" style="display: inline;" action="{{ route('rating.store', ['id' => $book->id]) }}" data-book_id = "{{$book->id}}">
											{{ csrf_field() }}
											<button class="gr-buttonAsLink"><i class="fa fa-heart" style="font-size:18px;color:red"></i></button>
										</form>
										@else 
										<form method="POST" style="display: inline;" action="{{ route('rating.store', ['id' => $book->id]) }}" data-book_id = "{{$book->id}}">
											{{ csrf_field() }}
											<button class="gr-buttonAsLink"><i class="fa fa-heart" style="font-size:18px;color:black"></i></button>
										</form>
										@endif
									@else
										<a href="{{ route('home') }}">Add a review</a>
									@endif
								</div>
								<br>
								<form method="POST" action="{{ route('review.store', ['id' =>$book->id])}}">
			                        {{ csrf_field() }}
									<div id="show_form_review"class="readable stacked" style="display:none">
									<span>What do you think?</span>
									<textarea class="textBox largeTextBox reviewUserText js-reviewUserText" id="review_review_usertext" maxlength="20000" name="content" placeholder="Enter your review" rows="6" cols="60" style="display: block; height: auto;"></textarea>
									@if($errors->first('content')) 
			                            <span class="text-danger">{{ $errors->first('content') }}</span>
			                        @endif
									<div>
										<input type="checkbox" value="0" name="check_post" id="review_spoiler_flag">
											<span>Add to the post</span>
											<div class="right" style="text-align: right; font-size: 12px;">
												<span id="review_edit_characterCount"></span>
											</div>
									</div>
									<div class="formAction gr-form__actions">
										<button class="primaryAction submitAction gr-form__submitButton" type="submit">
										Review
										</button>
										<div id="cancel_review" class="secondaryAction cancelAction gr-form__secondaryAction">
										Cancel
										</div>
									</div>
								</div>
								</form>
								
							</div>
		    			</div>
		    			<br>
		    			<div id='lazy_loadable_view'>
			    			<div class="h2Container gradientHeaderContainer">
			    				<h2 class="brownBackground">Reviews</h2>

			    			</div>
		    				
		    			</div>

		    			<div class="friendReviews elementListBrown">
							@foreach($review as $rv)
							<div class="section firstReview">
								@foreach($rv->user as $info_user)
								<div id="review_91338657" class="review" itemprop="reviews" itemscope="" itemtype="http://schema.org/Review">
    								<a title="{{ $info_user->name }}" class="left imgcol" href="/user/show/1036930-michael" style="margin-top: 10px;">
    								<img alt="" src="{{ $info_user->avatar_url }}"></a>

									  	<div class="left bodycol" style="width: 510px;">
										    <div style="margin-top: 10px;" class="reviewHeader uitext stacked">
										        <a class="reviewDate createdAt right" href="/review/show/91338657?book_show_action=true">
										        	{{ date( 'h:m a d-m-Y', strtotime($rv->created_at)) }}</a>

										      <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
										        <a title="Michael" class="user" itemprop="url" name="Michael" href="/user/show/1036930-michael">{{ $info_user->name }}</a>
										      </span>

										        reviewed
										    </div>
	        								<div class="reviewText stacked">
	              								<span id="reviewTextContainer91338657" class="readable" style="font-size: 15px;">
	            
													<span id="freeTextContainer1229566540314906503">`` {{ $rv->content}} ``</span>
	          										</span>
													<div class="updateActionLinks">
	    											@if(Auth::check())
		    											@if($info_user->name == Auth::user()->name)
			    											<form method="POST" action="{{ route('review.destroy', $rv->id) }}" style="display: inline;">
										                          {{ csrf_field() }}
										                          {{ method_field('DELETE') }}
										                          <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
										                    </form>
									                    @endif
									                @endif
	   											 	</div>
	        									</div>
											<div class="brown_comment" id="comments_form_review_91338657" style="display: none">
												<textarea class="placeholder_text" onclick="expand_comment_form_for('review', 91338657, true, '')">Write a comment...</textarea>
											</div>
  										</div>
								</div>
								@endforeach
							</div>
							@endforeach
						</div>
					</div>
	    			<div class="rightContainer" style="padding-left: 30px">
	    				<div class=" clearFloats bigBox">
	    					<div class="h2Container gradientHeaderContainer">
	    						<h2 class="brownBackground">
	    							<a href="/author/list/221253.Cherie_Priest">other books in the series '{{$bookByTopic->title}}' </a>
	    						</h2>
	    					</div>
	    					<div class="bigBoxBody">
	    						<div class="bigBoxContent containerWithHeaderContent">
	    							<br>
							        @foreach($bookByTopic->relateBook as $rl)
							        <div class="js-tooltipTrigger tooltipTrigger">
							          <a href="{}">
							          	<img id="more_book_7911067" alt="{{$rl->title}}" title="{{$rl->title}}" width="50" src="../images/books/{{$rl->picture}}" />
							          </a>
							        </div>
									@endforeach
    							</div>
    						</div>
    					</div>
    					<br>
	    				<div id="aboutAuthor" class=" clearFloats bigBox">
	    					<div class="h2Container gradientHeaderContainer">
	    						<h2 class="brownBackground"><a href="/author/show/221253.Cherie_Priest">About {{ $book->name_author}}</a></h2>
	    					</div>
	    					<div class="bigBoxBody">
	    						<div class="bigBoxContent containerWithHeaderContent">
	    							<br>
          							<div class="bookAuthorProfile">
										<div class="bookAuthorProfile__topContainer">
											<div class="bookAuthorProfile__photoContainer">
											<a href="/author/show/221253.Cherie_Priest">
												<div class="bookAuthorProfile__photo" style="background-image: url({{ $book->avatar_author }});">
												</div>
											</a>
											</div>
											<div class="bookAuthorProfile__widgetContainer">
												<div class="bookAuthorProfile__name">
												{{ $book->name_author}}
												</div>
												<div class="bookAuthorProfile__followerCount">
												{{ $book->count_book_author}}
												</div>
											</div>
										</div>
										<div class="bookAuthorProfile__about">
											<span id="freeTextContainer17471756927507434106">{{ $book->name_author}} {{ $book->liking_author}}</span>
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