<x-layout>


    <!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/nutrition2.jpg);">
		<h2 class="tit6 t-center">
			Nutrition & Diets
		</h2>
	</section>


	<!-- Our Story -->
	<section class="bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15" style="background-color: #171717">
		<span class="tit2 t-center">
			About
		</span>

		<h3 class="tit3 t-center m-b-35 m-t-5">
			Nutrition
		</h3>

		<p class="t-center size32 m-l-r-auto">
			Nutrition is a critical part of health and development. Better nutrition is related to improved infant, child and maternal health, stronger immune systems, safer pregnancy and childbirth, lower risk of non-communicable diseases (such as diabetes and cardiovascular disease), and longevity.

Healthy children learn better. People with adequate nutrition are more productive and can create opportunities to gradually break the cycles of poverty and hunger.

Malnutrition, in every form, presents significant threats to human health. Today the world faces a double burden of malnutrition that includes both undernutrition and overweight, especially in low- and middle-income countries. There are multiple forms of malnutrition, including undernutrition (wasting or stunting), inadequate vitamins or minerals, overweight, obesity, and resulting diet-related noncommunicable diseases.

The developmental, economic, social, and medical impacts of the global burden of malnutrition are serious and lasting for individuals and their families, for communities and for countries.


		</p>
	</section>

    @foreach($nutrition->chunk(2) as $row)
        <section class="bg1-pattern p-t-120 p-b-105" style="background-color: #171717;">
            <div class="container">
                <!-- Delicious -->
                @foreach($row as $item)
                    @if($loop->first)
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
                            <img src="{{asset($item->thumbnail)}}" alt="IMG-OUR">
                        </div>
                    </div>
                </div>
                    @endif
                    @if($loop->last&& $loop->iteration != 1)


                <div class="row p-t-170">
                    <div class="col-md-6 p-b-30">
                        <div class="wrap-pic-romantic size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                            <img src="{{asset($item->thumbnail)}}" alt="IMG-OUR">
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
            </div>
            @endif
            @endforeach
        </section>
    @endforeach


</x-layout>
