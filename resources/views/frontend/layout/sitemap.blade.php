<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{route('feHome')}}</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',now()) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{route('feProfil',1)}}</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',now()) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{route('feProfil',2)}}</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',now()) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{route('feProfil',3)}}</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',now()) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{route('feProfil',4)}}</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',now()) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{route('feBerita')}}</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',now()) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{route('feArtikel')}}</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',now()) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{route('feAbout')}}</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',now()) }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>
</urlset>