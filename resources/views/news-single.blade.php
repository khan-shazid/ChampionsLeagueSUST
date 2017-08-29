@extends('layouts.website')

@section('content')
			<div class="body news-single">
				<div>
					<span>News</span> <a href="news.html" id="paging">> Back</a>
					<div>
						<img src="images/team-picture.jpg" alt="">
						<h3>We Have Free Templates for Everyone.</h3>
						<span>26th July 2023 | Posted by <span>ZZ Tigers</span></span>
						<p>
							Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What’s more, they’re absolutely free! You can do a lot with them. You can modify them. You can use them to design websites for clients, so long as you agree with the Terms of Use. You can even remove all our links if you want to.
						</p>
						<p>
							Looking for more templates? Just browse through all our Free Website Templates and find what you’re looking for. But if you don’t find any website template you can use, you can try our Free Web Design service and tell us all about it. Maybe you’re looking for something different, something special. And we love the challenge of doing something different and something special.
						</p>
					</div>
					<div class="section">
						<h5>Comments</h5>
						<h4>Reader 1</h4>
						<span>Commented on 26th July 2023</span>
						<p>
							Please feel free to remove some or all the text and links of this page and replace it with your own About content. Join the discussion and meet other people in the community who share the same inetersts with you.
						</p>
					</div>
					<form action="index.html">
						<span>Add A Comment</span>
						<label for="name">
							<input type="text" id="name">
							Name</label>
						<label for="email">
							<input type="text" id="email">
							Email</label>
						<textarea name="message" id="message" cols="30" rows="10"></textarea>
						<input type="submit" value="Submit Comment">
					</form>
				</div>
				@endsection
