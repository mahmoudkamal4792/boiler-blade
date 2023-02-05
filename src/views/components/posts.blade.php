<div class="posts-list p-{{ $type }}">

    @foreach ($posts as $post)
    <div class="post-item">
        <div class="post-img">
            <a href="/single"><img src="images/posts/{{ $loop->iteration }}.png" alt="{{ $post['title'] }}"></a>
        </div>
        <div class="post-details">
            <h2 class="post-title"><a href="/single">{{ $post['title'] }}</a></h2>
        </div>
    </div>
@endforeach

</div>
