<x-layout>



    <section class="bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15" style="background-color: #171717">
		<span class="tit2 t-center">
			About
		</span>

		<h3 class="tit3 t-center m-b-35 m-t-5">
			Dietary-Supplements
		</h3>

		<p class="t-center size32 m-l-r-auto">
			What Are Dietary Supplements?
Dietary supplements are intended to add to or supplement the diet and are different from conventional food. Generally, to the extent a product is intended to treat, diagnose, cure, or prevent diseases, it is a drug, even if it is labeled as a dietary supplement. Supplements are ingested and come in many forms, including tablets, capsules, soft gels, gel caps, powders, bars, gummies, and liquids.

Common supplements include:

Vitamins (such as multivitamins or individual vitamins like vitamin D and biotin).
Minerals (such as calcium, magnesium, and iron).
Botanicals or herbs (such as echinacea and ginger).
Botanical compounds (such as caffeine and curcumin).
Amino acids (such as tryptophan and glutamine).
Live microbials (commonly referred to as “probiotics”).


		</p>
	</section>






	<section class="section-lunch bgwhite" style="background-color: #171717;">
		<div class="header-lunch parallax0 parallax100" style="background-image: url(images/Dietary\ Supplements.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Whey Protein
				</h2>
			</div>
		</div>
        <p></p>
        <h3 class="tit3 t-center m-b-35 m-t-5">
			About Whey Protien
		</h3>

		<p class="t-center size32 m-l-r-auto">
			What Are Dietary Supplements?
            Protein powder is a popular nutritional supplement.
            Protein is an essential macronutrient that helps build muscle, repair tissue, and make enzymes and hormones.
            Using protein powder may also aid weight loss and help people tone their muscles.


		</p>

		<div class="container">
            @foreach($wheyprotein->chunk(2) as $row)


			<div class="row p-t-108 p-b-70">
                @foreach($row as $item)
                    @if($loop->first)
				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="{{$item->thumbnail}}" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
                                {{$item->name}}
							</a>
                            <span class="txt22 m-t-20">
								{{$item->price}}
							</span>


						</div>
					</div>

					<!-- Block3 -->
				</div>
                    @endif
                    @if($loop->last&& $loop->iteration != 1)
				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a href="#"><img src="{{$item->thumbnail}}" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
                                {{$item->name}}
							</a>

                            <span class="txt22 m-t-20">
								{{$item->price}}
							</span>


						</div>
					</div>




				</div>
                        @endif
                @endforeach
			</div>

            @endforeach

		</div>
	</section>



	<section class="section-dinner bgwhite" style="background-color: #171717;">
		<div class="header-dinner parallax0 parallax100" style="background-image: url(images/Creatine-300_large.webp);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Creatine Protein
				</h2>
			</div>
		</div>

        <h3 class="tit3 t-center m-b-35 m-t-5">
			About Creatine
		</h3>

		<p class="t-center size32 m-l-r-auto">
			Creatine is a chemical found naturally in the body.
It's also in red meat and seafood.
It is often used to improve exercise performance and muscle mass.

		</p>

        <div class="container">
            @foreach($creatine->chunk(2) as $row)


                <div class="row p-t-108 p-b-70">
                    @foreach($row as $item)
                        @if($loop->first)
                            <div class="col-md-8 col-lg-6 m-l-r-auto">
                                <!-- Block3 -->
                                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                                        <a href="#"><img src="{{$item->thumbnail}}" alt="IMG-MENU"></a>
                                    </div>

                                    <div class="text-blo3 size21 flex-col-l-m">
                                        <a href="#" class="txt21 m-b-3">
                                            {{$item->name}}
                                        </a>
                                        <span class="txt22 m-t-20">
								{{$item->price}}
							</span>


                                    </div>
                                </div>

                                <!-- Block3 -->
                            </div>
                        @endif
                        @if($loop->last&& $loop->iteration != 1)
                            <div class="col-md-8 col-lg-6 m-l-r-auto">
                                <!-- Block3 -->
                                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                                        <a href="#"><img src="{{$item->thumbnail}}" alt="IMG-MENU"></a>
                                    </div>

                                    <div class="text-blo3 size21 flex-col-l-m">
                                        <a href="#" class="txt21 m-b-3">
                                            {{$item->name}}
                                        </a>

                                        <span class="txt22 m-t-20">
								{{$item->price}}
							</span>


                                    </div>
                                </div>




                            </div>
                        @endif
                    @endforeach
                </div>

            @endforeach

        </div>
	</section>



    <section class="section-dinner bgwhite" style="background-color: #171717;">
		<div class="header-dinner parallax0 parallax100" style="background-image: url(images/glutamine.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Glutamine
				</h2>
			</div>
		</div>

        <h3 class="tit3 t-center m-b-35 m-t-5">
			About Glutamine
		</h3>

		<p class="t-center size32 m-l-r-auto">
			Glutamine is the most abundant amino acid found in the body.
It's made in the muscles and transferred by the blood into different organ systems.


		</p>

        <div class="container">
            @foreach($glutamine->chunk(2) as $row)


                <div class="row p-t-108 p-b-70">
                    @foreach($row as $item)
                        @if($loop->first)
                            <div class="col-md-8 col-lg-6 m-l-r-auto">
                                <!-- Block3 -->
                                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                                        <a href="#"><img src="{{$item->thumbnail}}" alt="IMG-MENU"></a>
                                    </div>

                                    <div class="text-blo3 size21 flex-col-l-m">
                                        <a href="#" class="txt21 m-b-3">
                                            {{$item->name}}
                                        </a>
                                        <span class="txt22 m-t-20">
								{{$item->price}}
							</span>


                                    </div>
                                </div>

                                <!-- Block3 -->
                            </div>
                        @endif
                        @if($loop->last&& $loop->iteration != 1)
                            <div class="col-md-8 col-lg-6 m-l-r-auto">
                                <!-- Block3 -->
                                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                                        <a href="#"><img src="{{$item->thumbnail}}" alt="IMG-MENU"></a>
                                    </div>

                                    <div class="text-blo3 size21 flex-col-l-m">
                                        <a href="#" class="txt21 m-b-3">
                                            {{$item->name}}
                                        </a>

                                        <span class="txt22 m-t-20">
								{{$item->price}}
							</span>


                                    </div>
                                </div>




                            </div>
                        @endif
                    @endforeach
                </div>

            @endforeach

        </div>
	</section>













</x-layout>
