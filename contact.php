<?php require_once('header.php'); ?>

<section class="contact-section section-padding bg-dark" aria-label="Contact">
  <div class="container">
      <div class="hse-image-overlay"></div>
    <div class="text-center mb-5">
      <div class="section-title">
     
        <h2 class="fw-bold">Get in Touch</h2>
        <p class=" text-white">Have questions or need immediate fuel supply? Our team is ready to assist.</p>
      </div>
    </div>

    <div class="row g-4 align-items-start">

      <!-- LEFT: Contact info + Map -->
      <div class="col-lg-6">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body p-4">

            <!-- Address -->
            <div class="d-flex gap-3 mb-4">
              <div class="icon-circle bg-soft">
                <i class="bi bi-geo-alt-fill text-warning"></i>
              </div>
              <div>
                <h6 class="mb-1 fw-bold">Office Address</h6>
                <address class="mb-1">
                  U-Machi Oil & Gas Ltd<br>
                  KM 19, PH/ABA Expressway, Iriebe, Port Harcourt<br>
                  Oyigbo L.G.A, Rivers State, Nigeria
                </address>
                <small class="text-muted">(Click / drag the map to view location)</small>
              </div>
            </div>

            <!-- Contact -->
            <div class="d-flex gap-3 mb-4">
              <div class="icon-circle bg-soft">
                <i class="bi bi-telephone-fill text-warning"></i>
              </div>
              <div>
                <h6 class="mb-1 fw-bold">Contact Information</h6>
                <p class="mb-0">Phone: <a href="tel:09000000000">0900 000 0000</a></p>
                <p class="mb-0">Email: <a href="mailto:info@umachioilgas.com">info@umachioilgas.com</a></p>
              </div>
            </div>

            <!-- Business Hours / Emergency -->
            <div class="d-flex gap-3 mb-4">
              <div class="icon-circle bg-soft">
                <i class="bi bi-clock-fill text-warning"></i>
              </div>
              <div>
                <h6 class="mb-1 fw-bold">Business Hours</h6>
                <p class="mb-1">Available 24/7</p>
                <p class="mb-0"><strong>Emergency Fuel Requests:</strong> Available upon arrangement</p>
              </div>
            </div>

            <!-- Embedded Google Map -->
            <div class="mt-3">
              <!-- Replace the src query with your precise Google Maps embed link if you prefer -->
              <div class="ratio ratio-16x9 rounded overflow-hidden">
                <iframe
                  src="https://www.google.com/maps?q=KM+19+PH/ABA+Expressway+Iriebe+Port+Harcourt&output=embed"
                  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- RIGHT: Request a Quote Form -->
      <div class="col-lg-6">
        <div class="card h-100 border-0 shadow-sm">
          <div id="quotes" class="card-body p-4">
            <h5 class="fw-bold mb-3">Request a Quote</h5>

            <form id="quoteForm" action="contact_process.php" method="post" novalidate>
              <div class="row g-3">
                <div class="col-md-6">
                  <label for="fullName" class="form-label">Full Name</label>
                  <input id="fullName" name="full_name" class="form-control" required>
                  <div class="invalid-feedback">Please enter your full name.</div>
                </div>

                <div class="col-md-6">
                  <label for="companyName" class="form-label">Company Name</label>
                  <input id="companyName" name="company_name" class="form-control">
                </div>

                <div class="col-md-6">
                  <label for="phone" class="form-label">Phone Number</label>
                  <input id="phone" name="phone" type="tel" pattern="[\d\s\+\-]{7,20}" class="form-control" required placeholder="e.g. +234 800 000 0000">
                  <div class="invalid-feedback">Please enter a valid phone number.</div>
                </div>

                <div class="col-md-6">
                  <label for="email" class="form-label">Email Address</label>
                  <input id="email" name="email" type="email" class="form-control" required>
                  <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>

                <div class="col-md-6">
                  <label for="product" class="form-label">Product Required</label>
                  <select id="product" name="product" class="form-select" required>
                    <option value="">Choose...</option>
                    <option>Automotive Gas Oil (AGO)</option>
                    <option>Premium Motor Spirit (PMS)</option>
                    <option>Liquefied Petroleum Gas (LPG)</option>
                    <option>Compressed Natural Gas (CNG)</option>
                    <option>Marine Gas Oil (MGO)</option>
                  </select>
                  <div class="invalid-feedback">Please choose a product.</div>
                </div>

                <div class="col-md-6">
                  <label for="quantity" class="form-label">Quantity</label>
                  <input id="quantity" name="quantity" class="form-control" placeholder="e.g. 20,000 L" required>
                  <div class="invalid-feedback">Please provide quantity.</div>
                </div>

                <div class="col-12">
                  <label for="deliveryLocation" class="form-label">Delivery Location</label>
                  <input id="deliveryLocation" name="delivery_location" class="form-control" placeholder="Street, City, Landmark" required>
                  <div class="invalid-feedback">Please provide delivery location.</div>
                </div>

                <div class="col-12">
                  <label for="message" class="form-label">Message (optional)</label>
                  <textarea id="message" name="message" rows="4" class="form-control" placeholder="Any additional information"></textarea>
                </div>

                <div class="col-12">
                  <div class="d-grid">
                    <button type="submit" class="btn btn-warning btn-lg">Request Quote</button>
                  </div>
                </div>

              </div>
            </form>

            <small class="text-muted d-block mt-3">We will contact you within 1 business hour for urgent requests. For immediate assistance call <a href="tel:09000000000">0900 000 0000</a>.</small>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<br>
<br>

<?php require_once('footer.php'); ?>