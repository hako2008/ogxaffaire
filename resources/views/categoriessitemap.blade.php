<?php echo "<?xml"; ?> version="1.0" encoding="UTF-8"?><?php echo "<?xml-stylesheet"; ?> Content-Type="text/xml" href="{{Request::url()}}"?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <?php $categories = App\Category::all(); ?>
  @foreach ($categories as $category)
  <url>
    <loc>{{ url('/categories/')}}@if(isset($lang))/{{$lang}}@endif?category={{$category->id}}</loc>
    <lastmod>{{$category->updated_at->toAtomString()}}</lastmod>
    <changefreq>daily</changefreq>
    <priority>0.6</priority>
  </url>
  @endforeach 
</urlset>