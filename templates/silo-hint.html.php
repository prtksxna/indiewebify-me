<?php namespace Indieweb\IndiewebifyMe; ?>

<?php if (isWordpressDomain($url)): ?>
<div class="silo-hint">
	<p>It looks like your site is hosted on the <a href="http://indiewebcamp.com/Wordpress">WordPress.com Silo</a> without a custom domain name. In order to really own your content you need to own your URLs, but don’t worry — here are some resources which might help you out:</p>
	<ol>
		<li><a href="http://en.support.wordpress.com/domains/">Wordpress Support article on Domains</a></li>
		<li><a href="https://store.wordpress.com/premium-upgrades/custom-domains/">Wordpress.com custom domain premium upgrade</a></li>
	</ol>
	<p>Once you’ve got your own domain, check out the IndieWebCamp <a href="http://indiewebcamp.com/Wordpress">WordPress Wiki Page</a> for tips and plugins for adding things like webmentions and microformats to your site.</p>
</div>
<?php elseif (isTumblrDomain($url)): ?>
<div class="silo-hint">
	<p>It looks like your site is hosted on <a href="http://indiewebcamp.com/Tumblr">Tumblr.com Silo</a> without a custom domain name. In order to really own your content you need to own your URLs, but don’t worry — Tumblr has <a href="http://www.tumblr.com/docs/en/custom_domains">an article</a> demonstrating how to give your web presence your own domain.</p>
	<p>Once you’ve got your own domain, check out the IndieWebCamp <a href="http://indiewebcamp.com/Tumblr">Tumblr Wiki Page</a> for tips on adding indieweb functionality to your site, or exporting your data elsewhere.</p>
</div>
<?php elseif (isGithubDomain($url)): ?>
<div class="silo-hint">
	<p>It looks like your site is hosted on <a href="http://indiewebcamp.com/Github">Github.io Silo</a> without a custom domain name. In order to really own your content you need to own your URLs, but don’t worry — Github has <a href="https://help.github.com/articles/setting-up-a-custom-domain-with-pages">an article</a> demonstrating how to give your web presence your own domain.</p>
	<p>Once you’ve got your own domain, check out the IndieWebCamp <a href="http://indiewebcamp.com/Github">Github Wiki Page</a> for tips on adding indieweb functionality to your site.</p>
</div>
<?php endif ?>