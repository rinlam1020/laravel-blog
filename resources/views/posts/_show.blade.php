<!-- <div class="card">
  @if ($post->hasThumbnail())
    <a href="{{ route('posts.show', $post)}}">
      {{ Html::image($post->thumbnail->getUrl('thumb'), $post->thumbnail->name, ['class' => 'card-img-top']) }}
    </a>
  @endif

  <div class="card-body">
    <h4 v-pre class="card-title">{{ link_to_route('posts.show', $post->title, $post) }}</h4>

    <p class="card-text"><small v-pre class="text-muted">{{ link_to_route('users.show', $post->author->fullname, $post->author) }}</small></p>

    <p class="card-text">
      <small class="text-muted">{{ humanize_date($post->posted_at) }}</small><br>
      <small class="text-muted">
        <i class="fa fa-comments-o" aria-hidden="true"></i> {{ $post->comments_count }}
        <like
          :likes-count="{{ $post->likes_count }}"
          :liked="{{ json_encode($post->isLiked()) }}"
          :item-id="{{ $post->id }}"
          item-type="posts"
          :logged-in="{{ json_encode(Auth::check()) }}"
        />
      </small>
    </p>
  </div>
</div> -->

<div class="col-md-4">
            <div class="product-item">
              @if ($post->hasThumbnail())
                <a href="{{ route('posts.show', $post)}}">
                  {{ Html::image($post->thumbnail->getUrl('thumb'), $post->thumbnail->name, ['class' => 'card-img-top']) }}
                </a>
              @endif
              <!-- <a href="#"><img src="assets/images/product_01.jpg" alt=""></a> -->
              <div class="down-content">
                <!-- <a href="#"><h4>Tittle goes here</h4></a> -->
                {{ link_to_route('posts.show', $post->title, $post) }}
                <p>Date Arrived: {{ humanize_date($post->posted_at) }}</p>
                <h6>${{ link_to_route('users.show', $post->author->fullname, $post->author) }}</h6>
                <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (24)</span>
              </div>
            </div>
          </div>