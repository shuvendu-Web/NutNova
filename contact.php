<?php $title = "Contact Us";
include "header.php"; ?>


<!--breadcrumb area start-->
<div class="breadcrumb_container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav>
                    <ul>
                        <li>
                            <a href="index.html">Home ></a>
                        </li>
                        <li>Contact US </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--breadcrumb area end-->

<!--contact page section-->
<div class="contact_area ptb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7">
                <div class="contact_map_wrapper">
                    <div class="contact_map mb-40">
                        <!-- Contact Map Start -->
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52860.801699700736!2d-118.49248639923253!3d34.100260939226146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bc35fbd217ef%3A0xcf1ef9352700d95c!2sBeverly%20Hills%2C%20CA%2090210%2C%20USA!5e0!3m2!1sen!2sin!4v1751470570301!5m2!1sen!2sin"
                                    width="100%" height="auto" style="border:0; filter: saturate(0.5);"
                                    allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <a href="https://maps.app.goo.gl/RaE6EhUeWeSP9p6W6"></a>
                            </div>
                        </div>
                        <!-- Contact Map End -->
                    </div>
                    <div class="contact-message">
                        <div class="contact_title">
                            <h4>Contact Information</h4>
                        </div>
                        <form id="contact-form" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="contact_n">Name<span>*</span></label>
                                    <input name="name" id="contact_n" type="text">
                                </div>
                                <div class="col-lg-6">
                                    <label for="contact_n2">Email<span>*</span></label>
                                    <input name="email" id="contact_n2" type="email">
                                </div>
                                <div class="col-lg-6">
                                    <label for="contact_n3">Telephone</label>
                                    <input name="phone" id="contact_n3" type="text">
                                </div>
                                <div class="col-lg-6">
                                    <label for="contact_n4">subject</label>
                                    <input name="subject" id="contact_n4" type="text">
                                </div>
                                <div class="col-12">
                                    <div class="contact-textarea">
                                        <label>Comment<span>*</span></label>
                                        <textarea name="message" class="form-control2" required=""></textarea>
                                    </div>
                                    <button type="submit"> Send Message </button>
                                    <p id="form-response" class="form-message"></p>
                                </div>
                            </div>
                            <p class="form-messege"></p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="contact_info_wrapper">
                    <div class="contact_title">
                        <h4>Location &amp; Details</h4>
                    </div>
                    <div class="contact_info mb-15">
                        <div class="contact_info_icone">
                            <a href="#"><i class="icofont icofont-location-pin"></i></a>
                        </div>
                        <div class="contact_info_text">
                            <p><span>Address:</span> 123 Nutri Lane, Health City, <br> CA 90210, USA</p>
                        </div>
                    </div>
                    <div class="contact_info mb-15">
                        <div class="contact_info_icone">
                            <a href="#"><i class="icofont icofont-email"></i></a>
                        </div>
                        <div class="contact_info_text">
                            <p><span>Email: </span> support@nutnova.com </p>
                        </div>
                    </div>
                    <div class="contact_info mb-15">
                        <div class="contact_info_icone">
                            <a href="#"><i class="icofont icofont-phone"></i></a>
                        </div>
                        <div class="contact_info_text">
                            <p><span>Phone:</span> +1 (234) 567-890 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--contact page section end-->


</div>
<!-- footer start -->
<!-- your footer content -->
<?php include "footer.php"; ?>

<script>
    document.getElementById('contact-form').addEventListener('submit', async function(e) {
        e.preventDefault(); // Prevent default form submission

        const form = e.target;
        const responseEl = document.getElementById('form-response');
        const formData = new FormData(form);

        try {
            const res = await fetch(form.action, {
                method: form.method,
                body: formData,
            });

            const resultText = await res.text(); // Adjust if server responds with JSON

            if (res.ok) {
                responseEl.textContent = '✅ Message sent successfully!';
                responseEl.style.color = 'green';
                form.reset();
            } else {
                responseEl.textContent = '❗ Oops! There was a problem: ' + resultText;
                responseEl.style.color = 'red';
            }
        } catch (err) {
            responseEl.textContent = '⚠️ Failed to send. Please try again later.';
            responseEl.style.color = 'red';
        }
    });
</script>