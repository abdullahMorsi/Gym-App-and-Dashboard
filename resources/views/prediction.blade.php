<x-layout>


	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/main.jpg);">
		<h2 class="tit6 t-center">
			Progress-system
		</h2>
	</section>


	<!-- Reservation -->
	<section class="section-reservation bg1-pattern p-t-100 p-b-113" style="background-color: #171717;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							How is My Health Condition?
						</span>

						<h3 class="tit5 t-center m-b-35 m-t-2">
							You are {{$prediction}}

						</h3>
                        <span class="tit2 t-center">
                            You can have one of these diets:<br><br>
                        </span>

                        <div class="row justify-content-center">
                            <h3  class="txt1 t-left m-b-35 m-t-2">
                                @if($prediction == "Over Weight")
                                    <ol>
                                        <li>1- Keto diet</li>
                                        <li>2- Low Carb</li>
                                        <li>3- Psmf</li>
                                        <li>4- Intermittent fasting</li>
                                    </ol>

                                @elseif ($prediction == "Obese")
                                    <ol>
                                        <li>1- Psmf</li>
                                        <li>2- Keto diet</li>
                                        <li>3- Low Carb</li>
                                        <li>4- Intermittent fasting</li>

                                    </ol>

                                @elseif($prediction == "Under Weight")
                                    <ol>
                                        <li>1- High-calorie diets</li>
                                        <li>2- Protein-rich diets</li>
                                        <li>3- Balanced diets</li>
                                    </ol>

                                @elseif($prediction == "Healthy Weight")
                                    <ol >
                                        <li>1- balanced diet</li>
                                        <li>2- Plant-based diet</li>
                                    </ol>
                                @endif
                            </h3>

                        </div>

					</div>


				</div>
			</div>


		</div>
	</section>



</x-layout>
