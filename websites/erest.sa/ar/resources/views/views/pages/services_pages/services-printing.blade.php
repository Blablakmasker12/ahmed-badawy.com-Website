@extends("views.-layout")


@section("content")
   <!-- desgin -->
      
      
      <div class="blog">
        <div class="row">
            <div class="col-sm-8">

                <!-- Blog Post-->
                <article>
                    <img src="{{Uploaded_imgs}}options/{{$main_text_13->img}}" alt="" width="100%">
                    {!! $main_text_13->desc !!}
                </article>
                <!-- End of Blog Post-->
            </div>

            @include('views.pages.services_pages.side_bar')

        </div>
    </div>
      
      
   <!-- End of desgin -->
@endsection