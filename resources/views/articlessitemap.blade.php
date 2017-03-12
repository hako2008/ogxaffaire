<?php echo "<?xml"; ?> version="1.0" encoding="UTF-8"?><?php echo "<?xml-stylesheet"; ?> Content-Type="text/xml" href="{{Request::url()}}"?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
	    <loc>http://www.ogxaffaire.com</loc>
	    <lastmod>2016-10-17T16:56:35+01:00</lastmod>
	    <changefreq>daily</changefreq>
	    <priority>0.8</priority>
  	</url>
  <?php $articles = App\Article::all(); ?>
  @foreach ($articles as $article)
	<url>
		<loc>{{ url('/article/').'/'.$article->id}}@if(isset($lang))/{{$lang}}@endif</loc>
		<lastmod>{{$article->updated_at->toAtomString()}}</lastmod>
		<changefreq>daily</changefreq>
		<priority>0.6</priority>
	</url>
  @endforeach 
</urlset>