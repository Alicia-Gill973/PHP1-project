		<?php
include("header.php");

?>
    <!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/a1.png');">
		<h2 class="ltext-105 cl0 txt-center">
			Contact
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					  <form name="sentMessage" id="contactForm" novalidate="novalidate" onsubmit="return validation()">
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="name" placeholder="Your Name"
                                    required="required" data-validation-required-message="Please enter your name" />
                                     <span id="username"></span>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" id="email" placeholder="Your Email"
                                    required="required" data-validation-required-message="Please enter your email" />
                                    <span id="youremail"></span>
                                <p class="help-block text-danger"></p>
                            </div>
                             <div class="control-group">
                                <input type="number" class="form-control border-0 p-4" id="phone" placeholder="Your Phonenumber"
                                    required="required" data-validation-required-message="Please enter your phone number" />
                                     <span id="number"></span>
                                <p class="help-block text-danger"></p>
                            </div>
                            <!-- <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="subject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                     <span id="sub"></span>
                                <p class="help-block text-danger"></p>
                            </div> -->
                            <div class="control-group">
                                <textarea class="form-control border-0 py-3 px-4" rows="3" id="message" placeholder="Message"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                     <span id="msg"></span>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Send
                                    Message</button>
                            </div>
                        </form>		</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<h1>Get in Touch</h1>
						<!-- <span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span> -->
<!-- 
						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Address
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
								Coza Store Center 8th floor, 379 Hudson St, New York, NY 10018 US
							</p>
						</div> -->
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<!-- <span class="mtext-110 cl2">
								Lets Talk
							</span> -->

							<p class="stext-115 cl1 size-213 p-t-18">
								On whatsapp
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<!-- <span class="mtext-110 cl2">
								Sale Support
							</span> -->

							<p class="stext-115 cl1 size-213 p-t-18">
								elaracollection@gamil.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
    	<?php
include("footer.php");
?>