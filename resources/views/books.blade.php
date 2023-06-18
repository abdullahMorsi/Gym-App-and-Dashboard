<x-layout>

    <section class="section-chef bgwhite p-t-115 p-b-95" style="background-color: black;">
		<div class="container t-center">
			<span class="tit2 t-center">
				Best
			</span>

			<h3 class="tit5 t-center m-b-50 m-t-5">
				Books
			</h3>

			<div class="row">
                @foreach($books as $book)

				<div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
					<!-- -Block5 -->
					<div class="blo5 pos-relative p-t-60">
						<div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
							<a href="#"><img src="{{$book->thumbnail}}" alt="IGM-AVATAR"></a>
						</div>

						<div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
							<a href="{{$book->link}}" class="txt34 dis-block p-b-6">
                                {{$book->name}}
							</a>


							<div class="star-review fs-18 color0 flex-c-m m-t-12">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								<i class="fa fa-star p-l-1" aria-hidden="true"></i>
							</div>



						</div>
					</div>
				</div>
                @endforeach



			</div>
		</div>
	</section>


    </x-layout>
