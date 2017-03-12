<?php echo "<?xml"; ?> version="1.0" encoding="UTF-8"?><?php echo "<?xml-stylesheet"; ?> Content-Type="text/xml" href="{{Request::url()}}"?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">	
	<url>
		<loc>{{ url('/articles.xml/')}}</loc>
		<lastmod>2016-10-17T16:56:35+01:00</lastmod>
		<changefreq>always</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc>{{ url('/categories.xml/')}}</loc>
		<lastmod>2016-10-17T16:56:35+01:00</lastmod>
		<changefreq>always</changefreq>
		<priority>0.8</priority>
	</url><url>
		<loc>{{ url('/keywords.xml/')}}</loc>
		<lastmod>2016-10-17T16:56:35+01:00</lastmod>
		<changefreq>always</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc>{{ url('/articles.xml/fr')}}</loc>
		<lastmod>2016-10-17T16:56:35+01:00</lastmod>
		<changefreq>always</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc>{{ url('/categories.xml/fr')}}</loc>
		<lastmod>2016-10-17T16:56:35+01:00</lastmod>
		<changefreq>always</changefreq>
		<priority>0.8</priority>
	</url><url>
		<loc>{{ url('/keywords.xml/fr')}}</loc>
		<lastmod>2016-10-17T16:56:35+01:00</lastmod>
		<changefreq>always</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc>{{ url('/articles.xml/en')}}</loc>
		<lastmod>2016-10-17T16:56:35+01:00</lastmod>
		<changefreq>always</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc>{{ url('/categories.xml/en')}}</loc>
		<lastmod>2016-10-17T16:56:35+01:00</lastmod>
		<changefreq>always</changefreq>
		<priority>0.8</priority>
	</url><url>
		<loc>{{ url('/keywords.xml/en')}}</loc>
		<lastmod>2016-10-17T16:56:35+01:00</lastmod>
		<changefreq>always</changefreq>
		<priority>0.8</priority>
	</url>
</urlset>