<h3>
	{!! trans( 'webpage-text.ads-h2' ) !!}
</h3>

<ul>

	<li>
		<a href="{{ route( 'ads.index' ) }}">{!! trans( 'webpage-text.show-ads-link' ) !!}</a>
	</li>

	<li>
		<a href="{{ route( 'ads.create' ) }}">{!! trans( 'webpage-text.create-ad-link' ) !!}</a>
	</li>

	<li>
		<a href="{{ route( 'my-ads' ) }}">{!! trans( 'webpage-text.my-ads-link' ) !!}</a>
	</li>

</ul>

<h3>
	{!! trans( 'webpage-text.inbox-h2' ) !!}
</h3>

<ul>

	<li>
		<a href="#">{!! trans( 'webpage-text.inbox-received-messages-link' ) !!}</a>
	</li>

	<li>
		<a href="#">{!! trans( 'webpage-text.inbox-sent-messages-link' ) !!}</a>
	</li>

</ul>
