<x-layout>


    <!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(/images/hand.jpg);">
		<h2 class="tit6 t-center">
			Hand
		</h2>
	</section>




    @foreach($exercise->chunk(2) as $row)
        <section class="bg1-pattern p-t-120 p-b-105" style="background-color: #171717;">
            <div class="container">
                @foreach($row as $item)
                    @if($loop->first)
                        <!-- Delicious -->
                        <div class="row">
                            <div class="col-md-6 p-t-45 p-b-30">
                                <div class="wrap-text-delicious t-center">
						<span class="tit2 t-center">
							{{$item->name}}
						</span>



                                    <p class="t-center m-b-22 size3 m-l-r-auto">
                                        {{$item->description}}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 p-b-30">
                                <div class="wrap-pic-delicious size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                                    <img src="{{$item->thumbnail}}" alt="IMG-OUR">
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($loop->last&& $loop->iteration != 1)


                        <div class="row p-t-170">
                            <div class="col-md-6 p-b-30">
                                <div class="wrap-pic-romantic size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                                    <img src="{{$item->thumbnail}}" alt="IMG-OUR">
                                </div>
                            </div>

                            <div class="col-md-6 p-t-45 p-b-30">
                                <div class="wrap-text-romantic t-center">
						<span class="tit2 t-center">
							{{$item->name}}
						</span>



                                    <p class="t-center m-b-22 size3 m-l-r-auto">
                                        {{$item->description}}
                                    </p>


                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
    @endforeach


</x-layout>
