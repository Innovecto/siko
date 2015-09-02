@extends('layouts.master')

@section('title')
	Event Item
@endsection

@section('page-title')
	<h1>Event <small>Item</small></h1>
@endsection


@section('content')

<!-- BEGIN PAGE CONTENT-->
<div class="portlet light">
	<div class="portlet-body">
		<div class="row">
			<div class="col-md-12 blog-page">
				<div class="row">
					<div class="col-md-9 article-block">
						<h3 style="margin-top:0;">Hello here will be some recent news..</h3>
						<div class="blog-tag-data">
							{!! Html::image('assets/img/event/item_img.jpg', 'item_img', array('class' => 'img-responsive')) !!}
							<div class="row">
								<div class="col-md-6">
									<ul class="list-inline blog-tags">
										<li>
											<i class="fa fa-tags"></i>
											<a href="javascript:;">
											Technology </a>
											<a href="javascript:;">
											Education </a>
											<a href="javascript:;">
											Internet </a>
										</li>
									</ul>
								</div>
								<div class="col-md-6 blog-tag-data-inner">
									<ul class="list-inline">
										<li>
											<i class="fa fa-calendar"></i>
											<a href="javascript:;">
											April 16, 2013 </a>
										</li>
										<li>
											<i class="fa fa-comments"></i>
											<a href="javascript:;">
											38 Comments </a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!--end news-tag-data-->
						<div>
							<p>
								 At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
							</p>
							<blockquote class="hero">
								<p>
									 Lorem ipsum dolor sit amet, consectetur adipiscing elit posuere erat a ante.
								</p>
								<small>Someone famous <cite title="Source Title">Source Title</cite></small>
							</blockquote>
							<p>
								 Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Eserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpa
							</p>
						</div>
						<hr>
						<div class="media">
							<h3>Comments</h3>
							<a href="javascript:;" class="pull-left">
							<img alt="" src="../../assets/admin/pages/media/blog/9.jpg" class="media-object">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Media heading <span>
								5 hours ago / <a href="javascript:;">
								Reply </a>
								</span>
								</h4>
								<p>
									 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
								</p>
								<hr>
								<!-- Nested media object -->
								<div class="media">
									<a href="javascript:;" class="pull-left">
									<img alt="" src="../../assets/admin/pages/media/blog/5.jpg" class="media-object">
									</a>
									<div class="media-body">
										<h4 class="media-heading">Media heading <span>
										17 hours ago / <a href="javascript:;">
										Reply </a>
										</span>
										</h4>
										<p>
											 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
										</p>
									</div>
								</div>
								<!--end media-->
								<hr>
								<div class="media">
									<a href="javascript:;" class="pull-left">
									<img alt="" src="../../assets/admin/pages/media/blog/7.jpg" class="media-object">
									</a>
									<div class="media-body">
										<h4 class="media-heading">Media heading <span>
										2 days ago / <a href="javascript:;">
										Reply </a>
										</span>
										</h4>
										<p>
											 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
										</p>
									</div>
								</div>
								<!--end media-->
							</div>
						</div>
						<!--end media-->
						<div class="media">
							<a href="javascript:;" class="pull-left">
							<img alt="" src="../../assets/admin/pages/media/blog/6.jpg" class="media-object">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Media heading <span>
								July 5,2013 / <a href="javascript:;">
								Reply </a>
								</span>
								</h4>
								<p>
									 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
								</p>
							</div>
						</div>
						<!--end media-->
						<hr>
						<div class="post-comment">
							<h3>Leave a Comment</h3>
							<form role="form" action="#">
								<div class="form-group">
									<label class="control-label">Name <span class="required">
									* </span>
									</label>
									<input type="text" class="form-control">
								</div>
								<div class="form-group">
									<label class="control-label">Email <span class="required">
									* </span>
									</label>
									<input type="text" class="form-control">
								</div>
								<div class="form-group">
									<label class="control-label">Message <span class="required">
									* </span>
									</label>
									<textarea class="col-md-10 form-control" rows="8"></textarea>
								</div>
								<button class="margin-top-20 btn blue" type="submit">Post a Comment</button>
							</form>
						</div>
					</div>
					<!--end col-md-9-->
					<div class="col-md-3 blog-sidebar">
						<h3 style="margin-top:0;">Flickr</h3>
						<ul class="list-inline blog-images">
							<li>
								<a class="fancybox-button" data-rel="fancybox-button" title="390 x 220 - keenthemes.com" href="../../assets/admin/pages/media/blog/1.jpg">
								<img alt="" src="../../assets/admin/pages/media/blog/1.jpg">
								</a>
							</li>
							<li>
								<a href="javascript:;">
								<img alt="" src="../../assets/admin/pages/media/blog/2.jpg">
								</a>
							</li>
							<li>
								<a href="javascript:;">
								<img alt="" src="../../assets/admin/pages/media/blog/3.jpg">
								</a>
							</li>
							<li>
								<a href="javascript:;">
								<img alt="" src="../../assets/admin/pages/media/blog/4.jpg">
								</a>
							</li>
							<li>
								<a href="javascript:;">
								<img alt="" src="../../assets/admin/pages/media/blog/5.jpg">
								</a>
							</li>
							<li>
								<a href="javascript:;">
								<img alt="" src="../../assets/admin/pages/media/blog/6.jpg">
								</a>
							</li>
							<li>
								<a href="javascript:;">
								<img alt="" src="../../assets/admin/pages/media/blog/8.jpg">
								</a>
							</li>
							<li>
								<a href="javascript:;">
								<img alt="" src="../../assets/admin/pages/media/blog/10.jpg">
								</a>
							</li>
							<li>
								<a href="javascript:;">
								<img alt="" src="../../assets/admin/pages/media/blog/11.jpg">
								</a>
							</li>
							<li>
								<a href="javascript:;">
								<img alt="" src="../../assets/admin/pages/media/blog/1.jpg">
								</a>
							</li>
							<li>
								<a href="javascript:;">
								<img alt="" src="../../assets/admin/pages/media/blog/2.jpg">
								</a>
							</li>
							<li>
								<a href="javascript:;">
								<img alt="" src="../../assets/admin/pages/media/blog/7.jpg">
								</a>
							</li>
						</ul>
						<div class="space20">
						</div>
						<h3>Top Entiries</h3>
						<div class="top-news">
							<a href="javascript:;" class="btn red">
							<span>
							Metronic News </span>
							<em>Posted on: April 16, 2013</em>
							<em>
							<i class="fa fa-tags"></i>
							Money, Business, Google </em>
							<i class="fa fa-briefcase top-news-icon"></i>
							</a>
							<a href="javascript:;" class="btn green">
							<span>
							Top Week </span>
							<em>Posted on: April 15, 2013</em>
							<em>
							<i class="fa fa-tags"></i>
							Internet, Music, People </em>
							<i class="fa fa-music top-news-icon"></i>
							</a>
							<a href="javascript:;" class="btn blue">
							<span>
							Gold Price Falls </span>
							<em>Posted on: April 14, 2013</em>
							<em>
							<i class="fa fa-tags"></i>
							USA, Business, Apple </em>
							<i class="fa fa-globe top-news-icon"></i>
							</a>
							<a href="javascript:;" class="btn yellow">
							<span>
							Study Abroad </span>
							<em>Posted on: April 13, 2013</em>
							<em>
							<i class="fa fa-tags"></i>
							Education, Students, Canada </em>
							<i class="fa fa-book top-news-icon"></i>
							</a>
							<a href="javascript:;" class="btn purple">
							<span>
							Top Destinations </span>
							<em>Posted on: April 12, 2013</em>
							<em>
							<i class="fa fa-tags"></i>
							Places, Internet, Google Map </em>
							<i class="fa fa-bolt top-news-icon"></i>
							</a>
						</div>
						<div class="space20">
						</div>
						<h3>Blog Tags</h3>
						<ul class="list-inline sidebar-tags">
							<li>
								<a href="javascript:;">
								<i class="fa fa-tags"></i> Business </a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="fa fa-tags"></i> Music </a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="fa fa-tags"></i> Internet </a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="fa fa-tags"></i> Money </a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="fa fa-tags"></i> Google </a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="fa fa-tags"></i> TV Shows </a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="fa fa-tags"></i> Education </a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="fa fa-tags"></i> People </a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="fa fa-tags"></i> People </a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="fa fa-tags"></i> Math </a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="fa fa-tags"></i> Photos </a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="fa fa-tags"></i> Electronics </a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="fa fa-tags"></i> Apple </a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="fa fa-tags"></i> Canada </a>
							</li>
						</ul>
						<div class="space20">
						</div>
						<h3>Tabs</h3>
						<div class="tabbable tabbable-custom">
							<ul class="nav nav-tabs">
								<li class="active">
									<a data-toggle="tab" href="#tab_1_1">
									Section 1 </a>
								</li>
								<li>
									<a data-toggle="tab" href="#tab_1_2">
									Section 2 </a>
								</li>
							</ul>
							<div class="tab-content">
								<div id="tab_1_1" class="tab-pane active">
									<p>
										 I'm in Section 1.
									</p>
									<p>
										 Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
									</p>
								</div>
								<div id="tab_1_2" class="tab-pane">
									<p>
										 Howdy, I'm in Section 2.
									</p>
									<p>
										 Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.
									</p>
								</div>
							</div>
						</div>
						<div class="space20">
						</div>
						<h3>Recent Twitts</h3>
						<div class="blog-twitter">
							<div class="blog-twitter-block">
								<a href="">
								@keenthemes </a>
								<p>
									 At vero eos et accusamus et iusto odio.
								</p>
								<a href="javascript:;">
								<em>http://t.co/sBav7dm</em>
								</a>
								<span>
								5 hours ago </span>
								<i class="fa fa-twitter blog-twiiter-icon"></i>
							</div>
							<div class="blog-twitter-block">
								<a href="">
								@keenthemes </a>
								<p>
									 At vero eos et accusamus et iusto odio.
								</p>
								<a href="javascript:;">
								<em>http://t.co/sBav7dm</em>
								</a>
								<span>
								7 hours ago </span>
								<i class="fa fa-twitter blog-twiiter-icon"></i>
							</div>
							<div class="blog-twitter-block">
								<a href="">
								@keenthemes </a>
								<p>
									 At vero eos et accusamus et iusto odio.
								</p>
								<a href="javascript:;">
								<em>http://t.co/sBav7dm</em>
								</a>
								<span>
								8 hours ago </span>
								<i class="fa fa-twitter blog-twiiter-icon"></i>
							</div>
						</div>
					</div>
					<!--end col-md-3-->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT-->

@endsection