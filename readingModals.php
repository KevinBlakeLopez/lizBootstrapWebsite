
  <div class="modal" id="bookReadingModal" role="dialog">
    <section class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <section class="modal-header">
          <h3 class="modal-title">Order a Reading</h3>
          <button class="close" type="button" data-bs-dismiss="modal">&times;</button>
        </section>
        <section class="modal-body">
          <div class="container-fluid">
            <form action="#" method="post">
              <div class="form-row">
                <div class="form-group">
                  <label for="consultType" class="col-form-label">What kind of reading?</label>
                  <div class="col-md-6">
                    <select name="consultType" id="consultType" class="form-control">
                      <option value="">Select...</option>
                      <option value="3 card">3 card Tarot</option>
                      <option value="large spread">Large Spread Tarot</option>
                      <option value="natal chart">Natal Chart reading</option>
                      <option value="astro & tarot">Astrology and Tarot</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="name" class="col-form-label">First and Last Name:</label>
                  <div class="col-sm-12 col-md-6">
                    <input type="text" name="name" id="name" required pattern=[A-Z\sa-z]{3,20} class="form-control form-control-sm">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-form-label">Email Address:</label>
                  <div class="col-md-6">
                    <input type="email" id="email" name="email" required class="form-control form-control-sm">
                  </div>
                </div>
                <div class="form-group">
                  <label for="message" class="col-form-label">Please describe what you would like to focus on during your
                    reading:</label>
                  <textarea name="message" id="message" col="20"></textarea>
                </div>
                <div class="form-group">
                  <button class="btn btn-secondary btn-sm ml-auto" type="button" data-bs-dismiss="modal">Cancel</button>
                  <button formaction="" class="btn btn-primary btn-sm" type="submit" id="consultSubmit" data-bs-target="" data-bs-toggle="">Continue/Submit</button>
                </div>
              </div>
            </form>
          </div>
        </section>
      </div>
    </section>
  </div>

  <div class="modal" id="bookAstroModal" role="dialog">
    <section class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <section class="modal-header">
          <h3 class="modal-title">Enter Natal Information:</h3>
          <button class="close" type="button" data-bs-dismiss="modal">&times;</button>
        </section>
        <section class="modal-body">
          <div class="container-fluid">
            <form action="" method="post">
              <div class="form-group">
                <label for="birthDate" class="col-form-label">Birthdate:</label>
                <div class="col-md-6">
                  <input type="date" id="birthDate" name="birth_date" class="form-control form-control-sm">
                </div>
              </div>
              <div class="form-group">
                <label for="birthTime" class="col-form-label">Birthtime:</label>
                <div class="col-md-6">
                  <input type="time" id="birthTime" name="birth_time" class="form-control form-control-sm">
                </div>
              </div>
              <div class="form-group">
                <label for="birthCity" class="col-form-label">Place of Birth:</label>
                <div class="col-md-6">
                  <input type="text" id="birthCity" name="birth_city" class="form-control form-control-sm">
                </div>
              </div>
              <div class="form-group">
                <label for="birthCountry" class="col-form-label">Country of Birth:</label>
                <div class="col-md-6">
                  <input type="text" id="birthCountry" name="birth_country" class="form-control form-control-sm">
                </div>
              </div>
              <div class="form-group">
                <label for="birthCertificate" class="col-form-label">Birth Certificate image (optional):</label>
                <div class="col-md-6">
                  <input type="file" class="form-control form-control-sm" id="birthCertificate">
                </div>
              </div>
              <button class="btn btn-secondary btn-sm ml-auto" type="button" data-bs-dismiss="modal">Cancel</button>
              <button formaction="" class="btn btn-primary btn-sm" type="submit" id="astroSubmit">Continue/Submit</button>
            </form>
          </div>
        </section>
      </div>
    </section>
  </div>
