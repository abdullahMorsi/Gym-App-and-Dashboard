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

						<h3 class="tit3 t-center m-b-35 m-t-2">
							Healthy or?
						</h3>
					</div>

					<form method="post" action="/prediction" class="wrap-form-reservation size22 m-l-r-auto">

                        @csrf
						<div class="row">


							<div class="col-md-6">
								<!-- Phone -->
								<span class="txt9">
									Age
								</span>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="age" placeholder="Age">
								</div>
							</div>

							<div class="col-md-6">
								<!-- Email -->
								<span class="txt9">
									Weight(KG)
								</span>

								<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="weight" placeholder="Wieght">
								</div>
							</div>


                            <div class="col-md-6">
								<!-- Phone -->
								<span class="txt9">
									Height(CM)
								</span>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="height" placeholder="Height">
								</div>
							</div>


                            <div class="col-md-6">
								<!-- Phone -->
								<span class="txt9">
									Gender
								</span>

                                <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <select name="gender" class="bo-rad-10 sizefull txt10 p-l-20" data-bs-placeholder="Gender">
                                        <option class="bo-rad-10 sizefull txt10 p-l-20" value="1">Male</option>
                                        <option class="bo-rad-10 sizefull txt10 p-l-20" value="2">Female</option>
                                    </select>
                                </div>

							</div>


						</div>



						<div class="wrap-btn-booking flex-c-m m-t-6">
							<!-- Button3 -->
							<button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
								Calculate
							</button>
						</div>
					</form>
				</div>
			</div>


		</div>
	</section>



</x-layout>
